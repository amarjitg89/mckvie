@extends('layout.master-template')

@section('title','Student Chapters - MCKV Institute of Engineering')

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
                  
                 
                  
                  <div class="home_about_txt w-100">
                      
            The dynamic engineering students of MCKV Institute of Engineering engage with different formats of national and international institutions and organizations like Computer Society of India (CSI), The Institution of Engineering and Technology, Society of Automotive Engineers, ISHRAE, The Internet Society (ISOC) to facilitate networking, exchange of ideas, sharing of information and best practices to stay ahead in this competitive world.</br>
            
            </br>
            
            <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                    <a href="{{url('/it-student-chapter')}}" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm"> IT Student Chapter </div>
                        </div>
                    </a>
                </div>
                
            <div class="col-md-6 col-lg-4">
                    <a href="{{url('/iif-student-chapter')}}" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm"> IIF Student Chapter</div>
                        </div>
                    </a>
                </div>
                
            <div class="col-md-6 col-lg-4">
                    <a href="{{url('/sae-student-chapter')}}" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm"> SAE Student Chapter</div>
                        </div>
                    </a>
                </div>
                
             <div class="col-md-6 col-lg-4">
                    <a href="{{url('/ieee-student-chapter')}}" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm"> IEEE Student Chapter</div>
                        </div>
                    </a>
                </div> 
                
                
              <div class="col-md-6 col-lg-4">
                    <a href="{{url('/iete-student-chapter')}}" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm"> IETE student Chapter</div>
                        </div>
                    </a>
                </div> 
                
                
               <div class="col-md-6 col-lg-4">
                    <a href="{{url('/iet-uk-student-chapter')}}" class="resource-card">
                        <div class="icon-box bg-primary-subtle text-primary">
                            <i class="fas fa-link"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-0 fw-bold text-dark lh-sm"> IET-UK Student Chapter</div>
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