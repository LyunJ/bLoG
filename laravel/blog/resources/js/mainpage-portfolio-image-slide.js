var slideIndex = 0; //slide index

// HTML 로드가 끝난 후 동작
window.onload = function() {
    showSlides(slideIndex);
    // Auto Move Slide
    // var sec = 3000;
    // setInterval(function() {
    //     slideIndex++;
    //     showSlides(slideIndex);
    // }, sec);
};

// Next/previous controls
function moveSlides(n) {
    slideIndex = slideIndex + n;
    showSlides(slideIndex);
}

// Thumbnail image controls
function currentSlide(n) {
    slideIndex = n;
    showSlides(slideIndex);
}

function showSlides(n) {
    var slides = document.getElementsByClassName("portfolio-content-block");
    var dots = document.getElementsByClassName("dot");
    var size = slides.length;

    if (n + 1 > size) {
        slideIndex = 0;
        n = 0;
    } else if (n < 0) {
        slideIndex = size - 1;
        n = size - 1;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[n].style.display = "flex";
    dots[n].className += " active";
}

prev = document.getElementsByClassName("prev");
for (var i = 0; i < prev.length; i++) {
    prev[i].addEventListener("click", function() {
        moveSlides(-1);
    });
}

next = document.getElementsByClassName("next");
for (var i = 0; i < next.length; i++) {
    next[i].addEventListener("click", function() {
        moveSlides(-1);
    });
}
