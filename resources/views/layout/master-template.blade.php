<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

<!---CSRF TOKEN------>
  <meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<meta name="keywords" content="@yield('metakeywords')">
<meta name="Description" content="@yield('metadescription')">

<link rel="icon" type="image/jpg" href="{{asset('images/fav.jpg')}}">

<!-- Min File --> 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 
<!-- Bootstrap 5 --> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  
  <!-- Font icon -->
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" referrerpolicy="no-referrer" />
  
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
  
 <!-- Font -->
 <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">


 <!-- Fancy Box -->
 <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

 <!-- Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


 <!-- Main css -->

<link href="{{asset('css/style.css')}}?v=30" rel="stylesheet" type="text/css" />
<link href="{{asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" />




 <!-- Lenis smoothscroll -->
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.13/dist/lenis.css">

<!---SweetAlert2------>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
<!--  Header Start--->

@include('layout.inc.header')

@yield('content')

@include('layout.inc.footer')

</body>

 <script src="{{asset('js/app.js')}}"></script>
 
 <script>
     
 const faqs = document.querySelectorAll('.faq-item');

faqs.forEach((faq) => {
    faq.addEventListener('toggle', function () {
        if (this.open) {
            faqs.forEach((item) => {
                if (item !== this) {
                    item.open = false;
                }
            });
        }
    });
});    
     
     
 </script>

<script>

$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
	if ($(window).width() >= 980){	

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
		// do something here
	}	
});  
  
  

// document ready  
});
</script>


<script>




document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
// DOMContentLoaded  end

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script> 


<script>
  
   var counted = 0;
$(window).scroll(function () {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
        $('.count').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },

                {

                    duration: 3000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        counted = 1;
    }

});
    
    
</script>

 <script>
      Fancybox.bind('[data-fancybox="group1"]', {
        //
      });    
    </script>
    
     <script>
      Fancybox.bind('[data-fancybox="gallery"]', {
        //
      });    
    </script>
    
    
<script>
      Fancybox.bind('[data-fancybox="group3"]', {
        //
      });    
    </script> 
    
<script>
      Fancybox.bind('[data-fancybox="ca1"]', {
        //
      });    
    </script>
    
<script>
      Fancybox.bind('[data-fancybox="ca2"]', {
        //
      });    
    </script>    
    
 <script>
      Fancybox.bind('[data-fancybox="ca3"]', {
        //
      });    
    </script> 
    
    
    <script>
      Fancybox.bind('[data-fancybox="ca4"]', {
        //
      });    
    </script>  
    
    

<script>
  $(document).ready(function () {
    var owl = $('.owl-carousel1');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: true,
       margin: 20,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:3,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:3,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>


<script>
  $(document).ready(function () {
    var corporate=$("#doctors").data('count');
    var owl = $('#doctors');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: (corporate >= 6),
       margin: 20,
      autoplay: (corporate >= 6),
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
     // nav: true,
    dots: (corporate >= 6),
      autoplayHoverPause: true,
    //  navText: ["<img src='./images/s-arrow1.svg'>", "<img src='./images/s-arrow2.svg'>"],
      responsive: {
        0: {
          items: 2,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:5,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:5,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>

<script>
  $(document).ready(function () {
    var owl = $('#institute');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: true,
       margin: 20,
      autoplay: true,
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
     // nav: true,
    dots: true,
      autoplayHoverPause: true,
    //  navText: ["<img src='{{asset('images/s-arrow1.svg')}}'>", "<img src='{{asset('images/s-arrow2.svg')}}'>"],
      responsive: {
        0: {
          items: 2,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:5,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:5,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>



<script>
  $(document).ready(function () {
    var owl = $('#accreditations');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: true,
       margin: 20,
      autoplay: false,
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
     // nav: true,
    dots: false,
      autoplayHoverPause: true,
    //  navText: ["<img src='{{asset('images/s-arrow1.svg')}}'>", "<img src='{{asset('images/s-arrow2.svg')}}'>"],
      responsive: {
        0: {
          items: 2,
          mouseDrag: false,
          dots: true,
          autoplay: true,
          touchDrag: true,
        },
        600: {
          items:4,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:4,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>


<script>
  $(document).ready(function () {
    var event_ct=$("#excellence").data('count');
    var owl = $('#excellence');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      //loop: (event_ct>=4),
      
      loop: true,
       margin: 20,
      //autoplay: (event_ct>=4),
      autoplay: true,
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
      nav: (event_ct>=4),
    dots: true,
      autoplayHoverPause: true,
     // navText: ["<img src='./images/s-arrow1.svg'>", "<img src='./images/s-arrow2.svg'>"],
      navText: ["<img src='{{asset('images/s-arrow1.svg')}}'>", "<img src='{{asset('images/s-arrow2.svg')}}'>"],
      responsive: {
        0: {
          items: 1,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:2,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:3,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>

<script>
  $(document).ready(function () {
    var owl = $('#highlights');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: true,
       margin: 20,
      autoplay: true,
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
      nav: true,
    dots: false,
      autoplayHoverPause: true,
      //navText: ["<img src='./images/s-arrow1.svg'>", "<img src='./images/s-arrow2.svg'>"],
      navText: ["<img src='{{asset('images/s-arrow1.svg')}}'>", "<img src='{{asset('images/s-arrow2.svg')}}'>"],
      responsive: {
        0: {
          items: 1,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:2,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:3,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>

<script>
  $(document).ready(function () {
    var owl = $('.owl-carousel2');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: true,
       margin: 20,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:1,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:3,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>


<script>
  $(document).ready(function () {
    var acheiveCount = $('#achievements').data('count');
    var owl = $('#achievements');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: (acheiveCount >= 4),
       margin: 20,
      autoplay: (acheiveCount >= 4),
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
      nav: false,
    dots: (acheiveCount >= 4),
      autoplayHoverPause: true,
    //  navText: ["<img src='./images/s-arrow1.svg'>", "<img src='./images/s-arrow2.svg'>"],
      responsive: {
        0: {
          items: 1,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:3,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:3,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>


<script>
  $(document).ready(function () {
    var recruiters=$("#recruiters").data("count");
    var owl = $('#recruiters');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: (recruiters >= 6),
       margin: 20,
      autoplay: (recruiters >= 6),
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
      nav: false,
    dots: (recruiters >= 6),
      autoplayHoverPause: true,
    //  navText: ["<img src='./images/s-arrow1.svg'>", "<img src='./images/s-arrow2.svg'>"],
      responsive: {
        0: {
          items: 2,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:5,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:5,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>

<script>
  $(document).ready(function () {
    var alumni=$("#alumni").data("count");
    var owl = $('#alumni');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: (alumni>=4),
       margin: 20,
      autoplay: (alumni>=4),
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
      nav: false,
    dots: (alumni>=4),
      autoplayHoverPause: true,
    //  navText: ["<img src='./images/s-arrow1.svg'>", "<img src='./images/s-arrow2.svg'>"],
      responsive: {
        0: {
          items: 1,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:3,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:3,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>


<script>
  $(document).ready(function () {
    var owl = $('#classroom');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: true,
       margin: 20,
      autoplay: true,
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
      nav: false,
    dots: true,
      autoplayHoverPause: true,
    //  navText: ["<img src='./images/s-arrow1.svg'>", "<img src='./images/s-arrow2.svg'>"],
      responsive: {
        0: {
          items: 2,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:4,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:4,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>


<script>
  $(document).ready(function () {
    var lab_ct=$("#lab").data('count');
    var owl = $('#lab');
    owl.owlCarousel({
      // items: 4,
     // stagePadding: 50,
      loop: (lab_ct>=5),
       margin: 20,
      autoplay: (lab_ct>=5),
      autoplayTimeout: 3000,
       smartSpeed: 2000,
            dotsSpeed: 600,
            slideBy: 1,
      nav: false,
    dots: (lab_ct>=5),
      autoplayHoverPause: true,
    //  navText: ["<img src='./images/s-arrow1.svg'>", "<img src='./images/s-arrow2.svg'>"],
      responsive: {
        0: {
          items: 2,
          mouseDrag: false,
          touchDrag: true,
        },
        600: {
          items:4,
			mouseDrag: true,

            touchDrag: true,
        },
        1000: {
          items:4,
			mouseDrag: true,

            touchDrag: true,


        }
      }
    });

  })
</script>






<!-- Lenis smoothscroll -->
  <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
  <script>
    
    const lenis = new Lenis()

lenis.on('scroll', (e) => {
console.log(e)
})

function raf(time) {
lenis.raf(time)
requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
    
</script>

 <script>
      Fancybox.bind('[data-fancybox="group1"]', {
        //
      });    
    </script> 
    
    
 <script>
      Fancybox.bind('[data-fancybox="group2"]', {
        //
      });    
    </script>    
    
    
    
   <script>
      
     Fancybox.bind("[data-fancybox='classroom']", {
  Thumbs: {
    autoStart: false,
     
  }
});
  </script>  
  
  
  <script>
      
     Fancybox.bind("[data-fancybox='lab']", {
  Thumbs: {
    autoStart: false,
     
  }
});
  </script>  
  
  
 <script>
    /**
     * Toggle Read More / Read Less functionality
     */
    function toggleReadMore() {
      const content = document.getElementById('technoticaContent');
      const btnText = document.getElementById('btnText');
      const btnIcon = document.getElementById('btnIcon');
      const btn = document.getElementById('readMoreBtn');

      // Toggle expanded class
      content.classList.toggle('expanded');
      btn.classList.toggle('active');

      if (content.classList.contains('expanded')) {
        btnText.textContent = 'Read Less';
        btnIcon.classList.remove('bi-chevron-down');
        btnIcon.classList.add('bi-chevron-up');
      } else {
        btnText.textContent = 'Read More';
        btnIcon.classList.remove('bi-chevron-up');
        btnIcon.classList.add('bi-chevron-down');

        // Smooth scroll back to section top if collapsed
        content.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    }

    /**
     * Copy Code to Clipboard
     */
    function copyCode() {
      const codeText = document.getElementById('codeSnippet').innerText;
      
      // Fallback copy mechanism for iframe compatibility
      const tempTextArea = document.createElement('textarea');
      tempTextArea.value = codeText;
      document.body.appendChild(tempTextArea);
      tempTextArea.select();
      document.execCommand('copy');
      document.body.removeChild(tempTextArea);

      // Show toast
      const toastEl = document.getElementById('toastMsg');
      toastEl.style.display = 'block';
      setTimeout(() => {
        toastEl.style.display = 'none';
      }, 2500);
    }
  </script> 
  
  
 <script>
    /**
     * Toggle Read More / Read Less functionality
     */
    function toggleReadMore1() {
      const content = document.getElementById('technoticaContent1');
      const btnText = document.getElementById('btnText');
      const btnIcon = document.getElementById('btnIcon');
      const btn = document.getElementById('readMoreBtn1');

      // Toggle expanded class
      content.classList.toggle('expanded');
      btn.classList.toggle('active');

      if (content.classList.contains('expanded')) {
        btnText.textContent = 'Read Less';
        btnIcon.classList.remove('bi-chevron-down');
        btnIcon.classList.add('bi-chevron-up');
      } else {
        btnText.textContent = 'Read More';
        btnIcon.classList.remove('bi-chevron-up');
        btnIcon.classList.add('bi-chevron-down');

        // Smooth scroll back to section top if collapsed
        content.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    }

    /**
     * Copy Code to Clipboard
     */
    function copyCode() {
      const codeText = document.getElementById('codeSnippet').innerText;
      
      // Fallback copy mechanism for iframe compatibility
      const tempTextArea = document.createElement('textarea');
      tempTextArea.value = codeText;
      document.body.appendChild(tempTextArea);
      tempTextArea.select();
      document.execCommand('copy');
      document.body.removeChild(tempTextArea);

      // Show toast
      const toastEl = document.getElementById('toastMsg');
      toastEl.style.display = 'block';
      setTimeout(() => {
        toastEl.style.display = 'none';
      }, 2500);
    }
  </script>  
  
  
  
  
  
   <!-- JavaScript for Intersection Observer Scroll Reveal Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            initScrollReveal();
        });

        /**
         * Setup IntersectionObserver to reveal/hide event divs 
         * based on whether they are in the viewport
         */
        function initScrollReveal() {
            const observerOptions = {
                root: null, 
                rootMargin: '0px 0px -150px 0px', // Adjusted to trigger slightly earlier
                threshold: 0.1 
            };

            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Reveal when scrolling down into view
                        entry.target.classList.add('active');
                    } else {
                        // Hide when scrolling up out of view
                        entry.target.classList.remove('active');
                    }
                });
            }, observerOptions);

            // Observe all cards (including initial ones if you want them to hide on scroll-up)
            const allCards = document.querySelectorAll('.scroll-reveal');
            allCards.forEach(card => {
                revealObserver.observe(card);
            });
        }
    </script> 
  
  


<script>
    
    
    //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
   <!---Course Enquiry Success message---->
     @section('script')
      @if(session('course_message'))
      <script>        
            Swal.fire({
                          icon: 'success',
                          title: 'Success',
                          text: '{{ session('course_message') }}',
                        showConfirmButton:false,
                        timer:2000,
                            }).then(function() {
                        //window.location.href='{{url("/")}}';
                        });
       
      </script>
 @endif 
 <!---Alumni Registration Form Success message---->
     @section('script')
      @if(session('alumni_message'))
      <script>        
            Swal.fire({
                          icon: 'success',
                          title: 'Success',
                          text: '{{ session('alumni_message') }}',
                        showConfirmButton:false,
                        timer:2000,
                            }).then(function() {
                        //window.location.href='{{url("/")}}';
                        });
       
      </script>
 @endif
 <!---Grievance Form Success message---->
     @section('script')
      @if(session('grievance_message'))
      <script>        
            Swal.fire({
                          icon: 'success',
                          title: 'Success',
                          text: '{{ session('grievance_message') }}',
                        showConfirmButton:false,
                        timer:2000,
                            }).then(function() {
                        //window.location.href='{{url("/")}}';
                        });
       
      </script>
 @endif
 @yield('script')   

</html>