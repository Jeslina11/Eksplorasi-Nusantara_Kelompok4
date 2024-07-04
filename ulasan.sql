CREATE DATABASE EksplorasiIndonesia;
USE EksplorasiIndonesia;

-- Table for Users
CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL
);

-- Table for TempatWisata
CREATE TABLE TempatWisata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    lokasi VARCHAR(100)
);

-- Table for Ulasan
CREATE TABLE Ulasan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    tempat_wisata_id INT NOT NULL,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (tempat_wisata_id) REFERENCES TempatWisata(id)
);

-- Table for Registrasi
CREATE TABLE Registrasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Trigger to insert data from Registrasi to Users after insert
DELIMITER //
CREATE TRIGGER after_registrasi_insert
AFTER INSERT ON Registrasi
FOR EACH ROW
BEGIN
    INSERT INTO Users (nama, email, password)
    VALUES (NEW.nama, NEW.email, NEW.password);
END;
//
DELIMITER ;

-- Insert data into TempatWisata
INSERT INTO TempatWisata (nama, deskripsi, lokasi)
VALUES 
('Candi Borobudur', 
 'Candi Borobudur, sebuah keajaiban arsitektur Buddha di Magelang, Jawa Tengah, dengan kemegahannya yang luar biasa. Dikelilingi oleh panorama pegunungan yang memukau & hutan hijau, candi ini menjadi simbol spiritualitas dan warisan sejarah yang tak ternilai. Sebagai salah satu keajaiban dunia kuno, Borobudur menawarkan perjalanan yang mendalam ke dalam kebudayaan dan keagungan masa lalu. Dengan akses mudah dari Yogyakarta, pengunjung dapat menikmati pengalaman eksplorasi yang menyeluruh di kompleks candi ini.',
 'Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah'),
('Pantai Bali di Ubud', 
 'Ubud menawarkan pantai-pantai yang memukau dengan pasir putih dan ombak besar. Pantai di Ubud adalah surga bagi semua pengunjung.',
 'Ubud, Bali'),
('Candi Prambanan', 
 'Candi Prambanan adalah keajaiban arsitektur Hindu di Yogyakarta, Indonesia, mempesona dengan keindahannya yang megah. Dibangun pada abad ke-9 Masehi, candi ini menampilkan relief-relief epik dari mitologi Hindu dan menciptakan atmosfer spiritual yang memikat. Sebagai situs warisan dunia UNESCO, Prambanan adalah destinasi yang wajib dikunjungi bagi para pecinta seni dan sejarah.',
 'Jl. Raya Solo - Yogyakarta No.16, Kranggan, Bokoharjo, Kec. Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571'),
('Goa Gong Pacitan', 
 'Goa Gong di Pacitan, Jawa Timur, adalah salah satu gua terindah di Indonesia, terkenal dengan stalaktit dan stalagmit yang menakjubkan. Terkenal karena suara gong yang terdengar saat stalaktit tertentu dipukul, gua ini menawarkan pemandangan formasi batu kapur spektakuler yang diterangi pencahayaan warna-warni. Dengan suasana yang tenang, udara sejuk, dan keindahan alam yang memukau, Goa Gong adalah destinasi wisata alam yang memberikan pengalaman menakjubkan dan ketenangan yang menenangkan.',
 'Jl. Salam, Salam, Bomo, Kec. Punung, Kabupaten Pacitan, Jawa Timur'),
('Kampung Rumede', 
 'Kampung Rumede, atau Desa Kunyi, di Polewali, Sulawesi Barat, adalah surga desa pegunungan dengan sawah hijau dan kebun yang indah. Nikmati kehidupan desa yang autentik dan ramah penduduk lokal sambil mengeksplorasi budaya yang kaya dan keindahan alam Sulawesi Barat yang menawan. Kunjungan ke Kampung Rumede menjanjikan pengalaman yang memperkaya dan mengesankan bagi para wisatawan yang mencari ketenangan dan keindahan alam yang belum terjamah, serta kedamaian yang sulit ditemukan di perkotaan.',
 'Kunyi, Kec. Anreapi, Kabupaten Polewali Mandar, Sulawesi Barat'),
('King Kong Hill', 
 'Jelajahi keindahan alam Gunung Bromo dengan mengunjungi King Kong Hill, sebuah tempat tersembunyi yang menawarkan pemandangan yang luar biasa. Dengan akses mudah dari Penanjakan 1, Anda dapat menikmati hiking santai menuju puncak untuk melihat panorama megah Gunung Bromo dan lautan pasirnya yang memukau. Terdapat fasilitas kantin di puncak untuk menyegarkan diri setelah perjalanan, King Kong Hill menjadi destinasi hiking yang sempurna untuk mengalami keindahan alam yang autentik.',
 'Cemorolawang, Ngadisari, Kec. Sukapura, Kabupaten Probolinggo, Jawa Timur'),
('Pantai Ora Resort', 
 'Pantai Ora di Maluku Tengah adalah surga tersembunyi dengan keindahan alam yang luar biasa. Pantai ini menawarkan pasir putih yang lembut, air laut yang jernih, dan terumbu karang yang indah, menjadikannya tempat yang sempurna untuk snorkeling dan menyelam. Selain itu, Pantai Ora juga dilengkapi dengan fasilitas penginapan tepi laut. Dengan latar belakang pegunungan hijau yang mempesona dan suasana yang tenang, Pantai Ora adalah destinasi sempurna untuk relaksasi dan menikmati keindahan alam yang masih alami.',
 'Jl. Kabupaten, Kec. Seram Utara, Kabupaten Maluku Tengah, Maluku'),
('Pasar Seni Ubud', 
 'Pasar Seni Ubud adalah pasar tradisional yang terkenal di pusat kota Ubud, Bali. Tempat ini menawarkan berbagai barang seni dan kerajinan tangan lokal, seperti lukisan, ukiran kayu, tekstil, dan perhiasan. Pengunjung dapat menikmati pengalaman berbelanja yang unik sambil menjelajahi kekayaan seni dan budaya Bali yang autentik. Pasar Seni Ubud juga merupakan tempat bertemunya seniman lokal dan wisatawan, menciptakan atmosfer kreatif dan ramai di sekitar kawasan ini.',
 'Jl. Raya Ubud No.35, Ubud, Kecamatan Ubud, Kabupaten Gianyar, Bali'),
('Patung Yesus Buntu Burake', 
 'Patung Yesus Buntu Burake, atau dikenal sebagai Patung Yesus Kristus Memberkati, berdiri tegak di Bukit Buntu Burake, Makale, Tana Toraja. Dengan tinggi mencapai 45 meter, termasuk pedestalnya yang terbuat dari perunggu, patung ini diresmikan pada tahun 2015 dan dirancang oleh seniman Yogyakarta, Supriadi. Selain sebagai simbol keagamaan, patung ini juga menjadi daya tarik wisata yang menampilkan pemandangan indah dari perbukitan sekitar dan jembatan kaca yang menambah keunikan. Patung Yesus Buntu Burake memukau pengunjung dengan keindahan alamnya yang luar biasa, menarik perhatian dengan pesonanya yang unik.',
 'Buntu Burake, Kec. Makale, Kabupaten Tana Toraja, Sulawesi Selatan'),
('Taman Nasional Bunaken', 
 'Taman Nasional Bunaken adalah surga bawah laut dengan terumbu karang yang mengagumkan. Pengalaman snorkeling dan menyelam, air jernihnya memperlihatkan kehidupan laut yg kaya. Selain itu, pantai berpasir putih dan pemandangan alam yang menakjubkan membuat Bunaken menjadi destinasi yang ideal bagi pecinta alam dan petualangan yang ingin menikmati keindahan alam bawah laut.',
 'Kawasan Youth center, Pelabuhan Marina plazaa, Mega mas kawasan, Kota Manado, Sulawesi Utara');
