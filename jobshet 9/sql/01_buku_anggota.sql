-- Jobsheet 8: skema awal database simpus_mini (PostgreSQL)
-- Jalankan lewat pgAdmin Query Tool setelah database simpus_mini dibuat.

CREATE TABLE IF NOT EXISTS buku (
    id SERIAL PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    pengarang VARCHAR(255) NOT NULL,
    tahun INTEGER NOT NULL,
    isbn VARCHAR(50),
    stok INTEGER NOT NULL DEFAULT 0,
    kategori VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS anggota (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    no_anggota VARCHAR(50) NOT NULL UNIQUE,
    alamat VARCHAR(255),
    no_hp VARCHAR(30)
);
-- Jobsheet 8 Latihan Tambahan 2
ALTER TABLE buku
    ADD COLUMN IF NOT EXISTS tanggal_ditambahkan TIMESTAMP DEFAULT NOW();
