@if ($get_faculty->isNotEmpty())   

<section class="package">
     
     <div class="mainbody_div mainbody_div2 pt-sm-3 pt-0" >
         
         <div class="container">
             
             
      <div class="row m-0">
        
           <div class="col-lg-12 col-md-12 col-12 px-0">
               
                
              <div class="mainhome_title text-sm-start text-center mb-sm-4 mb-3">
                  
               
                  
                   <span class="red">Faculty <span class="fw-normal">Members</span></span></div>     
                
              
           </div> 
           
          
             </div>       
             
             
                       
      <div class="row m-0 justify-content-start ">
          @if (!empty($get_hod))         
          
         <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/'.$get_hod->faculty_image)}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">{{$get_hod->faculty_name}}</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">{{$get_hod->designation}}</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">{{$get_hod->department->department_name}}

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">{{$get_hod->qualification}}</br>
   @if ($get_hod->teaching_exp)
     Teaching : {{$get_hod->teaching_exp}} Yrs, 
   @endif
   @if ($get_hod->research_exp)
     Research : {{$get_hod->research_exp}} Yrs, 
   @endif
   @if ($get_hod->industry_exp)
     Industry : {{$get_hod->industry_exp}} yr 
   @endif
</br>
@if ($get_hod->date_of_joining)
   {{-- DOJ: {{date('d-m-Y',strtotime($get_hod->date_of_joining))}} --}}
@endif

</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div> 
               @endif 
       @foreach ($get_faculty as $faculty)
          
       
     <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/'.$faculty->faculty_image)}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">{{$faculty->faculty_name}}</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">{{$faculty->designation}}</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">{{$faculty->department->department_name}}

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">{{$faculty->qualification}}
</br>
@if ($faculty->teaching_exp)
     Teaching : {{$faculty->teaching_exp}} Yrs, 
   @endif
   @if ($faculty->research_exp)
     Research : {{$faculty->research_exp}} Yrs, 
   @endif
   @if ($faculty->industry_exp)
     Industry : {{$faculty->industry_exp}} yr 
   @endif


</br>
@if ($faculty->date_of_joining)
   {{-- DOJ: {{date('d-m-Y',strtotime($faculty->date_of_joining))}} --}}
@endif


</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>      
     @endforeach      
          
    {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Dr. Soma Bandyopadhyay.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Dr. Soma Bandyopadhyay</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Associate Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">AMIE, M.E., Ph.D (Engg.)</br>
Teaching : 17.8 Yrs,
Research : 5.5 Yrs,
Industry : 2.6 Yrs


</br>

DOJ: 25-07-2008

</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>       
                  
                
  <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Mr. Prasenjit Das.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Mr. Prasenjit Das</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">B.Sc., MCA, M.Tech, Ph.D (pursuing)</br>
Teaching : 18 Yrs,
Research : 2 Yrs
</br>

DOJ: 01-08-2008
</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>  
               
               
               
 <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Ms. Rachita Ghosh hajra.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Ms. Rachita Ghoshhajra</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">B.Tech, M.Tech, Ph.D (pursuing)

</br>
Teaching : 22.6 Yrs,
Research : 5 Yrs


</br>

DOJ: 17-03-2009</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>                
               
               
              
               
 <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Mr. Sumit Mazumdar.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Mr. Sumit Majumdar</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">B.Tech, M.E., Ph.D (pursuing)
</br>
Teaching : 15.8 Yrs,
Research : 2 Yrs.
</br>

DOJ: 03-08-2010</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div> 
               
               
 <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Mr. Surojit Bhattacharyya.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Mr. Surojit Bhattacharyya</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">B.Tech, M.E., Ph.D (pursuing)
</br>
Teaching : 18.3 Yrs,
Research : 5 Yrs

</br>

DOJ: 03-08-2010</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>              
               
 <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Mr. Pushpen Lahiri.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Mr. Puspen Lahiri</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">B.Tech, M.Tech, Ph.D (pursuing)
</br>
Teaching : 20 Yrs,
Research: 0.5 Yr


</br>

DOJ: 14-08-2012</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div> 
               
               
<div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Ms. Moumita Sen.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Ms. Moumita Goswami</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">B.Tech, M.Tech, Ph.D (pursuing)
</br>
Teaching : 15.5 Yrs,
Research : 0.5 Yr,
Industry : 1.5 Yrs,
1.5 years in Software Industry



</br>

DOJ: 15-10-2011</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>                
               
               
 <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Dr. Sasmita Subhadarsinee Choudhury.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Dr. Sasmita Subhadarsinee Choudhury</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">AMIE, M.Tech, Ph.D (Engg.)
</br>
Teaching : 20.3 Yrs,
Research : 7 Yrs,
Industry : 4 Yrs




</br>

DOJ: 17-07-2012</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div> 
               
               
<div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Mr. Chandan Roy.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Mr. Chandan Roy</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">B.Sc(H) in CS, B.Tech (CS), M.Tech (CSE)
</br>
Teaching : 4 Yrs.




</br>

DOJ: 01-07-2025</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>               
               
 <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Ms. Keya Bhattacharya.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Ms. Keya Bhattacharjee</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">M.Tech (CSE), Ph.D (pursuing)
</br>
Teaching : 9 Yrs,
Research : 1 yr




</br>

DOJ: 01-07-2025</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>
               
               
 <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Ms. Anwesa Naskar.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Ms. Anwesa Naskar</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">M.Tech(CSE), Ph.D (pursuing)
</br>
Teaching : 3.5 Yrs.





</br>

DOJ: 01-07-2025</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>               
               
 <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Mr. Kaushik Roy Choudhury.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Mr. Kaushik Roy Choudhury</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Assistant Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">M.Tech, Ph.D (pursuing)
</br>
Teaching : 20.8 Yrs,
Research : 2 Yrs,
Industry : 2 Yrs


</br>

DOJ: 02-02-2026</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div> 
               
 <div class="col-xl-4 col-lg-4 col-md-4 col-6 mb-lg-3 mb-3 ps-sm-0 pe-sm-3 ps-2 pe-2 ">
   <a href="#">                
  <div class="faculty_maindiv">
   <div class="row m-0 p-0">
       
   <div class="col-xl-4 col-lg-4 col-sm-4 col-12 px-0">
   <img src="{{asset('images/faculty/Dr. Sumana Kundu.jpg')}}" class="facultyimg_css" />    
       
   </div>    
    
  <div class="col-xl-8 col-lg-8 col-sm-8 col-12 px-sm-2 py-sm-2 px-2 py-2">
      
   <div class="row m-0 p-0">
      <div class="col-12 p-0 mb-1"><div class="faculty_name text-start">Dr. Sumana Kundu</div></div>
      
      <div class="col-12 p-0 mb-0"><div class="faculty_designation_new text-start">Associate Professor</div></div>
      
    <div class="col-12 p-0 mb-1"><div class="faculty_designation_new text-start">Computer Science and Engineering

</div></div>  
      
 <div class="col-12 p-0 mb-1"><div class="faculty_degree text-start">BE, M.Tech, Ph.D (Eng.)
</br>
Teaching : 9.7 Yrs,
Research : 6 Yrs



</br>

DOJ: 02-02-2026</div></div>       
      
      
   </div>   
      
      
  </div>  
    
       
       
   </div>   
      
      
  </div>
   </a>                
                   
               </div>                --}}
               
               
               
                  
              </div>
              
              
          
             
             
         </div>
         
     </div>
     
     
 </section> 
 @endif