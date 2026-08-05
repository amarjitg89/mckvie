<?php
include("csp.php");
include('db_connection.php');
$Mainclass=new DB_Controller();



	if(isset($_REQUEST['login']))

	{
		$Username=mysqli_real_escape_string($Mainclass->dbh,$_REQUEST['username']);

		$Password=md5($_REQUEST['pass']);
		
		$Login_Sql=$Mainclass->dbh->prepare("SELECT * FROM cms_login_master WHERE Username=? and Password=? and Active='Yes'");
		$Login_Sql->bind_param("ss",$Username,$Password);
		$Login_Sql->execute();
		$Result=$Login_Sql->get_result();
		
		if($Result->num_rows>0)
		{
			
			$Ft_Row=$Result->fetch_assoc();
			
			$User_Name=$Ft_Row['Username'];
			//setcookie("void_user", $User_Name, time() + (3600 * 10), "/", '', true, true);
			setcookie("void_user", $User_Name, time() + (3600 * 10), "/");
			?>

	<script>window.location.href='welcome.php';</script>

	<?php
		}
		else
		{
			$Err="Invalid Credential";
		}
		
		$Login_Sql->close();		

	}

	?>
<?php
if($_COOKIE['void_user']!='')
{
	?>
<script>window.location.href='welcome.php'</script>
<?php
}
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
        <div class="card card-outline card-primary">
            <div class="card-header text-center"> 
				<img src="../images/main-logo.webp" width="200">				
			</div>
            <div class="card-body login-card-body">
                <p class="login-box-msg text-danger"><?php if($Err!=''){echo $Err;}?></p>
                <form action="" method="post">
                    <div class="input-group mb-1">
                        <div class="form-floating"> <input id="loginEmail" name="username" type="text" class="form-control" value="" placeholder="" autocomplete="off"> <label for="loginEmail">Username</label> </div>
                        <div class="input-group-text"> <span class="fa-solid fa-user"></span> </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating"> <input id="loginPassword" name="pass" type="password" class="form-control" placeholder="" autocomplete="off"> <label for="loginPassword">Password</label> </div>
                        <div class="input-group-text"> 

                        <span id="showdiv"><i class="fa-solid fa-eye" style="cursor: pointer;" onclick="show_pass()" title="Show Password"></i></span>

                        <span id="hidediv" style="display: none;"><i class="fa-solid fa-eye-slash"  style="cursor: pointer;" onclick="hide_pass()" title="Hide Password"></i></span> 
                        </div>
                    </div> <!--begin::Row-->
                    <div class="row">                      
                        <div class="col-12 text-center">
                             <button type="submit" name="login" class="btn btn-custom w-100" style="border:0px; background-color:#b62159; color:#fff; font-weight: 600;">Log In</button> 
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>                
                
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
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
</body><!--end::Body-->

</html>