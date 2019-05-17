<?php
  session_start();
  include_once('fungsi.php');
  open_page('index');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DaftarGuru</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
	<style>
      nav{
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
      }

     li {
        float: right;
      }

      li a {
        display: inline-block;
        color: gray;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        letter-spacing: 1.5px;
      }

      li a:hover {
         color: black;
         text-decoration: none;
    }
    a{
        color: gray;
        text-decoration: none;
        list-style-type: none;
    }
    .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
    }
    .panel:hover {
        box-shadow: 5px 0px 40px rgba(0,0,0, .2);
    }
    .panel-footer .btn:hover {
        border: 1px solid #f4511e;
        background-color: #fff !important;
        color: #f4511e;
    }
    .panel-heading {
        color: #fff !important;
        background-color: #f4511e !important;
        padding: 25px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }
    .panel-footer {
        background-color: white !important;
    }
    .panel-footer h3 {
        font-size: 32px;
    }
    .panel-footer h4 {
        color: #aaa;
        font-size: 14px;
    }
    .panel-footer .btn {
        margin: 15px 0;
        background-color: #f4511e;
        color: #fff;
    }

    </style>
</head>
<body>
    <!-- navigasi -->
    <nav style="padding-top: 5px;background-color: lavender; letter-spacing: 2px;>
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><h3><b>GoPrivate</b></h3></a>
      <li><a href="akun_saya.php"> Akun Saya</li>
	  <li><?php
            if(isset($_SESSION['is_logged_in'])){
              echo('<a href="logout.php">Logout</a><br>');
            }else{
              echo('<a href="login.php">Login</a><br>');
            }
            close_page();
          ?></li>
      </nav>
  <div class="container-fluid">
      <!-- sisi kiri -->
      <div class="row">
        <div class="col-sm-4" style="padding-top: 15px;">
          <a href="#"> Petunjuk bagi Pemula<br></a>
          <a href="#"> Pengaturan Jadwal Les<br></a>
          <a href="#"> Artikel Terkait <br></a>
            <ul style="list-style-type: none;">
              <la></label><a href="#"> Tinjauan Biaya Pelajaran Biaya</a><br></la>
              <la><a href="#">Bagaimana Saya dapat <br>
                  Mempublikasikan Materi yang <br>
                  Saya Buat?</a></la>
            </ul>
          <a href="#"> Tanya & Jawab </a>
            <ul style="list-style-type: none;">
              <la><a href="#"> Pertanyaan Umum</a><br></la>
              <la><a href="#">Pertanyaan dalam Website</a></la>
            </ul>
        </div>

        <!-- sisi kanan -->
        <div class="col-sm-8">
          <nav class="navbar-collapse"><hr>
            <li><a href="testimoni.php">Testimoni</a></li>
            <li><a href="daftarguru.php">Cari Guru</a></li>
			<li><a href="allguru.php">Daftar Guru</a></li>
            <li><a href="matapelajaran.php">Mata Pelajaran</a></li>
            <li><a href="index.php">Beranda</a></li>           
          </nav><hr>
         <center> 
		 <!--<p>
            Anda dapat memilih Guru Private yang Anda inginkan
          </p>-->
	
<!-- TAMPILKAN OUTPUT DATA-->			
<?php
include "configuration.php";
	$con=mysqli_connect("localhost", "root", "");
	$db_select=mysqli_select_db($con,"goprivate");
//$hari= $_POST['hari'];
$pendidikan= $_POST['pendidikan'];
$mapel= $_POST['mapel'];
 //get the nama value from form
$kolom=4;

$i=0;
 //query to get the search result
$result = mysqli_query($con,"SELECT * from guru where pendidikan like '%$pendidikan%' AND mapel like '%$mapel%' ") or die(mysqli_error($con)); //execute the query $q
echo "<center>";
echo "<h2> Daftar Guru yang Tersedia </h2>";
echo "<table border='1' cellpadding='10' cellspacing='10'style='border: 1px solid   #87CEFA ' 'background-color=grey'>

<tr  bgcolor='lavender'>";



while ($data = mysqli_fetch_array($result)) {  //fetch the result from query into an array
	if ($i >= $kolom) {
        echo "<tr></tr>";
        $i = 0;
	}
	$i++;
echo "
<td bgcolor='lavender'>
<br/>
<center><a href='profil_guru.php'<center><img src='img/guru/".$data['id'].".png 'width='150' height='150'></a><br/>
<br><center>".$data['nama_guru']." 
<br><center><img src='img/star.png' 'width='100' height='50'/>
<br>
<br><center><a href='profil_guru.php?id=".$data['id']."' class='btn btn-info'>Lihat Profil Guru</a><br>
<br>
</br>
</td>
<?php }?>
";
}
echo "</table><br><a href='daftarguru.php' class='btn btn-info'>Kembali</a><br><br>";
?>
			
			
			
			
			
			
			
			
			
			
			
		
        </div>
        <div class="footer col-sm-12" style="background-color:lavender; padding-top: 20px;">
          <center><h3> GoPrivate</h3></center>
          <center>Copyright GoPrivate - 2017</center><br>
        </div>
      </div>
</body>

