<?php
//include("csp.php");
include('db_connection.php');


$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = "Please enter username and password.";
    } else {
        $database = new Database();
        $conn = $database->connect();

        $auth = new Auth($conn);

        if ($auth->login($username, $password)) {
            if ($_SESSION['role'] === 'vendor') {
                header("Location: vendor/assigned-visits.php");
            } else {
                header("Location: dashboard.php");
            }
            exit;
        } else {
            $error = "Invalid login credentials.";
        }
    }
}





?>
<?php
/*if($_SESSION['user_id']!='')
{
	?>
<script>window.location.href='welcome.php'</script>
<?php
}*/
?>
<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Void & Mass | CMS</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/jpg" href="../images/main-favicon.webp?v=2">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)-->
	<link rel="stylesheet" href="dist/css/custom.css?v=1">
<!---Fontawesome----->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

<style type="text/css">

 .bg-body-secondary {
    --bs-bg-opacity: 1;
    /*background-color: rgba(var(--bs-secondary-bg-rgb), var(--bs-bg-opacity)) !important;*/
    background: url(dist/assets/img/mass&void-banner.webp?v=3) no-repeat center center fixed !important;
-webkit-background-size: cover !important;
-moz-background-size: cover !important;
-o-background-size: cover !important;
background-size: cover !important;

}
  </style>

    <script nonce="<?php echo $unique_nonce;?>">
  function show_pass()
  {    
    $('#showdiv').hide();
    $('#hidediv').show();
    var passInput=$("#loginPassword").attr('type','text');
  }
  function hide_pass()
  {
    $('#showdiv').show();
    $('#hidediv').hide();
    var passInput=$("#loginPassword").attr('type','password');
  }
  </script>

</head> 
<!--end::Head--> 
<!--begin::Body-->

<body class="login-page bg-body-secondary">
    <div class="login-box">
  <div class="login-logo">
    <b>Asset</b> Management
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form id="loginForm" method="post" novalidate>

        <div class="mb-3">
          <label class="form-label">Email / Phone</label>
          <input type="text" name="username" id="username" class="form-control">
          <div class="invalid-feedback">Username is required.</div>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control">
          <div class="invalid-feedback">Password is required.</div>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-sign-in-alt me-1"></i> Sign In
          </button>
        </div>

      </form>
    </div>
  </div><!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="dist/js/adminlte.js"></script>
     <!--end::Required Plugin(AdminLTE)-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
    
    <script>
document.getElementById('loginForm').addEventListener('submit', function (e) {
    let valid = true;

    const username = document.getElementById('username');
    const password = document.getElementById('password');

    username.classList.remove('is-invalid');
    password.classList.remove('is-invalid');

    if (username.value.trim() === '') {
        username.classList.add('is-invalid');
        valid = false;
    }

    if (password.value.trim() === '') {
        password.classList.add('is-invalid');
        valid = false;
    }

    if (!valid) {
        e.preventDefault();
    }
});
</script>
    
    
    
    
    
    
    
</body><!--end::Body-->

</html>