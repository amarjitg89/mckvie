@extends('layout.master-template')

@section('title','Event Calendar - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

 <!--##########  Event Calender Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-start ">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify w-100">
                     
            
             <div class="row g-3">
                 
                 
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Event-Calendar-Even-Semester-2025-26.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Event Calendar for Even Semester 2025-26</div>
                        </div>
                    </a>
                </div> 
 
 
 
                 
            
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Even-Calendar-July-December-2025_Signed-Copy.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Event Calendar for Odd Semester 2025-26</div>
                        </div>
                    </a>
                </div>
                
                
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Event-Calendar_Jan-June-2025_.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Event Calendar for Even Semester 2024-25</div>
                        </div>
                    </a>
                </div> 
                
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Event-Calendar_July2024-Feb2025-Final-Signed-compressed.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Event Calendar for Odd Semester 2024-25</div>
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
 
  <!--##########  Event Calender End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection