<?php
include "koneksi.php";

$jd1 = $_POST['judul'];
$ket = $_POST['txt_ket'];

//untuk ambil foto dari device
$foto = "pic" .time(). ".jpg";
$get_foto =$_FILES['file_gambar']['tmp_name'];

if(isset($_POST['btn_simpan'])){
	move_uploaded_file($get_foto, "images/" .$foto);
	$query = "INSERT INTO galeri (judul_foto,foto,ket_foto) VALUES ('$jd1','$foto','$ket');";
}  
else if (isset($_POST['btn_edit'])){
	$id = $GET['url'];
	if(!empty($get_foto)){
		move_uploaded_file($get_foto, "images/" .$foto);
		$query = "UPDATE galeri SET judul_foto = '$jd1', foto = '$foto', ket_foto = '$ket' WHERE id_galeri = '$id' ";
	} else{
		$query = "UPDATE galeri SET judul_foto = '$jd1', ket_foto = '$ket' WHERE id_galeri = '$id' ";
	}
}
else{
	$id = $_GET['url'];
	$query = "DELETE FROM galeri WHERE id_galeri = '$id' ";
}

mysqli_query($con, $query);
header("location:index.php");

