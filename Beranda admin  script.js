
//<!-------------- NAVBAR STICKY SECTION ----------------->
const header = document.querySelector("header");
window.addEventListener("scroll", function() {
  header.classList.toggle("sticky", window.scrollY > 60)
});




//<!------------------- LOGIN/REGISTER BUTTON ---------------->
// Menggunakan JavaScript untuk menangani klik pada tombol login
document.getElementById('loginButton').addEventListener('click', function() {
  window.location.href = 'login.html';
});




//<!------------------- HOME SECTION ---------------->
const cardsData = {
  popular: [
    { title: 'Candi Borobudur', location: 'Magelang, Jawa Tengah', rating: 4.7, imgSrc: 'image/borobudur.jpg', detailsUrl: 'Candi borobudur.php'},
    { title: 'Goa Gong Pacitan', location: 'Pacitan, Jawa Timur', rating: 4.4, imgSrc: 'image/goa.png', detailsUrl: 'Goa Gong Pacitan.php' },
    { title: 'Candi Prambanan', location: 'Yogyakarta, Jawa Tengah', rating: 4.7, imgSrc: 'image/candi.jpg', detailsUrl: 'candi prambanan.php'},
    { title: 'King Kong Hill', location: 'Malang, Jawa Timur', rating: 4.7, imgSrc: 'image/bromo bg.png', detailsUrl: 'King Kong Hill.php'},
    { title: 'Pulau Komodo', location: 'Pulau, NTT', rating: 4.4, imgSrc: 'image/komodo.jpg', detailsUrl: '#' },
    { title: 'Rammang Rammang', location: 'Maros, Sulawesi Selatan', rating: 4.7, imgSrc: 'image/rammang bg.jpg' , detailsUrl: '#'},
    { title: 'Piaynemo', location: 'Sorong, Papua Barat Daya', rating: 4.4, imgSrc: 'image/raja\ ampat-bg.png', detailsUrl: '#'},
    { title: 'Pura Luhur Uluwatu', location: 'Pecatu, Bali', rating: 4.6, imgSrc: 'image/pura luhur.jpg' , detailsUrl: '#'},
    { title: 'Pink Beach', location: 'Manggarai Barat, NTT', rating: 4.6, imgSrc: 'image/pink beach bg.jpg', detailsUrl: '#'},
    { title: 'Banyumala', location: 'Buleleng, Bali', rating: 4.6, imgSrc: 'image/banyumala.jpg', detailsUrl: '#'},
    { title: 'Labuan Bajo', location: 'Manggarai Barat, NTT', rating: 4.7, imgSrc: 'image/labuan bajoo.jpg', detailsUrl: '#'},
    { title: 'Sabana Ollon', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.8, imgSrc: 'image/ollon.png', detailsUrl: '#'},
    { title: 'Gunung Ijen', location: 'Banyuwangi, Jawa Timur', rating: 4.7, imgSrc: 'image/ijen.jpg', detailsUrl: '#'},
    { title: 'Tumpak Sewu', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/sewu.jpg', detailsUrl: '#'},
    { title: 'Pulau Samosir', location: 'Pulau Samosir, Sumatera Utara', rating: 4.6, imgSrc: 'image/samosir bg.jpg', detailsUrl: '#'},
    { title: 'Waerebo Village', location: 'Kepulauan Manggarai, NTT', rating: 4.7, imgSrc: 'image/waerebo.jpg', detailsUrl: '#'},
    { title: 'Kuburan Batu Lemo', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.6, imgSrc: 'image/kuburan.jpg', detailsUrl: '#'},
    { title: 'Nglirip', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/Nglirip.png', detailsUrl: '#'},
    { title: 'Nusa Penida', location: 'Klungkung, Bali', rating: 4.8, imgSrc: 'image/Nusa Penida.jpg', detailsUrl: '#'},
    { title: 'Lorentz', location: 'Jayawijaya, Papua', rating: 4.4, imgSrc: 'image/Lorentz6.jpg', detailsUrl: '#'},
  ],

  pulau: [
    { title: 'Pulau Komodo', location: 'Pulau, NTT', rating: 4.4, imgSrc: 'image/komodo.jpg' },
    { title: 'Labuan Bajo', location: 'Manggarai Barat, NTT', rating: 4.7, imgSrc: 'image/labuan bajoo.jpg' },
    { title: 'Nusa Penida', location: 'Klungkung, Bali', rating: 4.8, imgSrc: 'image/Nusa Penida.jpg' },
    { title: 'Piaynemo', location: 'Sorong, Papua Barat Daya', rating: 4.4, imgSrc: 'image/raja\ ampat-bg.png' },
    { title: 'Pulau Samosir', location: 'Pulau Samosir, Sumatera Utara', rating: 4.6, imgSrc: 'image/samosir bg.jpg' },
  ],

  danau: [
    { title: 'Lorentz', location: 'Jayawijaya, Papua', rating: 4.4, imgSrc: 'image/Lorentz6.jpg'},
  ],
  pantai: [
    { title: 'Pink Beach', location: 'Manggarai Barat, NTT', rating: 4.6, imgSrc: 'image/pink beach bg.jpg'},
  ],
  gunung: [
    { title: 'Lembah Ollon', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.8, imgSrc: 'image/ollon.png' },
    { title: 'Gunung Ijen', location: 'Banyuwangi, Jawa Timur', rating: 4.7, imgSrc: 'image/ijen.jpg' },
    { title: 'Waerebo Village', location: 'Kepulauan Manggarai, NTT', rating: 4.7, imgSrc: 'image/waerebo.jpg' },
    { title: 'King Kong Hill', location: 'Malang, Jawa Timur', rating: 4.7, imgSrc: 'image/bromo bg.png', detailsUrl: 'King Kong Hill.php'},
  ],
  budaya: [
    { title: 'Kuburan Batu Lemo', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.6, imgSrc: 'image/kuburan.jpg' },
    { title: 'Candi Borobudur', location: 'Magelang, Jawa Tengah', rating: 4.7, imgSrc: 'image/borobudur.jpg', detailsUrl: 'Candi borobudur.php'},
    { title: 'Candi Prambanan', location: 'Yogyakarta, Jawa Tengah', rating: 4.7, imgSrc: 'image/candi.jpg', detailsUrl: 'candi prambanan.php'},
    { title: 'Pura Luhur Uluwatu', location: 'Pecatu, Bali', rating: 4.6, imgSrc: 'image/pura luhur.jpg'},
  ],
  AirTerjun: [
    { title: 'Nglirip', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/Nglirip.png'},
    { title: 'Tumpak Sewu', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/sewu.jpg'},
    { title: 'Banyumala', location: 'Buleleng, Bali', rating: 4.6, imgSrc: 'image/banyumala.jpg'},
  ],
};
let currentEditCardIndex;
let currentCategory = 'popular';
let hiddenCards = [];
let currentIndex = 4;

function editCard(title) {
  const cards = cardsData[currentCategory];
  currentEditCardIndex = cards.findIndex(card => card.title === title);
  const cardToEdit = cards[currentEditCardIndex];

  document.getElementById('editImgSrc').value = '';
  document.getElementById('editTitle').value = cardToEdit.title;
  document.getElementById('editLocation').value = cardToEdit.location;

  document.getElementById('editModal').style.display = 'block';
}

document.querySelector('.close-home').addEventListener('click', () => {
  document.getElementById('editModal').style.display = 'none';
});

window.addEventListener('click', (event) => {
  if (event.target === document.getElementById('editModal')) {
    document.getElementById('editModal').style.display = 'none';
  }
});

document.getElementById('editForm').addEventListener('submit', (event) => {
  event.preventDefault();

  const fileInput = document.getElementById('editImgSrc');
  const updatedTitle = document.getElementById('editTitle').value;
  const updatedLocation = document.getElementById('editLocation').value;

  if (fileInput.files && fileInput.files[0]) {
    const reader = new FileReader();
    reader.onload = function(e) {
      const updatedImgSrc = e.target.result;

      cardsData[currentCategory][currentEditCardIndex] = {
        ...cardsData[currentCategory][currentEditCardIndex],
        imgSrc: updatedImgSrc,
        title: updatedTitle,
        location: updatedLocation
      };

      document.getElementById('editModal').style.display = 'none';
      showCategory(currentCategory);
    };
    reader.readAsDataURL(fileInput.files[0]);
  } else {
    cardsData[currentCategory][currentEditCardIndex] = {
      ...cardsData[currentCategory][currentEditCardIndex],
      title: updatedTitle,
      location: updatedLocation
    };

    document.getElementById('editModal').style.display = 'none';
    showCategory(currentCategory);
  }
});

function deleteCard(title) {
  console.log('Deleting card with title:', title); 
  const cards = cardsData[currentCategory];
  
  const cardIndex = cards.findIndex(card => card.title === title);
  
  if (cardIndex !== -1) {
    console.log('Card found at index:', cardIndex);
    cards.splice(cardIndex, 1);
    
    showCategory(currentCategory);
  } else {
    console.log('Card not found');
  }
}


function showCategory(category) {
  currentCategory = category;
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
        <div class="card-actions-home">
          <i class="fas fa-edit edit-icon" onclick="editCard('${card.title}')"></i>
          <i class="fas fa-trash-alt delete-icon" onclick="deleteCard('${card.title}')"></i>
        </div>
      </div>
    `;
    cardsContainer.appendChild(cardElement);
  });

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




//<!------------------- PANDUAN SECTION ---------------->
document.addEventListener('DOMContentLoaded', function () {
  var modal = document.getElementById("modal");
  var modalIcon = document.getElementById("modal-icon");
  var modalTitle = document.getElementById("modal-title");
  var modalDescription = document.getElementById("modal-description");
  var span = document.getElementsByClassName("close")[0];

  document.querySelectorAll('.value-item').forEach(function (item) {
    item.addEventListener('click', function () {
      var iconClass = this.getAttribute('data-icon');
      var title = this.getAttribute('data-title');
      var description = this.getAttribute('data-description');

      modalIcon.className = 'modal-icon ' + iconClass;
      modalTitle.innerText = title;
      modalDescription.innerHTML = description;

      modal.style.display = "block";
    });
  });

  span.onclick = function () {
    modal.style.display = "none";
  }

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
});





//<!------------------- (MODAL) REKOMENDASI SECTION ---------------->
// JavaScript untuk mengatur modal
var modal = document.getElementById('infoModal-recommendation');
var btn = document.getElementById("infoButton-recommendation");
var span = document.getElementsByClassName("close-recommendation")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}





// about section
document.getElementById('editAboutButton').addEventListener('click', () => {
  const aboutDescription = document.getElementById('aboutDescription').innerHTML.replace(/<br\s*[\/]?>/gi, "\n");
  document.getElementById('editAboutText').value = aboutDescription;
  document.getElementById('editAboutModal').style.display = 'block';
});

document.querySelector('.close-about').addEventListener('click', () => {
  document.getElementById('editAboutModal').style.display = 'none';
});

window.addEventListener('click', (event) => {
  if (event.target === document.getElementById('editAboutModal')) {
    document.getElementById('editAboutModal').style.display = 'none';
  }
});

document.getElementById('editAboutForm').addEventListener('submit', (event) => {
  event.preventDefault();
  const updatedAboutText = document.getElementById('editAboutText').value.replace(/\n/g, "<br>");
  document.getElementById('aboutDescription').innerHTML = updatedAboutText;
  document.getElementById('editAboutModal').style.display = 'none';
});



// wisata  section
 function openEditModal(name, location, image, rating) {
  document.getElementById('wisataName').value = name;
  document.getElementById('wisataLocation').value = location;
  document.getElementById('wisataImage').setAttribute('value', image);
  document.getElementById('wisataRating').value = rating;
  document.getElementById('modalEditWisata').style.display = 'block';
}

var modalEditWisata = document.getElementById('modalEditWisata');
var closeModalEditWisata = document.getElementById('closeModalEditWisata');

closeModalEditWisata.onclick = function() {
  modalEditWisata.style.display = 'none';
}

window.onclick = function(event) {
  if (event.target == modalEditWisata) {
    modalEditWisata.style.display = 'none';
  }
}

function deleteCard(element) {
  element.closest('.card-Wisata').remove();
}