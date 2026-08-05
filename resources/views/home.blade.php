@extends('layout.master-template')

@section('title','Home - MCKV Institute of Engineering')


@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 <section>
    <div class="container-fluid p-0">
    <div class="desktop_banner">
        
        
        <main>
        
        <!--MDB Carousels-->
      
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="hover">
  <div class="carousel-inner position-relative">
 
  <div class="banner_top">
    
  <div class="container">
  <div class="row justify-content-end">
   <div class="col-sm-4 p-0 me-3">
    <div class="banner_form_bg mt-xl-5">
        
        <form action="{{url('/ins_enquiry_form')}}" method="POST">
            @csrf
    <div class="get_in_touch_heading mb-2 fw-bold text-white">Enquire Now</div>    
     <div class="get_formdiv mb-sm-2">
        <input name="enquirer_name" id="uname" @error('enquirer_name')style="border: 2px solid red;"@enderror type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Name*">
        {{-- @error('enquirer_name')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
    </div>   
    <div class="get_formdiv mb-sm-2 ">
        <input name="enquirer_contact" @error('enquirer_contact')style="border: 2px solid red;"@enderror id="uumob" type="tel" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Mobile*"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="10"  pattern="[1-9]{1}[0-9]{9}">
    {{-- @error('enquirer_contact')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
    </div>
    <div class="get_formdiv mb-sm-2">
        <input name="enquirer_email" @error('enquirer_email')style="border: 2px solid red;"@enderror id="umail" type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Email Id*" >
    {{-- @error('enquirer_email')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
    </div>
    <div class="get_formdiv mb-sm-2">
        <select class="form-select doctor_search_select rounded-0 dept_div" @error('department_slug')style="border: 2px solid red;"@enderror aria-label="Default select example" name="department_slug" id="department_slug">
  <option value="">Department Interested in*</option>
  @foreach ($department as $dept_det)
     <option value="{{$dept_det->department_slug}}">{{$dept_det->department_name}}</option> 
  @endforeach
</select>
{{-- @error('department_slug')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
</div>

    <div class="get_formdiv mb-sm-2" id="course_div">
        <select class="form-select doctor_search_select rounded-0" @error('course_slug')style="border: 2px solid red;"@enderror aria-label="Default select example" name="course_slug">
  <option value="">Courses Interested in*</option>
  
</select>
</div>
{{-- @error('course_slug')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
<div class="get_formdiv "><input name="find" type="submit" value="Submit" class="btn1 readmore_btnshow" ></div>

        </form>
    </div>   
   </div>   
      
      
  </div>    
      
      
  </div>    
 
      
      
  </div>
	
	
   <div class="carousel-item active">
     <img src="{{asset('images/banner/banner1.jpg?v=2')}}" class="d-block w-100" alt="...">
	
    </div>
    
  
 <div class="carousel-item ">
    <img src="{{asset('images/banner/banner2-new.jpg?v=2')}}" class="d-block w-100" alt="...">
	
    </div>

  
  
  
  
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            

          
      
    </main>
        
        
    </div>    
        
       <div class="mobile_banner">
           
           
     <main>
        
       
      
<div id="carouselExampleFade1" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
  <div class="carousel-inner">
 
    <div class="carousel-item active">
      <img src="{{asset('images/banner/banner1-mob.jpg')}}" class="d-block w-100" alt="...">
		
		
    </div>
	
	
<div class="carousel-item ">
      <img src="{{asset('images/banner/banner2-mob-new.jpg')}}" class="d-block w-100" alt="...">
		
	
    </div>
    
    


    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            

           
      
    </main>      
           
           
           
       </div>     
        </div>    
     
     
 </section>
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
   <!--##########  Notice Start ############# --> 
@if ($Notice->isNotEmpty())  
 <section>

 <div class="mainbody_div py-2 blue_body" >

 <div class="container">

  <div class="row m-0 p-0">

      <div class="col-xl-1 col-lg-1 col-sm-2 col-3 px-0"><div class="text-start red fw-bold" >Notice :</div></div>

      

       <div class="col-xl-11 col-lg-11 col-sm-10 col-9 ps-0"><div class="text-start text-white" >
          <marquee scrollamount="3">

			{{-- <a href="" class="text-white">	Report of UTOPIA 2k24</a>&nbsp;  |&nbsp; <a href="" class="text-white">Report on Handwritten Document Analysis</a> &nbsp;  |&nbsp; <a href="" class="text-white">  The Art of Living @MCKV</a> &nbsp;  |&nbsp;<a href="" class="text-white">  Google Developer Group on Campus @MCKVIE</a> --}}
			
            @foreach ($Notice as $notice_det)
              <a href="" class="text-white">	{{$notice_det->notice}}</a>
              @if (!$loop->last)
        &nbsp;|&nbsp;
    @endif              
            
            @endforeach
            

		

</marquee>





</div></div>

  </div>   

     

     

     

 </div>    

</div>     

 

 </section> 
 @endif 
  
 <!--##########  Notice End ############# -->  
  
  
  
  
  
  <!--##########  Mobile Enquiry Start ############# -->   
  <section>
      <div class="container ">
      <div class="row">
          <div class="col-12">
   <div class="banner_form_bg mt-3 d-sm-none d-block">
      <form action="{{url('/ins_enquiry_form')}}" method="POST">
            @csrf  
    <div class="get_in_touch_heading mb-2 fw-bold text-white">Enquire Now</div>    
     <div class="get_formdiv mb-2">
        <input name="enquirer_name" id="enquirer_name" @error('enquirer_name')style="border: 2px solid red;"@enderror type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Name*">
    {{-- @error('enquirer_name')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
    </div>   
    <div class="get_formdiv mb-2 ">
        <input name="enquirer_contact" @error('enquirer_contact')style="border: 2px solid red;"@enderror id="enquirer_contact" type="tel" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Mobile*"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="10" >
    {{-- @error('enquirer_contact')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
    </div>
    <div class="get_formdiv mb-2">
        <input name="enquirer_email" @error('enquirer_email')style="border: 2px solid red;"@enderror id="enquirer_email" type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Email Id*">
    {{-- @error('enquirer_email')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
    </div>
    <div class="get_formdiv mb-2">
        <select class="form-select doctor_search_select rounded-0 dept_div_mob" @error('department_slug')style="border: 2px solid red;"@enderror aria-label="Default select example" name="department_slug" id="department_slug_mob">
  <option value="">Department Interested in*</option>
   @foreach ($department as $dept_det)
     <option value="{{$dept_det->department_slug}}">{{$dept_det->department_name}}</option> 
  @endforeach
</select>
{{-- @error('department_slug')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}

</div>

    <div class="get_formdiv mb-2" id="course_div_mob">
        <select class="form-select doctor_search_select rounded-0" @error('course_slug')style="border: 2px solid red;"@enderror aria-label="Default select example" name="course_slug">
  <option value="">Courses Interested in*</option>
  
</select>
{{-- @error('course_slug')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
</div>
<div class="get_formdiv "><input name="find" type="submit" value="Submit" class="btn1 readmore_btnshow" ></div>

</form>
    </div> 
    </div>
  </div>
  </div>
  </section>
  
  
   <!--##########  Mobile Enquiry End ############# -->  
  

 <!--##########  Aboutus & Announcement Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
             <div class="row m-0 justify-content-start">
          
           
              <div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-sm-0 mb-4 ps-sm-0 pe-sm-3 ps-0 pe-0 about_bg">
                  
               <div class="home_aboutdiv">
               <div class="row m-0 p-0">
                   <div class="col-xl-4 col-lg-3 col-sm-4 col-12 p-0"> <img src="{{asset('images/welcome 1.webp')}}" class="eventimg_css" alt="..."></div>
               <div class="col-xl-8 col-lg-9 col-sm-8 col-12 p-3">
                   
                 <div class="subheading text-start fw-bold">About</div>  
                  <div class="red mainhome_title mb-3 text-start">MCKV Institute of Engineering</div>
                  <div class="home_about_txt text-justify">
               MCKV Institute of Engineering (MCKVIE) is one of the premier engineering colleges in West Bengal. Established in 1999, the institution has been creating the right opportunities and ambience for educating young minds for over two decades, spreading the spirit of technological learning and its application.



                      
                  </div>
                  
              <a href="{{url('/about')}}"><div class="readmore_maindiv_new"><div class="readmore_btn w-100">Read More</div></div>  </a>    
                  
                  
                  
               </div>
               
               
               
               </div>    
                   
                   
                   
               </div>   
                  
                  
                  
                   
                           
               
                  
              </div>
           
           <div class="col-xl-4 col-lg-4 col-md-4 col-12 ps-sm-4 pe-0 ps-0">
               
         <div class="app-wrapper">
        <header class="header">
            <div>
                <h2 class="text-white text-center">Announcement</h2>
                
            </div>
            
        </header>

        <div class="marquee-container">
            <div class="marquee-content">
                <div class="marquee-group">
                    <div class="marquee-item">
                       
                        <div class="item-info">
                            <a href="" class="text-dark"><div class="item-title">Notice for Exam form fill-up (Regular and Backlog) of B.Tech. 3rd semester, AY 2025-26</div></a>
                            
                        </div>
                        
                    </div>
                    
                     <div class="marquee-item">
                       
                        <div class="item-info">
                            <a href="" class="text-dark"><div class="item-title">Class test (CA4) schedule for B.Tech., M.Tech., BBA 1st Sem and MBA 1st and 3rd sem and Class Test (CA2) schedule for B.Voc. 1st sem of AY 2025-26</div></a>
                            
                        </div>
                        
                    </div>
                    
                     <div class="marquee-item">
                       
                        <div class="item-info">
                            <a href="" class="text-dark"><div class="item-title">Practical / Sessional exam schedule of 1st and 3rd sem exams, AY 2025-26 (Phase.II)</div></a>
                            
                        </div>
                        
                    </div>
                    
                     <div class="marquee-item">
                       
                        <div class="item-info">
                            <a href="" class="text-dark"><div class="item-title">Notice for Exam form fill-up (Regular and Backlog) of B.Tech. 3rd semester, AY 2025-26</div></a>
                            
                        </div>
                        
                    </div>
                   
                </div>

                <!-- The second group is required for the 'seamless' transition. -->
               <div class="marquee-group">
                    <div class="marquee-item">
                       
                        <div class="item-info">
                            <a href="" class="text-dark"><div class="item-title">Notice for Exam form fill-up (Regular and Backlog) of B.Tech. 3rd semester, AY 2025-26</div></a>
                            
                        </div>
                        
                    </div>
                    
                     <div class="marquee-item">
                       
                        <div class="item-info">
                            <a href="" class="text-dark"><div class="item-title">Class test (CA4) schedule for B.Tech., M.Tech., BBA 1st Sem and MBA 1st and 3rd sem and Class Test (CA2) schedule for B.Voc. 1st sem of AY 2025-26</div></a>
                            
                        </div>
                        
                    </div>
                    
                     <div class="marquee-item">
                       
                        <div class="item-info">
                            <a href="" class="text-dark"><div class="item-title">Practical / Sessional exam schedule of 1st and 3rd sem exams, AY 2025-26 (Phase.II)</div></a>
                            
                        </div>
                        
                    </div>
                    
                     <div class="marquee-item">
                       
                        <div class="item-info">
                            <a href="" class="text-dark"><div class="item-title">Notice for Exam form fill-up (Regular and Backlog) of B.Tech. 3rd semester, AY 2025-26</div></a>
                            
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
 
  <!--##########  Aboutus & Announcement End ############# --> 
  
  
  
  
 <!--##########  Programmes Offered Start ############# -->   
  
  
 <section class="package">
     
     <div class="mainbody_div mainbody_div2 bgcolor1" >
         
         <div class="container">
             <div class="row m-0  justify-content-center">
                 
                 
   
                 
                 
           <div class="col-lg-12 col-md-12 col-12">
               
                
              <div class="mainhome_title text-center mb-2">Programmes Offered at
              <span class="mobile-break"></br></span><span class="red">MCKV Institute of Engineering</span></div>     
                
              
           </div> 
           
           <div class="col-xl-7 col-lg-10 col-md-10 col-12">   
           <div class="home_about_txt text-center mb-3">MCKVIE offers the many benefits of a top engineering college, including highly qualified faculty,rigorous academic programmes and superior infrastructure.</div>
           </div>
        
           
           
             </div>
             
             
              <div class="row m-0 mt-4" >
                  
               <div class="col-lg-12 col-md-12 col-12 ">
                   
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="excellence">
    
    
  

<div class="item">
     <a href="{{url('/course/btech-computer-science-engineering')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/CSE-course.webp')}}" alt="" class="object-fit-cover " ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm">B.Tech Computer Science and Engineering</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start">The Computer Science and Engineering program provides a strong foundation in core computing principles while progressively introducing students to advanced and emerging technologies.</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>


<div class="item">
     <a href="{{url('/course/btech-computer-science-engineering-data-science')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/data-science.jpg')}}" alt="" class="object-fit-cover" ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm">B.Tech Computer Science and Engineering (Data Science)</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start">The Computer Science and Engineering (Data Science) program combines strong foundations in computing with specialized knowledge in Data Science, analytics, and intelligent systems. </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/course/btech-computer-science-engineering-ai')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/ai.jpg')}}" alt="" class="object-fit-cover" ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm ">B.Tech in Computer Science and Engineering (Artificial Intelligence & Machine Learning)</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start"> The Computer Science and Engineering (Artificial Intelligence & Machine Learning) program provides strong foundations in computing along with specialized knowledge in intelligent systems and data-driven technologies. </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/course/automobile-engineering')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/automobile-course-new1.webp')}}" alt="" class="object-fit-cover" ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm ">Automobile Engineering</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start">Automobile Engineering is a dynamic and fast-evolving field focused on product design, functionality, and integrated technologies. The program at MCKV Institute of Engineering offers an industry-oriented curriculum </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/course/btech-electronics-communication-engineering')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/btech-communication.webp')}}" alt="" class="object-fit-cover" ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm ">B.Tech in Electronics and Communications Engineering</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start">Electronics & Communication Engineering Department is one of the oldest and premier departments of MCKV Institute of Engineering since the inception (1999). </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/course/electrical-engineering')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/electrical-course.webp')}}" alt="" class="object-fit-cover" ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm ">B.Tech in Electrical Engineering</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start">Since its establishment, the Electrical Engineering Department has consistently contributed to enhancing academic excellence while simultaneously strengthening the infrastructure and facilities available to students.  </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/course/mechanical-engineering')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/mechanical-course.webp')}}" alt="" class="object-fit-cover" ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm ">B.Tech in Mechanical Engineering</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start">We were ready for the Mechanical Engineering course with well equipped laboratories and workshops. The department is committed to the well being and all round development of its students by providing a stimulating environment  </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/course/information-technology')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/it-course.webp')}}" alt="" class="object-fit-cover" ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm ">Information Technology</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start">Information TechnologyInformation Technology as a field of study has been playing a very important part of our lives today. While one might think of the typical IT worker employed in a major software company as a software developer, </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>


<div class="item">
     <a href="{{url('/course/mba')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/mba_course_new.webp')}}" alt="" class="object-fit-cover" ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm ">2-year Full-Time Master of Business Administration (MBA) Degree Programme</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start">MCKV Institute of Engineering offers a 2-year Full-Time Master of Business Administration (MBA) degree programme. It combines both core and specialization courses in the areas of (i) Marketing Management (major & minor specializations), </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/course/bba')}}" class="text-decoration-none  text-dark "> <div class="package_maindiv "> <div class="department_img position-relative">
	 
	 
         
         <img src="{{asset('images/course/bba-course-new.webp')}}" alt="" class="object-fit-cover" ></div>
     
     <div class="row m-0 p-3">
         
           
            
       
       <div class="col-lg-12 p-0 mb-1"><div class="service_subheading lh-sm ">4-year Bachelor of Business Administration (BBA) Degree Programme</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt pb-2 course_home_height text-start">MCKV Institute of Engineering offers Four-year Bachelor of Business Administration (BBA) degree programme approved by All India Council for Technical Education (AICTE) in alignment with National Education Policy (NEP), 2020. </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="readmore_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

    
</div>    
                   
                   
               </div>   
                  
            
                  
              </div>
             
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section>  
  
  
  
  
   <!--##########  Programmes Offered End ############# --> 
  
  
  
  
  
  
 
 <section>
     
     <div class="mainbody_div py-0 ">
         
         <div class="container-fluid p-0 m-0">
             <div class="row m-0 align-items-center" id="counter">
                 
                 
   <div class="col-lg-12 col-md-12 col-12  p-0">
   <div class="counter_bg">
      <div class="container"> 
   <div class="row m-0 p-0  justify-content-center">
       
   <div class="col-xl-12 col-lg-12 col-sm-12 col-12 ">
       
      <div class="row m-0">
          <div class="col-12">
              <div class="mainhome_title text-center mb-4 text-white">MCKV Institute of Engineering by the Numbers</div>
          </div>
          
     

<div class="col-xl-3 col-lg-3 col-sm-3 col-6 mb-sm-0 mb-3">
    <div class="row m-0 p-0 align-items-center">
        <div class="col-xl-4 col-lg-5 col-sm-4 col-6 ps-0"> <img src="{{asset('images/counter1.png')}}" alt="" class="w-100" ></div>
        <div class="col-xl-8 col-lg-7 col-sm-8 col-6 px-0">
            
         <div class="counter_maindiv">
              <div class="countdown_number"> <span class="counter count" data-count="2105"> 0</span>+</div>

<div class="coundown_txt lh-sm" >Total No of Students</div>   
                 
             </div>   
            
            
        </div>
        
    </div>
    
  
    
</div>

<div class="col-xl-3 col-lg-3 col-sm-3 col-6 mb-sm-0 mb-3">
    <div class="row m-0 p-0 align-items-center">
        <div class="col-xl-4 col-lg-5 col-sm-4 col-6 ps-0"> <img src="{{asset('images/counter2.png')}}" alt="" class="w-100" ></div>
        <div class="col-xl-8 col-lg-7 col-sm-8 col-6 px-0">
            
         <div class="counter_maindiv">
              <div class="countdown_number"> <span class="counter count" data-count="4112"> 0</span>+</div>

<div class="coundown_txt lh-sm" >Total No of Alumni</div>   
                 
             </div>   
            
            
        </div>
        
    </div>
    
 
    
</div>

<div class="col-xl-3 col-lg-3 col-sm-3 col-6 mb-sm-0 mb-3">
    <div class="row m-0 p-0 align-items-center">
        <div class="col-xl-4 col-lg-5 col-sm-4 col-6 ps-0"> <img src="{{asset('images/counter3.png')}}" alt="" class="w-100" ></div>
        <div class="col-xl-8 col-lg-7 col-sm-8 col-6 px-0">
            
         <div class="counter_maindiv">
              <div class="countdown_number"> <span class="counter count" data-count="300"> 0</span>+</div>

<div class="coundown_txt lh-sm" >Total No of Faculty</div>   
                 
             </div>   
            
            
        </div>
        
    </div>
    

    
</div>

<div class="col-xl-3 col-lg-3 col-sm-3 col-6 mb-sm-0 mb-3">
    <div class="row m-0 p-0 align-items-center">
        <div class="col-xl-4 col-lg-5 col-sm-4 col-6 ps-0"> <img src="{{asset('images/counter4.png')}}" alt="" class="w-100" ></div>
        <div class="col-xl-8 col-lg-7 col-sm-8 col-6 px-0">
            
         <div class="counter_maindiv">
              <div class="countdown_number"> <span class="counter count" data-count="83000"> 0</span>+</div>

<div class="coundown_txt lh-sm" >Total Books & Journals</div>   
                 
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
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section> 
 
 
 
 
 
 
  
 
 <section class="package">
     
     <div class="mainbody_div mainbody_div2 bgcolor1" >
         
         <div class="container">
             <div class="row m-0 justify-content-center">
                 
                 
   
                 
                 
          <div class="col-lg-12 col-md-12 col-12">
               
                
              <div class="mainhome_title text-center mb-2">Approval, Affiliation, <span class="red">Accreditations </span></div>     
                
              
           </div>
           
          
           
           
        
           
           
             </div>
             
             
              <div class="row m-0 mt-4" >
                  
               <div class="col-lg-12 col-md-12 col-12 px-sm-0 px-2">
                   
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="doctors">
    
   
  
 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/naac-a.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/1200px-maulana_abul_kalam_azad_university_of_technology_logo_svg_1.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/all_india_council_for_technical_education_logo.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/ishrae-logo.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/rotaract_logo.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/csi_logo.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/iei_logo.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/nba.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/ietuk_logo.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/sae_logo.png')}}" alt="" class="w-100" ></div>

</div>
    
</div>    
                   
                   
               </div>   
                  
            
                  
              </div>
             
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section> 
 

  
 <section>
     
     <div class="mainbody_div red_body">
         
         <div class="container">
            
             
              <div class="row m-0" >
                  
               <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-3 ps-sm-0 pe-sm-3 ps-0 pe-0">
                   
  <img src="{{asset('images/alahiri.559x0-is.png')}}" alt="" class="w-100 prinsiple">
                   
                   
               </div>   
                  
             <div class="col-lg-8 col-md-8 col-12 8 px-sm-3 px-0">
             <div class="col-12">
              <div class="mainhome_title text-start mb-2 text-white">Message from the Principal</div>
              <div class="mainhome_title text-start mb-3 text-white fs-6 fw-normal">Prof. (Dr.) Abhijit Lahiri</div>
              
              <div class="home_about_txt text-justify text-white">
                From the time immemorial ‘the wheel of fire’ at the centre of our being has been turning impersonally and inflaming our otherwise indolent spirit and bursting forth into creativity. The wheel and the fire are the greatest technological discovery of Human being which is important and have relevance even today. Wheel to transmit motion from one part to another in Engineering and fire to captivate energy, without energy nothing works.</br></br>
                
                The continuous up gradation of facilities at MCKVIE, coupled with highly qualified and experienced faculty, has brought the Institute to the forefront in the educational scenario in the State of West Bengal.

                      
                  </div>
                  
            <a href="{{url('/principal-address')}}"><div class="readmore_maindiv_new"><div class="readmore_btn_prin w-100">Read More</div></div>  </a>      
                  
                  
                  
          </div>      
  
                   
                   
               </div>  
               
               
                  
              </div>
             
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section>
 
 
 <section class="highlights ">
     
     <div class="mainbody_div mainbody_div2 " >
         
         <div class="container">
             <div class="row m-0  justify-content-center">
                 
                 
   
                 
                 
           <div class="col-lg-12 col-md-12 col-12 px-0">
               
                
             <div class="mainhome_title text-center mb-2">Highlights of <span class="mobile-break"></br></span><span class="red">MCKV Institute of Engineering</span></div>     
                
              
           </div> 
           
           <div class="col-xl-8 col-lg-10 col-md-10 col-12 px-0">   
           <div class="home_about_txt text-center mb-3">The Institute has been accredited by NAAC with an ‘A’ Grade, and it is an Autonomous Institute affiliated to MAKAUT, WB and approved by AICTE. It offers NBA accredited programmes in the field of Engineering.</div>
           </div>
        
           
           
             </div>
             
             
              <div class="row m-0 mt-4" >
                  
               <div class="col-lg-12 col-md-12 col-12 ">
                   
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="highlights">
    
    
  

<div class="item">
     <a href="{{url('/naac')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/03m.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">NAAC GRADE A</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">MCKV Institute of Engineering, one of the leading engineering colleges in West Bengal is an A Grade NAAC Accredited institute</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/nba-accreditations')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/04m.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">NBA ACCREDITATION</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">MCKV Institute of Engineering offers NBA Accredited engineering programmes to ensure that the students get the latest and best academic insights that will help them to pursue industry</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/external-collaborations')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/01m.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">PRESTIGIOUS COLLABORATIONS</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">Success never comes in isolation. Especially in the twenty-first century, if any educational institution wants to become truly accomplished, </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/placements')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/05m.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">CONSISTENT PLACEMENT RECORD</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">The Training and Placement Cell at MCKVIE actively works towards helping the students in their Training and Placements. </div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>
<div class="item">
     <a href="{{url('/student-chapters')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/02m.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">STUDENT CHAPTERS</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">The dynamic engineering students of MCKV Institute of Engineering engage with different formats of national and international institutions and organizations</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>


<div class="item">
     <a href="{{url('/no-ragging')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/06m.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">NO RAGGING</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">The Institute has a ragging-free campus.</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/nptel-swayam-local-chapter')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/nptel-swayam-logo-1.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">NPTEL-SWAYAM LOCAL CHAPTER</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">MCKVIE has been functioning as Local Chapter since MAY 2016 facilitating the students to pursue courses accepted nationwide.</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/green-campus-clean-campus')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/GREENSC-1.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">GREEN-CAMPUS-CLEAN-CAMPUS</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">MCKVIE shifted to emerge as a Green campus since 2017 with a number of initiatives undertaken.</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div> 

<div class="item">
     <a href="{{url('/startup-club')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/Asset-1-1.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">STARTUP CLUB</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">MCKVIE is encouraging its young enthusiastic minds to launch their career as entrepreneur.</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div> 


<div class="item">
     <a href="{{url('/spic-macay-heritage-club')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/LOGO_HeritageClub.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto ">HERITAGE CLUB OF MCKVIE</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">As per the AICTE Guideline, MCKV Institute of Engineering, Liluah, Howrah is formally associated with SPICMACAY West Bengal Chapter (SMWB)</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div>

<div class="item">
     <a href="{{url('/iic')}}" class="text-decoration-none text-dark "> <div class="package_maindiv blue_body"> 
     
     <div class="row m-0 p-3 justify-content-start">
         
       <div class="col-lg-12 p-0 mb-2"><div class="highlight_logodiv"><img src="{{asset('images/Institutions-Innovation-Council-IIC.png')}}" alt="" class="w-100"></div></div>    
            
       
       <div class="col-lg-12 p-0 mb-2"><div class="haighlight_subheading lh-sm text-white h-auto text-uppercase">Institution’s Innovation Council (IIC)</div></div>
       
       <div class="col-lg-12 p-0 "><div class="home_about_txt lh-base pb-2 heighlight_text text-white text-start">Institution’s Innovation Council (IIC) is an initiative of the Ministry of Education’s Innovation Cell (MIC) for fostering the culture of innovation amongst higher education Institutes.</div></div>
       
      
       
       
      <div class="col-lg-12 p-0">
          <div class="row m-0 align-items-center">
          
              <div class="col-lg-6 col-6 px-0"><div class="highlight_btn mt-sm-2 mt-2 w-100">Read More</div></div>
          </div>
            </div>
       
       
       </div></div> </a>
</div> 

</div>    
                   
                   
               </div>   
                  
            
                  
              </div>
             
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section>  
 
 
 
 

 <section >
     
     <div class="mainbody_div mainbody_div2 pt-0" >
         
         <div class="container">
             <div class="row m-0  justify-content-center">
                 
                 
   
                 
                 
           <div class="col-lg-12 col-md-12 col-12 px-0">
               
                
              <div class="mainhome_title text-center mb-2">Life @ <span class="red">MCKVIE </span></div>     
                
              
           </div> 
           
           <div class="col-xl-7 col-lg-10 col-md-10 col-12 px-0">   
           <div class="home_about_txt text-center mb-3">Life at MCKVIE blends academics with vibrant cultural, technical and sports activities, giving students plenty of chances to grow beyond the classroom.</div>
           </div>
        
           
           
             </div>
             
             
              <div class="row m-0 mt-2" >
                  
               <div class="col-lg-12 col-md-12 col-12 px-0">
                   
 <section class="campus-section">
    <div class="container p-0">
        <div class="row g-3">
            
            <!-- Left Column: Featured Large Card (Cultural Activities) -->
            <div class="col-lg-6">
                <a href="{{url('/cultural-activities')}}"><div class="activity-card featured">
                    <img src="{{asset('images/photo-1501281668745-f7f57925c3b4.avif')}}" alt="Cultural Activities">
                    <div class="card-overlay">
                        <h3 class="activity-title">Cultural Activities</h3>
                        <p class="activity-description">A few glimpses of cultural events held at college campus.</p>
                    </div>
                </div></a>
            </div>

            <!-- Right Column: Grid of smaller cards -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <!-- Games & Sports -->
                   <div class="col-md-6 col-6">
                      <a href="{{url('/games-and-sports')}}">  <div class="activity-card">
                            <img src="{{asset('images/sports_games.webp')}}" alt="Games & Sports">
                            <div class="card-overlay">
                                <h3 class="activity-title">Games & Sports</h3>
                            </div>
                        </div></a>
                    </div>

                    <!-- Student Counseling -->
                  <div class="col-md-6 col-6">
                      <a href="{{url('/student-counselling')}}">   <div class="activity-card">
                            <img src="{{asset('images/Gemini_Generated_Image_14okp714okp714ok.webp')}}" alt="Seminars & Workshops">
                            <div class="card-overlay">
                                <h3 class="activity-title">Student Counselling</h3>
                            </div>
                        </div></a>
                    </div>

                    <!-- Student Chapters -->
                    <div class="col-md-6 col-6">
                       <a href="{{url('/student-chapters')}}">  <div class="activity-card">
                            <img src="{{asset('images/Gemini_Generated_Image_vemu8ivemu8ivemu.webp')}}" alt="Seminars & Workshops">
                            <div class="card-overlay">
                                <h3 class="activity-title">Student Chapters</h3>
                            </div>
                        </div></a>
                    </div>

                    <!-- Seminars & Workshops -->
                    <div class="col-md-6 col-6">
                       <a href="{{url('/seminars-workshops')}}">  <div class="activity-card">
                            <img src="{{asset('images/Gemini_Generated_Image_l9vl2ql9vl2ql9vl (1).webp')}}" alt="Seminars & Workshops">
                            <div class="card-overlay">
                                <h3 class="activity-title">Seminars & Workshops</h3>
                            </div>
                        </div></a>
                    </div>
                </div> 
            </div> 

        </div> 
    </div>
</section>
                   
                   
               </div>   
                  
            
                  
              </div>
             
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section>
 
 
 
   <section class="package">
     
     <div class="mainbody_div mainbody_div2 bgcolor1" >
         
         <div class="container">
             <div class="row m-0 justify-content-center">
                 
                 
   
                 
                 
          <div class="col-lg-12 col-md-12 col-12">
               
                
              <div class="mainhome_title text-center mb-2">MCKV <span class="red">Group of Institutions</span></div>     
                
              
           </div>
           
          
           
           
        
           
           
             </div>
             
             
              <div class="row m-0 mt-4" >
                  
               <div class="col-lg-12 col-md-12 col-12 px-sm-0 px-2">
                   
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="institute">
    
   
  
 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/mckv-group1.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/mckv1.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/mv-1.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/mitt-1.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/mips_main-1.png')}}" alt="" class="w-100" ></div>

</div>

 <div class="item">
   
   <div class="apporved_maindiv"><img src="{{asset('images/mckvhealth-1.png')}}" alt="" class="w-100" ></div>

</div>


    
</div>    
                   
                   
               </div>   
                  
            
                  
              </div>
             
             
             
          
             
             
         </div>
         
     </div>
     
     
 </section> 
 
 

 
  <!--##########  Body End ############# -->
  
  @section('script')
      <script>
        $(document).ready(function(){
            $(".dept_div").on("change",function(){
                get_course();
            });
            //get_course();
        });
        $(document).ready(function(){
            $(".dept_div_mob").on("change",function(){
                get_course();
            });
            //get_course();
        });

        function get_course()
        {
            var Dept=$("#department_slug").val();
            var Dept_Mob=$("#department_slug_mob").val();
                //alert(Dept);
            $.ajax({
                url:'{{url("/get_course")}}',
                type:'POST',
                data:{
                    'Dept':Dept,
                    'Dept_Mob':Dept_Mob,
                    _token:'{{csrf_token()}}'
                },
                success:function(res)
                {
                //alert(res.htmlcont);
                    $("#course_div").html(res.htmlcont);
                    $("#course_div_mob").html(res.htmlcont);
                }
            });
        }
      </script>
@if(session('message'))
      <script>        
            Swal.fire({
                          icon: 'success',
                          title: 'Success',
                          text: '{{ session('message') }}',
                        showConfirmButton:false,
                        timer:2000,
                            }).then(function() {
                        window.location.href='{{url("/")}}';
                        });
       
      </script>
 @endif



  @endsection
@endsection