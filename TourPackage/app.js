//for slideshow
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000);
    }


    //guest counter

    const addBtn = document.querySelector(".increment-btn");
    const minusBtn = document.querySelector(".decrement-btn");

    const addBtn2 = document.querySelector(".increment-btn2");
    const minusBtn2 = document.querySelector(".decrement-btn2");

    const int1 = document.querySelector(".number1");
    const int2 = document.querySelector(".number2");
    let integer1 = 1;
    let integer2 = 0;

    addBtn.addEventListener("click", () => {
           integer1 += 1;
           int1.value = integer1;  
           
           if(integer1 < 1){
                  int1.value = 1;
           }
    })

    minusBtn.addEventListener("click", () => {
           integer1 -= 1;
           int1.value = integer1;

              if(integer1 < 1){
                  int1.value = 1;
           }
    })

    addBtn2.addEventListener("click", () => {
           integer2 += 1;
           int2.value = integer2; 
           
              if(integer2 < 1){
                  int2.value = 0;
           }
    })

    minusBtn2.addEventListener("click", () => {
           integer2 -= 1;
           int2.value = integer2;

            if(integer2 < 1){
             int2.value = 0;
           }
    })






