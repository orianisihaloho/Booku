<?php
$random_chars = mysql_query("SELECT * from selesai where kode_beli=$kode_beli");

$query_kode_beli = mysql_query("SELECT * from selesai where id_cus='$_SESSION[id_cus]' && status_beli='order' || status_beli='lunas' && status_pengiriman='belum dikirim' || status_pengiriman='dikirim'");
$data_kode_beli = mysql_fetch_array($query_kode_beli);
$kode_beli = $data_kode_beli['kode_beli'];
$qryselesai = mysql_query("SELECT * from pembelian where kode_beli='$kode_beli'");
$qrytujuan = mysql_query("SELECT * from tujuan where kode_beli='$kode_beli'");
$datatujuan = mysql_fetch_array($qrytujuan);
$qrybayar = mysql_query("SELECT * from selesai where kode_beli='$kode_beli'");
$databayar = mysql_fetch_array($qrybayar);



@$pesan = $_GET['pesan'];
if($pesan=="belum dikirim")
{
	echo"<script type='text/javascript'>alert('barang anda lho belum dikirim... :-D atau anda belum bayar');</script>";
}
?>
<div class="hdkeranjang"style="background:indianred">
Tahap Akhir Pembayaran
</div>
	<center><h2>Terima kasih telah melakukan order di booku.com </h2></center>

	<p><span class="promo"> Kode</span> Kupon anda adalah : <?php
    // echo strtoupper(uniqid());

	//To Pull 8 Unique Random Values Out Of AlphaNumeric

//removed number 0, capital o, number 1 and small L
//Total: keys = 32, elements = 33
$characters = array(
"A","B","C","D","E","F","G","H","J","K","L","M",
"N","P","Q","R","S","T","U","V","W","X","Y","Z",
"1","2","3","4","5","6","7","8","9");

//make an "empty container" or array for our keys
$keys = array();

//first count of $keys is empty so "1", remaining count is 1-7 = total 8 times
while(count($keys) < 8) {
    //"0" because we use this to FIND ARRAY KEYS which has a 0 value
    //"-1" because were only concerned of number of keys which is 32 not 33
    //count($characters) = 33
    $x = mt_rand(0, count($characters)-1);
    if(!in_array($x, $keys)) {
       $keys[] = $x;
    }
}

foreach($keys as $key){
   $random_chars .= $characters[$key];
}
echo $random_chars;

if ($databayar<100000) {
	$qrykupon = 10000;
}
else{
	$qrykupon = 15000;
}

$id_cus = $_SESSION['id_cus'];

mysql_query("INSERT into Kupon set kupon_code='$random_chars',kode_beli='$kode_beli', total_kupon='$qrykupon', id_cus='$id_cus'"); //, total_kupon='$qrykupon'
mysql_query("INSERT into selesai set total_kupon=$qrykupon");
?>

	<p>Data Penerima</p>
	<p>Tanggal order : <?php echo date($databayar['tgl_order']); ?></p>
	<p>Nama Penerima : <?php echo $datatujuan['nama_penerima']; ?></p>
	<p>Provinsi : <?php echo $datatujuan['provinsi']; ?>,tarif (Rp.<?php echo number_format($datatujuan['tarif']); ?>,-)</p>
	<p>Kabupaten : <?php echo $datatujuan['kabupaten']; ?></p>
	<p>Kecamatan : <?php echo $datatujuan['kecamatan']; ?></p>
	<p>Desa : <?php echo $datatujuan['desa']; ?></p>
	<p>Rw : <?php echo $datatujuan['rw']; ?></p>
	<p>Rt : <?php echo $datatujuan['rt']; ?></p>
	<p>no rumah : <?php echo $datatujuan['no_rumah']; ?></p>
	<p>no telp : <?php echo $datatujuan['no_telp']; ?></p>
	<p>Data order anda adalah sebagai berikut:</p>
<table class="table table-bordered">
	<th>Judul Buku</th>
	<th>harga</th>
	<th>qty</th>
	<th>Subtotal</th>
	<?php while($dataselesai = mysql_fetch_array($qryselesai)){ ?>
	<tr>
		<td><?php $qrybuku=mysql_query("SELECT * from buku where id_buku='$dataselesai[id_buku]'");$databuku=mysql_fetch_array($qrybuku); echo $databuku['judul']; ?></td>
		<td><?php echo $dataselesai['harga']; ?></td>
		<td><?php echo $dataselesai['qty']; ?></td>
		<td>Rp.<?php echo number_format($dataselesai['total_harga']); ?>,-</td>
	</tr>
	<?php } ?>
	<tr>
		<td colspan="2"></td><td>Tarif Pengiriman</td><td>Rp.<?php echo number_format($datatujuan['tarif']); ?>,-</td>
	</tr>

	<tr>
		<td colspan="2"></td><td>Potongan Kupon</td><td>Rp.<?php echo number_format ($datatujuan['total_kupon']); ?>,-</td>
	</tr>

	<?php 
		$uang = $databayar['total_bayar']-$datatujuan['total_kupon'];
	?>
	<tr>
		<td colspan="2"></td><td>Total Pembayaran</td><td id="amount"><?php echo number_format($uang); ?></td>
	</tr>


</table>

	<form action="../../proses.php?bayar=" method ="POST">
		<input id="total" type="text" name="bayar" hidden/>
		<button type = "submit" class="btn btn-primary" ><span class="glyphicon glyphicon-check"></span> Bayar</button>
	</form>
	<a href="konfirmasi_terima.php?kode=<?php echo $kode_beli; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Konfirmasi</a>

<script type="text/javascript"> //untuk menangkap total yang akan di bayar pada 
	function getAmount(){
		var amount = document.getElementById('amount').innerHTML;
		var total = document.getElementById('total');

		amount = amount.replace(/,/, '');

		total.value = amount;
	}
</script>