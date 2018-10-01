<?php 
session_start();

if (isset($_POST['nama'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	echo $nim."<br>";
	echo $nama."<br>";
	echo $email."<br>";
}

 ?>
