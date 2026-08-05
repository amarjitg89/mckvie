<?php
if (Auth::user()) {
    header("Location: /dashboard");
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = "Please enter both username and password.";
    } else {

        $user = DB::fetchOne(
            "SELECT user_id, password
             FROM users
             WHERE (email = ? OR phone = ?)
               AND status = 1
             LIMIT 1",
            array($username, $username)
        );

        if ($user && password_verify($password, $user['password'])) {
            Auth::login($user['user_id']);
            header("Location: /dashboard");
            exit;
        } else {
            $error = "Invalid login credentials.";
        }
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login | Asset Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- AdminLTE + Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="hold-transition login-page">
    
    
    <style>
.login-page {
    display: flex;
    align-items: center;
    justify-content: center;
}
.login-page .login-box {
    width: 360px;
    max-width: 90%;
}
</style>

    
    

<div class="login-box">

  <div class="login-logo">
    <b>Asset</b>Manager
  </div>

  <div class="card shadow-sm">
    <div class="card-body login-card-body">

      <p class="login-box-msg">Sign in to start your session</p>

      <?php if ($error): ?>
        <div class="alert alert-danger py-2 text-sm">
          <i class="fas fa-exclamation-circle me-1"></i>
          <?= htmlspecialchars($error) ?>
        </div>
      <?php endif; ?>

      <form method="post" novalidate>

        <div class="input-group mb-3">
          <input type="text"
                 name="username"
                 class="form-control"
                 placeholder="Email or Phone"
                 required>
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password"
                 name="password"
                 id="password"
                 class="form-control"
                 placeholder="Password"
                 required>
          <div class="input-group-text" id="togglePassword" style="cursor:pointer">
            <span class="fas fa-eye"></span>
          </div>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-sign-in-alt me-1"></i> Login
          </button>
        </div>

      </form>

    </div>
  </div>

  <p class="text-center text-muted small mt-3">
    © <?= date('Y') ?> Asset Management System
  </p>

</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0/dist/js/adminlte.min.js"></script>

<script>
$('#togglePassword').on('click', function () {
    const input = $('#password');
    const icon = $(this).find('span');
    if (input.attr('type') === 'password') {
        input.attr('type', 'text');
        icon.removeClass('fa-eye').addClass('fa-eye-slash');
    } else {
        input.attr('type', 'password');
        icon.removeClass('fa-eye-slash').addClass('fa-eye');
    }
});
</script>

</body>
</html>
