-- Membuat database baru bernama "uas_pemweb_formulir"
CREATE DATABASE uas_pemweb_formulir;

-- Mengatur database yang akan digunakan
USE uas_pemweb_formulir;

-- Membuat tabel "pengguna" untuk menyimpan data pengguna dari formulir
CREATE TABLE pengguna (
    id INT AUTO_INCREMENT PRIMARY KEY, -- ID unik untuk setiap pengguna
    nama VARCHAR(100), -- Kolom untuk menyimpan nama pengguna
    email VARCHAR(100), -- Kolom untuk menyimpan email pengguna
    gender ENUM('male', 'female'), -- Kolom untuk menyimpan jenis kelamin (laki-laki/perempuan)
    newsletter BOOLEAN -- Kolom untuk menyimpan status berlangganan newsletter (1 = ya, 0 = tidak)
);