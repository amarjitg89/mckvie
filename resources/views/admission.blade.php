@extends('layout.master-template')

@section('title','Admission - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

 
 <!--##########  Admission Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-start ">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify ">
                      
                     
                      
           <b>Students of MCKVIE</b> learn from dedicated and highly qualified faculty who encourage critical thinking and creativity. Application oriented teaching and hands on training transforms them into dynamic leaders and accomplished professionals. </br></br>
            
            Grab a copy of the latest Information Brochure by clicking on the link below</br></br>
            
                   
                  </div> 
                  
                  
       <div class="home_about_txt text-justify text-md-justify w-100">           
                  
        <div class="row g-3">
                 
                 
               
            
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/MCKV_IE_Brochure-2026_15-01-2_compressed.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">MCKVIE E-Brochure 2026</div>
                        </div>
                    </a>
                </div>
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/E-Brochure-MBA-compressed.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">MBA E-Brochure 2026</div>
                        </div>
                    </a>
                </div> 
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/MCKV-BBA-Leaflet_28_01_26-compressed.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">BBA  E-Brochure 2026</div>
                        </div>
                    </a>
                </div>
                
 <div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/MCKVIE Prospectus Single Pg_2024.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">MCKVIE Prospectus 2024</div>
                        </div>
                    </a>
                </div>
                
 <div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/BVoc2023.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">B.Voc E-Brochure 2024</div>
                        </div>
                    </a>
                </div>               
                
             


</div>   

</br>
If you have received a token number from the college, you can fill you admission form online from the convenience of your home.</br></br>

<div class="gap-4 d-flex flex-sm-row">
 <!-- Contact Us Button (Red Gradient) -->
                <a href="{{url('/contact-us')}}" class="btn-custom btn-contact">
                   
                    Contact Us
                </a>

                <!-- Visit Us Button (Blue Gradient) -->
                <a href="{{url('/visit-mckvie')}}"  class="btn-custom btn-visit">
                    
                    Visit Us
                </a>
 </div>                 
       </div>           
                  
                  
              </div>
           
      
           
           
           
             </div>          
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Admission End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection