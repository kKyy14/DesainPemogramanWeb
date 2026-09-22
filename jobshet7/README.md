# Jobsheet 7 — PHP Dasar & Form Handling

File `.php` wajib diproses oleh PHP interpreter — tidak bisa dibuka
langsung lewat `file://`. Jalankan lewat server PHP bawaan, dari
dalam folder `jobsheet7/`:

```
php -S localhost:8000
```

lalu buka `http://localhost/jobshet7/` di browser

Uji validasi server-side dengan menonaktifkan JavaScript di
pengaturan browser, lalu submit form Tambah Buku/Anggota kosong —
form tetap gagal tersimpan dan mengarahkan kembali dengan pesan
error, karena validasi kini berjalan di `proses_tambah.php`, bukan
lagi di browser.