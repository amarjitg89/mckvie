<?php
$Page_Url=$_SERVER['REQUEST_URI'];
$Ex=explode("/",$Page_Url);
$Page=end($Ex);
$Ex1=explode('?',$Page);
$Page2=$Ex1[0];

$Username=$_COOKIE['void_user'];
$Replace="_";
$Replace_With=" ";

$Cookie_Val=str_replace($Replace, $Replace_With, $Username);



?>


<aside class="app-sidebar bg-body-custom shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand" style="border-bottom: 1px solid #ffffff;">
				<span class="d-none d-md-inline" style="    color: #fff;
    font-size: 15px;">Welcome <?php echo ucwords($Cookie_Val);?></span>
                <!--begin::Brand Link--> 
                <a href="#" class="brand-link"> 
                    <!--begin::Brand Image--> 
                    <!--<img src="dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">--> 
                    <!--end::Brand Image--> 
                    <!--begin::Brand Text--> 
                    <!--<span class="brand-text fw-light">AdminLTE 4</span> -->
                    <!--end::Brand Text--> 
                </a> 
                <!--end::Brand Link--> 
            </div> 
            <!--end::Sidebar Brand--> 
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        
                        <li class="nav-item"> 
							<a href="welcome.php" class="nav-link <?php if($Page=='welcome.php'){echo "active";}?>"> 
								<i class="nav-icon fa-solid fa-house <?php if($Page=='welcome.php'){echo "fa-beat";}?>"></i>
                                <p>Home</p>
                            </a> 
						</li>
                        <!--<li class="nav-item <?php if($Page=='add-job.php' || $Page=='view-job.php' || $Page2=='edit-job.php'){echo "menu-open";}?>"> 
							<a href="#" class="nav-link <?php if($Page=='add-job.php' || $Page=='view-job.php' || $Page2=='edit-job.php'){echo "active";}?>"> 
								<i class="nav-icon fa-solid fa-user-graduate <?php if($Page=='add-job.php' || $Page=='view-job.php' || $Page2=='edit-job.php'){echo "fa-beat";}?>"></i>
                                <p>Career Profile <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> 
									<a href="add-job.php" class="nav-link <?php if($Page=='add-job.php'){echo "active";}?>"> 
										<i class="nav-icon bi bi-circle"></i>
                                        <p>Post</p>
                                    </a> 
								</li>
                                
                                <li class="nav-item"> 
									<a href="view-job.php" class="nav-link <?php if($Page=='view-job.php' || $Page2=='edit-job.php'){echo "active";}?>"> 
										<i class="nav-icon bi bi-circle"></i>
                                        <p>View</p>
                                    </a> 
								</li>
                            </ul>
                        </li>-->
		

                        <li class="nav-item"> 
                            <a href="sub_category.php" class="nav-link <?php if($Page=='sub_category.php' || $Page=='add_sub_category.php'){echo "active";}?>"> 
                                <i class="nav-icon fa-solid fa-sitemap <?php if($Page=='sub_category.php' || $Page=='add_sub_category.php'){echo "fa-beat";}?>"></i>
                                <p>Sub Category</p>
                            </a> 
                        </li>
                        

						<li class="nav-item"> 
							<a href="project.php" class="nav-link <?php if($Page=='project.php' || $Page=='add_project.php'){echo "active";}?>"> 
								<i class="nav-icon fa-solid fa-building <?php if($Page=='project.php' || $Page=='add_project.php'){echo "fa-beat";}?>"></i>
                                <p>Projects</p>
                            </a> 
						</li>
						
						
						
                        <li class="nav-item"> 
							<a href="logout.php" class="nav-link"> 
								<i class="nav-icon fa-solid fa-power-off"></i>
                                <p>Logout</p>
                            </a> </li>                        
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar-->