@if ($get_recruiter->isNotEmpty())
<section class="package">
     
     <div class="mission_bg " >
         
         <div class="container">
             <div class="row m-0 justify-content-center">
                     
          <div class="col-lg-12 col-md-12 col-12 px-0">
               
          
              <div class="mainhome_title mb-sm-4 mb-3 text-white">Our <span class="fw-normal">Recruiters</span></div>
             
                
              
           </div>
           
          
           
           
        
           
           
             </div>
             
             
              <div class="row m-0" >
                  
               <div class="col-lg-12 col-md-12 col-12 px-sm-0 px-2">
                   
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="recruiters" data-count="{{ $get_recruiter->count() }}">
    
   
  @foreach ($get_recruiter as $recruiter_list)
 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/'.$recruiter_list->image_name)}}" alt="" class="w-100" ></div>

</div>
@endforeach
 {{-- <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/cse-recruiters2.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/cse-recruiters3.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/cse-recruiters4.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/cse-recruiters5.jpg')}}" alt="" class="w-100" ></div>

</div>

  <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/cse-recruiters6.jpg')}}" alt="" class="w-100" ></div>

</div>


 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/cse-recruiters7.jpg')}}" alt="" class="w-100" ></div>

</div>


 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/cse-recruiters8.jpg')}}" alt="" class="w-100" ></div>

</div>


 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/cse-recruiters9.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/recruiters/cse-recruiters10.jpg')}}" alt="" class="w-100" ></div>

</div> --}}


    
</div>    
                   
                   
               </div>   
                  
            
                  
              </div>
             
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section> 
 @endif