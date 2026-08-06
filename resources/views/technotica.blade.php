@extends('layout.master-template')

@section('title','Technical Events - MCKV Institute of Engineering')

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
                       
                       
                MCKVIE hosts numerous technical events annually both at the institution and department levels. These events provide students a platform to demonstrate the integration of their technical knowledge and skills into innovative ideas and corresponding prototype or business model development. It further leads to product development, intellectual property rights applications, and possible entrepreneurship. Some flagship events of MCKVIE are detailed below:</br></br>
       
                       
                       
                       
                       
                       
                       
                       
               <div class="blue mainhome_title mb-3 text-start fw-normal"> <span class="red fw-bold">Technotica</span></div>        
                       
            <div class=" position-relative" style="float:left; width:100%;">           
            <div id="technoticaContent" class="clamp-content">          
            
          Technotica is the annual in-house engineering & technology model development competition being conducted since 2004. The event is held annually. Student from all the departments of the MCKVIE form teams, develop a model prototype and participate in this competition. The primary goals of this competition are to benefit the students beyond the syllabus in terms of:</br></br>
          
          <ul>
              <li>Domain and cross-domain familiarity and skill enhancement</li>
               <li>Development of project and defending their work in front of panel of judges and visitors
</li>
                <li>Understanding and learning operations by studying through a device manual
</li>
                 <li>Encoding a software module to bridge with a hardware(driver) to make it functional
</li>
                  <li>Encouraging the zeal and enthusiasm of young minds to let them unleash their creative thoughts
</li>
                   <li>Working in a team as a member or leader</li>
              
          </ul></br>
          
          
After initial announcement of the event, the steps include, 1. Formation of student teams, 2. Submission of abstract by each team as a brief write-up of their Project Plan, 3. Presentation of proposal before the internal panel of judges for first level selection, 4. Final model development by selected teams, 5. Presentation of the completed models during final round in front of the external panel of judges. Models are evaluated on the basis of innovation, originality, practicability, understanding and presentation of work.  Apart from the first, second and third prizes, two more teams get the awards of special mention in the competition. </br></br>



As a follow-up of this competition, the awardees are encouraged to participate in contests organized outside the Institute. Every year winners of Technotica participate in Eastern India Science and Technology fair in BITM Kolkata and different other district level Science competitions. It’s an honour to mention here that, students regularly get rewarded in these events.  </br></br>

</div>
</div>

 <div class="text-start mt-3 pt-1">
          <button id="readMoreBtn" class="btn-read-more" onclick="toggleReadMore()">
            <span id="btnText">Read More</span>
            <i class="bi bi-chevron-down ms-1" id="btnIcon"></i>
          </button>
        </div>


                   
                  </div> 
                  
              </div>
           
      
           
           
           
             </div>  
             
             
<div class="row g-4 mt-sm-4 mt-0">
         
         
         <div class="col-12"> <div class="blue mainhome_title mb-0 text-start fw-normal">Few Photographs of <span class="red fw-bold">Technotica</span></div>  </div>
                 
              <div class="col-md-4 col-6">
               <a href="{{asset('images/technotica/20260330_123443.webp')}}" data-fancybox="classroom"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/20260330_123443.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/IMG-20260408.webp')}}" data-fancybox="classroom"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/IMG-20260408.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/20250305_105643.webp')}}" data-fancybox="classroom"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/20250305_105643.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/20250305_144508.webp')}}" data-fancybox="classroom"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/20250305_144508.webp')}}" alt="">
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
                 
                 
             </div>
             
             
             
 <div class="home_about_txt text-justify text-md-justify mt-5">
     
     
 <div class="blue mainhome_title mb-3 text-start fw-normal"> <span class="red fw-bold">Pragati</span></div>     
     
 The annual Tech Fest of MCKVIE PRAGATI events provided a vibrant platform for students to showcase their knowledge, creativity, and technical skills. It includes <b>Innovative Wing:</b> Innovative Idea Contest, Innovative Model Competition, and Technical Poster Presentation; from <b>Coding and Engineering Design:</b> Code Fiesta, AI Pragati, Design Contest with CATIA, and Circuit Design; from the <b>Quiz and Mathematical Aptitude Wing:</b> Quizomania (General & Technical Quiz), Enigma (Treasure Hunt), and Math Mania; <b>Gaming Events:</b> E-Football and NFS (Most Wanted); <b>Robotics Event:</b> Chase The Maze; <b>Business Strategy Event:</b> Gen-Z Bizz; and the <b>Fun Event:</b> Reelovation. These A panel of esteemed judges evaluated the competitions across all events. Alonwith Tech Talk sessions by external experts on emerging technologies and its real-world applications are an added attraction for participants. The students from MCKVIE and several degree and diploma colleges across the state participate in the event. 
    
     
  <div class="row g-4 mt-sm-4 mt-0">
         
         
         <div class="col-12"> <div class="blue mainhome_title mb-0 text-start fw-normal">Few Photographs of <span class="red fw-bold">Pragati</span></div>  </div>
                 
              <div class="col-md-4 col-6">
               <a href="{{asset('images/technotica/pragati1.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati1.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati2.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati2.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati3.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati3.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati4.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati4.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati5.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati5.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati6.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati6.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati7.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati7.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati8.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati8.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati9.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati9.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati10.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati10.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati11.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati11.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/pragati12.webp')}}" data-fancybox="group1"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/pragati12.webp')}}" alt="">
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
              
                 
                 
             </div>   
     
 </div>
 
 
 
 
 
 
 <div class="home_about_txt text-justify text-md-justify mt-5">
     
     
 <div class="blue mainhome_title mb-3 text-start fw-normal"> <span class="red fw-bold">Nurturing Innovation</span></div>     
     
 An annual event to showcase the innovative ideas of the students across a wide spectrum of events healthcare, safety, mobility, energy, agriculture, and community development. The event also extends necessary mentoring by the experts to refine the initial ideas presented by the students. Further, continuous mentoring by the faculty supervisors to the selected student teams translate the projects into tangible outcomes through patents, publications, and conference presentations, ensuring long-term academic and societal impact. 
    
     
  <div class="row g-4 mt-sm-4 mt-0">
         
         
         <div class="col-12"> <div class="blue mainhome_title mb-0 text-start fw-normal">Few Photographs of <span class="red fw-bold">Nurturing Innovation</span></div>  </div>
                 
              <div class="col-md-4 col-6">
               <a href="{{asset('images/technotica/Nurturing-Innovations1.webp')}}" data-fancybox="group2"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Nurturing-Innovations1.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Nurturing-Innovations2.webp')}}" data-fancybox="group2"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Nurturing-Innovations2.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Nurturing-Innovations3.webp')}}" data-fancybox="group2"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Nurturing-Innovations3.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Nurturing-Innovations4.webp')}}" data-fancybox="group2"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Nurturing-Innovations4.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Nurturing-Innovations5.webp')}}" data-fancybox="group2"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Nurturing-Innovations5.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Nurturing-Innovations6.webp')}}" data-fancybox="group2"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Nurturing-Innovations6.webp')}}" alt="">
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
              
              
                 
                 
             </div>   
     
 </div>
 
 
 
 
 <div class="home_about_txt text-justify text-md-justify mt-5">
                       
 <div class="blue mainhome_title mb-3 text-start fw-normal"> <span class="red fw-bold">Prayas</span></div>        
                       
            <div class=" position-relative" style="float:left; width:100%;">           
            <div>          
            
          The Department of Electronics &amp; Communications Engineering, MCKV Institute of Engineering organizes Students’ Article Competition &quot;PRAYAS” every year in offline mode at MCKVIE, under the sponsorship of IET (UK) Kolkata Local Network and MCKVIE.</br></br>
          
          
          
          
Initiated in the year 2017, PRAYAS is the department’s small endeavour to foster research orientation amongst the young students. It aims at enhancing their independence to learn, think and synthesize in order to contribute research ideas and innovations in traditional and emerging areas of Electronics and Communication Engineering. In this competition students get an opportunity to present their technical articles amidst other students from different colleges and technical experts in the field. This is a forum for technical discussion and to emerge with improved solutions. Technical articles in various domains of Electronics and Communication Engineering and allied fields are accepted for the event. Articles are judged through student presentations. Certificates and prizes of merit are awarded for Best Articles and also for articles with best Similarity Index based on plagiarism check values and Editor’s Choice on the basis of best written and formatted articles. Certificates of participation are awarded to all participants. Plagiarism check of submitted papers is done for quality assurance and proceedings of the competition is published in the form of a book with ISBN.</br></br>



The participants always show great enthusiasm and express their hope to participate in such events in years to come.



<div class="row g-4 mt-sm-4 mt-0">
    
  <div class="col-12"> <div class="blue mainhome_title mb-0 text-start fw-normal">Few Photographs of <span class="red fw-bold">Prayas</span></div>  </div>
                 
              <div class="col-md-4 col-6">
               <a href="{{asset('images/technotica/Prayas-26_1.webp')}}" data-fancybox="group3"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Prayas-26_1.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Prayas-26_2.webp')}}" data-fancybox="group3"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Prayas-26_2.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Prayas-26_4.webp')}}" data-fancybox="group3"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Prayas-26_4.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Prayas-25_1.webp')}}" data-fancybox="group3"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Prayas-25_1.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Prayas-25_2.webp')}}" data-fancybox="group3"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Prayas-25_2.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Prayas-25_5.webp')}}" data-fancybox="group3"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Prayas-25_5.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Pryas_2024-04-28_1.webp')}}" data-fancybox="group3"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Pryas_2024-04-28_1.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Prayas_2024-04-28_2.webp')}}" data-fancybox="group3"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Prayas_2024-04-28_2.webp')}}" alt="">
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
               <a href="{{asset('images/technotica/Prayas_2024-04-28_4.webp')}}" data-fancybox="group3"> 
   <div class="image-container">
                    <img src="{{asset('images/technotica/Prayas_2024-04-28_4.webp')}}" alt="">
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
    
    
    </div>





</div>
</div>

 


                   
                  </div>
 
 
<div class="home_about_txt text-justify text-md-justify mt-5">
                       
 <div class="blue mainhome_title mb-3 text-start fw-normal"> <span class="red fw-bold">Internal Hackathon</span></div>  
 
 <ul>
     
     <li><a href="{{asset('pdf/Smart India Hackathon Report 2024.pdf')}}" target="_blank">Smart India Hackathon Report 2024</a></li>
     
     <li><a href="{{asset('pdf/SMART INDIA HACKATHON Report 2023.pdf')}}" target="_blank">Smart India Hackathon Report 2023</a></li>
 </ul>


</div>
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Course Overview End ############# --> 
  






 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection