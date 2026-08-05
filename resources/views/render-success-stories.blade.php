@if ($get_success_stories->isNotEmpty())
   

<section class="achivement">
     
     <div class="mainbody_div py-0 ">
         
         <div class="container-fluid p-0 m-0">
             <div class="row m-0 align-items-center" id="counter">
                 
                 
   <div class="col-lg-12 col-md-12 col-12 p-0">
   <div class="mission_bg pb-2 bg-white">
      <div class="container"> 
   <div class="row m-0 p-0  justify-content-center">
       
   <div class="col-xl-12 col-lg-12 col-sm-12 col-12 px-sm-0">
       
      <div class="row m-0">
          <div class="col-12 px-0">
              <div class="mainhome_title mb-sm-4 mb-3 red">Success Stories <span class="fw-normal">- Alumni</span></div>
          </div>
          
     

<div class="col-xl-12 col-lg-12 col-sm-12 col-12 mb-sm-4 mb-3 px-0">
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="alumni" data-count="{{$get_success_stories->count()}}">
    
   @foreach ($get_success_stories as $success_stories)
<div class="item">
    <div class="students_achivement_maindiv lightblue">
        <div class="students_achivement_img mb-2">
            <img src="{{asset('images/alumni/'.$success_stories->image_name)}}" alt="{{$success_stories->student_name}}" class="facultyimg_css rounded-50">
        </div>

        <div class="students_achivement_name text-start red mb-2">{{$success_stories->student_name}}</div>
        
        <!-- Wrapper for details to ensure consistent height -->
        <div class="students_achivement_details twoline">
            @if (!empty($success_stories->designation))
                <div>{{$success_stories->designation}}</div>
            @endif

            @if (!empty($success_stories->company))
                <div>{{$success_stories->company}}</div>
            @endif

            @if(!empty($success_stories->batch))
                <div class="mt-1"><b>{{$success_stories->batch}} Batch</b></div>
            @endif
        </div>
    </div>
</div>
@endforeach
 
    
</div> 
    
  
    
</div>



 
          
      </div> 
       
       
   </div>    
       
     
       
       
   
       
   </div>    
    </div>   
       
       
   </div>              
                 
    </div>     
           
             
           
           
        
           
           
             </div>
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section>
 @endif