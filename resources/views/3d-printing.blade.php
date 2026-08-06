@extends('layout.master-template')

@section('title','3D Printing Lab - MCKV Institute of Engineering')

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
          
          
          <!--<div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-sm-2 mb-0 px-0 mt-sm-0 mt-3">
              
            <div class="blue mainhome_title mb-3 text-start fw-normal">About <span class="red fw-bold">MCKV Institute of Engineering</span></div>  
              
          </div>-->
          
           
              <div class="col-xl-7 col-lg-7 col-md-8 col-12 mb-sm-0 mb-4 ps-sm-0 pe-sm-3 ps-0 pe-0 ">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify">
                      
                 
              
              <div class="red mainhome_title mb-3 text-start">About <span class="blue fw-normal">3D Printing</span></div>
              
              
              Additive manufacturing is an apt term for the technologies that create three-dimensional items by layering material, whether it’s plastic, metal, concrete, or, one day, human tissue. The use of a computer, 3D modelling software (Computer Aided Design or CAD), machine equipment, and layering material are all common in additive manufacturing technologies. Following the creation of a CAD sketch, additive manufacturing equipment reads data from the CAD file and layers or adds liquid, powder, sheet material, or other materials in a layer-by-layer method to build a 3D item.</br></br>
              
 3D printing, rapid prototyping, direct digital manufacturing, layered manufacturing, and additive fabrication are all subsets of additive manufacturing.</br></br>
 
  3D printing is an additive technology used to manufacture parts. It is ‘additive’ in that it doesn’t require a block of material or a mould to manufacture physical objects, it simply stacks and fuses layers of material.
                      
                  </div> 
                  
              </div>
           
           <div class="col-xl-5 col-lg-5 col-md-4 col-12 ps-sm-4 mb-3 pe-0 ps-0 order-first order-md-2">
               
         
               
            <img src="{{asset('images/3d-printing.jpg')}}" class="w-100" alt="...">   
               
               
               
           </div>
           
           
           
             </div>
             
             
             
           
             
             
    <div class="row m-0 justify-content-start mt-sm-3 mt-0">
          
   
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-justify text-md-justify">
                      
           
             
             
        It’s typically fast, with low fixed setup costs, and can create more complex geometries than ‘traditional’ technologies, with an ever-expanding list of materials. It is used extensively in the engineering industry, particularly for prototyping and creating lightweight geometries.</br></br>
        
        The possibilities for 3D printing applications are endless. 3D printing is now being utilised to produce end-use goods in aeroplanes, dental restorations, ornament, medical implants, defence, oil & gas, space, vehicles, fashion and other industries.</br></br>
        
        
          <div class="red mainhome_title mb-0 text-start">Services <span class="blue fw-normal">Provided</span></div>
          
          
     <div class="row gy-4 gx-4">
            
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-card">
                    <div class="card-number-box" style="background-color: #D83B51;">1</div>
                    <svg class="notch-svg-top" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 1H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 1V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-divider-line"></div>
                    <svg class="notch-svg-bottom" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 11H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 0V11" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-text-content" style="color: #D83B51;">
                        Product Design and Development
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-card">
                    <div class="card-number-box" style="background-color: #E65A42;">2</div>
                    <svg class="notch-svg-top" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 1H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 1V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-divider-line"></div>
                    <svg class="notch-svg-bottom" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 11H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 0V11" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-text-content" style="color: #E65A42;">
                        Research Projects
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-card">
                    <div class="card-number-box" style="background-color: #EEB83F;">3</div>
                    <svg class="notch-svg-top" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 1H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 1V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-divider-line"></div>
                    <svg class="notch-svg-bottom" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 11H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 0V11" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-text-content" style="color: #EEB83F;">
                        Student Projects
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-card">
                    <div class="card-number-box" style="background-color: #83C152;">4</div>
                    <svg class="notch-svg-top" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 1H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 1V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-divider-line"></div>
                    <svg class="notch-svg-bottom" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 11H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 0V11" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-text-content" style="color: #83C152;">
                        Commercial Product Manufacturing
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-card">
                    <div class="card-number-box" style="background-color: #3CB89B;">5</div>
                    <svg class="notch-svg-top" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 1H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 1V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-divider-line"></div>
                    <svg class="notch-svg-bottom" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 11H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 0V11" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-text-content" style="color: #3CB89B;">
                        Faculty Development Programme
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-card">
                    <div class="card-number-box" style="background-color: #4FAAD9;">6</div>
                    <svg class="notch-svg-top" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 1H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 1V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-divider-line"></div>
                    <svg class="notch-svg-bottom" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 11H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 0V11" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-text-content" style="color: #4FAAD9;">
                        Industrial Training
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-card">
                    <div class="card-number-box" style="background-color: #4584C4;">7</div>
                    <svg class="notch-svg-top" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 1H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 1V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-divider-line"></div>
                    <svg class="notch-svg-bottom" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 11H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 0V11" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-text-content" style="color: #4584C4;">
                        Consultancy Services
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-card">
                    <div class="card-number-box" style="background-color: #987DBE;">8</div>
                    <svg class="notch-svg-top" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 1H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 1V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-divider-line"></div>
                    <svg class="notch-svg-bottom" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 11H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 0V11" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-text-content" style="color: #987DBE;">
                        Research Collaboration
                    </div>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-card">
                    <div class="card-number-box" style="background-color: #D969AC;">9</div>
                    <svg class="notch-svg-top" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 1H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 1V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 7V12" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-divider-line"></div>
                    <svg class="notch-svg-bottom" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: var(--body-bg); color: var(--card-border-color);">
                        <path d="M1 11H15" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M8 0V11" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M3 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                        <path d="M13 0V5" stroke="currentColor" stroke-width="2" stroke-linecap="square"/>
                    </svg>
                    <div class="card-text-content" style="color: #D969AC;">
                        Student Training
                    </div>
                </div>
            </div>

        </div>     
          
          
     <div class="red mainhome_title mb-3 text-start mt-5">About the  <span class="blue fw-normal">Center of Excellence </span></div> 
     
     The goal of the Center of Excellence is to bring together industries, R&D institutions, and academics to hold manufacturing problems using 3D printing technologies. Through access to 3D printing technology, the Center of Excellence aims to bridge the gap between basic research, product design and development, and provide cutting-edge solutions. The major goal of the Center of Excellence is to create an ecosystem that will educate industry, R&D, and academia on 3D printing technologies. The facility also encourages international collaborations in cutting-edge 3D printing technology.</br></br>
     
     The Center of Excellence also aims to promote commercialization, academic and research activities among practising engineers, industries, students, and faculty members, as well as provide consulting and necessary support services to industries involved in 3D scanning of components, generation of 3D models from physical models, post-processing of the models, inspection, and 3D printing of components. One dual nozzle 3D printer, one single nozzle 3D printer, and one 3D scanner are available at the Center of Excellence. The major objectives of the Center of Excellence are as follows:</br></br>
     
     <ul>
     <li>To closely work with different industries to provide 3D printing related services.</li>
     
     <li>To conduct hands on courses on 3D printing for faculty members, staffs and students.</li>  
     
     <li>To provide internship opportunities to student.</li>  
     
     <li>To provide experimental facilities for student projects.</li>  
     
     <li>To provide experimental facilities for researchers pursuing Masters / PhD in related areas.</li>  
     
     <li>To organization faculty development programme in 3D printing.</li>  
     
     <li>To provide case-based 3D printing</li>  
     
     <li>To provide consultancy services.</li>  
     
     <li>To collaborate with national and international institutes and societies for research and training programme.</li>  
         
         
     </ul></br>
     
   <div class="red mainhome_title mb-3 text-start">Facilities  <span class="blue fw-normal">Available </span></div>  
   
   
   <table class="table table-striped table-hover">
     <thead>
    <tr>
      <th scope="col">Sl. No</th>
      <th scope="col">Item</th>
      <th scope="col">Details</th>
      
    </tr>
  </thead>
  
  
  <tbody>
    <tr>
     
      <td>1</td>
      <td>3D Printer Arya 300+ Dual Nozzle</td>
      <td>Print Size/Build Volume- 300 X 300 X 300 (mm3)</td>
    </tr>
    <tr>
     
      <td>2</td>
      <td>3D Printer Arya XL Single Nozzle</td>
      <td>Print Size/Build Volume- 500 X 500 X 500 (mm3)</td>
    </tr>
    <tr>
       <td>3</td>
      <td>Printing resolution</td>
      <td>100 microns</td>
    </tr>
    
    <td>4</td>
      <td>Technology</td>
      <td>Fused Deposition Modeling (FDM)</td>
    </tr>
    <tr>
     
      <td>5</td>
      <td>Available 3D printing filaments</td>
      <td>PLA+ / ABS+ / PETG)</td>
    </tr>
    <tr>
       <td>6</td>
      <td>3D Scanner</td>
      <td>CREALITY CR SCAN 01</td>
    </tr>
  </tbody>
</table></br>


<div class="red mainhome_title mb-3 text-start">Faculty  <span class="blue fw-normal">Coordinator  </span></div> 

Dr. Prasenjit Chatterjee, Dean – Research and Consultancy</br>

E-mail id: <a href="mailto:p.chatterjee@mckvie.edu.i">p.chatterjee@mckvie.edu.in</a></br></br>

<div class="red mainhome_title mb-3 text-start">People Associated with  <span class="blue fw-normal">Center of Excellence   </span></div>

<ul>
<li>Dr. Abhijit Dutta</li>    
<li>Dr. Soutrik Bose</li>
<li>Mr. Nabankur Mandal</li>
<li>Mr. Bimal Makhal</li>
<li>Mr. Swaraj Biswas</li>
<li>Mr. Ashim Chakraborty</li>
<li>Mr. Dhiman Bhattacharya</li>
    
</ul>


<div class="row g-4 mt-4">
    
<div class="col-md-4 col-12">
               <a href="{{asset('images/SJA_0065.webp')}}" data-fancybox="group1" > 
   <div class="image-container">
                    <img src="{{asset('images/SJA_0065.webp')}}" alt="">
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
              
<div class="col-md-4 col-12">
               <a href="{{asset('images/SJA_0061.webp')}}" data-fancybox="group1" > 
   <div class="image-container">
                    <img src="{{asset('images/SJA_0061.webp')}}" alt="">
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
              
<div class="col-md-4 col-12">
               <a href="{{asset('images/SJA_0062.webp')}}" data-fancybox="group1" > 
   <div class="image-container">
                    <img src="{{asset('images/SJA_0062.webp')}}" alt="">
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
           
      
           
           
           
             </div> 
             
             
             
           
             
             
             
             
             
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Course Overview End ############# --> 
  






 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection