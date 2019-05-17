<?php
include"../../db.php";
$kd=$_GET['id'];
$qry=mysql_query("INSERT * INTO diskon WHERE id_buku='$kd'");

header('location:buku.php');
?>