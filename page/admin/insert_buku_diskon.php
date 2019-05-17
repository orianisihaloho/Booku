<?php
//Masukkan koneksi database disini
$jumlah = count($_POST["item"]);
for($i=0; $i < $jumlah; $i++) 
{
    $id=$_POST["item"][$i];
    mysql_query("INSERT INTO diskon  where id='$id';"); 
}
header ("location:set_buku.php");
exit;
?>