<?php
include("csp.php");
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
	
	<!-----CSS For Datatable--------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- DataTables CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.min.css">

    <!-- DataTables Buttons CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.bootstrap5.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<style>
	.dt-button-gap {
    margin-right: 10px; /* Adjust the margin value as needed */
    border-radius: 5px !important;
    background-color: #b62159; /* Change the background color */
    color: #FFFFFF; /* Change the text color */
    border: 2px solid #b62159; /* Change the border color, width, and style */
}
		
	.add_but_pos
		{
			display: flex;
 			align-items: center;
			justify-content: space-between;
			width: 100%;
		}
		


	
		
		
	</style>
	
	</head> 
<!--end::Head--> 
<!--begin::Body-->
	
	<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> 
    <!--begin::App Wrapper-->
    <div class="app-wrapper"> 
        <!--begin::Header-->
        <?php include("./header.php");?>
        <!--end::Header--> 
        <!--begin::Sidebar-->
        <?php include("./sidemenu.php");?>
        <!--end::Sidebar--> 
        
        <!--begin::App Main-->
        <main class="app-main">
			<div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0"></h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="welcome.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Projects</li>								
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header-->
			
			<div class="app-content"> <!--begin::Container-->
	
	
	<div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header-custom">
                                    <h3 class="card-title add_but_pos">VIEW PROJECTS
									<a href="add_project.php" class="btn btn-custom1"><i class="fa-solid fa-circle-plus"></i> ADD NEW</a>
									</h3>						
									
                                </div> <!-- /.card-header -->
                                <div class="card-body">
									<div class="mt-2" id="buttonshowdiv"></div>
									<table id="example1" class="table table-bordered table-striped">
										<thead>
                                            <tr class="align-middle">
                                                <th>SLN</th>
                                                <th>Project Name</th>
                                                <th>Type</th>
                                                <th>Feature Image</th>
                                                <th>Details</th>
                                                <th>Action</th>                                                                                                
                                            </tr>
                                        </thead>
                                        <tbody>											
											<tr class="align-middle">
                                                <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
							<td width="20px;">
						
								</td>
                                            </tr>
											
											</tbody>
									</table>
									
									
									</div>
								
								</div>
								
								</div>

                                </div> <!--end::Row-->
                </div> <!--end::Container-->          
	
	
	</div> <!--end::App Content-->
			
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
		
		<!---JS For Datatables---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS CDN -->
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- DataTables Buttons JS CDN -->
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.0/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.12/pdfmake.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
	
	
	
	<script nonce="<?php echo $unique_nonce ;?>">

    $(document).ready(function(){
        $("#example1").DataTable({

"responsive": true,
  "paging": true,
  "lengthChange": false,
  "autoWidth": false,
  "searching": true,
  "info": true,  
  "lengthMenu": [ [10, 25, 50, 100, 500, 1000, 2500, 5000, 10000], [10, 25, 50, 100, 500, 1000, 2500, 5000, 10000] ], // Custom page length options
  stateSave: true,
			
	columnDefs: [
            { width: "150px", targets: 5 }  // Increases the width of the third column (index 2)
        ],	
			
  
});

    });
</script>
	
	
	
	
    
    <!--begin::OverlayScrollbars Configure-->
    <script nonce="<?= $unique_nonce ;?>">
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