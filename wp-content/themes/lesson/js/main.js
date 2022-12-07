let slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let slides = document.getElementsByClassName("myslide");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (let slide of slides) {
    slide.style.display = "none";
  }
  slides[slideIndex - 1].style.display = "flex";
}
var timer = 0;
makeTimer();
function makeTimer() {
  clearInterval(timer);
  timer = setInterval(function () {
    slideIndex++;
    showSlides(slideIndex);
  }, 5000);
}

let offset = 0; //смещение от левого края
const sliderLine = document.querySelector(".slider-item-prev-next");
document
  .querySelector(".of-us_arrow_next")
  .addEventListener("click", function () {
    offset = offset + 320;
    if (offset > 640) {
      offset = 0;
    }
    sliderLine.style.right = offset + "px";
  });

document
  .querySelector(".of-us_arrow_prew")
  .addEventListener("click", function () {
    offset = offset - 320;
    if (offset < 0) {
      offset = 640;
    }
    sliderLine.style.right = offset + "px";
  });
