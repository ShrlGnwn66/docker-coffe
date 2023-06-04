<?php
// Koneksi ke database
$connect = new mysqli('mysql_db', 'root', 'root', 'coffe');

// Periksa koneksi
if ($connect->connect_error) {
  die("Koneksi ke database gagal: " . $connect->connect_error);
}

// Query untuk mengambil data
$query = "SELECT nama_produk, harga_produk FROM produk";
$result = $connect->query($query);

// Simpan data dalam array
$data = array();
while ($row = $result->fetch_assoc()) {
  $data[$row['nama_produk']] = $row['harga_produk'];
}


// Konversi ke JSON dan kirimkan sebagai respon
echo json_encode($data);

// Tutup koneksi ke database
$connect->close();
?>