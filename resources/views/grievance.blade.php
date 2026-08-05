@extends('layout.master-template')

@section('title','Grievance Redressal - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
   
  

 
   <!--##########  Grievance Redressal Start ############# -->   
  
 
 <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row m-0 justify-content-center ">
          
   
              <div class="col-xl-6 col-lg-6 col-md-6 col-12 px-0">
                  
                 
                  
                  <div class="home_about_txt text-center ">
                      
                
                      
          Please fill up the form to record your grievance, if any.</br>
            
          Only genuine grievances are expected to be posted. Yours Identity will kept confidential.  </br></br>
            
                   
                  </div> 
             <div class="home_about_txt w-100">     
                  
            <div class="glass-card-contact">
                    
                    
                    <form id="getInTouchForm" action="{{url('/ins_grievance_form')}}" method="POST" class="needs-validation" novalidate> 
                        @csrf
                    <lable class="text-start mb-1 d-flex w-100">Select Category <span class="red">*</span></lable>
                    <select class="custom-input" @error('category')style="border: 2px solid red;"@enderror name="category" autocomplete="off">
                    <option value="">Select an option</option>
                    <option value="Student">Student</option>
                     <option value="Faculty">Faculty</option>
                      <option value="Staff (Non-teaching)">Staff (Non-teaching)</option>
                       <option value="Parent">Parent</option>
                        <option value="Other">Other</option>
                        
                        
                    </select>
                    
                     <lable class="text-start mb-1 d-flex w-100">Name <span class="red">*</span></lable>
                        <input type="text" class="custom-input" @error('grievance_name')style="border: 2px solid red;"@enderror name="grievance_name" id="grievance_name" placeholder="Your Full Name" autocomplete="off">
                         <lable class="text-start mb-1 d-flex w-100">Mobile No <span class="red">*</span></lable>
                        <input type="text" class="custom-input" @error('grievance_contact')style="border: 2px solid red;"@enderror name="grievance_contact" id="grievance_contact" placeholder="Mobile Number" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
  maxlength="10">
  <lable class="text-start mb-1 d-flex w-100">Email Address <span class="red">*</span></lable>
                        <input type="email" class="custom-input" @error('grievance_email')style="border: 2px solid red;"@enderror name="grievance_email" id="grievance_email" autocomplete="off" placeholder="Email Address ">
                        
           <lable class="text-start mb-1 d-flex w-100">Gender <span class="red">*</span></lable>
                    <select class="custom-input" @error('gender')style="border: 2px solid red;"@enderror name="gender" id="gender" autocomplete="off">
                    <option value="">Select an option</option>
                    <option value="Male">Male</option>
                     <option value="Female">Female</option>
                      <option value="Other">Other</option>
                      
                    </select> 
                    
                       <lable class="text-start mb-1 d-flex w-100">Complaint Category <span class="red">*</span></lable>
                    <select class="custom-input" id="complaint_category" name="complaint_category" @error('complaint_category')style="border: 2px solid red;"@enderror autocomplete="off">
                    <option value="">Select an option</option>
                    <option value="Academics">Academics</option>
                     <option value="Examination & Result">Examination & Result</option>
                      <option value="Accounts">Accounts</option>
                      <option value="Hostel">Hostel</option>
                      <option value="Library">Library</option>
                      <option value="Maintenance">Maintenance</option>
                      <option value="Harrasement & Discrimination">Harrasement & Discrimination</option>
                      <option value="Administrative decisions & Services or Facilities">Administrative decisions & Services or Facilities</option>
                      <option value="Other">Other</option>
                      
                      
                    </select> 
                        
                          <lable class="text-start mb-1 d-flex w-100">Complaint Details <span class="red">*</span></lable>
                        <textarea class="custom-input" rows="4"  id="complaint_details" @error('complaint_details')style="border: 2px solid red;"@enderror autocomplete="off" name="complaint_details" placeholder="Write your complaint here...*" style="resize:none;"></textarea>
                        
                     

                        <button type="submit" class="btn-modern" name="find"  id="submitBtn">
                            <span>SUBMIT</span>
                            
                        </button>
                    </form>
                </div>       
             </div>     
                  
              </div>
           
      
           
           
           
             </div>          
             
             
             
         </div>
         
     </div>
     
     
 </section>
 
  <!--##########  Grievance Redressal End ############# --> 
  
  
 
 
  <!--##########  Body End ############# --> 
  
  @section('script')
      
  @endsection
@endsection