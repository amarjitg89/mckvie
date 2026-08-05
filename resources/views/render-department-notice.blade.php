@if ($Notice->isNotEmpty())
<section>

 <div class="mainbody_div py-2 blue_body" >

 <div class="container">

  <div class="row m-0 p-0">

      <div class="col-xl-1 col-lg-1 col-sm-2 col-3 px-0"><div class="text-start red fw-bold" >Notice :</div></div>

      

       <div class="col-xl-11 col-lg-11 col-sm-10 col-9 ps-0"><div class="text-start text-white" >
          <marquee scrollamount="3">

			{{-- <a href="" class="text-white">	Report of UTOPIA 2k24</a>&nbsp;  |&nbsp; <a href="" class="text-white">Report on Handwritten Document Analysis</a> &nbsp;  |&nbsp; <a href="" class="text-white">  The Art of Living @MCKV</a> &nbsp;  |&nbsp;<a href="" class="text-white">  Google Developer Group on Campus @MCKVIE</a> --}}

            @foreach ($Notice as $notice_det)
              <a href="" class="text-white">	{{$notice_det->notice}}</a>
              @if (!$loop->last)
        &nbsp;|&nbsp;
    @endif              
            
            @endforeach
		

</marquee>





</div></div>

  </div>   

     

     

     

 </div>    

</div>     

 

 </section>
 @endif