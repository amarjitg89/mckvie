@if ($get_corporate->isNotEmpty())
   
<section class="package">
     
     <div class="mainbody_div mainbody_div2 " >
         
         <div class="container">
             <div class="row m-0 justify-content-center">
                     
          <div class="col-lg-12 col-md-12 col-12 px-0">
               
          
              <div class="mainhome_title mb-sm-4 mb-3 red">Corporate <span class="fw-normal">Tie-Ups</span></div>
             
                
              
           </div>
           
          
           
           
        
           
           
             </div>
             
             
              <div class="row m-0" >
                  
               <div class="col-lg-12 col-md-12 col-12 px-sm-0 px-2">
                   
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="doctors" data-count="{{ $get_corporate->count() }}">
    
   @foreach ($get_corporate as $corporate_list)
      
  
  
 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/'.$corporate_list->image_name)}}" alt="" class="w-100" ></div>

</div>

 @endforeach

 {{-- <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations2.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations3.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations4.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations5.jpg')}}" alt="" class="w-100" ></div>

</div>



 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations6.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations7.jpg')}}" alt="" class="w-100" ></div>

</div> 


 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations8.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations9.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations10.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations11.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations12.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations13.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations14.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations15.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations16.jpg')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="tieup_maindiv"><img src="{{asset('images/corporate-tieup/CSE-Collaborations17.jpg')}}" alt="" class="w-100" ></div>

</div> --}}


    
</div>    
                   
                   
               </div>   
                  
            
                  
              </div>
             
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section> 
 @endif