@extends('layout.master-template')

@section('title','Achievements - MCKV Institute of Engineering')

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
                  
                 
                  
                              <div class="home_about_txt text-justify text-md-justify">
      <div class="blue mainhome_title mb-3 text-start fw-normal">  <span class="red fw-bold">{{$get_course->course_name}} </span></div>                
          @foreach ($get_acheivement as $acheivement_details)             
                    
        <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-2">
                <div class="img-wrapper h-auto" style="min-height:auto">
                    <img src="{{asset('images/student-achievements/'.$acheivement_details->student_image)}}" alt="{{$acheivement_details->student_name}}" class="facility-img">
                </div>
            </div>
            <div class="col-md-10">
                <div class="facility-content">
                   <div class="students_achivement_name text-start red mb-2 ">{{$acheivement_details->student_name}}</div>
                    <p class="facility-text mb-0">
                       {!!$acheivement_details->description!!}



                    </p>
                    
                 
                   
                </div>
            </div>
        </div>
    </div>
    @endforeach 
    
    {{-- <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-2">
                <div class="img-wrapper h-auto" style="min-height:auto">
                    <img src="{{asset('images/student-achievements/aue_achivement1.webp')}}" alt="Hostel Room" class="facility-img">
                </div>
            </div>
            <div class="col-md-10">
                <div class="facility-content">
                   <div class="students_achivement_name text-start red mb-2 ">Ms.Sneha Singh
        
   </div>
                    <p class="facility-text mb-0">
                       <b>Paper Presentation — APPSCICON 22</b></br>
                       
                       

An Interdisciplinary National Conference, May 27–28, 2022 at MAKAUT (WB)
Presented paper titled 'Optimization of Fused Deposition Modelling process using Taguchi Method'




                    </p>
                    
                 
                   
                </div>
            </div>
        </div>
    </div> --}}
    
    
            
                   
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