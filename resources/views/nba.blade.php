@extends('layout.master-template')

@section('title','NBA Accreditations - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

 
    <!--##########  NBA Accreditations Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-start ">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify">
                      
                 
                      
       <b> DCP Link against Application ID: 11000-10/09/2025</b>

            
            
            
                   
                  </div> 
                  
                  
       <div class="home_about_txt text-justify text-md-justify w-100 mt-4">
           
            
                  
        <div class="row g-3">
                 
                 
               
            
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/e-NBA-DCS-Report-EE.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Download the DCP Link for EE</div>
                        </div>
                    </a>
                </div>
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/e-NBA-DCS-Report-ECE.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start"> Download the DCP Link for ECE</div>
                        </div>
                    </a>
                </div>
                
           
                


</div>   


                
       </div>           
                  
                  
              </div>
           
      
           
           
           
             </div>          
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  NBA Accreditations End ############# -->  
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection