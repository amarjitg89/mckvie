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
	
	<style>
	.preload {
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0%;
      left: 0%;
      text-align: center;
      font-family: 'Cabin', sans-serif;
      font-size: 14px;
      color: #fff;
      padding-top: 15%;
      background-color: rgba(0, 0, 0, 0.9);
      z-index: 20000;
      background-size: cover;
    }
	</style>
	</head> 
<!--end::Head--> 
<!--begin::Body-->
	
	<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> 
		
		
		<div class="preload" id="preloader" style="display:none;"><strong>Please Wait While We Process The
      Data...</strong><br /><br />
    <div class="spinner-border text-light" role="status">
      <span class="visually-hidden">Your request is getting processed...</span>
    </div>

  </div>
		
		
		
		
		
		
		
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
								<li class="breadcrumb-item"><a href="project.php">Projects</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Projects</li>								
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header-->
			
	<div class="app-content">
				
				<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card mb-4">
							<div class="card-header-custom">
                                    <h3 class="card-title">ADD PROJECT</h3>
                                </div> <!-- /.card-header -->		
			<form id="add_project" enctype="multipart/form-data">
							<div class="card-body">
							<div class="row">
								
								<div class="col-4 mt-2">
								
                                       <label class="form-label">Project Name <span class="text-danger"> *</span></label>
                                       <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Enter Project Name" autocomplete="off">               
										<span id="project_name_err" class="text-danger"></span>
								
								</div>
								
								<div class="col-4 mt-2">
								
                                       <label class="form-label">Project Type <span class="text-danger"> *</span></label>
									<select class="form-control" id="project_type" name="project_type" autocomplete="off">
									<option value="">Select Project Type</option>
										<?php
										$Type_Sql=$Mainclass->dbh->prepare("SELECT Sub_Category,slug FROM sub_category_master WHERE Active='Yes' order by Sub_Category");
										$Type_Sql->execute();
										$Res=$Type_Sql->get_result();
										while($Ft_Cat=$Res->fetch_assoc())
										{
										?>
										<option value="<?php echo $Ft_Cat['slug'];?>"><?php echo $Ft_Cat['Sub_Category'];?></option>
										<?php
										}
										$Type_Sql->close();
										?>										
									</select>
									
									
										<span id="project_type_err" class="text-danger"></span>
								
								</div>
								
								<div class="col-4 mt-2">
								
                                       <label class="form-label">Area <span class="text-danger"> *</span></label>
                                       <input type="text" class="form-control" id="area" name="area" placeholder="Enter Area" autocomplete="off">               
										<span id="area_err" class="text-danger"></span>
								
								</div>
								
								<div class="col-4 mt-2">
								
                                       <label class="form-label">Location <span class="text-danger"> *</span></label>
                                       <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" autocomplete="off">               
										<span id="location_err" class="text-danger"></span>
								
								</div>
								
								<div class="col-4 mt-2">
								
                                       <label class="form-label">Storey/Block <span class="text-danger"> *</span></label>
                                       <input type="text" class="form-control" id="storey" name="storey" placeholder="Enter Area" autocomplete="off">               
										<span id="storey_err" class="text-danger"></span>
								
								</div>
								
								<div class="col-4 mt-2">
								
                                       <label class="form-label">Project Status <span class="text-danger"> *</span></label>
									<select class="form-control" id="project_status" name="project_status" autocomplete="off">
									<option value="">Select Project Status</option>										
									<option value="Starting Shortly">Starting Shortly</option>
									<option value="Complete">Complete</option>										
																				
									</select>
									
									
										<span id="status_err" class="text-danger"></span>
								
								</div>
								
								<div class="col-4 mt-2">
								
                                       <label class="form-label">Featured Image <span class="text-danger"> *</span></label>                                    
									<input type="file" class="form-control" id="feature_image" name="eature_image"  autocomplete="off" accept="image/*"> 
										<span id="image_err" class="text-danger"></span>
								
								</div>
								
								
								
								<div class="col-4 mt-2">
								
                                       <label class="form-label">Sequence <span class="text-danger"> *</span></label>
                                       <input type="text" class="form-control" id="sequence" name="sequence" placeholder="Enter Sequence" autocomplete="off">               
										<span id="sequence_err" class="text-danger"></span>
								
								</div>
								
								
								
								
								
								</div>
							
							</div>
								
							<!--begin::Footer-->
                                <div class="card-footer"> 
                                    <button class="btn btn-custom float-end" type="submit">Submit</button> 
                            </div> <!--end::Footer-->
							</form>	
								</div>
			</div> <!--end::Row-->
                </div> <!--end::Container--> 
			</main> 
        <!--end::App Main--> 
        
        <?php include("./footer.php");?>
        <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" ></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" ></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="dist/js/adminlte.js"></script>    
    <!--end::Required Plugin(AdminLTE)-->
    
    <!--begin::OverlayScrollbars Configure-->
    <script nonce="<?php echo $unique_nonce;?>">
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
			
			<script nonce="<?php echo $unique_nonce;?>">
				
				$(document).ready(function(){
					$("#sequence").on('input', function() {
        this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');
    });
				});
				
				
				
				$(document).ready(function(){
					$("#add_project").submit(function(e){
						e.preventDefault();
						
						var Project_Name=$("#project_name").val();
						var Project_Type=$("#project_type").val();
						var Area=$("#area").val();
						var Location=$("#location").val();
						var Storey=$("#storey").val();
						var Status=$("#project_status").val();
						var Feature_Image=$("#feature_image").val();
						var Sequence=$("#sequence").val();
						var flag=0;
						if(Project_Name=="")
							{
								$("#project_name_err").text("* Please Enter Project Name.");
								flag++;
							}
						if(Project_Type=="")
							{
								$("#project_type_err").text("* Please Select Project Type.");
								flag++;
							}
						if(Area=="")
							{
								$("#area_err").text("* Please Enter Area.");
								flag++;
							}
						if(Location=="")
							{
								$("#location_err").text("* Please Enter Location.");
								flag++;
							}
						if(Storey=="")
							{
								$("#storey_err").text("* Please Enter Storey/Block.");
								flag++;
							}
						if(Status=="")
							{
								$("#status_err").text("* Please Select Project Status.");
								flag++;
							}
						if(Feature_Image=="")
							{
								$("#image_err").text("* Please Select Feature Image.");
								flag++;
							}
						if(Sequence=="")
							{
								$("#sequence_err").text("* Please Enter Sequence.");
								flag++;
							}
						if(flag>0)
						   {
						   return false;
						   }
						else{
							$("#preloader").show();
							var formData = new FormData(this);
							$.ajax({
								url:'ajax_ins_project.php',
								type:'POST',
								data: formData,
    							processData: false,
    							contentType: false,
								success:function(res)
								{
									$("#preloader").hide();
								}
							});
						}
					});
				});
				
				
	$(document).ready(function(){
		$("input").on("input", function () {
        $(".text-danger").text("");
      });
	});			
				
				
			</script>

</body>
<!--end::Body-->

</html>
			