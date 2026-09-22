# Jobsheet 7 — PHP Dasar & Form Handling

File `.php` wajib diproses oleh PHP interpreter — tidak bisa dibuka
langsung lewat `file://`. Jalankan lewat server PHP bawaan, dari
dalam folder `jobsheet-07/`:

```
php -S localhost:8000
```

lalu buka `http://localhost:8000/index.php` di browser (atau lewat
Laragon dengan vhost, mis. `http://dp2026.test/kode-praktikum/jobsheet-07/`
— path aset dihitung otomatis lewat `$base` di `includes/header.php`,
jadi tetap benar walau diakses bersarang di beberapa folder).

Uji validasi server-side dengan menonaktifkan JavaScript di
pengaturan browser, lalu submit form Tambah Buku/Anggota kosong —
form tetap gagal tersimpan dan mengarahkan kembali dengan pesan
error, karena validasi kini berjalan di `proses_tambah.php`, bukan
lagi di browser.

Catatan: data yang ditambah lewat form disimpan di `$_SESSION`,
jadi akan hilang begitu sesi browser berakhir. Penyimpanan permanen
lewat database baru dimulai di Jobsheet 8.
