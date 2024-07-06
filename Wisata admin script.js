
//<!---------------- NAVBAR STICKY SECTION ------------------>
const header = document.querySelector("header");
window.addEventListener("scroll", function() {
  header.classList.toggle("sticky", window.scrollY > 60)
});


//<!--------------------- SEARCH SECTION -------------------->
const data = {
  "Sulawesi Selatan": {
    "Parepare": ["Semua", "Gunung", "Pantai"],
    "Pinrang": ["Semua", "Gunung", "Pantai", "Air Terjun", "Pulau"],
    "Makassar": ["Semua", "Pantai", "Pulau"],
    "Maros": ["Semua", "Gunung", "Air Terjun", "Pulau", "Pantai"],
    "Barru": ["Semua", "Gunung", "Air Terjun", "Pulau", "Pantai"],
    "Tana Toraja": ["Semua", "Gunung", "Air Terjun", "Pulau", "Pantai"],
  },
  "Sulawesi Tenggara": {
    "Kendari": ["Semua", "Gunung", "Pantai"],
  },
  "Sulawesi Barat": {
    "Majene": ["Semua", "Gunung", "Air Terjun", "Pantai"],
    "Mamuju": ["Semua", "Gunung", "Air Terjun", "Pantai"],
    "Polewali": ["Semua", "Gunung", "Air Terjun", "Pulau", "Pantai"],
  },
  "Sulawesi Tengah": {
    "Palu": ["Semua", "Gunung", "Air Terjun", "Pantai"],
    "Poso": ["Semua", "Gunung", "Air Terjun", "Pantai"],
  },
  "Sulawesi Utara": {
    "Manado": ["Semua", "Gunung", "Air Terjun", "Pantai"],
  },

  "Bali": {
    "Denpasar": ["Semua", "Pantai"],
    "Ubud": ["Semua", "Gunung", "Pantai"],
    "Kuta": ["Semua", "Pantai"]
  },
};

const citiesByProvince = {
  "Sulawesi Selatan": ["Parepare", "Pinrang", "Makassar", "Maros", "Barru", "Tana Toraja"],
  "Sulawesi Tengah": ["Palu", "Poso"],
  "Sulawesi Barat": ["Majene", "Mamuju", "Polewali"],
  "Sulawesi Utara": ["Manado", "Boroko", "Tomohon"],
  "Bali": ["Denpasar", "Ubud", "Kuta"],
};

const kotaSelect = document.getElementById('kotaSelect');
const searchButton = document.getElementById('searchButton');

// Mengisi dropdown kota berdasarkan pilihan provinsi
document.getElementById('provinsiSelect').addEventListener('change', function() {
  const selectedProvince = this.value;
  kotaSelect.innerHTML = '<option value="" disabled selected hidden>Pilih Kota</option>';

  if (selectedProvince in citiesByProvince) {
    citiesByProvince[selectedProvince].forEach(function(city) {
      const option = document.createElement('option');
      option.value = city;
      option.textContent = city;
      kotaSelect.appendChild(option);
    });
  }
});

// Event listener untuk tombol Cari
searchButton.addEventListener('click', function() {
  const selectedProvince = document.getElementById('provinsiSelect').value;
  const selectedCity = kotaSelect.value;
  const selectedCategory = document.getElementById('kategoriSelect').value;

  if (selectedProvince && selectedCity && selectedCategory) {
    const availableCategories = data[selectedProvince][selectedCity] || [];

    if (!availableCategories.includes(selectedCategory)) {
      alert(`Kategori ${selectedCategory} tidak tersedia di ${selectedCity}, ${selectedProvince}.`);
      return;
    }

    let url;
    // Menentukan halaman tujuan berdasarkan opsi yang dipilih
    switch (`${selectedProvince}-${selectedCity}-${selectedCategory}`) {
      case "Sulawesi Selatan-Parepare-Semua":
        url = "parepare.html";
        break;
      case "Sulawesi Barat-Polewali-Semua":
        url = "polewali.html";
        break;
      case "Sulawesi Tengah-Palu-Semua":
        url = "palu.html";
        break;
      case "Sulawesi Utara-Manado-Semua":
        url = "manado.html";
        break;
      case "Bali-Ubud-Pantai":
        url = "Bali-Ubud-Pantai.html";
        break;
      default:
        url = ""; 
        break;
    }

    if (url) {
      window.location.href = url;
    } else {
      alert("Halaman belum tersedia untuk pilihan yang Anda buat.");
    }
  } else {
    alert("Silakan pilih Provinsi, Kota, dan Kategori.");
  }
});







// 
document.addEventListener('DOMContentLoaded', () => {
  const editButtons = document.querySelectorAll('.edit-icon');
  const deleteButtons = document.querySelectorAll('.delete-icon');
  const modal = document.getElementById('modal');
  const closeModalButton = document.querySelector('.close-btn');
  const editForm = document.getElementById('edit-form');
  const addCityButton = document.getElementById('addCityButton');
  const cityNameInput = document.getElementById('city-name');
  const provinceNameInput = document.getElementById('province-name');
  const cityImageUploadInput = document.getElementById('city-image-upload');
  const cityIdInput = document.getElementById('city-id');
  const cardsContainer = document.getElementById('cards');

  editButtons.forEach(button => {
    button.addEventListener('click', (event) => {
      const card = event.target.closest('.card');
      const cityId = card.getAttribute('data-id');
      const cityName = card.querySelector('h3').innerText;
      const provinceName = card.querySelector('h5').innerText.split(' ')[0];

      cityIdInput.value = cityId;
      cityNameInput.value = cityName;
      provinceNameInput.value = provinceName;

      modal.style.display = 'block';
    });
  });

  deleteButtons.forEach(button => {
    button.addEventListener('click', (event) => {
      const card = event.target.closest('.card');
      card.remove();
    });
  });

  closeModalButton.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });

  editForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const cityId = cityIdInput.value;
    const cityName = cityNameInput.value;
    const provinceName = provinceNameInput.value;

    let cityImage;
    if (cityImageUploadInput.files.length > 0) {
      cityImage = URL.createObjectURL(cityImageUploadInput.files[0]);
    } else {
      cityImage = ""; // Handle if no new image uploaded
    }

    const card = document.querySelector(`.card[data-id="${cityId}"]`);
    if (card) {
      // Update existing card
      card.querySelector('h3').innerText = cityName;
      card.querySelector('h5').innerText = provinceName;
      card.querySelector('img').src = cityImage;
    } else {
      // Create new card
      const newCityId = cardsContainer.children.length + 1;
      const newCard = document.createElement('div');
      newCard.classList.add('card');
      newCard.setAttribute('data-id', newCityId);

      newCard.innerHTML = `
        <h3>${cityName}</h3>
        <img src="${cityImage}" alt="${cityName}">
        <div class="btn_city">
          <a href="#">Detail</a>
          <h5>${provinceName}</h5>
        </div>
        <i class="fas fa-edit edit-icon"></i>
        <i class="fas fa-trash delete-icon"></i>
      `;

      cardsContainer.appendChild(newCard);
    }

    modal.style.display = 'none';
  });

  // Handle "Tambahkan Kota" button click
  addCityButton.addEventListener('click', () => {
    // Reset form fields
    cityIdInput.value = '';
    cityNameInput.value = '';
    provinceNameInput.value = '';
    cityImageUploadInput.value = '';

    // Show modal
    modal.style.display = 'block';
  });
});







