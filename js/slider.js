const buttonLeft = document.querySelector(".slider__left");
const buttonRight = document.querySelector(".slider__right");
const slider = document.querySelector(".slider__list");
const slides = slider.childElementCount;
let currentSlide = 1;

const move = index => {
    index > 0 ? currentSlide < slides ? currentSlide++ : currentSlide = 1 : currentSlide > 1 ? currentSlide-- : currentSlide = slides;
    slider.style.transform = `translateX(${(currentSlide - 1) * -100}vw)`;
}

buttonLeft.addEventListener("click", () => move(-1));
buttonRight.addEventListener("click", () => move(1));

setInterval(() => {
    move(1);
}, 4000);
