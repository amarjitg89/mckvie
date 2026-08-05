<?php
require_once __DIR__ . '/app/db_connection.php';

/* ===============================
   PARSE REQUEST URL
   =============================== */
$requestUri = $_SERVER['REQUEST_URI'];
$basePath   = dirname($_SERVER['SCRIPT_NAME']);

$path = str_replace($basePath, '', $requestUri);
$path = trim(parse_url($path, PHP_URL_PATH), '/');

/* ===============================
   DEFAULT ROUTE
   =============================== */
if ($path === '') {
    $path = Auth::user() ? 'dashboard' : 'login';
}

/* ===============================
   ROUTING
   =============================== */
switch ($path) {

    /* ---------- PUBLIC ---------- */
    case 'login':
        require __DIR__ . '/app/login.php';
        break;

    case 'logout':
        Auth::logout();
        header("Location: /login");
        exit;

    /* ---------- AUTH PROTECTED ---------- */
    case 'dashboard':
        Auth::requireLogin();
        require __DIR__ . '/app/header.php';
        require __DIR__ . '/app/dashboard.php';
        require __DIR__ . '/app/footer.php';
        break;

    /* ---------- FALLBACK ---------- */
    default:
        http_response_code(404);
        require __DIR__ . '/app/404.php';
        break;
}
