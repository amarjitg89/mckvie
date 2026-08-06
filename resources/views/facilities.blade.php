@extends('layout.master-template')

@section('title','Facilities - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

   <!--##########  Facilities Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-start ">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
    
    <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-5">
                <div class="img-wrapper">
                    <img src="{{asset('images/girls_hostel.550x0-is.jpg')}}" 
                         alt="Hostel Room" 
                         class="facility-img"
                         >
                </div>
            </div>
            <div class="col-md-7">
                <div class="facility-content">
                    <h3 class="facility-title">Boys’ and <span class="red fw-bold">Girls’ Hostel</span></h3>
                    <p class="facility-text">
                        MCKVIE provides separate hostel accommodation for boys and girls. The hostel is located in a safe and healthy learning environment with all the essential facilities to facilitate a comfortable stay for students during their learning journey.


                    </p>
                    
                    <ul>
                    <li>Hostel rules & regulations (subject to change) : <a href="https://d3otflr9ot901s.cloudfront.net/mckvi-wp-data/wp-content/uploads/2023/09/07163550/Hostel-Rules-Regulations-Scanned_compressed.pdf" target="_blank">click here</a></li> 
                    <li>Rules and regulations for Girls’ Hostel : <a href="https://d3otflr9ot901s.cloudfront.net/mckvi-wp-data/wp-content/uploads/2025/09/19142429/Rules_GirlsHostel.pdf" target="_blank">click here</a></li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>

  
    <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-5 order-md-2">
                <div class="img-wrapper">
                    <img src="{{asset('images/facilities Meditation hall.webp')}}" 
                         alt="Meditation Hall" 
                         class="facility-img"
                       >
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="facility-content">
                    <h3 class="facility-title">Meditation<span class="red fw-bold"> Hall</span></h3>
                    <p class="facility-text">
                       Swami Vivekananda Centre for Positive Thinking is a spacious and peaceful meditation hall set up for students of MCKVIE to introspect on Swamiji’s Teachings and practice guided meditation to build their spiritual strength.


                    </p>
                </div>
            </div>
        </div>
    </div>

 
    <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-5">
                <div class="img-wrapper">
                    <img src="{{asset('images/healthcare1.jpg')}}" 
                         alt="Healthcare Unit" 
                         class="facility-img"
                         >
                </div>
            </div>
            <div class="col-md-7">
                <div class="facility-content">
                    <h3 class="facility-title">Healthcare <span class="red fw-bold">Unit</span></h3>
                    <p class="facility-text">
                       MCKVIE provides in-house 24X7 Healthcare Unit support with expert clinical diagnosis, first-aid provisions and Doctor Consultation for catering to students’ health emergencies and overall safety.




                    </p>
                    
                  
                   
                </div>
            </div>
        </div>
    </div>

   
    <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-5 order-md-2">
                <div class="img-wrapper">
                    <img src="{{asset('images/language Comm lab Facilities.webp')}}" 
                         alt="Language & Communication Lab" 
                         class="facility-img"
                         >
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="facility-content">
                    <h3 class="facility-title">Language & <span class="red fw-bold">Communication Lab</span></h3>
                    <p class="facility-text">
                        State-of-the-art language lab at MCKVIE is equipped with smart electronic equipment facilities to help students develop their communication skills and ace language abilities to become industry-ready professionals.


                    </p>
                </div>
            </div>
        </div>
    </div>
           
      
     <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-5">
                <div class="img-wrapper">
                    <img src="{{asset('images/Library photo facilities.webp')}}" 
                         alt="Central Library" 
                         class="facility-img"
                         >
                </div>
            </div>
            <div class="col-md-7">
                <div class="facility-content">
                    <h3 class="facility-title">Central <span class="red fw-bold">Library</span></h3>
                    <p class="facility-text">
                      MCKVIE provides a resourceful library for students to facilitate advanced knowledge exploration with more than 45000 books, journals, magazines, papers along with e learning materials and facilities.

<a href="{{url('/library')}}" class="text-white"><div class="readmore_maindiv_new"><div class="readmore_btn w-100 mt-0">Read More</div></div>  </a>


                    </p>
                    
                  
                   
                </div>
            </div>
        </div>
    </div> 
    
     <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-5 order-md-2">
                <div class="img-wrapper">
                    <img src="{{asset('images/Canteen facilities.webp')}}" 
                         alt="Healthy Cafeteria" 
                         class="facility-img"
                         >
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="facility-content">
                    <h3 class="facility-title">Healthy <span class="red fw-bold">Cafeteria</span></h3>
                    <p class="facility-text">
                       MCKVIE college cafeteria is a happening students’hang out where they can have healthy and tasty food, build friendships and enjoy an amicable and friendly campus environment.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
     <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-5">
                <div class="img-wrapper">
                    <img src="{{asset('images/gym.537x0-is.jpg')}}" 
                         alt="Fitness Facilities" 
                         class="facility-img"
                         >
                </div>
            </div>
            <div class="col-md-7">
                <div class="facility-content">
                    <h3 class="facility-title">Fitness <span class="red fw-bold">Facilities</span></h3>
                    <p class="facility-text">
                    The campus is equipped with multiple modern facilities that include multi-gym, basketball and shuttle courtsto help students stay engaged while maintaining their health and overall fitness.





                    </p>
                    
                  
                   
                </div>
            </div>
        </div>
    </div> 
    
     <div class="facility-card">
        <div class="row g-0">
            <div class="col-md-5 order-md-2">
                <div class="img-wrapper">
                    <img src="{{asset('images/Facilities common room.webp')}}" 
                         alt="Students' Common Room" 
                         class="facility-img"
                         >
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="facility-content">
                    <h3 class="facility-title">Students' <span class="red fw-bold">Common Room</span></h3>
                    <p class="facility-text">
                      The college provides well-furnished common room to facilitate student interaction, recreation with indoor sports opportunities and exchange of ideas by creating a friendly ambiance to increase engagement among MCKVIE student community.


                    </p>
                </div>
            </div>
        </div>
    </div>
           
           
             </div>          
             
             
             
         </div>
         
     </div>
     
     </div>
 </section>
 
  <!--##########  Facilities End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection