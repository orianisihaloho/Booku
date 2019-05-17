 <?php
include"db.php";

$harga= $_POST['harga'];
 //get the nama value from form
$kolom=4;

$i=0;
 //query to get the search result
$result = mysql_query("SELECT * from buku where harga like '%$harga%'  ") ; //execute the query $q
echo "<center>";
echo "<h2> Hasil Filter Buku </h2>";
echo "<table border='1' cellpadding='10' cellspacing='10'style='border: 1px solid   #87CEFA ' 'background-color=grey'>

<tr  bgcolor='lavender'>";



while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
	if ($i >= $kolom) {
        echo "<tr></tr>";
        $i = 0;
	}
	$i++;
	?>
	<div class="produk">
		<div class="tamp_produk"  style="border: solid #fff 1px;">
			<?php include("produk.php"); ?>
		</div>
	</div>
	<?php
}?>