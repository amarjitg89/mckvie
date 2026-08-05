<?php
/* =========================================================
   APPLICATION BOOTSTRAP
   ========================================================= */

declare(strict_types=1);

/* =========================================================
   DATABASE CONFIG
   ========================================================= */
   
define('DB_HOST', 'localhost');
define('DB_NAME', 'surakshasset_MainDb');
define('DB_USER', 'surakshasset_DBUser');
define('DB_PASS', ',Yp[tWm%zi*b?X~T');

define('AUTH_COOKIE', 'auth_token');
define('AUTH_COOKIE_DAYS', 30);

/* =========================================================
   DATABASE SINGLETON (mysqli OOP)
   ========================================================= */
class Database {

    private static $instance = null;

    public static function getConnection() {

        if (self::$instance === null) {

            self::$instance = new mysqli(
                DB_HOST,
                DB_USER,
                DB_PASS,
                DB_NAME
            );

            if (self::$instance->connect_error) {
                http_response_code(500);
                exit('Database connection error');
            }

            self::$instance->set_charset('utf8mb4');
        }

        return self::$instance;
    }
}

/* =========================================================
   DB HELPER (PREPARED STATEMENTS ONLY)
   ========================================================= */
class DB {

    public static function fetchOne($sql, $params = array()) {

        $stmt = Database::getConnection()->prepare($sql);
        if (!$stmt) {
            return null;
        }

        if (!empty($params)) {
            $types = str_repeat('s', count($params));
            call_user_func_array(array($stmt, 'bind_param'), self::refValues($types, $params));
        }

        $stmt->execute();
        $result = $stmt->get_result();

        return $result ? $result->fetch_assoc() : null;
    }

    public static function fetchValue($sql, $params = array()) {
        $row = self::fetchOne($sql, $params);
        if ($row) {
            $values = array_values($row);
            return $values[0];
        }
        return null;
    }

    /* Required for PHP 7.0 bind_param */
    private static function refValues($types, $params) {
        $refs = array();
        $refs[] = &$types;
        foreach ($params as $key => $value) {
            $refs[] = &$params[$key];
        }
        return $refs;
    }
}

/* =========================================================
   AUTHENTICATION (COOKIE BASED)
   ========================================================= */
class Auth {

    private static $user = null;

    /* ---------------------------------------------
       Auto-login from cookie
       --------------------------------------------- */
    public static function init() {

        if (self::$user !== null) {
            return;
        }

        if (empty($_COOKIE[AUTH_COOKIE])) {
            return;
        }

        $tokenHash = hash('sha256', $_COOKIE[AUTH_COOKIE]);

        $sql = "
            SELECT u.user_id, u.name, u.email, r.role_name
            FROM auth_tokens t
            JOIN users u ON u.user_id = t.user_id
            JOIN roles r ON r.role_id = u.role_id
            WHERE t.token_hash = ?
              AND t.expires_at > NOW()
              AND u.status = 1
            LIMIT 1
        ";

        self::$user = DB::fetchOne($sql, array($tokenHash));
    }

    /* ---------------------------------------------
       Get logged-in user (cached)
       --------------------------------------------- */
    public static function user() {
        self::init();
        return self::$user;
    }

    /* ---------------------------------------------
       Require login
       --------------------------------------------- */
    public static function requireLogin() {
        if (!self::user()) {
            header("Location: /login");
            exit;
        }
    }

    /* ---------------------------------------------
       Require role(s)
       --------------------------------------------- */
    public static function requireRole($roles = array()) {
        self::requireLogin();
        if (!in_array(self::$user['role_name'], $roles)) {
            http_response_code(403);
            exit('Access denied');
        }
    }

    /* ---------------------------------------------
       Login (create token + cookie)
       --------------------------------------------- */
    public static function login($userId) {

        $rawToken = bin2hex(random_bytes(32));
        $hash = hash('sha256', $rawToken);

        $sql = "
            INSERT INTO auth_tokens (user_id, token_hash, expires_at)
            VALUES (?, ?, DATE_ADD(NOW(), INTERVAL ? DAY))
        ";

        $stmt = Database::getConnection()->prepare($sql);
        $days = AUTH_COOKIE_DAYS;
        $stmt->bind_param("isi", $userId, $hash, $days);
        $stmt->execute();

        setcookie(
            AUTH_COOKIE,
            $rawToken,
            time() + (86400 * AUTH_COOKIE_DAYS),
            '/',
            '',
            false,  // set TRUE when HTTPS is enabled
            true
        );
    }

    /* ---------------------------------------------
       Logout
       --------------------------------------------- */
    public static function logout() {

        if (!empty($_COOKIE[AUTH_COOKIE])) {

            $hash = hash('sha256', $_COOKIE[AUTH_COOKIE]);
            DB::fetchOne(
                "DELETE FROM auth_tokens WHERE token_hash = ?",
                array($hash)
            );

            setcookie(AUTH_COOKIE, '', time() - 3600, '/');
        }

        self::$user = null;
    }
}

/* =========================================================
   AUTO-INITIALISE AUTH ON EVERY REQUEST
   ========================================================= */
Auth::init();

?>