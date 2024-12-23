<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Mengecek apakah metode pengiriman adalah POST
    // Mengambil data dari formulir dengan sanitasi
    $nama = htmlspecialchars($_POST['nama']); // Mencegah input berbahaya di nama
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // Memvalidasi email
    $gender = $_POST['gender']; // Mengambil data jenis kelamin
    $newsletter = isset($_POST['newsletter']) ? 1 : 0; // Mengubah checkbox menjadi nilai boolean

    // Membuat koneksi ke database
    $conn = new mysqli("localhost", "root", "", "uas_pemweb_formulir");

    if ($conn->connect_error) { // Mengecek koneksi ke database
        die("Koneksi gagal: " . $conn->connect_error); // Menampilkan pesan kesalahan jika koneksi gagal
    }

    // Menyisipkan data ke tabel "pengguna"
    $stmt = $conn->prepare("INSERT INTO pengguna (nama, email, gender, newsletter) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $nama, $email, $gender, $newsletter); // Menggunakan prepared statement untuk keamanan

    if ($stmt->execute()) { // Mengeksekusi query
        echo "Data berhasil disimpan!"; // Pesan jika berhasil
    } else {
        echo "Terjadi kesalahan: " . $conn->error; // Pesan jika ada kesalahan
    }

    $stmt->close(); // Menutup statement
    $conn->close(); // Menutup koneksi
}
?>