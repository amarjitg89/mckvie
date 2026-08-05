<?php
/* =========================================================
   DASHBOARD PAGE
   ========================================================= */

/* Logged-in user (already cached, no DB hit) */
$user = Auth::user();

/* =========================
   DASHBOARD METRICS
   ========================= */

/* Total Assets */
$totalAssets = DB::fetchValue(
    "SELECT COUNT(*) FROM assets"
);

/* Assets Under AMC */
$assetsUnderAMC = DB::fetchValue(
    "SELECT COUNT(DISTINCT asset_id)
     FROM amc_contracts
     WHERE end_date >= CURDATE()"
);

/* Open Maintenance Requests */
$openMaintenance = DB::fetchValue(
    "SELECT COUNT(*)
     FROM maintenance_visits
     WHERE status != 'completed'"
);

/* Upcoming Compliance Renewals (next 30 days) */
$upcomingRenewals = DB::fetchValue(
    "SELECT COUNT(*)
     FROM asset_compliances
     WHERE valid_till BETWEEN CURDATE()
     AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)"
);

/* Overdue Compliance */
$overdueRenewals = DB::fetchValue(
    "SELECT COUNT(*)
     FROM asset_compliances
     WHERE valid_till < CURDATE()"
);
?>


<!DOCTYPE html>
<html lang="en"> 
    <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Void & Mass | CMS</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/jpg" href="../images/main-favicon.webp?v=2">
    <meta name="title" content="Mass & Void | CMS">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content=""><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" ><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" ><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" ><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="dist/css/adminlte.css">
	<link rel="stylesheet" href="dist/css/custom.css?v=1">
	
	</head> 
<!--end::Head--> 
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> 
    <!--begin::App Wrapper-->
    <div class="app-wrapper"> 
        <!--begin::Header-->
        <?php include("./AM/app/header.php");?>
        <!--end::Header--> 
        <!--begin::Sidebar-->
        <?php include("./AM/app/sidemenu.php");?>
        <!--end::Sidebar--> 
        
        <!--begin::App Main-->
        <main class="app-main"> 
<div class="wrapper">

  <div class="content-wrapper p-3">

    <div class="content-header">
      <h4 class="mb-3">Dashboard</h4>
    </div>

    <section class="content">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?= $totalAssets ?></h3>
                <p>Total Assets</p>
              </div>
              <div class="icon">
                <i class="fas fa-boxes"></i>
              </div>
              <a href="assets.php" class="small-box-footer">
                View Assets <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $openRequests ?></h3>
                <p>Open Maintenance</p>
              </div>
              <div class="icon">
                <i class="fas fa-tools"></i>
              </div>
              <a href="maintenance.php" class="small-box-footer">
                View Requests <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $upcomingRenewals ?></h3>
                <p>Renewals (30 Days)</p>
              </div>
              <div class="icon">
                <i class="fas fa-calendar-alt"></i>
              </div>
              <a href="compliance.php" class="small-box-footer">
                View Renewals <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $overdueRenewals ?></h3>
                <p>Overdue Renewals</p>
              </div>
              <div class="icon">
                <i class="fas fa-exclamation-triangle"></i>
              </div>
              <a href="compliance.php" class="small-box-footer">
                Resolve Now <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

        </div>

        <?php if ($overdueRenewals > 0): ?>
        <div class="alert alert-danger mt-3">
          <i class="fas fa-exclamation-circle me-1"></i>
          You have <strong><?= $overdueRenewals ?></strong> overdue compliance items.
        </div>
        <?php endif; ?>

      </div>
    </section>

  </div>

</div> <!--end::App Content Header-->
			
			
			<div class="app-content">
				
				<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-4">
							<div class="card-body" style="text-align: center;height:550px;">
							<img src="dist/assets/img/main-logo.webp" width="310" style="margin-top: 100px; margin-bottom: 20px;">
        <h3 >Welcome To Mass & Void CMS</h3>
         <?php  echo "session=".$_SESSION['user_id'];?>
							</div>
						</div>
					
					</div>
					</div>
				
				</div>
				
			</div>
			
			
			
			
        </main> 
        <!--end::App Main--> 
        
        <!--begin::Footer-->
        <?php include("./footer.php");?>
        <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" ></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" ></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="dist/js/adminlte.js"></script>    
    <!--end::Required Plugin(AdminLTE)-->
    
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
    </script> <!--end::OverlayScrollbars Configure-->

</body>
<!--end::Body-->

</html>