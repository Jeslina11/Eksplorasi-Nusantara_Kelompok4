const express = require('express');
const bodyParser = require('body-parser');
const Database = require('./Database');

const app = express();
app.use(bodyParser.json());

// Buat instance baru dari kelas Database
const db = new Database({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'EksplorasiIndonesia'
});

// Koneksi ke database
db.connect();

app.post('/submit-ulasan', async (req, res) => {
  const { user_id, tempat_wisata_id, rating, comment } = req.body;

  try {
    const query = 'INSERT INTO Ulasan (user_id, tempat_wisata_id, rating, comment) VALUES (?, ?, ?, ?)';
    await db.query(query, [user_id, tempat_wisata_id, rating, comment]);
    res.status(200).json({ message: 'Ulasan berhasil dikirim!' });
  } catch (error) {
    console.error('Database error:', error);
    res.status(500).json({ error: 'Database error' });
  }
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server berjalan di port ${PORT}`);
});

// Tutup koneksi database saat proses keluar
process.on('exit', () => {
  db.close().then(() => console.log('Koneksi database ditutup'));
});
