<?php
include "koneksi.php";

$jd1 = $_POST['judul'];
$ket = $_POST['txt_ket'];

//untuk ambil foto dari device
$foto = "pic" .time(). ".jpg";
$get_foto =$_FILES['gambar']['tmp_name'];

if(isset($_POST['btn_simpan'])){
	move_uploaded_file($get_foto, "images/" .$foto);
	$query = "INSERT INTO film (judul_film,gambar,keterangan) VALUES ('$jd1','$foto','$ket');";
}  
else if (isset($_POST['btn_edit'])){
	$id = $GET['url'];
	if(!empty($get_foto)){
		move_uploaded_file($get_foto, "images/" .$foto);
		$query = "UPDATE film SET judul_film = '$jd1', gambar = '$foto', keterangan = '$ket' WHERE id_galeri = '$id' ";
	} else{
		$query = "UPDATE film SET judul_film = '$jd1', keterangan = '$ket' WHERE id_galeri = '$id' ";
	}
}
else{
	$id = $_GET['url'];
	$query = "DELETE FROM film WHERE id_film = '$id' ";
}

mysqli_query($con, $query);
header("location:index.php");

