<?php
include"../../db.php";

$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
$min=$harga*$diskon;
$harga_diskon=$harga-$min;
$harga_diskon= $_POST['harga_diskon'];



			// simpan ke database
			mysql_query("insert diskon into harga='$harga',diskon='$diskon',harga_diskon='$harga_diskon' where id_buku_diskon='$id_buku_diskon'");
			//memindahkan gambar ke tempat yang kita inginkan
			move_uploaded_file($_FILES['gambar']['tmp_name'], '../../img/gambar_buku/'.$nama_file_baru);
			header("location:buku_diskon.php");
	