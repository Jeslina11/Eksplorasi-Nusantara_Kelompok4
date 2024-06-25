 
//<!------------------- HOME 3 SECTION --------------------->
const leftArrow = document.querySelector('.arrow.left');
const rightArrow = document.querySelector('.arrow.right');
const carouselWrapper = document.querySelector('.carousel-wrapper');

let currentIndex = 0;

leftArrow.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        carouselWrapper.style.transform = `translateX(-${currentIndex * 320}px)`;
    }
});

rightArrow.addEventListener('click', () => {
    if (currentIndex < carouselWrapper.children.length - 3) {
        currentIndex++;
        carouselWrapper.style.transform = `translateX(-${currentIndex * 320}px)`;
    }
});


//<!------------------- NAVBAR STICKY ---------------->
// Kode JavaScript untuk membuat header tetap
const header = document.querySelector("header");
window.addEventListener("scroll", function() {
header.classList.toggle("sticky", window.scrollY > 60)
});