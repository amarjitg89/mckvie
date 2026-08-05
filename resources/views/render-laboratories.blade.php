@if ($get_lab->isNotEmpty())    

<section class="package">
     
     <div class="mission_bg " >
         
         <div class="container">
             <div class="row m-0 justify-content-center">
                     
          <div class="col-lg-12 col-md-12 col-12 px-0">
               
          
              <div class="mainhome_title mb-sm-4 mb-3 text-white">Laboratories </div>
             
                
              
           </div>
           
          
           
           
        
           
           
             </div>
             
             
              <div class="row m-0" >
                  
               <div class="col-lg-12 col-md-12 col-12 px-sm-0 px-2">
                   
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="lab" data-count="{{$get_lab->count()}}">
    
   @foreach ($get_lab as $lab_det)
  
 <div class="item">
  
   <a href="{{asset('images/lab/'.$lab_det->lab_image)}}" data-fancybox="lab"> 
   <div class="image-container">
                    <img src="{{asset('images/lab/'.$lab_det->lab_image)}}" alt="">
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
    <div class="lab_name red">{{$lab_det->title}}</div>            
                
   </a> 

</div>
@endforeach

{{-- <div class="item">
  
   <a href="{{asset('images/lab/CSE Lab 2.webp')}}" data-fancybox="lab"> 
   <div class="image-container">
                    <img src="{{asset('images/lab/CSE Lab 2.webp')}}" alt="">
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
    <div class="lab_name red">CSE Lab 2</div>            
                
   </a> 

</div>


 <div class="item">
  
   <a href="{{asset('images/lab/CSE Lab 3.webp')}}" data-fancybox="lab"> 
   <div class="image-container">
                    <img src="{{asset('images/lab/CSE Lab 3.webp')}}" alt="">
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
    <div class="lab_name red">CSE Lab 3</div>            
                
   </a> 

</div>


<div class="item">
  
   <a href="{{asset('images/lab/CSE Lab 4.webp')}}" data-fancybox="lab"> 
   <div class="image-container">
                    <img src="{{asset('images/lab/CSE Lab 4.webp')}}" alt="">
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
    <div class="lab_name red">CSE Lab 4</div>            
                
   </a> 

</div> 

<div class="item">
  
   <a href="{{asset('images/lab/CSE Lab 5.webp')}}" data-fancybox="lab"> 
   <div class="image-container">
                    <img src="{{asset('images/lab/CSE Lab 5.webp')}}" alt="">
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
    <div class="lab_name red">CSE Lab 5</div>            
                
   </a> 

</div> 


<div class="item">
  
   <a href="{{asset('images/lab/CSE Lab 6.webp')}}" data-fancybox="lab"> 
   <div class="image-container">
                    <img src="{{asset('images/lab/CSE Lab 6.webp')}}" alt="">
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
    <div class="lab_name red">CSE Lab 6</div>            
                
   </a> 

</div>

<div class="item">
  
   <a href="{{asset('images/lab/CSE Lab 7.webp')}}" data-fancybox="lab"> 
   <div class="image-container">
                    <img src="{{asset('images/lab/CSE Lab 7.webp')}}" alt="">
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
    <div class="lab_name red">CSE Lab 7</div>            
                
   </a> 

</div> 


<div class="item">
  
   <a href="{{asset('images/lab/Intel Unnati Lab 2.webp')}}" data-fancybox="lab"> 
   <div class="image-container">
                    <img src="{{asset('images/lab/Intel Unnati Lab 2.webp')}}" alt="">
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
    <div class="lab_name red">Intel Unnati Lab</div>            
                
   </a> 

</div> 

<div class="item">
  
   <a href="{{asset('images/lab/Intel Unnati Lab.webp')}}" data-fancybox="lab"> 
   <div class="image-container">
                    <img src="{{asset('images/lab/Intel Unnati Lab.webp')}}" alt="">
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
    <div class="lab_name red">Intel Unnati Lab</div>            
                
   </a> 

</div>  --}}
    
</div>    
                   
                   
               </div>   
                  
            
                  
              </div>
             
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section>  
 @endif