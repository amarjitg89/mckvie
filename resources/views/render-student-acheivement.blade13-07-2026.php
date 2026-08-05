@if ($get_acheivement->isNotEmpty())   

<section class="achivement">
     
     <div class="mainbody_div py-0 ">
         
         <div class="container-fluid p-0 m-0">
             <div class="row m-0 align-items-center" id="counter">
                 
                 
   <div class="col-lg-12 col-md-12 col-12 p-0">
   <div class="mission_bg pb-2">
      <div class="container"> 
   <div class="row m-0 p-0  justify-content-center">
       
   <div class="col-xl-12 col-lg-12 col-sm-12 col-12 px-sm-0">
       
      <div class="row m-0">
          <div class="col-12 px-0">
              <div class="mainhome_title mb-sm-4 mb-3 text-white">Student <span class="fw-normal">Achievements</span></div>
          </div>
          
     

<div class="col-xl-12 col-lg-12 col-sm-12 col-12 mb-sm-4 mb-3 px-0">
<div class="owl-carousel owl-theme position-relative" class="owl_main" id="achievements" data-count="{{ $get_acheivement->count() }}">
    
   @foreach ($get_acheivement as $acheivement)

 <div class="item">
     
   <div class="students_achivement_maindiv">
   <div class="students_achivement_img mb-2"><img src="{{asset('images/student-achievements/'.$acheivement->student_image)}}" alt="" class="facultyimg_css rounded-50" ></div>
   
   <div class="students_achivement_name text-start red mb-2 ">{{$acheivement->student_name}}
    @if ($acheivement->batch)
       ({{$acheivement->batch}}) 
    @endif
    
   </div>
   <div class="students_achivement_details">{!!$acheivement->description!!}

<span class="fw-bold red">{{$acheivement->special_note}}</span>




</div>
       
       
   </div>  
     
     
   
   

</div>
    
   @endforeach
{{-- <div class="item">
     
   <div class="students_achivement_maindiv">
   <div class="students_achivement_img mb-2"><img src="{{asset('images/student-achievements/NancyBinani_New1-1.jpeg')}}" alt="" class="facultyimg_css rounded-50" ></div>
   
   <div class="students_achivement_name text-start red mb-2 ">Nancy Binani</div>
   <div class="students_achivement_details">Software Engineer,
Big Binary, 18 LPA
CSE 2018-22 Batch



<span class="fw-bold red">Highest Package Received</span>




</div>
       
       
   </div>  
     
     
   
   

</div>

<div class="item">
     
   <div class="students_achivement_maindiv">
   <div class="students_achivement_img mb-2"><img src="{{asset('images/student-achievements/SuchiKumari.png')}}" alt="" class="facultyimg_css rounded-50" ></div>
   
   <div class="students_achivement_name text-start red mb-2 ">Suchi Kumari (2020-24)</div>
   <div class="students_achivement_details"><span class="fw-bold red">Winner(District)</span>, “Secure Bengal-2021” – Learning and Hackathon Challenge, CyberSecurity Centre of Excellence, Govt.WB in association with NASSCOM.




</div>
       
       
   </div>  
     
     
   
   

</div>

 <div class="item">
     
   <div class="students_achivement_maindiv">
   <div class="students_achivement_img mb-2"><img src="{{asset('images/student-achievements/sayan_dutta.jpeg')}}" alt="" class="facultyimg_css rounded-50" ></div>
   
   <div class="students_achivement_name text-start red mb-2 ">Sayan Kumar Dutta (2020-24)

</div>
   <div class="students_achivement_details"><span class="fw-bold red">Highest achievable grade ‘S’ Introduction to IoT</span>,  Stanford University on 03/03/2021.






</div>
       
       
   </div>  
     
     
   
   

</div>

<div class="item">
     
   <div class="students_achivement_maindiv">
   <div class="students_achivement_img mb-2"><img src="{{asset('images/student-achievements/Tithi-Jana.jpeg')}}" alt="" class="facultyimg_css rounded-50" ></div>
   
   <div class="students_achivement_name text-start red mb-2 ">Tithi Jana (2020-24)


</div>
   <div class="students_achivement_details"><span class="fw-bold red">5% Topper (Jul-Oct’21)</span>, NPTEL Certification Course “Ethics in Engineering Practice”.








</div>
       
       
   </div>  
     
     
   
   

</div> --}}

    
</div> 
    
  
    
</div>



 
          
      </div> 
       
       
   </div>    
       
     
       
       
   
       
   </div>    
    </div>   
       
       
   </div>              
                 
    </div>     
           
             
           
           
        
           
           
             </div>
             
             
          
             
             
         </div>
         
     </div>
     
     
  </section>

<script>
$(document).ready(function() {
    // 0. Assign data-item-index to original cards before Owl Carousel clones them
    $('.students_achivement_maindiv').each(function(index) {
        $(this).attr('data-item-index', index);
    });

    function checkAndAddReadMore() {
        console.log('checkAndAddReadMore running. Total details count:', $('.students_achivement_details').length);
        $('.students_achivement_details').each(function(index) {
            var $el = $(this);
            // Skip if already added
            if ($el.next('.read-more-btn').length > 0) {
                console.log('Item', index, 'already has read-more button.');
                return;
            }
            
            var scrollH = this.scrollHeight;
            var clientH = this.clientHeight;
            console.log('Item', index, ':', $el.text().substring(0, 30), '... scrollHeight:', scrollH, 'clientHeight:', clientH);
            
            // Check if scrollHeight is greater than clientHeight
            if (scrollH > clientH + 2) {
                $el.after('<a href="#" class="read-more-btn text-decoration-none">Read More</a>');
                console.log('-> Read More button added to item', index);
            }
        });
    }

    // 1. Detect overflow of 3 lines and append button on DOM ready
    var $carousel = $('#achievements');
    if ($carousel.length > 0) {
        var originalStyle = $carousel.attr('style') || '';
        $carousel.css({
            position: 'absolute',
            visibility: 'hidden',
            display: 'block'
        });

        checkAndAddReadMore();

        $carousel.attr('style', originalStyle);
    } else {
        console.warn('Carousel #achievements not found on DOM ready.');
        checkAndAddReadMore();
    }

    // 2. Also run on window load to handle delayed styling or font rendering
    $(window).on('load', function() {
        console.log('Window load event triggered.');
        checkAndAddReadMore();
        $('#achievements').trigger('refresh.owl.carousel');
    });

    // 3. Handle read more / less toggle with clone synchronization
    $(document).on('click', '.read-more-btn', function(e) {
        e.preventDefault();
        var $btn = $(this);
        var $card = $btn.closest('.students_achivement_maindiv');
        var itemIndex = $card.attr('data-item-index');
        var $carousel = $('#achievements');

        // Find all matching cards (including cloned versions) across the carousel
        var $relatedCards = $('.students_achivement_maindiv[data-item-index="' + itemIndex + '"]');
        var $relatedDetails = $relatedCards.find('.students_achivement_details');
        var $relatedBtns = $relatedCards.find('.read-more-btn');

        if ($relatedDetails.hasClass('expanded')) {
            // Collapse all related cards
            $relatedDetails.removeClass('expanded');
            $relatedBtns.text('Read More');

            // Resume Owl Carousel autoplay (if count is high enough to autoplay)
            var count = parseInt($carousel.data('count')) || 0;
            if (count >= 4) {
                $carousel.trigger('play.owl.autoplay', [3000]);
            }
        } else {
            // Expand all related cards
            $relatedDetails.addClass('expanded');
            $relatedBtns.text('Read Less');

            // Pause Owl Carousel autoplay while reading
            $carousel.trigger('stop.owl.autoplay');
        }

        // Refresh Owl Carousel to re-calculate container/item heights
        $carousel.trigger('refresh.owl.carousel');
    });
});
</script>
  @endif