<?php
include 'koneksi.php';

//Menyimpan data kedalam variabel
$judul_informasi = $_POST['judul_informasi'];
$isi_informasi = $_POST['isi_informasi'];

$sql = "INSERT INTO `entry_informasi`(`judul_informasi`, `isi_informasi`) VALUES ('$judul_informasi', '$isi_informasi')";
$query = mysqli_query($conn, $sql);
if ($query) {
    // echo "<script> alert('Tambah data berhasil'); window.location='input_informasi.php' </script>";
    header("location:input_informasi.php?pesan=true");
} else {
    // echo "<script> alert('Tambah data gagal'); window.location='input_informasi.php' </script>";
    header("location:input_informasi.php?pesan=false");
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
