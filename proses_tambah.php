<?php
include("koneksi.php");
if(isset($_POST['tambah'])) {
    $nama_user = $_POST['nama_user'];
    $jabatan = $_POST['jabatan'];
    $nama_bahan = $_POST['nama_bahan'];
    $jenis_bahan = $_POST['jenis_bahan'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $kondisi = $_POST['kondisi'];
    $tanggal_masuk = $_POST['tanggal_masuk'];

    $sql = "INSERT INTO tb_bahan (nama_bahan, jenis_bahan, stok, harga, kondisi, tanggal_masuk) 
    VALUES ('$nama_bahan','$jenis_bahan','$stok','$harga','$kondisi','$tanggal_masuk')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "SELECT max(id_bahan) AS kode_bahan FROM tb_bahan LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_array($query);
    $kode_bahan = $data ['kode_bahan'];

    $sql = "INSERT INTO tb_user (nama_user, jabatan, id_bahan) 
    VALUES ('$nama_user','$jabatan','$kode_bahan')";
    $query = mysqli_query($koneksi, $sql);


    if($query){
        header("location:tampil.php?status=sukses");
    } else {
        header("location:tampil.php?status=gagal");
    }
}
?>