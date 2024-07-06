const express = require('express');
const cors = require('cors');
const app = express();
const port = 3000;
 

// Data statis untuk provinsi dan kota
const data = {
  "Sulawesi Selatan": ["Parepare", "Pinrang", "Makassar", "Maros", "Barru", "Tana Toraja"],
  "Sulawesi Tengah": ["Palu", "Poso"],
  "Sulawesi Barat": ["Majene", "Mamuju", "Polewali"],
  "Sulawesi Utara": ["Manado", "Boroko", "Tomohon"],
  "Bali": ["Denpasar", "Ubud", "Kuta"],
};

// Data untuk pencarian
const searchResults = {
  "Sulawesi Selatan-Parepare-Semua": { url: "parepare.html" },
  "Sulawesi Barat-Polewali-Semua": { url: "polewali.html" },
  "Sulawesi Tengah-Palu-Semua": { url: "palu.html" },
  "Sulawesi Utara-Manado-Semua": { url: "manado.html" },
  "Bali-Ubud-Pantai": { url: "Bali-Ubud-Pantai.html" },
};

// Middleware
app.use(cors());
app.use(express.json());

// Endpoint untuk mendapatkan daftar kota berdasarkan provinsi
app.get('/api/kota/:provinsi', (req, res) => {
  const provinsi = req.params.provinsi;
  const cities = data[provinsi] || [];
  res.json(cities);
});

// Endpoint untuk melakukan pencarian
app.post('/api/search', (req, res) => {
  const { provinsi, kota, kategori } = req.body;
  const key = `${provinsi}-${kota}-${kategori}`;
  const result = searchResults[key] || null;
  res.json(result);
});

// Menjalankan server
app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
// Endpoint untuk halaman utama
app.get('/', (req, res) => {
    res.send('Selamat datang di aplikasi kami!');
  });
``  