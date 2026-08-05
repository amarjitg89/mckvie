<?php
require_once 'db_connection.php';
/* =========================
 AUTH CHECK
   ========================= */
//AuthHelper::checkLogin();
?>

<!---Fontawesome----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
<!-----Jquery------>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-----SweetAlert 2----->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>                    
                </ul> <!--end::Start Navbar Links--> 
                <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto"> 
					
					<img src="../images/main-logo.webp" alt="Logo" width="120">
					
					
					
					
                     <!--begin::Fullscreen Toggle-->
                     <!--begin::User Menu Dropdown-->
                    <!--<li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Welcome User</span> </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-footer"><a href="#" class="btn btn-danger float-end"><i class="fa-solid fa-power-off fa-beat"></i> Logout</a> </li>
                    </ul> 
                    </li>--> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header-->