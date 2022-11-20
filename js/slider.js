const buttonLeft = document.querySelector(".slider__left");
const buttonRight = document.querySelector(".slider__right");
const slider = document.querySelector(".slider__list");
const slides = slider.childElementCount;
let currentSlide = 1;

const move = () => slider.style.transform = `translateX(${(currentSlide - 1) * -100}vw)`;

const moveRight = () => {
    currentSlide < slides ? currentSlide++ : currentSlide = 1;
    move();
}

const moveLeft = () => {
    currentSlide > 1 ? currentSlide-- : currentSlide = slides;
    move();
}

buttonLeft.addEventListener("click", () => {
});

buttonRight.addEventListener("click", () => moveRight());

setInterval(() => {
    moveRight();
}, 4000);
