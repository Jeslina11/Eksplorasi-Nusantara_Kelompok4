


//<!--------------------- NAVBAR STICKY --------------------->
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
    // "Kolaka": ["Semua", "Gunung", "Air Terjun", "Pantai"],
    // "Wakatobi": ["Semua", "Pulau", "Pantai"],
  },
  "Sulawesi Barat": {
    "Majene": ["Semua", "Gunung", "Air Terjun", "Pantai"],
    "Mamuju": ["Semua", "Gunung", "Air Terjun", "Pantai"],
    "Polewali": ["Semua", "Gunung", "Air Terjun", "Pulau", "Pantai"],
  },
  "Sulawesi Utara": {
    "Manado": ["Semua", "Gunung", "Air Terjun", "Pantai"],
    // "Boroko": ["Semua", "Gunung", "Air Terjun", "Pantai"],
    // "Tomohon": ["Semua", "Gunung", "Air Terjun", "Pulau", "Pantai"],
  },
  // "Jawa Timur": {
  //   "Surabaya": ["Semua", "Pantai"],
  //   "Malang": ["Semua", "Gunung"],
  //   "Kediri": ["Semua", "Air Terjun"]
  // },
  // "Jawa Barat": {
  //   "Bandung": ["Semua", "Gunung", "Air Terjun"],
  //   "Bogor": ["Semua", "Gunung"],
  //   "Bekasi": ["Semua", "Pantai"]
  // },
  "Bali": {
    "Denpasar": ["Semua", "Pantai"],
    "Ubud": ["Semua", "Gunung", "Pantai"],
    "Kuta": ["Semua", "Pantai"]
  },
  // "NTT": {
  //   "Kupang": ["Semua", "Pulau"],
  //   "Ende": ["Semua", "Gunung", "Air Terjun"],
  //   "Maumere": ["Semua", "Pulau", "Pantai"]
  // }
};

const citiesByProvince = {
  "Sulawesi Selatan": ["Parepare", "Pinrang", "Makassar", "Maros", "Barru", "Tana Toraja"],
  "Sulawesi Tengah": ["Palu", "Poso"],
  "Sulawesi Barat": ["Majene", "Mamuju", "Polewali"],
  "Sulawesi Utara": ["Manado", "Boroko", "Tomohon"],
  // "Jawa Timur": ["Surabaya", "Malang", "Kediri"],
  // "Jawa Barat": ["Bandung", "Bogor", "Bekasi"],
  "Bali": ["Denpasar", "Ubud", "Kuta"],
  // "NTT": ["Kupang", "Ende", "Maumere"]
  // Tambahkan provinsi baru dengan kota-kotanya jika diperlukan
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
        url = "Bali-Ubud-Pantai-Search.html";
        break;
      default:
        url = ""; // Tambahkan halaman sesuai dengan kriteria lainnya jika diperlukan
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