  <form action="{{url('/ins_course_enquiry_form')}}" method="POST">
            @csrf 
  <div class="touch_maindiv">
                      <input type="hidden" name="course_slug" value="{{$slug}}">
                   <div class="get_in_touch_heading mb-2 mb-lg-2 fw-bold text-white">Course Enquiry</div>   
                    <div class="get_formdiv mb-2 mb-lg-1">
                        <lable class="text-white mb-1 w-100 d-flex">Enter Your Name*</lable>
                        <input name="enquirer_name" @error('enquirer_name')style="border: 2px solid red;"@enderror id="enquirer_name" type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Name*" title="Please Enter Name" >
                    {{-- @error('enquirer_name')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
                    </div> 
                    
       
					  
					  
					  
					   <div class="get_formdiv mb-2 mb-lg-1">
					       <lable class="text-white mb-1 w-100 d-flex">Enter Your Mobile No*</lable>
					       
					       <input name="enquirer_contact" @error('enquirer_contact')style="border: 2px solid red;"@enderror id="enquirer_contact" type="text" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Mobile*"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="10" >
                        {{-- @error('enquirer_contact')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
                        </div> 
					  
                 
                 <div class="get_formdiv mb-2 mb-lg-1">
                   <lable class="text-white mb-1 w-100 d-flex">Enter Your Email Id*</lable>  
                     
                     <input name="enquirer_email" @error('enquirer_email')style="border: 2px solid red;"@enderror id="enquirer_email" type="email" class="form-control doctor_search_select rounded-0" value="" autocomplete="off" placeholder="Enter Your Email Id" >
                    {{-- @error('enquirer_email')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
                    </div> 
                 
                 
                
                 
                 
                 <div class="get_formdiv mb-4 mb-lg-1">
                    <lable class="text-white mb-1 w-100 d-flex">Enter Your Enquiry*</lable> 
                     <textarea id="course_enquiry" @error('course_enquiry')style="border: 2px solid red;width:100%; height:100px;"@enderror name="course_enquiry" class="form-control doctor_search_select rounded-0" autocomplete="off" placeholder=" Enter Your Message*" style="resize:none; width:100%; height:100px;" rows="" cols="" ></textarea>
                    {{-- @error('course_enquiry')
                        <div class="text text-danger" style="font-size: 14px;">{{$message}}</div>   
                        @enderror --}}
                    </div>
                 
                 <div class="get_formdiv mb-2 mb-lg-1 mt-sm-2">
                     
                     <div class="row justify-content-center">
                        <div class=" col-lg-6 col-5">
                            <input name="find" type="submit" value="Submit" class="btn1 readmore_btnshow" style="text-align:center; width:100%; display:block; padding: 7px 0px;"></div>
                    </div>
                     
                     </div>
                 
                  </div>  
                </form>
                  