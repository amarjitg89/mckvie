@extends('layout.master-template')

@section('title','Alumni MCKVIE - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
  
  
  
  
  
   
  

 <!--##########  Alumni Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
             <div class="row m-0 justify-content-start align-items-start">
          
           
              <div class="col-xl-7 col-lg-7 col-md-8 col-12 mb-sm-0 mb-2 ps-sm-0 pe-sm-3 ps-0 pe-0 ">
                  
                 
                  <div class="red mainhome_title mb-3 text-start">Name of the <span class="blue fw-normal">Sociery</span></div>
                  <div class="home_about_txt text-start text-md-justify mb-3">
              The Alumni Association will be known as <b>MCKVIE Alumni Association (MCKVIEAA).</b>
  
                  </div>
                  
                   <div class="red mainhome_title mb-3 text-start">Registered <span class="blue fw-normal">Office</span></div>
                   <div class="home_about_txt text-start text-md-justify mb-3">
                     The Registered office of the Association will be at MCKV institute of engineering, 243, Road. (N), Howrah-711 204, West Bengal, India, 
                     </br>Phone No: <a href="tel:03326549315" class="text-dark">033-26549315</a>/<a href="tel:03326549317" class="text-dark">17</a></br>
                     E-mail: <a href="mailto:alumni@mckvie.edu.in" class="text-dark">alumni@mckvie.edu.in </a>                       
                       </div>
              <div class="red mainhome_title mb-3 text-start">Objectives </div>   
                <div class="home_about_txt text-start text-md-justify mb-3">
                  The Alumni Association will be an independent, non-profit organization while it will be a part of the Institution academic, it will operate as an independent body. This association will have the following objectives :</br></br>
                  
                  <ul>
                      <li>To emerge as a centre of extra-academic activities to promote companionship among its members who, in turn, will promote liaison between the Alumni and the Institute.
</li>

<li>To encourage the Alumni to take an active and abiding interest in the developmental works and progress of the Institute so as to contribute towards the enhancement of their Alma Mater providing effective service to the society.
</li>

<li>To organize and establish scholarship funds to help needy and deserving students.</li>

<li>To institute prizes and awards for outstanding project work, research papers or other professional activities by the students of the Institute and also to suitably recognize outstanding social and community service by the Alumni and the students individually or group-wise.
</li>

<li>To undertake activities of a civic or charitable nature as also to increase public awareness of the role of technology in value addition to the cultural, economic, and social development of the nation.
</li>

<li>To arrange meaningful social gatherings, conferences, seminars, debates, sports, excursions and other recreational activities.
</li>
                      
                      
                  </ul>
                  
                  </br>
                  
 The functions and objects of the society shall always remain restricted within the meaning of the section 4(2) of the West Bengal Society Registration Act 1961 irrespective of any object mentioned in the present document in agreement or opposed to the said section. </br> </br>
 
 Before commencing the activities of the Society, necessary approval/permission will be obtained from the Govt., or other appropriate / concerned authorities as and when required.</br> </br>
The income and properties of the society whatsoever derived or obtained shall be applied solely towards the promotion of the object of the society and no portion-thereof shall be paid to or divided amongst any of its members by way of profits.</br></br>

<ul><li>For further information :  <a href="https://mckvie.alumnyx.com" target="_blank">click here</a></li></ul></br>

<div class="red mainhome_title mb-3 text-start">Alumni Meet Reports : <span class="blue fw-normal">Year 2023</span></div>

<ul><li>Alumni Meet (07-01-2023) Report of ECE Department : <a href="https://d3otflr9ot901s.cloudfront.net/mckvi-wp-data/wp-content/uploads/2024/04/26123342/ECE-AMeet-2023.pdf" target="_blank">Click here</a></li></ul></br>


<div class="red mainhome_title mb-3 text-start">Alumni Meet Reports : <span class="blue fw-normal">Year 2022</span></div>

<ul>
    <li>Alumni Meet (26-03-2022) Report of ECE Department  : <a href="https://lsplwebsitedata.s3.ap-south-1.amazonaws.com/mckvi-wp-data/wp-content/uploads/2022/08/03161640/ECE_Alumni-Meet_Report_Website.pdf" target="_blank">Click here</a></li>
    
      <li>Alumni Meet (09-04-2022) Report of IT Department   : <a href="https://lsplwebsitedata.s3.ap-south-1.amazonaws.com/mckvi-wp-data/wp-content/uploads/2022/08/03161643/Alumni-Meet_Report_Website_IT.pdf" target="_blank">Click here</a></li>
      
        <li>Alumni Meet (23-04-2022) Report of EE Department   : <a href="https://lsplwebsitedata.s3.ap-south-1.amazonaws.com/mckvi-wp-data/wp-content/uploads/2022/08/03161642/EE_Alumni-meet-report-for-website-converted.pdf" target="_blank">Click here</a></li>
        
          <li>Alumni Meet (23-04-2022) Report of CSE Department  : <a href="https://lsplwebsitedata.s3.ap-south-1.amazonaws.com/mckvi-wp-data/wp-content/uploads/2022/08/03161647/CSE_Report_Reminiscence2022.pdf" target="_blank">Click here</a></li>
          
            <li>Alumni Meet (28-05-2022) Report of ME Department  : <a href="https://lsplwebsitedata.s3.ap-south-1.amazonaws.com/mckvi-wp-data/wp-content/uploads/2022/08/03162516/ME_Alumni_Report-compressed.pdf" target="_blank">Click here</a></li>
            
             <li>Alumni Meet (28-05-2022) Report of AUE Department  : <a href="https://lsplwebsitedata.s3.ap-south-1.amazonaws.com/mckvi-wp-data/wp-content/uploads/2022/08/03161645/AUE-ALUMNI-MEET-REPORT-2022.pdf" target="_blank">Click here</a></li>
    
    
    </ul>

 
                    </div>   
                  
              </div>
           
           <div class="col-xl-5 col-lg-5 col-md-4 col-12 ps-sm-4 pe-0 ps-0">
               
         
              
            <div class="touch_maindiv">
                  <form action="{{url('/ins_alumni_form')}}" method="POST">
            @csrf    
                   <div class="get_in_touch_heading mb-2 mb-lg-2 fw-bold text-white">Alumni Registration Form
</div>   
                    <div class="get_formdiv mb-2 mb-lg-1">
                        <lable class="text-white mb-1 w-100 d-flex"> Your Name*</lable>
                        <input name="alumni_name" id="alumni_name" @error('alumni_name')style="border: 2px solid red;"@enderror type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Name" title="Please Enter Name"></div> 
                    
       
					  
					  
					  
					   <div class="get_formdiv mb-2 mb-lg-1">
					       <lable class="text-white mb-1 w-100 d-flex"> Your Mobile No*</lable>
					       
					       <input name="alumni_contact" id="alumni_contact" @error('alumni_contact')style="border: 2px solid red;"@enderror type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Mobile" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="10"></div> 
					  
                 
                 <div class="get_formdiv mb-2 mb-lg-1">
                   <lable class="text-white mb-1 w-100 d-flex"> Your Email Id*</lable>  
                     
                     <input name="alumni_email" id="alumni_email" @error('alumni_email')style="border: 2px solid red;"@enderror type="email" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Email Id"></div> 
                 
                 
                
                 
                 
                 <div class="get_formdiv mb-4 mb-lg-1">
                    <lable class="text-white mb-1 w-100 d-flex">Your Department*</lable> 
                    <select class="form-select doctor_search_select rounded-0" @error('department_slug')style="border: 2px solid red;"@enderror aria-label="Default select example" name="department_slug" id="department_slug">
  <option value="">Department Interested in</option>
  @foreach ($department as $dept_det)
     <option value="{{$dept_det->department_slug}}">{{$dept_det->department_name}}</option> 
  @endforeach
  
</select></div>

               <div class="get_formdiv mb-4 mb-lg-1">
                    <lable class="text-white mb-1 w-100 d-flex">Passing Out Year*</lable> 
                    <select class="form-select doctor_search_select rounded-0" @error('passing_year')style="border: 2px solid red;"@enderror aria-label="Default select example" name="passing_year" id="passing_year">
  <option value="">Passing Out Year</option>
@php
  $years = range(2003, date('Y'));
@endphp
@foreach ($years as $year)
  <option value="{{$year}}">{{$year}}</option>
@endforeach
  
</select></div>

 <div class="get_formdiv mb-2 mb-lg-1">
                        <lable class="text-white mb-1 w-100 d-flex"> Present Organization</lable>
                        <input name="organisation_name" id="organisation_name" type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Present Organization" title="" ></div> 
                        
  <div class="get_formdiv mb-2 mb-lg-1">
                        <lable class="text-white mb-1 w-100 d-flex"> Location</lable>
                        <input name="location" id="location" type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Location" title="" ></div>                        
                        
                        
  <div class="get_formdiv mb-2 mb-lg-1">
                        <lable class="text-white mb-1 w-100 d-flex"> Designation</lable>
                        <input name="designation" id="designation" type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Designation" title="" ></div> 


                 
                 <div class="get_formdiv mb-2 mb-lg-1 mt-sm-2">
                     
                     <div class="row justify-content-center"><div class=" col-lg-6 col-5"><input name="find" type="submit" value="Submit" class="btn1 readmore_btnshow" style="text-align:center; width:100%; display:block; padding: 7px 0px;" onclick="getInTouch()"></div></div>
                     
                     </div>
                     
                     
                    </form>             
                     
                     
                     
                     
                 
                  </div>   
             
               
               
           </div>
           
           
           
             </div>
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Alumni End ############# --> 
  






 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection