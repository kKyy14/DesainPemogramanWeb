<?php
$page_title = "Beranda";
include __DIR__ . '/includes/header.php';

$totalBuku = count($_SESSION['buku'] ?? []);
$totalAnggota = count($_SESSION['anggota'] ?? []);
?>
<section>
    <h2>Selamat Datang di Sistem Perpustakaan Mini</h2>
    <p>
        Aplikasi sederhana untuk mengelola data buku dan anggota perpustakaan.
    </p>
</section>
<section>
    <h2>Ringkasan</h2>
    <article>
        <h3>Total Buku</h3>
        <p><?php echo $totalBuku; ?></p>
    </article>
    <article>
        <h3>Total Anggota</h3>
        <p><?php echo $totalAnggota; ?></p>
    </article>
    <article>
        <h3>Sedang Dipinjam</h3>
        <p>0</p>
    </article>
    <article>
        <h3>Buku Terlambat</h3>
        <p>0</p>
    </article>
</section>
<section>
    <h2>Data Session (latihan)</h2>
    <p>Semua data buku &amp; anggota di atas disimpan sementara di <code>$_SESSION</code>.</p>
    <form action="reset_session.php" method="POST" onsubmit="return confirm('Yakin mau hapus semua data session?');">
        <button type="submit" style="background-color: #dc3545; color: #fff; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer;">Reset Data</button>
    </form>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>