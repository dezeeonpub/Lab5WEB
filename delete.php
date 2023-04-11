<?php
// membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "latihan1");

// memeriksa koneksi ke database
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// memeriksa apakah parameter id yang akan dihapus telah diterima melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // menjalankan query untuk menghapus data berdasarkan id
    $sql = "DELETE FROM akmal WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
} else {
    echo "Parameter id tidak ditemukan.";
}

// menutup koneksi ke database
mysqli_close($conn);
?>
