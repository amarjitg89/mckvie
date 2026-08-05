@extends('layout.master-template')

@section('title','Emerging Tech Labs - MCKV Institute of Engineering')

@section('content')
     <!--##########  Banner Start ############# -->   
 
 
 @include('layout.inc.inner-banner')
 
 
 
 <!--##########  Banner End ############# -->  
 
 
 
  <!--##########  Body Start ############# --> 
  
 
  
  
  
  
  
   
  

 <!--##########  Course Overview Start ############# -->   
  
 
  <section>
     
     <div class="mainbody_div">
         
         <div class="container">
            
             
             
             
           
             
             
    <div class="row g-4 ">
          
   
              <div class="col-md-4 col-12">
           <a href="{{url('/ev-lab')}}"><img src="{{asset('images/EV-lab.jpg')}}" class="w-100" /></a>
              <div class="press_name">Emerging Tech Lab (EV Lab)</div>
      
           </div>
           
           
             <div class="col-md-4 col-12">
           <a href="{{url('/3d-printing')}}"><img src="{{asset('images/3d-printing.jpg')}}" class="w-100" /></a>
              <div class="press_name">3D Printing Lab</div>
      
           </div>
           
           
            <div class="col-md-4 col-12">
           <a href="{{url('/intel-unnati-ai-lab')}}"><img src="{{asset('images/SJA_05.jpg')}}" class="w-100" /></a>
              <div class="press_name">Emerging Tech Intel Unnati AI Lab</div>
      
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