<?php
    include 'koneksi.php';

    //Menyimpan data kedalam variabel
    $id = $_POST['id'];
    $judul_informasi = $_POST['judul_informasi'];
    // echo $id.'<br>';
    // echo $nim.'<br>';

    $sql = "DELETE FROM `entry_informasi` WHERE `judul_informasi`='$judul_informasi'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        // echo "<script> alert('Tambah data berhasil'); window.location='input_informasi.php' </script>";
        header("location:index.php?pesan=true-hapus");
    } else {
        // echo "<script> alert('Tambah data gagal'); window.location='input_informasi.php' </script>";
        header("location:index.php?pesan=false-hapus");
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
