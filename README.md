# login_register

-- Membuat database baru
CREATE DATABASE my_database;

-- Menggunakan database yang baru dibuat
USE my_database;

-- Membuat tabel users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Kolom id sebagai primary key dengan auto increment
    username VARCHAR(50) NOT NULL,      -- Kolom username dengan panjang maksimal 50 karakter
    email VARCHAR(100) NOT NULL UNIQUE, -- Kolom email dengan panjang maksimal 100 karakter dan harus unik
    password VARCHAR(255) NOT NULL      -- Kolom password dengan panjang maksimal 255 karakter
);
