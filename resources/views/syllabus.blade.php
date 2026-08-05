@extends('layout.master-template')

@section('title','Syllabus - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
  
  
  
  
  
   
  

 <!--##########  Course Overview Start ############# -->   
  
 
   <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-start ">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt  fs-5 w-100">
                      
            
           <section class="container-fluid px-0" id="courses-overview">
        <div class="horizontal-container">
            
            <div class="row g-4 justify-content-center align-items-stretch">
                <!-- Box 1: MAKAUT UG Courses -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="https://makautexam.net/aicte_details/aicteugdetails.html" target="_blank"><div class="gateway-card grad-makaut-ug" id="card-makaut-ug" >
                        <div class="gateway-icon"><i class="bi bi-mortarboard-fill"></i></div>
                        <h2 class="fw-extrabold h5 mb-0 tracking-tight">MAKAUT UG Courses</h2>
                    </div></a>
                </div>

                <!-- Box 2: UG Courses Under Autonomy -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{url('/ug-courses-syllabus')}}"><div class="gateway-card grad-ug-auto" id="card-ug-autonomy" >
                        <div class="gateway-icon"><i class="bi bi-award-fill"></i></div>
                        <h2 class="fw-extrabold h5 mb-0 tracking-tight">UG Courses Under Autonomy</h2>
                    </div></a>
                </div>

                <!-- Box 3: PG Courses Under Autonomy -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <a href="{{url('/pg-courses-syllabus')}}">  <div class="gateway-card grad-pg-auto" id="card-pg-autonomy" >
                        <div class="gateway-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h2 class="fw-extrabold h5 mb-0 tracking-tight">PG Courses Under Autonomy</h2>
                    </div></a>
                </div>

                <!-- Box 4: BVOC courses -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="{{url('/b-voc-courses-syllabus')}}"><div class="gateway-card grad-bvoc" id="card-bvoc" >
                        <div class="gateway-icon"><i class="bi bi-wrench-adjustable"></i></div>
                        <h2 class="fw-extrabold h5 mb-0 tracking-tight">BVOC courses</h2>
                    </div></a>
                </div>
            </div>

        </div>
    </section>


                   
                  </div> 
                  
              </div>
           
      
           
           
           
             </div>          
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Course Overview End ############# --> 
  






 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection