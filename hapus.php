<?php
include("koneksi.php");
$kode = $_GET['id_user'];

mysqli_query($koneksi,"DELETE FROM tb_user where id_user='$kode'");
mysqli_query($koneksi, "DELETE FROM tb_bahan where id_bahan='$kode'");

header("location:tampil.php?status-sukses");

?>