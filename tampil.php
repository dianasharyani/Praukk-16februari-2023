<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampil</title>
</head>
<body>
    <center>
    <h1> Data Investaris Alat dan Bahan </h1>
    <h1> Lab RPL SMK negeri 1 Sayung </h1>
    <table border="1">

     <th>No</th>
     <th>Nama User</th>
     <th>jabatan</th>
     <th>Nama Bahan</th>
     <th>Jenis Bahan</th>
     <th>Stok</th>
     <th>Harga</th>
     <th>Kondisi</th>
     <th>Tanggal Masuk</th>
     <th>Aksi</th>

     <?php
     include("koneksi.php");

     $sql = "SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan";
     $query = mysqli_query($koneksi, $sql);

     while($data=mysqli_fetch_array($query)){
        echo"<tr>";
        echo"<td>".$data['id_user']."</td>";
        echo"<td>".$data['nama_user']."</td>";
        echo"<td>".$data['jabatan']."</td>";
        echo"<td>".$data['nama_bahan']."</td>";
        echo"<td>".$data['jenis_bahan']."</td>";
        echo"<td>".$data['stok']."</td>";
        echo"<td>".$data['harga']."</td>";
        echo"<td>".$data['kondisi']."</td>";
        echo"<td>".$data['tanggal_masuk']."</td>";
        echo"<td>";
        echo"<a href='edit.php?id_user=".$data['id_user']."'>Edit</a> |";
        echo"<a href='hapus.php?id_user=".$data['id_user']."'>Hapus</a>";
        echo"</td>";
        echo"</tr>";
     }
     ?>
     <a href = "tambah.php"><input type = "button" value="tambah">
    </center>
</table>
</body>
</html>