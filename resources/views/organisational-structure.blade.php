@extends('layout.master-template')

@section('title','Organisational Structure - MCKV Institute of Engineering')

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
                  
                 
                  
                  <div class="home_about_txt w-100">
                      
            
           <div class="row m-0 p-0 justify-content-center mb-5">
               
            <div class="col-sm-9 col-12 p-0"><img src="{{asset('images/FLOWCHART.png')}}" class="w-100 d-sm-block d-none" /> <img src="{{asset('images/FLOWCHART-mob.png')}}" class="w-100 d-sm-none d-block" /></div>   
               
               
               
               
           </div>
           
           
           
           <div class="faq-list">
      <details class="faq-item" >
        <summary class="text-uppercase text-bolder">Governing Body <span class="plus">+</span></summary>
        <div class="faq-a">
            
            
       <div class="row g-4" id="facultyContainer">
            
            <!-- Card 1 (Compact Version from Image) -->
            <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Kishan-Kumar-Kejriwal.jpg
')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Kishan Kumar Kejriwal</h3>
                        <div class="faculty-designation">Chairman of the Trust</div>
                    </div>
                </div>
            </div>

            <!-- Card 2 (Detailed Version from Image) -->
            
             <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Sivaji Chakravorti</h3>
                        <div class="faculty-designation">Member – Trust Nominee</div>
                         <p class="faculty-details">FNA, FNAE, FNASc, AvHumboldt Fellow
Professor, Electrical Engineering Department, Jadavpur University, Kolkata - 700 032
</p>
                    </div>
                </div>
            </div>
            
            
             <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Amitava Datta</h3>
                        <div class="faculty-designation">Member – Trust Nominee</div>
                         <p class="faculty-details">FNAE, FAScT
Pro Vice-Chancellor & Professor of Power Engineering Department
Jadavpur University, Kolkata

</p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Sankhayan Choudhury</h3>
                        <div class="faculty-designation">Member – Trust Nominee</div>
                         <p class="faculty-details">Professor, Department of Computer Science and Engineering
University of Calcutta


</p>
                    </div>
                </div>
            </div>
            
            
            <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Abhay-Kejriwal.jpg
')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Abhay Kejriwal </h3>
                        <div class="faculty-designation">Member – Trust Nominee</div>
                         <p class="faculty-details">Trustee</p>
                    </div>
                </div>
            </div>
            
<div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Ravindra Prakash Sehgal </h3>
                        <div class="faculty-designation">Member – Trust Nominee (Industrialist)</div>
                         <p class="faculty-details">Mentor, Essen International </p>
                    </div>
                </div>
            </div>
            
 <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Satadal Saha.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof.(Dr.)  Satadal Saha </h3>
                        <div class="faculty-designation">Member – Trust Nominee (Male Teacher Representative)</div>
                         <p class="faculty-details">Dean – Academics, MCKVIE</p>
                    </div>
                </div>
            </div>  
            
            
 <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Shampa Sengupta.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Shampa Sengupta </h3>
                        <div class="faculty-designation">Member – Trust Nominee (Female Teacher Representative)
</div>
                         <p class="faculty-details">Head, Department of Information Technology, MCKVIE</p>
                    </div> 
                </div>
            </div>
            
            
  <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Sudipto Chaki.jpg.jpeg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Sudipto Chaki </h3>
                        <div class="faculty-designation">Member – Trust Nominee (Administrative Staff)</div>
                         <p class="faculty-details">Dean –Administration, MCKVIE</p>
                    </div> 
                </div>
            </div> 
            
  <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Director of Technical Education</h3>
                        <div class="faculty-designation">Member - Govt. of W.B. Nominee</div>
                         <p class="faculty-details">Directorate of Technical Education, 
Govt. of West Bengal, Bikash Bhavan, Salt Lake, Kolkata
</p>
                    </div> 
                </div>
            </div>            
            
   <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Bijoy Bhattacharya.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Bijoy Bhattacharyya</h3>
                        <div class="faculty-designation">Member – University Nominee</div>
                         <p class="faculty-details">FNAE
INAE Distinguished Professor ,
Former Professor, Production
Engineering Department, Jadavpur University 

</p>
                    </div> 
                </div>
            </div>           
            
            
<div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/P-Chakraborthy.jpg
')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) P. Chakraborthy</h3>
                        <div class="faculty-designation">Member - Spl. Invitee Permanent</div>
                         <p class="faculty-details">CEO, MCKV Group</p>
                    </div> 
                </div>
            </div> 
            
 <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Abhijit Lahiri.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Abhijit Lahiri</h3>
                        <div class="faculty-designation">Member – Ex-Officio</div>
                         <p class="faculty-details">Principal </p>
                    </div> 
                </div>
            </div>           
            
            
 <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Kalyan Biswas.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Kalyan Biswas</h3>
                        <div class="faculty-designation">Member - Spl. Invitee Permanent</div>
                         <p class="faculty-details">Asst. Prof., Dept. of ECE, </p>
                    </div> 
                </div>
            </div>            
            
         

        </div>     
            
            
            
            
            
            
            
            
        </div>
      </details>
      
    </div>
    
    
    <div class="faq-list">
      <details class="faq-item" >
        <summary class="text-uppercase text-bolder">Academic Council <span class="plus">+</span></summary>
        <div class="faq-a">
          <div class="row g-4" id="facultyContainer">   
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Abhijit Lahiri.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Abhijit Lahiri</h3>
                        <div class="faculty-designation">Chairman </div>
                         <p class="faculty-details">Principal </p>
                    </div> 
                </div>
            </div> 
            
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Kishan-Kumar-Kejriwal.jpg
')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Kishan Kumar Kejriwal</h3>
                        <div class="faculty-designation">Member</div>
                        <p class="faculty-details">Chairman of the Trust </p>
                    </div>
                </div>
            </div>  
            
   <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Abhay-Kejriwal.jpg
')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Abhay Kejriwal </h3>
                        <div class="faculty-designation">Member</div>
                         <p class="faculty-details">Trustee</p>
                    </div>
                </div>
            </div>         
            
            
  <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/P-Chakraborthy.jpg
')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) P. Chakraborthy</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">CEO, MCKV Group</p>
                    </div> 
                </div>
            </div>           
            
            
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Mr. Avijit Bose.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Avijit Bose</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">HOD - Computer Science and Engineering  </p>
                    </div> 
                </div>
            </div> 
            
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Suchismita Ghosh.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Suchismita Ghosh</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">HOD - Electrical Engineering  </p>
                    </div> 
                </div>
            </div>     
         
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Abhijit Dutta.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Abhijit Dutta</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">HOD - Mechanical Engineering</p>
                    </div> 
                </div>
            </div>  
         
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Pubali Mukherjee.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Pubali Mukherjee</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">HOD - Electronics and Communications Engineering</p>
                    </div> 
                </div>
            </div> 
            
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Shampa Sengupta.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Shampa Sengupta</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">HOD - Information Technology</p>
                    </div> 
                </div>
            </div>     
            
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Mr. Nirvik Banerjee.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Nirvik Banerjee</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">HOD - Automobile Engineering</p>
                    </div> 
                </div>
            </div> 
            
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Ms. Debanjali Chowdhury.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Ms. Debanjali Chowdhury</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">HOD - Basic Science and Humanities</p>
                    </div> 
                </div>
            </div>     
            
         <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Arindam Ghosh_1.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Arindam Ghosh</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">HOD - Management Science</p>
                    </div> 
                </div>
            </div>
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Satadal Saha.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Satadal Saha</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Dean (Academics)</p>
                    </div> 
                </div>
            </div>      
            
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Krishnendu Chattopadhyay.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Krishnendu Chattopadhyay</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Controller of Examination </p>
                    </div> 
                </div>
            </div>
            
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Sudipto Chaki.jpg.jpeg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Sudipto Chaki </h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Dean (Administration)</p>
                    </div> 
                </div>
            </div>      
            
      <!--<div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Shampa Sengupta.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Shampa Sengupta</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Associate Professor (IT)</p>
                    </div> 
                </div>
            </div> -->       
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Anirban Mukhopadhyay</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Professor, Department of CSE, Kalyani University</p>
                    </div> 
                </div>
            </div>       
      
      
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Amitava Datta</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Pro Vice-Chancellor & Professor of Power Engineering Department, Jadavpur University, Kolkata</p>
                    </div> 
                </div>
            </div> 
            
     <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Dipankar Bose  </h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Former Professor, Department of Mechanical Engineering, NITTTR,
Salt Lake      
</p>
                    </div> 
                </div>
            </div>        
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Samarjit Sengupta     </h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Retired Professor of Electrical Engineering 
Department of Applied Physics, University of Calcutta
</p>
                    </div> 
                </div>
            </div> 
            
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Sankhayan Choudhuri  </h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Professor, Department of Computer Science and Engineering,
Calcutta University
</p>
                    </div> 
                </div>
            </div>
            
     <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Shyama Prosad Chowdhury</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Senior Principal Engineer, Videonetics Technology Pvt. Ltd. </p>
                    </div> 
                </div>
            </div>         
            
     <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Santanu Das</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Professor and Ex-Head of Department of Mechanical Engineering, KGEC</p>
                    </div> 
                </div>
            </div>          
            
     <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Devasish Basu</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">GGM Electrical, Kolkata Metro Railway Corporation </p>
                    </div> 
                </div>
            </div>
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) K.C.Vora</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Emeritus Professor, COEP Pune and Former Sr. Deputy Director & Head, ARAI Academy, Pune</p>
                    </div> 
                </div>
            </div>       
            
            
 <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof (Dr.) Anindya Sundar Dhar</h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Professor, EECE, IIT Kharagpur	</p>
                    </div> 
                </div>
            </div> 
            
 <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. B. B. Paira  </h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Former Professor, Calcutta University, Former Academic Advisor MAKAUT </p>
                    </div> 
                </div>
            </div>            
            
 <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Debashis De   </h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Professor, Department of Computer Science and Engineering MAKAUT, West Bengal</p>
                    </div> 
                </div>
            </div> 
            
 <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/no-image.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Sovan Dalai   </h3>
                        <div class="faculty-designation">Member </div>
                         <p class="faculty-details">Professor, Electrical Engg. Department, Jadavpur University, Kolkata </p>
                    </div> 
                </div>
            </div>            
            
   <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Kalyan Biswas.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Kalyan Biswas</h3>
                        <div class="faculty-designation">Member Secretary </div>
                         <p class="faculty-details">Assistant Professor (ECE), MCKVIE</p>
                    </div> 
                </div>
            </div>         
            
          
            
  <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Arun Kumar Jalan.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name"> Prof. (Dr.) Arun Kumar Jalan</h3>
                        <div class="faculty-designation">Member</div>
                         <p class="faculty-details">Dean Student Affairs, MCKVIE</p>
                    </div> 
                </div>
            </div> 
            
  <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Prasenjit Chatterjee.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Prasenjit Chatterjee</h3>
                        <div class="faculty-designation">Member</div>
                         <p class="faculty-details">Dean Research & Consultancy, MCKVIE</p>
                    </div> 
                </div>
            </div>          
            
            
            
            
            
           </div> 
            
            
        </div>
      </details>
      
    </div>
    
   <div class="faq-list">
      <details class="faq-item" >
        <summary class="text-uppercase text-bolder">Institute Administrators <span class="plus">+</span></summary>
        <div class="faq-a">
            
       <div class="row g-4" id="facultyContainer">       
        
       <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Kishan-Kumar-Kejriwal.jpg
')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Kishan Kumar Kejriwal</h3>
                        <div class="faculty-designation">Chairman</div>
                         
                    </div> 
                </div>
            </div> 
        
       <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/P-Chakraborthy.jpg
')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. Parthasarathi Chakraborthy</h3>
                        <div class="faculty-designation">CEO, MCKV Group</div>
                         
                    </div> 
                </div>
            </div>
            
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Abhijit Lahiri.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof.(Dr.) Abhijit Lahiri</h3>
                        <div class="faculty-designation">Principal</div>
                         
                    </div> 
                </div>
            </div>       
            
       <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Sudipto Chaki.jpg.jpeg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof.(Dr.) Sudipto Chaki</h3>
                        <div class="faculty-designation">Dean (Administration)</div>
                         
                    </div> 
                </div>
            </div>      
            
       <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Satadal Saha.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof.(Dr.) Satadal Saha</h3>
                        <div class="faculty-designation">Dean (Academics)</div>
                         
                    </div> 
                </div>
            </div>
            
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Prasenjit Chatterjee.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name"> Dr. Prasenjit Chatterjee</h3>
                        <div class="faculty-designation">Dean (Research & Consultancy)</div>
                         
                    </div> 
                </div>
            </div>      
            
       <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Arun Kumar Jalan.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Arun Kumar Jalan</h3>
                        <div class="faculty-designation">Dean (Student Affairs)</div>
                         
                    </div> 
                </div>
            </div>      
            
       <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Krishnendu Chattopadhyay.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Prof. (Dr.) Krishnendu Chattopadhyay</h3>
                        <div class="faculty-designation">Controller of Examinations</div>
                         
                    </div> 
                </div>
            </div>
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Dipankar Ghosh.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Dipankar Ghosh</h3>
                        <div class="faculty-designation">Dean Innovation and Entrepreneurship</div>
                         
                    </div> 
                </div>
            </div>       
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Tamal Roy.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Tamal Roy</h3>
                        <div class="faculty-designation">Associate-Dean Academics</div>
                         
                    </div> 
                </div>
            </div>       
            
       <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Mr. Sachin Balo.jpg')}}" alt="" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Sachin Balo</h3>
                        <div class="faculty-designation">Associate-Dean Academics</div>
                         
                    </div> 
                </div>
            </div>     
            
       </div>     
            
            
        </div>
      </details>
      
    </div> 
    
  
    
    
     <div class="faq-list">
      <details class="faq-item" >
        <summary class="text-uppercase text-bolder">Heads of the Departments <span class="plus">+</span></summary>
        <div class="faq-a">
            
   <div class="row g-4" id="facultyContainer"> 
   
   
  <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Mr. Nirvik Banerjee.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Nirvik Banerjee</h3>
                        <div class="faculty-designation">Automobile Engineering Department  </div>
                         <p class="faculty-details">BTech, MTech, Assistant Professor</p>
                    </div> 
                </div>
            </div>   
   
   
   
            
   <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Mr. Avijit Bose.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Mr. Avijit Bose</h3>
                        <div class="faculty-designation">Computer Science and Engineering Department  </div>
                         <p class="faculty-details">BTech, MTech, Assistant Professor</p>
                    </div> 
                </div>
            </div> 
            
            
   <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Pubali Mukherjee.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Pubali Mukherjee</h3>
                        <div class="faculty-designation">Electronics and Communications Engineering Department  </div>
                         <p class="faculty-details">B.Tech, M.Tech, Ph.D.(Tech.), Associate Professor</p>
                    </div> 
                </div>
            </div>           
            
            
            
            
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Suchismita Ghosh.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Suchismita Ghosh</h3>
                        <div class="faculty-designation">Electrical Engineering Department</div>
                         <p class="faculty-details">BTech, MTech, PhD, Assistant Professor</p>
                    </div> 
                </div>
            </div>  
            
            
      <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Shampa Sengupta.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Shampa Sengupta</h3>
                        <div class="faculty-designation">Information Technology Department </div>
                         <p class="faculty-details">BTech, MTech, PhD, Associate Professor</p>
                    </div> 
                </div>
            </div>       
            
            
            
         
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Abhijit Dutta.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Abhijit Dutta</h3>
                        <div class="faculty-designation">Mechanical Engineering Department </div>
                         <p class="faculty-details">MTech, Phd, Assistant Professor </p>
                    </div> 
                </div>
            </div>  
         
       
            
            
            
       
            
        <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Ms. Debanjali Chowdhury.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Ms. Debanjali Chowdhury</h3>
                        <div class="faculty-designation">Basic Science and Humanities Department </div>
                         <p class="faculty-details">BSc, MSc., Assistant Professor</p>
                    </div> 
                </div>
            </div>     
            
         <div class="col-12 col-lg-6">
                <div class="faculty-card">
                    <div class="faculty-img-wrapper">
                        <img src="{{asset('images/faculty/Dr. Arindam Ghosh_1.jpg')}}" alt="Mr. Avijit Bose" class="faculty-img">
                    </div>
                    <div class="faculty-info shadow-sm">
                        <h3 class="faculty-name">Dr. Arindam Ghosh</h3>
                        <div class="faculty-designation">Management Science Department </div>
                         <p class="faculty-details">B.Sc, PG Diploma (Public Systems Management), MBA (Human Resource Management), Ph.D (Management)Associate Professor</p>
                    </div> 
                </div>
            </div>         
            
    </div>        
            
            
            
            
            
            
            
            
            
        </div>
      </details>
      
    </div> 
    
    
    
    


                   
                  </div> 
                  
              </div>
           
      
           
           
           
             </div>          
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Course Overview End ############# --> 
  






 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection