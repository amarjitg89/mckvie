@extends('layout.master-template')

@section('title','Events - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 {{-- @include('layout.inc.inner-banner') --}}
 <section class="banner other_banner departmentbanner ">
  <div class="inside_desktop_banner_new">
      
  <div class="card border-0 rounded-0">

<picture>
      
        <source srcset="{{asset('images/banner/'.$banner_img_mob)}}" media="(max-width: 600px)">

      <source srcset="{{asset('images/banner/'.$banner_img)}}" media="(max-width: 2000px)">

        <img src="{{asset('images/banner/'.$banner_img)}}" alt="banner" class="img-fluid w-100" loading="lazy" width="1728" height="399">
        </picture>  


        
        <div class="card-img-overlay border-0 rounded-0 d-flex justify-content-center flex-column">
            <div class="container">
                <h1 class="text-white mainheading mb-2 fw-bold banner_font heading_font text-center text-uppercase">{{$get_event->event_title}}</h1>
                <p class="text-white subbannertext text-center lh-sm"><a href="{{url('/')}}" class="text-white">Home</a> /
                  {{$banner_subheading}}/ {{$get_event->event_title}}</p>
            </div>
        </div>
    </div>
      
      
      
  </div>
     
     
 </section>
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   <!--##########  Event Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
             <div class="row m-0 justify-content-start ">
          
          
          <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-sm-2 mb-0 px-0 mt-sm-0 mt-3">
              
            <div class="blue mainhome_title mb-1 text-start fw-normal"> <span class="red fw-bold">{{$get_event->event_title}}</span></div> 
            
            <div class="mainhome_title text-start mb-3 event_date fw-bold lh-sm"> @if ($get_event->event_date!='0000-00-00')<i class="ri-calendar-2-line red"></i>                
            {{date('jS F, Y',strtotime($get_event->event_date))}}  | @endif<i class="ri-map-pin-line red"></i>{{ !empty($get_event->event_location) ? $get_event->event_location : 'MCKV Institute of Engineering' }} </div>
              
          </div>
          
           
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-sm-0 mb-4 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify">
              {!!$get_event->event_description!!}
                      
                  </div> 
                  
              </div>
           
         
           
           
           
             </div>
             
             @if ($get_event_image->isNotEmpty())  
             
             <div class="row g-4 mt-sm-4 mt-0">
               @foreach ($get_event_image as $event_images)                   
                
              <div class="col-md-4 col-6">
               <a href="{{asset('images/event/'.$event_images->event_image)}}" data-fancybox="classroom"> 
   <div class="image-container">
                    <img src="{{asset('images/event/'.$event_images->event_image)}}" alt="">
                    <div class="hover-overlay">
                        <div class="magnify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                <line x1="11" y1="8" x2="11" y2="14"></line>
                                <line x1="8" y1="11" x2="14" y2="11"></line>
                            </svg>
                        </div>
                        
                    </div>
                </div>  
   </a>      
                  
              </div>
              @endforeach 
              
              {{-- <div class="col-md-4 col-6">
               <a href="{{asset('images/classroom/MON_3715-1536x864.webp')}}" data-fancybox="classroom"> 
   <div class="image-container">
                    <img src="{{asset('images/classroom/MON_3715-1536x864.webp')}}" alt="">
                    <div class="hover-overlay">
                        <div class="magnify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                <line x1="11" y1="8" x2="11" y2="14"></line>
                                <line x1="8" y1="11" x2="14" y2="11"></line>
                            </svg>
                        </div>
                        
                    </div>
                </div>  
   </a>      
                  
              </div>  
              
              
              
              <div class="col-md-4 col-6">
               <a href="{{asset('images/classroom/MON_3715-1536x864.webp')}}" data-fancybox="classroom"> 
   <div class="image-container">
                    <img src="{{asset('images/classroom/MON_3715-1536x864.webp')}}" alt="">
                    <div class="hover-overlay">
                        <div class="magnify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                <line x1="11" y1="8" x2="11" y2="14"></line>
                                <line x1="8" y1="11" x2="14" y2="11"></line>
                            </svg>
                        </div>
                        
                    </div>
                </div>  
   </a>      
                  
              </div>   --}}
                 
                 
             </div>
           
              @endif
             
           
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Event End ############# --> 
  
  
  



 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection