@extends('layout.master-template')

@section('title','Research - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

  <!--##########  Research Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-start ">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify w-100">
                     
            
             <div class="row g-3">
                 
                 
             
            
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/User-Manual-of-Plagiarism-Detection-Software.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Institution’s Rules and Regulations for using Plagiarism Detection Software (DrillBit) </div>
                        </div>
                    </a>
                </div>
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Guidelines-for-attending-seminar-conferences-by-students.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Guidelines for attending seminars/conferences by students</div>
                        </div>
                    </a>
                </div> 
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Incentive-Policies-For-Existing-Teaching-Staff-of-MCKVIE.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Incentive Policies for Existing Teaching Staff of MCKVIE</div>
                        </div>
                    </a>
                </div>
                
                
 <div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/MCKVIE-RESEARCH-POLICY.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Research Policy</div>
                        </div>
                    </a>
                </div>
                
  <div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Research-Advisory-Council.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Research Advisory Council</div>
                        </div>
                    </a>
                </div>                
                
  <div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/2.4.2_3.2.3__3.4.2.xlsx')}}" class="resource-card" download>
                       <div class="icon-box bg-success-subtle text-success">
                            <i class="fas fa-file-excel"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start"> Details of Research guides</div>
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
 
  <!--##########  Research End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection