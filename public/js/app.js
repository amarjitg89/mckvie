const scrollBtn = document.getElementById("scrollTopBtn");
    const progressCircle = document.querySelector(".progressscroll");
    const radius = 25; 
    const circumference = 2 * Math.PI * radius;

    progressCircle.style.strokeDasharray = circumference;
    progressCircle.style.strokeDashoffset = circumference;

    // Show/hide button + update progress on scroll
    window.addEventListener("scroll", () => {
      const scrollTop = window.scrollY;
      const docHeight = document.documentElement.scrollHeight - window.innerHeight;
      const progress = scrollTop / docHeight;

      const offset = circumference - progress * circumference;
      progressCircle.style.strokeDashoffset = offset;

      // Show button after 200px scroll
      if (scrollTop > 200) {
        scrollBtn.classList.add("show1");
      } else {
        scrollBtn.classList.remove("show1");
      }
    });

    // Scroll to top on click
    scrollBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });







let bottom_head = document.querySelector(".sticky_header");

window.addEventListener("scroll", () => {
    if (scrollY > 100) {
        bottom_head.classList.add("fixed-top");

    } else {
        bottom_head.classList.remove("fixed-top");
    }
});


let tab_header  = document.querySelector(".tab_header ");

window.addEventListener("scroll", () => {
    if (scrollY > 100) {
        tab_header .classList.add("fixed-top");

    } else {
        tab_header .classList.remove("fixed-top");
    }
});

function readmore() {

    let open = document.getElementById("read");

    open.style = "display: none !important";
    open.style.pointerEvents = "none";
    open.style.opacity = "0";
    open.style.margin = "0";
}

function readless() {
    let open = document.getElementById("read");

    open.style.display = "block";
    open.style.pointerEvents = "auto";
    open.style.opacity = "1";
    open.style.marginTop = "20px";
    // open.style.marginBottom = "20px";
}


Fancybox.bind("[data-fancybox]", {
    // Your custom options
});

// step wizard/////////////

const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
        updateProgressbar();
    });
});

prevBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
        updateProgressbar();
    });
});

function updateFormSteps() {
    formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") &&
            formStep.classList.remove("form-step-active");
    });

    formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
    progressSteps.forEach((progressStep, idx) => {
        if (idx < formStepsNum + 1) {
            progressStep.classList.add("progress-step-active");
        } else {
            progressStep.classList.remove("progress-step-active");
        }
    });

    const progressActive = document.querySelectorAll(".progress-step-active");

    progress.style.width =
        ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}
