
//<!-------------- NAVBAR STICKY SECTION ----------------->
const header = document.querySelector("header");
window.addEventListener("scroll", function() {
  header.classList.toggle("sticky", window.scrollY > 60)
});



//<!------------------ READ MORE ------------------>

  function toggleReadMore(event) {
    event.preventDefault();
    const dots = document.getElementById("dots");
    const moreText = document.querySelector(".more-content");
    const readMoreLink = document.querySelector(".read-more");

    const isHidden = dots.style.display === "none";
    dots.style.display = isHidden ? "inline" : "none";
    moreText.style.display = isHidden ? "none" : "inline";
    readMoreLink.textContent = isHidden ? "Read More" : "Read Less";
  }




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




//<!------------------ HOME SECTION ------------------>

const cardsData = {
  popular: [
    { title: 'Citraland Waterpark', location: 'Jl. Bau Massepe, Labukkang', rating: 4.7, imgSrc: 'image/Salinan citraland waterpark manado.png', detailsUrl: '' },
    { title: 'Pulau Manadotua', location: 'Jl. Latassakka, Lumpue', rating: 4.6, imgSrc: 'image/Salinan pulau manadotua.png', detailsUrl: ''  },
    { title: 'Pantai Melayang', location: 'Watang Soreang, Soreang', rating: 4.6, imgSrc: 'image/Salinan melayang beach.png', detailsUrl: ''  },
    { title: 'Bunaken', location: 'Lumpue, Bacukiki Barat', rating: 4.6, imgSrc: 'image/bunaken bg.jpg', detailsUrl: ''  },
  ],
};
 
let currentIndexHome = 0;
  let hiddenCards = [];
  
  function showCategory(category) {
    const cardsContainer = document.getElementById('cards-home');
    cardsContainer.innerHTML = '';

    const categoryCards = cardsData[category];
    categoryCards.forEach(card => {
        const cardElement = document.createElement('div');
        cardElement.className = 'card-home';
        cardElement.innerHTML = `
            <img src="${card.imgSrc}" alt="${card.title}">
            <div class="card-content-home">
                <div class="rating-badge-home">
                    <i class="fas fa-star"></i>
                    <span>${card.rating}</span>
                </div>
                <h3>${card.title}</h3>
                <p class="location-home">
                    <i class="fas fa-map-marker-alt location-icon-home"></i>
                    ${card.location}
                </p>
                <a href="${card.detailsUrl}">
                    <button class="details-btn-home">Details</button>
                </a>
            </div>
        `;
        cardsContainer.appendChild(cardElement);
    });

    // Mengatur tombol "Show More"
    currentIndexHome = 0; // Gunakan currentIndexHome untuk mengatur slider
    hiddenCards = Array.from(cardsContainer.querySelectorAll('.card-home'));
    hiddenCards.forEach((card, index) => {
        if (index >= 4) {
            card.classList.add('hidden-home');
        }
    });

    if (hiddenCards.length > 4) {
        document.getElementById('show-more-btn-home').style.display = 'block';
    } else {
        document.getElementById('show-more-btn-home').style.display = 'none';
    }

    document.querySelectorAll('.filter-btn-home').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`.filter-btn-home[onclick="showCategory('${category}')"]`).classList.add('active');
}


document.addEventListener("DOMContentLoaded", () => {
  const showMoreBtn = document.getElementById("show-more-btn-home");

  showMoreBtn.addEventListener("click", () => {
      for (let i = 0; i < 4 && currentIndex < hiddenCards.length; i++, currentIndex++) {
          hiddenCards[currentIndex].classList.remove("hidden-home");
      }

      if (currentIndex >= hiddenCards.length) {
          showMoreBtn.style.display = 'none';
      }
  });

  showCategory('popular');
});