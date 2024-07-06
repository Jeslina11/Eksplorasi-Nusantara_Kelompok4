

//<!---------------- LOGIN/REGISTER BUTTON ---------------->
  document.getElementById('loginButton').addEventListener('click', function() {
    window.location.href = 'logout.php';
  });




//<!-------------- NAVBAR STICKY SECTION ----------------->
const header = document.querySelector("header");
window.addEventListener("scroll", function() {
  header.classList.toggle("sticky", window.scrollY > 60)
});



//<!------------------- HEAD SECTIION ---------------->
function toggleReadMore(event) {
  event.preventDefault();
  var dots = document.getElementById("dots");
  var moreText = document.querySelector(".more-content");
  var readMoreLink = event.currentTarget;

  console.log("Dots display style:", dots.style.display);
  console.log("More text display style:", moreText.style.display);
  console.log("Read more link text:", readMoreLink.textContent);

  if (dots.style.display === "none") {
      dots.style.display = "inline";
      readMoreLink.textContent = "Read More";
      moreText.style.display = "none";
  } else {
      dots.style.display = "none";
      readMoreLink.textContent = "Read Less";
      moreText.style.display = "inline";
  }

  console.log("After click - Dots display style:", dots.style.display);
  console.log("After click - More text display style:", moreText.style.display);
  console.log("After click - Read more link text:", readMoreLink.textContent);
}




//<!------------------ GALLERY SECTION --------------------->
var carousel = document.getElementById('carousel');
var images = carousel.getElementsByTagName('img');

for (var i = 0; i < images.length; i++) {
    images[i].addEventListener('click', function () {
        openModal(this);
    });
}

var modal = document.getElementById('myModal');
var modalImg = document.getElementById('modal-img');

function openModal(image) {
    modal.style.display = 'block'; 
    modalImg.src = image.src; 
}

var closeBtn = document.getElementsByClassName('close')[0];
closeBtn.onclick = function () {
    modal.style.display = 'none'; 
}


firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".gallery i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
let scrollWidth = carousel.scrollWidth - carousel.clientWidth; 
arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
icon.addEventListener("click", () => {
let firstImgWidth = firstImg.clientWidth + 14; 
carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
setTimeout(() => showHideIcons(), 60); 
});
});

const autoSlide = () => {
if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

positionDiff = Math.abs(positionDiff); 
let firstImgWidth = firstImg.clientWidth + 14;
let valDifference = firstImgWidth - positionDiff;

if(carousel.scrollLeft > prevScrollLeft) { 
return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}
carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
isDragStart = true;
prevPageX = e.pageX || e.touches[0].pageX;
prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
if(!isDragStart) return;
e.preventDefault();
isDragging = true;
carousel.classList.add("dragging");
positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
carousel.scrollLeft = prevScrollLeft - positionDiff;
showHideIcons();
}

const dragStop = () => {
isDragStart = false;
carousel.classList.remove("dragging");

if(!isDragging) return;
isDragging = false;
autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);




//<!------------------------ LOCATION: JAM OPERASIONAL ------------------------>
function checkOpenStatus() {
  const now = new Date();
  const currentDay = now.getDay(); 
  const currentTime = now.getHours() * 60 + now.getMinutes();
  
  const openingTime = 5 * 60 + 30;
  const closingTime = 19 * 60;
  
  const statusElement = document.getElementById('status');
  
  if (currentTime >= openingTime && currentTime <= closingTime) {
      statusElement.textContent = 'Buka';
      statusElement.classList.add('open');
      statusElement.classList.remove('closed');
  } else {
      statusElement.textContent = 'Tutup';
      statusElement.classList.add('closed');
      statusElement.classList.remove('open');
  }
}

checkOpenStatus();

setInterval(checkOpenStatus, 60000);




//<!------------------------ INFO SECTION ------------------------>
  document.addEventListener('DOMContentLoaded', function() {
var modal = document.getElementById("modal-info5");
var btn = document.querySelector(".modal-open5");
var span = document.querySelector(".modal-close5");

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}
});




//<!----------------- TESTIMONIAL SECTION ------------------->
  $(document).ready(function(){
  $('.testimonials-container').owlCarousel({
  loop:true,
  autoplay:true,
  autoplayTimeout:3000,
  margin:10,
  nav:true,
  navText:["<i class='fa-solid fa-arrow-left'></i>",
        "<i class='fa-solid fa-arrow-right'></i>"],
  responsive:{
  0:{
    items:1,
    nav:false
  },
  600:{
    items:1,
    nav:true
  },
  768:{
    items:2
  },
  }
  });
  });




//<!------------------------ QUESTIONS SECTION --------------------->
document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.faq-item');

    items.forEach(item => {
        item.querySelector('.faq-question').addEventListener('click', function() {
            item.classList.toggle('active');
        });
    });
});
