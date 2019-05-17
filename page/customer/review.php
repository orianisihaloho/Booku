<?php
include"../../db.php";
session_start();
$idcos = $_SESSION['id_cus'];
$nama = $_SESSION['nama_cus'];
@$pesan = $_GET['pesan'];
if($pesan=="statusorder")
{
	echo"<script type='text/javascript'>alert('Anda belum melakukan pembayaran,anda tidak dapat melakukan pembelian lagi');</script>";
}
else if($pesan=="status belum kirim")
{
	echo"<script type='text/javascript'>alert('pembayaran anda sudah lunas,barang belum di kirim.');</script>";
}
else if($pesan=="status belum terima")
{
	echo"<script type='text/javascript'>alert('Harap Lakukan konfirmasi terima terlebih dahulu di halaman konfirmasi(jika anda sudah menerima barang)');</script>";
}
if(!isset($_SESSION['email_cus'])){
	header("location:../../index.php?pesan=login");
}
@$pesan = $_GET['pesan'];
if($pesan=="batal")
{
	echo"<script type='text/javascript'>alert('anda berhasil membatal kan transaksi anda');</script>";
}
else if($pesan=="stok_kurang")
{
	$idbuk = $_GET['idbuku'];
	$qry_stok = mysql_query("SELECT * from stok where id_buku='$idbuk'");
	$stok= mysql_fetch_array($qry_stok);
	$stokasli = $stok['stok'];
	echo"<script type='text/javascript'>alert('stok yang tersisa hanya $stokasli');</script>";
}
else if($pesan=="belum checkout")
{
	echo"<script type='text/javascript'>alert('Anda belum melakukan chekout');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOKU</title>
	<link rel="shorcut icon" href="../../img/buku.png">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jquery-ui/jquery-ui.js"></script>
</head>
<body onload="getAmount()">
<div id="head" style="background-color: #F5F5DC">
	<div class="hdkiri">
	<br><a href="index.php"><img src="img/booku1.png" width="250" height="75" /></a>
	</div>
	<div class="hdkanan">
	<form action="qry_cari.php" method="post">
		<input type="text" name="cari" placeholder="Cari buku yang Anda inginkan disini.." class="cari">
		<input type="submit" name="search" value="cari" class="tombolcari"style="background:indianred">
	</form>
	
	
	
	
	
	
	
	</div>
</div>
<div id="menu"style="background:indianred">
	<div class="menukiri">
		<ul>
		<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
		<li><a href="home.php?page=cara"><span class="glyphicon glyphicon-question-sign"></span> Cara Beli</a></li>
		<li><a href="home.php?page=tentang"><span class="glyphicon glyphicon-info-sign"></span> Tentang Kami</a></li>
		<li><a href="diskon.php?page=diskon"><span class="glyphicon glyphicon-book"></span> Diskon</a></li>
		<li><a href="review.php"><span class="glyphicon glyphicon-book"></span> Review Buku</a></li>
		</ul>
	</div>
	<div class="menukanan">
	<?php
	$query_kode_beli = mysql_query("SELECT * from selesai where id_cus='$_SESSION[id_cus]' && status_beli='order'");
	$data_kode_beli = mysql_fetch_array($query_kode_beli);
	$kode_beli = $data_kode_beli['kode_beli'];
	@$id_kategori = $_GET['kategori'];
	@$id_katalog = $_GET['katalog'];
	@$keranjong = mysql_fetch_array(mysql_query("SELECT SUM(qty) as qty_total from keranjang where id_cus='$idcos' && kode_beli='$kode_beli'"));
	@$total_keranjang = $keranjong['qty_total'];
	@$aksi = $_GET['aksi'];
	?>
	<ul>
		<li><a href="home.php?hal=keranjang"><span class="glyphicon glyphicon-shopping-cart"></span> keranjang(<?php echo '0'.$total_keranjang; ?>)</a></li>
		<?php
		$qryba = mysql_query("SELECT * from selesai where id_cus='$idcos' && status_beli='order' || status_beli='lunas'");
		$databa = mysql_fetch_array($qryba);
		$tot_bbb = $databa['total_bayar'];
		$q_cek_k = mysql_query("SELECT * from selesai where id_cus='$idcos' && status_beli='order' || status_beli='lunas' && status_pengiriman='belum dikirim' || status_pengiriman='dikirim'");
		$cek_k = mysql_num_rows($q_cek_k);
		if($cek_k>=1 && $tot_bbb>0){
		?>
		
		<li><a href="home.php?hal=selesai"><span class="glyphicon glyphicon-check"></span> Konfirmasi Pembelian</a></li>
		<?php } ?>
		
		<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $nama; ?></a></li>
		
		<li><a href="keluar.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
	</ul>
	</div>
</div>







<div id="content">
	<div id="contentkiri">
		<div class="welcome">
		<?php
		@$page = $_GET['page'];
			@$hal = $_GET['hal'];
			if($page=="tentang")
			{
				include("../../tentang.php");
			}
			else if($page=="cara")
			{
				include("../../carabeli.php");
			}
			
			else if($aksi=="" && $id_kategori==0 && $id_katalog==0 && $hal==""){
			include("welcome.php"); 
		}
		if($hal=="keranjang")
		{
			include("t_keranjang.php");
		}
		else if($hal=="checkout")
		{
			include("checkout.php");
		}
		else if($hal=="selesai")
		{
			include("selesai.php");
		}
		?>
		</div>
		
		<div class="hdproduk"style="background:indianred">
				Hasil Review Buku
			</div>
	

		 <table border="1" width="100%">
            <thead bgcolor="lavender">
              <td><center>NO</td>
              <td><center>JUDUL BUKU</td>
			  <td><center>REVIEW</td>
			  

            </thead>

			
			<tbody>
		<?php  
			include "db.php";		
			$query= "select * from review";
			$hasil=mysql_query($query);    					
			while ($data = mysql_fetch_assoc($hasil)){								
			echo "  
						<tr class='info'>
							<td><center>".$data["id_review"]."</td>
							<td><center>".$data["judul"]."</td>
							<td><center>".$data["review"]."</td>
						</tr>
			";
			} 
		?>	
				</tbody>    
						
          </table>
		<br>
		<br>
		
		
		
		
		
		
		
		
		
		
		<div class="produk" style="margin-top:0px;">
		
			<div class="hdproduk"style="background:indianred">
				Review Buku Anda 
			</div>
			
			<!--FORM --->
			
			
	<form action="review_process.php" method="post">
		<div class="form-group">
    <label for="Modal Name">Judul Buku</label>
    <select class="form-control" name="judul">
        <option>--pilih Judul Buku--</option>
    	<?php
        session_start();
       
    	$qryjudul = mysql_query("SELECT * from buku");
    	while($datajudul = mysql_fetch_array($qryjudul)){
    	?>
    	<option><?php echo $datajudul['judul']; ?></option>
    	<?php } ?>
    </select>
    <div id="b"></div>
</div>
<div class="form-group">
    <label for="Modal Name">Review</label>
    <textarea type="text" name="review" width="500px" rows="5" class="form-control"></textarea>
</div>
<center><button class="btn btn-danger">Submit</button>
</form>
		<!-- end FORM --->	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<?php  
			if($aksi=="cari"){
			 $search= $_GET['search'];
			 $qry_cari_buku = mysql_query("SELECT * from buku where judul like '%$search%'");
			 $cek = mysql_num_rows($qry_cari_buku);
			 if($cek>=1){
				if($pencarian=mysql_fetch_array($qry_cari_buku)){ ?>
					<br>
					<center><h2>Hasil Pencarian Buku Anda dengan kata kunci "<?php echo $_GET['search'] ?>"</h2>
					<div class="col-md-3">
						<div class="tamp_produk" style="border:none;">
							<?php include("cari_produk.php"); ?>
						</div>
					</div>
					<?php }
			
				
			}
			else{
					echo '
						<script language="javascript">
							alert("Kami tidak menemukan buku yang Anda cari. Gunakan kata kunci lain ..."); 
							document.location="home.php";
						</script>
						';
				}
			
			}
			?>
		</div>
	</div>
	<div id="contentkanan">
		<div class="navkanan">
			<?php include("nav.php") ?>
		</div>
		<div class="navkanan">
		<?php
		$q_seleksi_katalog = mysql_query("SELECT * from katalog where id_kategori='$id_kategori'");
		if($id_kategori==0){
		 include("katalog.php");
		}else{ 
			include("seleksi_katalog.php");
		}
		 ?>
		</div>
	</div>
</div>

<!-- modal detail buku  -->
<div id="detail" class="modal fade">

</div>
<br><br><br><br><br><br><br><br><br>
<div id="footer" style="margin-top:1500px;">
	<?php include("../../footer.php"); ?>
</div>
</body>
</html>