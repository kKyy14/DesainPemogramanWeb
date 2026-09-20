SIMPUS-Mini baru punya halaman untuk pengunjung biasa:
Beranda, Daftar/Tambah Buku, Daftar/Tambah Anggota. Tapi aplikasi
perpustakaan sungguhan jelas butuh lebih dari itu — ada Petugas yang
perlu login, ada proses pinjam-kembalikan buku, ada riwayat transaksi.
Sebelum semua itu dikoding, rancangan: seperti apa
tampilannya, dan lewat langkah apa saja pengguna akan melaluinya.

## Dua Jenis Pengguna

- **Tamu** — cuma lihat-lihat katalog (Beranda, Daftar Buku), tidak
  perlu login.
- **Petugas** — login dulu, baru bisa kelola buku/anggota dan proses
  peminjaman-pengembalian. Semua wireframe baru di dokumen ini
  ditujukan untuk aktor ini.

## Alur Meminjam Buku

```
Petugas Login -> Dashboard -> klik "Peminjaman Baru"
  -> pilih Anggota -> pilih Buku (syaratnya stok > 0)
  -> Simpan -> stok buku otomatis berkurang 1 -> balik ke Dashboard
```

## Alur Mengembalikan Buku

```
Dashboard -> menu "Pengembalian" -> cari transaksi aktif (anggota/buku)
  -> tandai "Dikembalikan" -> stok buku bertambah 1 -> balik ke Dashboard
```

## Halaman Login

```
+------------------------------------------+
|               SIMPUS-Mini                |
+------------------------------------------+
|                                          |
|              Login Petugas               |
|                                          |
|  Username : [______________]             |
|  Password : [______________]             |
|                                          |
|                [ Masuk ]                 |
|                                          |
|     Belum punya akun? Daftar di sini     |
+------------------------------------------+
```

## Dashboard Petugas

```
+----------------------------------------------------------------+
| SIMPUS-Mini   Beranda | Buku | Anggota | Peminjaman     Logout  |
+----------------------------------------------------------------+
|                                                                  |
|   [ Total Buku ]   [ Total Anggota ]   [ Sedang Dipinjam ]      |
|                                                                  |
|  Aksi Cepat:                                                    |
|  [ + Peminjaman Baru ]   [ + Pengembalian ]                     |
|                                                                  |
|  Transaksi Terbaru                                              |
|  ------------------------------------------------------        |
|  Anggota      | Buku            | Tgl Pinjam  | Status          |
+----------------------------------------------------------------+
```

## Form Peminjaman

```
+------------------------------------------+
|  Form Peminjaman Buku                    |
+------------------------------------------+
|  Anggota : [ dropdown pilih anggota ]    |
|  Buku    : [ dropdown, hanya stok > 0 ]  |
|  Tgl Pinjam : [ otomatis: hari ini ]     |
|                                          |
|         [ Simpan Peminjaman ]            |
+------------------------------------------+
```

## Form Pengembalian

```
+------------------------------------------+
|  Pengembalian Buku                       |
+------------------------------------------+
|  Cari transaksi aktif:                   |
|  [ nama anggota / judul buku ________ ]  |
|                                          |
|  Anggota | Buku | Tgl Pinjam | Kembalikan|
+------------------------------------------+
```

## Riwayat Peminjaman per Anggota

```
+---------------------------------------------------+
|  Riwayat Peminjaman -- Siti Aminah                 |
+---------------------------------------------------+
|  Buku            | Pinjam | Kembali | Status       |
|  Laskar Pelangi  | 01/07  | 10/07   | Selesai      |
|  Bumi Manusia    | 15/07  |   -     | Dipinjam     |
+---------------------------------------------------+
```