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
                                <li class="breadcrumb-item active" aria-current="page">Sub Category</li>								
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
                                    <h3 class="card-title add_but_pos">VIEW SUB CATEGORIES
									<a href="add_project.php" class="btn btn-custom1"><i class="fa-solid fa-circle-plus"></i> ADD NEW</a>
									</h3>						
									
                                </div> <!-- /.card-header -->
                                <div class="card-body">
									<div class="mt-2" id="buttonshowdiv"></div>
									<table id="example1" class="table table-bordered table-striped">
										<thead>
                                            <tr class="align-middle">
                                                <th>SLN</th>
                                                <th>Category</th>
                                                <th width="200px">Sub Category</th>
                                                <th>Image</th>
                                                <th>Sequence</th>
                                                <th>Action</th>                                                                                                
                                            </tr>
                                        </thead>
                                        <tbody>		
<?php

$condition = "Yes";
$fetch_sql=$Mainclass->dbh->prepare("SELECT * FROM sub_category_master WHERE Active=? Order by Category asc");
$fetch_sql->bind_param("s",$condition);
$fetch_sql->execute();
$fetch_qry=$fetch_sql->get_result();

$BASE_URL = "https://ik.imagekit.io/afrzpde5u/images/projects/"; 

$i=1;

while ($fetch_data = $fetch_qry->fetch_assoc())
{

?>

							<tr class="align-middle">
                            <td><?php echo $i;?></td>
                            <td><?php echo ucfirst($fetch_data['Category']); ?></td>
                            <td><?php echo $fetch_data['Sub_Category']; ?></td>
                            <td><img src="<?php echo $BASE_URL?><?php echo $fetch_data['Image']; ?>"width="35%" ></td>
                            <td><?php echo $fetch_data['sequence']; ?></td>
                            <td><i class="fa-solid fa-trash" style="color:crimson; cursor: pointer;" onClick="delete_job('<?php echo $fetch_data['SLN'];?>')"></i></td>

                                            </tr>

<?php

$i++;

}

$fetch_sql->close();

?>

											
											</tbody>
									</table>
									
									
									</div>
								
								</div>
								
								</div>

                                </div> <!--end::Row-->
                </div> <!--end::Container-->          
	
	
	</div> <!--end::App Content-->

      <div class="modal fade" id="delete_subcategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="close_modal1()"></button>
      </div>
      <div class="modal-body">

<input type="hidden" name="sln" id="sln">

<div class="row">

<div class="col-12">

<div class="" role="alert" id="delete-warning" style="color: black;text-align: center;font-size: 15px;">This subcategory will be deleted permanently.</div>

</div>

</div>

 
<div class="row">

<div class="col-12">

<div class="" role="alert" id="delete-success" style="color: darkgreen;text-align: center;font-size: 15px;font-weight: bold;display: none;">Subcategory Successfully Deleted.</div>

</div>

</div>

      </div>

      <div class="modal-footer" id="footer_div">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="close_modal()">Cancel</button>
        <button type="button" class="btn btn-success"  onclick="yes_delete()">Yes, delete it!</button>
      </div>

     <div class="modal-footer" id="disable_footer_div" style="display: none;">
        <button disabled  type="button" class="btn btn-danger" data-bs-dismiss="modal" >Cancel</button>
        <button disabled  type="button" class="btn btn-success">Yes, delete it!</button>
      </div>

    </div>
  </div>
</div>







      <div class="modal fade" id="subcategory_image" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Image</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div id="image_div"></div>

      </div>

      <div class="modal-footer" id="footer_div">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>

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
  "lengthChange": true,
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




<script type="text/javascript">
    
function close_modal(){

$('#delete-warning').show();

$('#delete-success').hide();

}

    function delete_job(per)
        {
            var SLN=per;

            $('#delete_subcategory').modal('show');

            $('#sln').val(SLN);

        }

function yes_delete() {


var sln = $('#sln').val();

$('#footer_div').hide();

$('#disable_footer_div').show();



      $.ajax({
                    url:'ajx_delete_sub_category.php',
                    type:'POST',
                    data:{'SLN':sln},
                    success:function(f)
                    {

    
$('#delete-warning').hide();
$('#delete-success').show();
    
 setTimeout(function () {

               $('#delete_subcategory').modal('hide');

               close_modal();

               window.location.href="sub_category.php";

            }, 1000);

                    }
          })

}


function open_image(per){


$('#subcategory_image').modal('show');

$.ajax({

url:'ajax-show-image.php',

type:'POST',

data:{per:per,},

success:function(f){

alert(f);

$('#image_div').html(f);

}

});


}

</script>

</body>


</html>