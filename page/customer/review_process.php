<?php
include"../../db.php";
$judul = $_POST['judul'];
$review= $_POST['review'];
//$id_cus = $_POST['id_cus'];
mysql_query("INSERT into review set judul='$judul',review='$review'");
header("location:review.php");
?>