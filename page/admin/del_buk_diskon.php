<?php
include"../../db.php";
$kd=$_GET['id'];
$qry=mysql_query("DELETE FROM diskon WHERE id_buku_diskon ='$kd'");
mysql_query("DELETE from stok_diskon where id_buku_diskon='$kd'");
header('location:buku_diskon.php');
?>