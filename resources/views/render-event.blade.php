@if ($get_event->isNotEmpty())

<section class="package">
     
     <div class="mainbody_div mainbody_div2 lightblue1">
         
         <div class="container">
             
             
      <div class="row m-0">
        
           <div class="col-lg-12 col-md-12 col-12 px-0">
               
                
              <div class="mainhome_title text-sm-start text-center mb-sm-4 mb-3">
                  
               
                  
                   <span class="red">Latest <span class="fw-normal">Events</span></span></div>     
                
              
           </div> 
           
          
             </div>       
             
             
             
             
      <div class="row m-0 justify-content-start ">
          
        <div class="col-lg-12 col-md-12 col-12 ">
                   
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="excellence" data-count="{{$get_event->count()}}">
    
    
  @foreach ($get_event as $event_details)
      
  
<div class="item">
     <a href="{{url('/event/'.$event_details->event_slug)}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/event/'.$event_details->event_image)}}" alt="" class="object-fit-cover " ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="event_subheading lh-sm">{{$event_details->event_title}}</div></div>
       @if ($event_details->event_date!='0000-00-00')  
       <!--<div class="col-lg-12 p-0 mb-2"><div class="home_abo ut_txt lh-sm"><i class="fa-regular fa-calendar-days"></i> {{date('d-m-Y',strtotime($event_details->event_date))}}</div></div>-->
        @endif
       
       <div class="col-lg-12 p-0 "><div class="text-strat home_about_txt pb-2 service_text event_height ">{!!$event_details->event_description!!}</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>
@endforeach

{{-- <div class="item">
     <a href="{{url('/event')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/event/Rectangle 141.jpg')}}" alt="" class="object-fit-cover " ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="event_subheading lh-sm">Internal Hackathon for the Institute</div></div>
       
       <div class="col-lg-12 p-0 mb-2"><div class="home_about_txt lh-sm"><i class="fa-regular fa-calendar-days"></i> 6-02-2020</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 service_text event_height">As per the guidelines of SIH – 2020, internal Hackathon for the Institute was organized on 6th February, 2020. Total 07 teams (each team comprises of 06 team members) of different departments participated in the event, </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/event')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/event/Rectangle 84.jpg')}}" alt="" class="object-fit-cover " ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="event_subheading lh-sm">1 Day International Seminar</div></div>
       
       <div class="col-lg-12 p-0 mb-2"><div class="home_about_txt lh-sm"><i class="fa-regular fa-calendar-days"></i> 16-01-2020</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 service_text event_height">CSE Department has organized 1 day International Seminar which was held on 17/1/2020 at our Institute premises. Prof. Dariusz Plewczynski PhD and a Professor at University of Warsaw in Center of New Technologies</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/event')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/event/Rectangle 141.jpg')}}" alt="" class="object-fit-cover " ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="event_subheading lh-sm">Internal Hackathon for the Institute</div></div>
       
       <div class="col-lg-12 p-0 mb-2"><div class="home_about_txt lh-sm"><i class="fa-regular fa-calendar-days"></i> 6-02-2020</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 service_text event_height">As per the guidelines of SIH – 2020, internal Hackathon for the Institute was organized on 6th February, 2020. Total 07 teams (each team comprises of 06 team members) of different departments participated in the event, </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>     --}}
</div>    
                   
                   
               </div>   
         
             
        
                  
              </div>
              
              
          
             
             
         </div>
         
     </div>
     
     
 </section>
 @endif