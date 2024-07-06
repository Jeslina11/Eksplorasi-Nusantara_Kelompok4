const data = {
  "Jawa Tengah": {
      "Magelang": ["Semua", "Budaya"],
  },
  "Bali": {
      "Ubud": ["Semua", "Pantai"],
  },
  "Daerah Istimewa Yogyakarta": {
      "Sleman": ["Semua", "Budaya"],
  },
  "Jawa Timur": {
      "Pacitan": ["Semua", "Budaya"],
      "Probolinggo": ["Semua", "Gunung"],
  },
  "Sulawesi Barat": {
      "Polewali Mandar": ["Semua", "Gunung"],
  },
  "Sulawesi Utara": {
      "Manado": ["Semua", "Pantai"],
  },
};

const citiesByProvince = {
  "Jawa Tengah": ["Magelang"],
  "Bali": ["Ubud"],
  "Daerah Istimewa Yogyakarta": ["Sleman"],
  "Jawa Timur": ["Pacitan", "Probolinggo"],
  "Sulawesi Barat": ["Polewali Mandar"],
  "Sulawesi Utara": ["Manado"],
};

const kategoriByKota = {
  "Jawa Tengah": ["Budaya"],
  "Bali": ["Pantai"],
  "Daerah Istimewa Yogyakarta": ["Budaya"],
  "Jawa Timur": ["Budaya", "Gunung"],
  "Sulawesi Barat": ["Gunung"],
  "Sulawesi Utara": ["Pantai"],
};

const searchButton = document.getElementById('searchButton');
const provinsiSelect = document.getElementById('provinsiSelect');
const kotaSelect = document.getElementById('kotaSelect');
const kategoriSelect = document.getElementById('kategoriSelect');

// Mengisi dropdown kota berdasarkan pilihan provinsi
provinsiSelect.addEventListener('change', function() {
  const selectedProvince = this.value;
  kotaSelect.innerHTML = '<option value="" disabled selected hidden>Pilih Kota</option>';
  kategoriSelect.innerHTML = '<option value="" disabled selected hidden>Kategori</option>';

  if (selectedProvince in citiesByProvince) {
      citiesByProvince[selectedProvince].forEach(function(city) {
          const option = document.createElement('option');
          option.value = city;
          option.textContent = city;
          kotaSelect.appendChild(option);
      });
  }
});

// Event listener untuk memperbarui kategori berdasarkan kota yang dipilih
kotaSelect.addEventListener('change', function() {
  const selectedProvince = provinsiSelect.value;
  const selectedCity = this.value;

  kategoriSelect.innerHTML = '<option value="" disabled selected hidden>Kategori</option>';

  if (selectedProvince && selectedCity in data[selectedProvince]) {
      data[selectedProvince][selectedCity].forEach(function(kategori) {
          const option = document.createElement('option');
          option.value = kategori;
          option.textContent = kategori;
          kategoriSelect.appendChild(option);
      });
  }
});

// Event listener untuk tombol Cari
searchButton.addEventListener('click', function() {
  const selectedProvince = provinsiSelect.value;
  const selectedCity = kotaSelect.value;
  const selectedCategory = kategoriSelect.value;

  if (selectedProvince && selectedCity && selectedCategory) {
      const availableCategories = data[selectedProvince][selectedCity] || [];

      if (!availableCategories.includes(selectedCategory)) {
          alert(`Kategori ${selectedCategory} tidak tersedia di ${selectedCity}, ${selectedProvince}.`);
          return;
      }

      let url;
      // Menentukan halaman tujuan berdasarkan opsi yang dipilih
      switch (`${selectedProvince}-${selectedCity}-${selectedCategory}`) {
          case "Jawa Tengah-Magelang-Semua":
              url = "Candi Borobudur.php"; // Ganti dengan halaman yang sesuai di aplikasi Anda
              break;
          case "Bali-Ubud-Pantai":
              url = "pantai_bali_ubud.php"; // Ganti dengan halaman yang sesuai di aplikasi Anda
              break;
          case "Daerah Istimewa Yogyakarta-Sleman-Semua":
              url = "candi prambanan.php"; // Ganti dengan halaman yang sesuai di aplikasi Anda
              break;
          case "Jawa Timur-Pacitan-Semua":
              url = "goa_gong_pacitan.php"; // Ganti dengan halaman yang sesuai di aplikasi Anda
              break;
          case "Jawa Timur-Probolinggo-Gunung":
              url = "gunung_bromo.php"; // Ganti dengan halaman yang sesuai di aplikasi Anda
              break;
          case "Sulawesi Barat-Polewali Mandar-Gunung":
              url = "kampung_rumede.php"; // Ganti dengan halaman yang sesuai di aplikasi Anda
              break;
          case "Sulawesi Utara-Manado-Pantai":
              url = "pantai_ora_resort.php"; // Ganti dengan halaman yang sesuai di aplikasi Anda
              break;
          default:
              url = ""; // URL default jika tidak ada yang cocok
              break;
      }
      
  } else {
      alert("Silakan pilih Provinsi, Kota, dan Kategori.");
  }
});
