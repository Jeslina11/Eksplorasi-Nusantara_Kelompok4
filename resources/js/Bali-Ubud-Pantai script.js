// <!--------------------- NAVBAR STICKY -------------------->
    const header = document.querySelector("header");
    window.addEventListener("scroll", function() {
      header.classList.toggle("sticky", window.scrollY > 60)
    });


// <!--------------------- SEARCH SECTION -------------------->
  const data = {
    "Sulawesi Selatan": {
      "Parepare": ["Semua", "Gunung", "Pantai"],
      "Pinrang": ["Semua", "Gunung", "Pantai","Air Terjun","Pulau"],
      "Makassar": ["Semua", "Pantai","Pulau","Gunung"],
      "Maros": ["Semua", "Gunung", "Air Terjun"],
      "Barru": ["Semua", "Pulau"],
      "Tana Toraja": ["Semua", "Gunung", "Air Terjun"]
    },
    "Sulawesi Barat": {
      "Majene": ["Semua", "Pantai"],
      "Mamuju": ["Semua", "Gunung", "Pulau"],
      "Polewali": ["Semua", "Air Terjun", "Pantai"]
    },
    "Jawa Timur": {
      "Surabaya": ["Semua", "Pantai"],
      "Malang": ["Semua", "Gunung"],
      "Kediri": ["Semua", "Air Terjun"]
    },
    "Jawa Barat": {
      "Bandung": ["Semua", "Gunung", "Air Terjun"],
      "Bogor": ["Semua", "Gunung"],
      "Bekasi": ["Semua", "Pantai"]
    },
    "Bali": {
      "Denpasar": ["Semua", "Pantai"],
      "Ubud": ["Semua", "Gunung","Pantai"],
      "Kuta": ["Semua", "Pantai"]
    },
    "NTT": {
      "Kupang": ["Semua", "Pulau"],
      "Ende": ["Semua", "Gunung", "Air Terjun"],
      "Maumere": ["Semua", "Pulau", "Pantai"]
    }
  };

  document.getElementById('provinsiSelect').addEventListener('change', function() {
    const selectedProvince = this.value;
    const kotaSelect = document.getElementById('kotaSelect');
    kotaSelect.innerHTML = '<option value="" disabled selected hidden>Pilih Kota</option>';

    if (selectedProvince in data) {
      Object.keys(data[selectedProvince]).forEach(function(city) {
        const option = document.createElement('option');
        option.value = city;
        option.textContent = city;
        kotaSelect.appendChild(option);
      });
    }
  });

  document.getElementById('searchButton').addEventListener('click', function() {
    const selectedProvince = document.getElementById('provinsiSelect').value;
    const selectedCity = document.getElementById('kotaSelect').value;
    const selectedCategory = document.getElementById('kategoriSelect').value;

    if (selectedProvince && selectedCity && selectedCategory) {
      const availableCategories = data[selectedProvince][selectedCity] || [];

      if (!availableCategories.includes(selectedCategory)) {
        alert(`Kategori ${selectedCategory} tidak tersedia di ${selectedCity}, ${selectedProvince}.`);
        return;
      }

      let url;
      // Menentukan halaman tujuan berdasarkan opsi yang dipilih
      if (selectedProvince === "Sulawesi Selatan" && selectedCity === "Parepare" && selectedCategory === "Semua") {
        url = "parepare.html";
      } else if (selectedProvince === "Sulawesi Barat" && selectedCity === "Polewali" && selectedCategory === "Semua") {
        url = "polewali.html";
      } else if (selectedProvince === "Jawa" && selectedCity === "Polewali" && selectedCategory === "Semua") {
        url = "polewali.html";
      } else if (selectedProvince === "Sulawesi Barat" && selectedCity === "Mamasa" && selectedCategory === "Gunung") {
        url = "";
      } else if (selectedProvince === "Bali" && selectedCity === "Ubud" && selectedCategory === "Pantai") {
        url = "Bali-Ubud-Pantai-Search.html";
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


// <!------------------- HOME SECTION --------------------->
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
