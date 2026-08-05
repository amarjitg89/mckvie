@extends('layout.master-template')

@section('title','Annual Reports - MCKV Institute of Engineering')

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
                  
                 
                  
                
                  
       <div class="home_about_txt text-justify text-md-justify w-100">
           
           
        <!--<div class="blue mainhome_title mb-3 text-start fw-normal"> Details of<span class="red fw-bold"> NBA Accreditated Courses :      </span></div>  -->   
           
                      
                  
        <div class="row g-3">
                 
                 
               
            
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Annual-Report-2024_new.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Annual Report 2024</div>
                        </div>
                    </a>
                </div>
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Annual-Report_2023_C.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Annual Report 2023</div>
                        </div>
                    </a>
                </div>
                
 <div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Annual-Report-2022.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Annual Report 2022</div>
                        </div>
                    </a>
                </div>              
                
  <div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/ANNUAL-REPORT-2021-final-compressed.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Annual Report 2021</div>
                        </div>
                    </a>
                </div> 
                
   <div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Annual-Report-2020-version-updated-09-06_final-compressed.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Annual Report 2020</div>
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
 
  <!--##########  Course Overview End ############# --> 
  






 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection