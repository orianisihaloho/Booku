<?php
	include"../../db.php";
	$id_buku_diskon = $_POST['id_buku_diskon'];
	$stok_diskon = $_POST['stok_diskon'];
	mysql_query("INSERT into stok_diskon set id_buku_diskon='$id_buku_diskon',stok_diskon='$stok_diskon'");
	header("location:buku_diskon.php");
?>