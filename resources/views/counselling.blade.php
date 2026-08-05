@extends('layout.master-template')

@section('title','Student Counselling - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

   <!--##########  Student Counselling Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
             <div class="row m-0 justify-content-start ">
          
         
           
              <div class="col-xl-7 col-lg-7 col-md-8 col-12 mb-sm-0 mb-4 ps-sm-0 pe-sm-3 ps-0 pe-0 ">
                  
                
                  
                  <div class="home_about_txt text-justify text-md-justify">
           College life is a complete form of transition and full of new experiences compared to school life and thus it is quite natural to experience a wide variety of mental health concerns like anxiety, fearfulness, acute stress reaction, sadness, increased worry regarding meeting new job related challenges, academic failure, obsession and compulsion, low mood, depression, emotional exhaustion etc.  </br></br>
              
            To safeguard the mental wellbeing during this early adulthood phase of the students, MCKV Institute of Engineering extends the support to the students in the form of providing <b>psychological counselling</b> with the help of a well-qualified student counselor. The role of the counselor is to provide positive guidance to the students, encourage students to come forward and express their problems which they may or may not share with others and try to solve them accordingly. The objective of the institute is to assist the students to make them lead their lives with their fullest potential so that they can achieve holistic academic and personal growth.</br></br>
            
             Students facing any of their academic, career related or personal issues may contact directly through mail to <a href="mailto:counselor@mckvie.edu.in">counselor@mckvie.edu.in</a>
                      
                  </div> 
                  
              </div>
           
           <div class="col-xl-5 col-lg-5 col-md-4 col-12 ps-sm-4 pe-0 ps-0 order-first order-md-2">
               
         
               
            <img src="{{asset('images/student-counselling-new.webp')}}" class="w-100 mb-sm-0 mb-3" alt="...">   
               
               
               
           </div>
           
           
           
             </div>
             
             
             
           
             
             
             
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Student Counselling End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection