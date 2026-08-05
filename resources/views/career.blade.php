@extends('layout.master-template')

@section('title','Careers - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

  <!--##########  Career Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="recruitment-card">
                <div class="row g-0 align-item-center">
                    <!-- Left Content -->
                    <div class="col-lg-9 content-section">
                       <!-- <h2 class="mb-5 fw-bold text-primary">Career Opportunities</h2>-->

                        <!-- Ad 1 -->
                        <div class="ad-item">
                            <span class="bullet"></span>
                            <div class="ad-title">
                                For further details of the above advertisement, please 
                                <a href="{{asset('pdf/ADVT-FEB-2026-Web.pdf')}}" class="link-text" target="_blank">click here</a>.
                            </div>
                            <div class="download-box">
                                <i data-lucide="download" width="16"></i>
                                <span>Application form for recruitment of Staff members:</span>
                                <a href="{{asset('pdf/Application-Form-1.pdf')}}" class="file-link" target="_blank">PDF</a>
                                <span class="divider">|</span>
                                <a href="{{asset('pdf/Application-Form-1.doc')}}" class="file-link" target="_blank">DOC</a>
                            </div>
                        </div>

                        <!-- Ad 2 -->
                        <div class="ad-item">
                            <span class="bullet"></span>
                            <div class="ad-title">
                                Advertisement for the post of Assistant Professor in Management Science and Laboratory Instructor in Computer Science and Engineering 
                                <span class="fst-italic text-muted">(Advt No. MCKVIE/2025/02)</span>: 
                                For details, please <a href="{{asset('pdf/ADVT-APR-_2-2025-Web_MS_APC_CSE-LI.pdf')}}" class="link-text" target="_blank">click here</a>
                            </div>
                            <div class="download-box">
                                <i data-lucide="file-text" width="16"></i>
                                <span>Download form for <span class="fw-semibold">Advt No. MCKVIE/2025/02</span>:</span>
                                <a href="{{asset('pdf/Application-Form-for-Faculty-recruitment_rev1.pdf')}}" class="file-link" target="_blank">PDF</a>
                                <span class="divider">|</span>
                                <a href="{{asset('pdf/Application-Form-for-Faculty-recruitment_rev1.doc')}}" class="file-link" target="_blank">DOC</a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image Area -->
                    <div class="col-lg-3 image-section">
                        <!-- Standard placeholder image - Replace src with your actual image URL -->
                       <a href="images/recruitment-FEB-2026.jpeg" data-fancybox=""> <img src="images/recruitment-FEB-2026.jpeg" alt="Recruitment" class="image-overlay"></a>
                        
                     
                    </div>
                </div>
            </div>         
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Career End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection