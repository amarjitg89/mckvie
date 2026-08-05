@extends('layout.master-template')

@section('title','NAAC - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

 
  <!--##########  Naac Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-start ">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify">
                      
             <div class="blue mainhome_title mb-3 text-start fw-normal">We are <span class="red fw-bold">NAAC accredited "A" Grade Institute.</span></div>        
                      
       India boasts one of the largest and most diverse higher education systems in the world. Driven by privatization, rapid expansion, increased autonomy, and introduction of programs in new and emerging areas have enormously improved the access to higher education. To safeguard the quality and relevance of these programs, the University Grants Commission (UGC) established the National Assessment and Accreditation Council (NAAC) in 1994 as an autonomous body. Following rigorous assessment by national-level peer reviewers, NAAC awards specific grade to the institute depending on the score it gains while passing through the assessment and accreditation process. 
</br></br>
            
  MCKV Institute of Engineering is proud to have consistently maintained an elite <b>Grade 'A' accreditation since 2017</b>. This prestigious milestone reflects the institute’s unwavering commitment to educational excellence, driven by an advanced curriculum, modern infrastructure, rigorous assessment systems, and robust governance by an esteemed management body. By continuously fostering innovation and adopting industry-standard best practices, the institute exhibits its dedication in meeting NAAC quality parameters—elevating institutional standards and contributing meaningfully to the nation’s holistic education system to promote a sustainable world.</br></br>
            
            
            
                   
                  </div> 
                  
                  
       <div class="home_about_txt text-justify text-md-justify">           
                  
        <div class="row g-3">
                 
                 
               
            
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/NAAC-Extn-Letter.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">NAAC Extension till December 31, 2025</div>
                        </div>
                    </a>
                </div>
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/naac_ssr_2017_reduced.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">NAAC_SSR_2017</div>
                        </div>
                    </a>
                </div> 
                
 <div class="col-md-6 col-lg-4">
                    <a href="https://www.youtube.com/watch?v=4EUVrNdJKwU" class="resource-card" target="_blank">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm"> NAAC Visit Video</div>
                        </div>
                    </a>
                </div>               
                
                
                
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/naac_1.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">Certificate issued by NAAC, UGC</div>
                        </div>
                    </a>
                </div>
                
                
<div class="col-md-6 col-lg-4">
                    <a href="{{asset('pdf/faq_about_autonomy_2.pdf')}}" class="resource-card" target="_blank">
                        <div class="icon-box bg-danger-subtle text-danger">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm text-start">AUTONOMY</div>
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
 
  <!--##########  Naac End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection