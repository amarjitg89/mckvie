@extends('layout.master-template')

@section('title','Feedback - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

  <!--##########  Feedback Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-start mb-sm-5 mb-4">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify w-100">
                      
                      
               <div class="blue mainhome_title mb-0 text-start fw-normal">Feedback <span class="red fw-bold"> Form</span></div>       
                     
            
             <div class="row g-3">
                 
                 
                 
            
<div class="col-md-6 col-lg-4">
                    <a href="https://mckv.ucanapply.com/student/feedback-form" target="_blank" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Student feedback on Teaching Learning (Student need to login)</div>
                        </div>
                    </a>
                </div>
                
                
                
 <div class="col-md-6 col-lg-4">
                    <a href="https://forms.gle/xKx8MrmLf7Y5hoJF8" target="_blank" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Student feedback on Infrastructure and Facilities</div>
                        </div>
                    </a>
                </div>                 
                
                
  <div class="col-md-6 col-lg-4">
                    <a href="https://forms.gle/EcRgGwu5xKXNoGwA7" target="_blank" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Alumni feedback on Curriculum</div>
                        </div>
                    </a>
                </div>
                
   <div class="col-md-6 col-lg-4">
                    <a href="https://forms.gle/zHq72MdVUMLoWU347" target="_blank" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Employers feedback on Curriculum</div>
                        </div>
                    </a>
                </div>
                
 <div class="col-md-6 col-lg-4">
                    <a href="https://forms.gle/QuyvU22rN3MA85q36" target="_blank" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Parents feedback on Curriculum</div>
                        </div>
                    </a>
                </div>                 
                
  <div class="col-md-6 col-lg-4">
                    <a href="https://forms.gle/gcd3oSetXWq6oFjN9" target="_blank" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Teachers feedback on Curriculum</div>
                        </div>
                    </a>
                </div>                


</div>


                   
                  </div> 
                  
              </div>
           
      
           
           
           
             </div>          
             
    
    
     <div class="row m-0 justify-content-start ">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify w-100">
                      
                      
               <div class="blue mainhome_title mb-0 text-start fw-normal">Feedback <span class="red fw-bold"> Report</span></div>       
                     
            
             <div class="row g-3">
                 
                 
                 
            
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/1.4.1-Faculty-Student-Alumni-Feedback-Report.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Curricular Feedback Report (2023-24)</div>
                        </div>
                    </a>
                </div>
                
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Curricular-Feedback-Report-2022-23_compressed.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Curricular Feedback Report (2022-23)</div>
                        </div>
                    </a>
                </div>                

<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Infrastructural-Feedback-Report-2022-23.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Infrastructural Feedback Report (2022-23)</div>
                        </div>
                    </a>
                </div>                
               
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Infrastucture-2021-2022.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Infrastructural Feedback Report (2021-22)</div>
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
 
  <!--##########  Feedback End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection