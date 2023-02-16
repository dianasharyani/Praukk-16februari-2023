<?php
include("koneksi.php");
if(!isset($_GET['id_user'])){
    header("location:tampil.php?");
}
$kode=$_GET['id_user'];
$sql=("SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan  where tb_user.id_user='$kode'");
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($query);

?>
<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <a href="tampil.php"><input type="button" value="kembali"></a>
    <form action="proses_edit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id_user" value="<?php echo $data['id_user']?>" />
        <p>
            <label for = "nama_user">Nama User : </label>
            <input type = "text" name="nama_user" value="<?php echo $data['nama_user']?>"/>
        </p>
        <p>
            <label for = "jabatan">Jabatan : </label>
            <input type = "text" name="jabatan" value="<?php echo $data['jabatan']?>"/>
        </p>
        <p>
            <label for = "nama_bahan">Nama Bahan : </label>
            <input type = "text" name="nama_bahan" value="<?php echo $data['nama_bahan']?>"/>
        </p>
        <p>
            <label for = "jenis_bahan">Jenis Bahan :  </label>
            <input type = "text" name="jenis_bahan" value="<?php echo $data['jenis_bahan']?>"/>
        </p>
        <p>
            <label for = "stok">Stok : </label>
            <input type = "number" name="stok" value="<?php echo $data['stok']?>">
        </p>
        <p>
            <label for = "harga">Harga : </label>
            <input type = "number" name="harga" value="<?php echo $data['harga']?>">
        </p>
        <p>
            <label for = "kondisi">Kondisi : </label>
            <input type = "radio" name="kondisi" value="<?php echo $data['kondisi']?>"/> Baik
            <input type = "radio" name="kondisi" value="<?php echo $data['kondisi']?>"/> Rusak
        </p>
        <p>
            <label for = "tanggal_masuk">Tanggal Masuk : </label>
            <input type = "date" name="tanggal_masuk" value="<?php echo $data['tanggal_masuk']?>">
        </p>
        <p>
            <input type = "submit" value = "Edit" name = "edit">
        </p>
</fieldset>
</body>
</html>