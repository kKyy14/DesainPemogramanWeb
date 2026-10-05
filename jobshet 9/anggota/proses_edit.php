<?php
session_start();
require __DIR__ . '/../includes/koneksi.php';

$id = $_POST['id'] ?? null;
if (!$id) {
    header('Location: list.php');
    exit;
}

$nama = trim($_POST['nama'] ?? '');
$no_anggota = trim($_POST['no_anggota'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$no_hp = trim($_POST['no_hp'] ?? '');

$errors = [];
if ($nama === '') {
    $errors[] = "Nama wajib diisi.";
}
if ($no_anggota === '') {
    $errors[] = "No. Anggota wajib diisi.";
}
if ($no_hp !== '' && !preg_match('/^[0-9+\-\s]+$/', $no_hp)) {
    $errors[] = "No. HP hanya boleh berisi angka, spasi, tanda plus (+), dan tanda hubung (-).";
}

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];

    header('Location: edit.php?id=' . urlencode($id));
    exit;
}

$stmt = $pdo->prepare(
    "UPDATE anggota SET nama = :nama, no_anggota = :no_anggota,
     alamat = :alamat, no_hp = :no_hp WHERE id = :id"
);

try {
    $stmt->execute([
        'nama' => $nama,
        'no_anggota' => $no_anggota,
        'alamat' => $alamat,
        'no_hp' => $no_hp,
        'id' => $id,
    ]);
} catch (PDOException $e) {
    if ($e->getCode() === '23505') {
        $_SESSION['flash'] = [
            'type' => 'error',
            'pesan' => 'No. Anggota sudah dipakai, gunakan nomor lain.',
        ];
        header('Location: edit.php?id=' . urlencode($id));
        exit;
    }

    $_SESSION['flash'] = [
        'type' => 'error',
        'pesan' => 'Gagal menyimpan perubahan. Silakan coba lagi.',
    ];
    header('Location: edit.php?id=' . urlencode($id));
    exit;
}

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil diubah.'];
header('Location: list.php');
exit;