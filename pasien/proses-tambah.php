<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$suhu =$_POST['suhu'];
	$status=$_POST['status'];
	$keluhan = $_POST['keluhan'];
	$id_level = 2;

	$sql = "INSERT INTO pasien (nama, umur, telp, alamat, keluhan,suhu,status, id_level) VALUES ('$nama', '$umur', '$telp', '$alamat', '$keluhan','$suhu', '$status','$id_level')";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

	if($count){
		echo "<script>alert('Data berhasil ditambahkan.');window.location='index.php';</script>";
	}
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
