

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
    const readMoreLink = document.getElementById("readMoreLink");

    const isHidden = dots.style.display === "none";
    dots.style.display = isHidden ? "inline" : "none";
    moreText.style.display = isHidden ? "none" : "inline";
    readMoreLink.textContent = isHidden ? "Read More" : "Read Less";
  }



//<!------------------ HOME SECTION ------------------>
const cardsData = {
  popular: [
    { title: 'Malino', location: 'Jl. Bau Massepe, Labukkang', rating: 4.7, imgSrc: 'image/malino.jpg', detailsUrl: '#' },
    { title: 'Air terjun Biroro', location: 'Jl. Latassakka, Lumpue', rating: 4.6, imgSrc: 'image/Air terjun Biroro.jpg', detailsUrl: '#'  },
    { title: 'Lembah Ramma', location: 'Watang Soreang, Soreang', rating: 4.6, imgSrc: 'image/lembah ramma.jpg', detailsUrl: '#'  },
    { title: 'Air terjun Parangloe', location: 'Lumpue, Bacukiki Barat', rating: 4.6, imgSrc: 'image/air terjun parangloe.jpg', detailsUrl: '#'  },
    { title: 'Holyland Malino', location: 'Lapangan Andi Makkasau', rating: 4.6, imgSrc: 'image/Holyland Malino.jpg', detailsUrl: '#'  },
    { title: 'Danau Tanralili', location: 'Lapangan Andi Makkasau', rating: 4.6, imgSrc: 'image/danau tanralili.jpg', detailsUrl: '#'  },
    { title: 'Air terjun Takapala', location: 'Lapangan Andi Makkasau', rating: 4.6, imgSrc: 'image/Air terjun takapala.png', detailsUrl: '#'  },
  ],
};

let currentIndex = 0;
let hiddenCards = [];

function showCategory(category) {
    const cardsContainer = document.getElementById('cards');
    cardsContainer.innerHTML = '';

    const categoryCards = cardsData[category];
    categoryCards.forEach(card => {
        const cardElement = document.createElement('div');
        cardElement.className = 'card';
        cardElement.innerHTML = `
            <img src="${card.imgSrc}" alt="${card.title}">
            <div class="card-content">
                <div class="rating-badge">
                    <i class="fas fa-star"></i>
                    <span>${card.rating}</span>
                </div>
                <h3>${card.title}</h3>
                <p class="location">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    ${card.location}
                </p>
                <a href="${card.detailsUrl}">
                    <button class="details-btn">Details</button>
                </a>            
            </div>
        `;
        cardsContainer.appendChild(cardElement);
    });

    // Mengatur tombol "Show More"
    currentIndex = 4;
    hiddenCards = Array.from(cardsContainer.querySelectorAll('.card'));
    hiddenCards.forEach((card, index) => {
        if (index >= 4) {
            card.classList.add('hidden');
        }
    });

    if (hiddenCards.length > 4) {
        document.getElementById('show-more-btn').style.display = 'block';
    } else {
        document.getElementById('show-more-btn').style.display = 'none';
    }

    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`.filter-btn[onclick="showCategory('${category}')"]`).classList.add('active');
}

document.addEventListener("DOMContentLoaded", () => {
    const showMoreBtn = document.getElementById("show-more-btn");

    showMoreBtn.addEventListener("click", () => {
        for (let i = 0; i < 4 && currentIndex < hiddenCards.length; i++, currentIndex++) {
            hiddenCards[currentIndex].classList.remove("hidden");
        }

        if (currentIndex >= hiddenCards.length) {
            showMoreBtn.style.display = 'none';
        }
    });

    // Tampilkan kategori default
    showCategory('popular');
});