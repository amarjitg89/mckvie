@extends('layout.master-template')

@section('title','Rules - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

 <!--##########  Rules Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-start ">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify w-100">
               <div class="blue mainhome_title mb-0 text-start fw-normal">Downloads <span class="red fw-bold">& Resources</span></div>       
            
             <div class="row g-3">
                 
                 
<div class="col-md-6 col-lg-4">
                    <a href="{{url('/policy-for-promotion')}}" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Policy for Promotion of Research and concerned Ethical Practices</div>
                        </div>
                    </a>
                </div>                 
            
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Hostel-Rules-Regulations-Scanned-compressed.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Hostel rules and regulations</div>
                        </div>
                    </a>
                </div>
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/Rules and regulations for Girls-hostel.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Rules and regulations for Girls’ Hostel</div>
                        </div>
                    </a>
                </div> 
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/MCKVIE_AdministrativeRR.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Administrative Rules and Regulations</div>
                        </div>
                    </a>
                </div>
                
                
 <div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/MCKVIE_AcademicsRR.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm">Academic Rules and Regulations</div>
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
 
  <!--##########  Rules End ############# -->
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection