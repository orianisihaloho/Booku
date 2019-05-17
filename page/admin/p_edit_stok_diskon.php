<?php
	include "../../db.php";
	$kd=$_POST['id_buku_diskon'];
	$stok_diskon = $_POST['stok_diskon'];
	$qry=mysql_query("UPDATE stok_diskon SET stok_diskon = '$stok_diskon' WHERE id_buku_diskon = '$kd'");
	header('location:buku_diskon.php');
?>