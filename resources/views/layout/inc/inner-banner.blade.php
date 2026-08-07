<section class="banner other_banner departmentbanner ">
  <div class="inside_desktop_banner_new py-sm-4 py-3" style="background-color:#d9edfa;">
     
    <div class="container">
                <h1 class="blue mainheading mb-2 fw-bolder banner_font heading_font text-start text-uppercase">{{$banner_heading}}</h1>
                <p class="blue subbannertext text-start lh-sm"><a href="{{url('/')}}" class="blue">Home</a> /
                 <a href="{{url('/department/'.$dept_slug)}}" class="blue"> {{$banner_subheading}}</a> @isset($banner_subheading2)/ <a href="{{url('/course/'.$slug)}}" class="blue">{{$banner_subheading2}}</a>@endisset</p>
            </div> 
      
      
  </div>
     
     
 </section>