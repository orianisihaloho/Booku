<?php
include"db.php";
session_start();
if(isset($_SESSION['email_su']))
{
	header("location:");
}
else if(isset($_SESSION['email_cus']))
{
	header("location:page/customer/home.php");
}
@$pesan = $_GET['pesan'];
if($pesan=="berhasil daftar")
{
	echo"<script type='text/javascript'>alert('Anda berhasil mendaftar,silahkan login');</script>";
}
else if($pesan=="login")
{
	echo"<script type='text/javascript'>alert('Anda harus login dulu');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOKU</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
</head>
<body>
<div id="head" style="background-color: #F5F5DC ">
	<div class="hdkiri">
	<a href="index.php"><img src="img/booku1.png" width="250" height="75" /></a>
	
	
	</div>
	<div class="hdkanan">
	<form action="index.php" method="get">
		<input type="text" name="judul" placeholder="cari buku yang anda inginkan disini.." class="cari">
		<input type="submit" name="cari" value="cari" class="tombolcari"style="background: indianred">
	</form>
	
	
	<?php
	@$cari = $_GET['cari'];
	if($cari)
	{
		$judul = $_GET['judul'];
		$qry_cari_buku = mysql_query("SELECT * from diskon where judul like '%$judul%'");
				if($buku = mysql_fetch_array($qry_cari_buku)){
			?>
			<br>
			<center><h2>Hasil Pencarian Buku Anda dengan kata kunci "<?php echo $_GET['judul'] ?>"</h2>
			<div class="produk">
			<div class="tamp_produk"  style="border: solid #fff 1px;">
				<?php include("produk.php"); ?>
			</div>
			</div>
			
			
			<?php } 
			
			
		else{
			echo '
			<script language="javascript">
				alert("Kami tidak menemukan buku yang Anda cari. Gunakan kata kunci lain ..."); 
				document.location="index.php";
			</script>
			';
		}
	}
	?>
	<!---->
	</div>
</div>
<div id="menu"style="background: indianred">
	<div class="menukiri">
		<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
		<li><a href="index.php?page=cara"><span class="glyphicon glyphicon-question-sign"></span> Cara Beli</a></li>
		<li><a href="index.php?page=tentang"><span class="glyphicon glyphicon-info-sign"></span> Tentang Kami</a></li>
		<li><a href="diskon.php"><span class="glyphicon glyphicon-book"></span> Diskon</a></li>
		</ul>
	</div>
	<div class="menukanan">
	<ul>
		<li><a data-toggle="modal" data-target="#daftar" ><span class="glyphicon glyphicon-pencil"></span> Buat Akun</a></li>
		<li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-plus"></span> keranjang(0)</a></li>
		
	</ul>
	</div>
</div>
<div id="content">
	<div id="contentkiri">
		<div class="welcome">
			<?php
			@$page = $_GET['page'];
			if($page=="tentang")
			{
				include("tentang.php");
			}
			else if($page=="cara")
			{
				include("carabeli.php");
			}
			else{
			 	include("welcome.php");
			}
			?>
		</div>
		<div class="produk">
			<div class="hdproduk"style="background: indianred">
				Silahkan pilih Buku- Buku Diskon di bawah ini
			</div>
			<?php
			@$id_kategori = $_GET['kategori'];
			@$id_katalog = $_GET['katalog'];
			$q_seleksi_buku = mysql_query("SELECT * from diskon where id_kategori='$id_kategori'ORDER BY judul ASC");
			$q_seleksi_buku1 = mysql_query("SELECT * from diskon where id_katalog='$id_katalog'ORDER BY judul ASC");
			$q_buku = mysql_query("SELECT * from diskon ORDER BY judul ASC");
			if($id_kategori==0)
			{ while($diskonbuku = mysql_fetch_array($q_buku)){
			?>
			<div class="col-md-3">
			<div class="tamp_produk" style="border: solid #fff 1px;">
				<?php include("produk_diskon.php"); ?>
			</div>
			</div>
			<?php } }
			else if($id_kategori>=1 && $id_katalog>=1) { while($seleksi_buku1=mysql_fetch_array($q_seleksi_buku1)){?>
			<div class="col-md-3">
			<div class="tamp_produk">
				<?php include("seleksi_produk1.php"); ?>
			</div>
			</div>
			<?php }}
			else if($id_kategori>=1) { while($seleksi_buku=mysql_fetch_array($q_seleksi_buku)){?>
			<div class="col-md-3">
			<div class="tamp_produk">
				<?php include("seleksi_produk.php"); ?>
			</div>
			</div>
			<?php }} ?>
			
		</div>
		
		</div>
		
		<div id="contentkanan">
		<div class="navkanan">
			<?php include("kategori.php") ?>
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
<!-- modal login -->
<div id="login" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="text-align:center;background:indianred;;color:#fff;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Silahkan Login</h4>
			</div>
			<div class="modal-body">
				<form action="actlogin.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input name="email" type="email" class="form-control" placeholder="email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>				
					<input type="submit" class="btn btn-primary" value="Masuk"style="background: indianred">
					belum punya akun? <a data-toggle="modal" data-target="#daftar">Daftar</a>
				</div>
			</form>
		</div>
	</div>
</div>

<!--modal daftar-->
<div id="daftar" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="text-align:center;background:indianred;;color:#fff;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Silahkan mengisi form pendaftaran</h4>
			</div>
			<div class="modal-body">
				<form action="actdaftar.php" method="post">
					<div class="form-group">
						<label>Nama</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama Lengkap anda">
					</div>
					<div class="form-group">
						<label>Alamat Email</label>
						<input name="email" type="email" class="form-control" placeholder="email anda">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="pass" type="password" class="form-control" placeholder="password">
					</div>
					<input type="submit" class="btn btn-primary" value="Simpan"style="background: indianred">
				</div>
			</form>
		</div>
	</div>
</div>


<div id="detail" class="modal fade">

</div>

<!-- modal login dulu -->
<div id="logindulu" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="text-align:center;background:#4682b5;;color:#fff;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Silahkan Login dulu untuk dapat membeli</h4>
			</div>
			<div class="modal-body">
				<form action="actlogin.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input name="email" type="email" class="form-control" placeholder="email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>				
					<input type="submit" class="btn btn-primary" value="Masuk">
					belum punya akun? <a data-toggle="modal" data-target="#daftar">Daftar</a>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="footer" style="margin-top:1500px;">
	<?php include("footer.php") ?>
	
</div>
</body>
</html>