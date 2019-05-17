<?php
  session_start();
  include_once('fungsi.php');
  if(!isset ($_SESSION ['is_logged_in'])){
    redirect('login.php');
  }
  open_page('daftarguru.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DaftarGuru</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="js/bootstrap.min.js"></script>-->
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
        <div class="navbar-header" style="position:absolute;">
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
        <li><a href="signup.php">SignUp</a></li>
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
		  <div class="container-fluid" style="height:320px;">
			<br><p>
            Klik Tombol di Bawah ini untuk Menemukan Guru yang Anda Inginkan 
			</p>
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cari Guru Private </button>
			</center>
			</div>
		  			
		<div class="container">
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header"><h3 class="modal-title">Go Private</h3><button type="button" class="close" data-dismiss="modal">&times;</button>	
						</div>
						<div class="modal-body">
							<center><h3>Cari Guru Private Anda</h3>
							<form name="formcari" method="post" action="daftar_guru_search.php">
								<table  border="0" align="center" >
							<tr> 
							<!--FIELD HARI
							
							<h4> HARI </h4>
							<br>
							<p> 
							<input type="radio" name="hari" value="Senin" />Senin &nbsp
							<input type="radio" name="hari" value="Selasa" />Selasa &nbsp
							
							<input type="radio" name="hari" value="Rabu" />Rabu &nbsp
							<input type="radio" name="hari" value="Kamis" />Kamis &nbsp
							<input type="radio" name="hari" value="Jumat" />Jumat &nbsp
							<input type="radio" name="hari" value="Sabtu" />Sabtu &nbsp
							<input type="radio" name="hari" value="Minggu" />Minggu &nbsp
							
							</p>
							</tr>
							<br>
							<tr>-->
				<!--FIELD PENDIDIKAN-->
				
				PROGRAM PEMBELAJARAN ANAK 
				<br>
				<select name="pendidikan"/>
					<!-- Daftar pilihan pada combobox -->
					<option value="pilih" selected >--- Program Pembelajaran Anak ---</option>
					<option value="SD">SD</option>
					<option value="SMP">SMP</option>
				</select>
							</tr>
							<br>
							<br>
							<tr>

				<!--FIELD MAPEL -->			
							
				 MATA PELAJARAN
				<br>
				<select name="mapel"/>
					<!-- FIELD COMBOBOX -->
					<option value="pilih" selected>-------------- Mata Pelajaran --------------</option>
					<option value="Matematika">Matematika</option>
					<option value="Biologi">Biologi</option>
					<option value="Kimia">Kimia</option>
					<option value="Fisika">Fisika</option>
					<option value="BahasaIndonesia">Bahasa Indonesia</option>
					<option value="BahasaInggris">Bahasa Inggris</option>
					<option value="TIK">Teknologi Informasi dan Komunikasi</option>
					
				</select>
				</tr>
				<br><br>
				<td></td>
				<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" class="btn btn-info btn-lg"value="Cari Guru Private" > </td>
				</table>
				</form>
				</div>
				<!--<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>--->
				</div>
				</div>
				</div>
			</div>
		</div>
			
			</div></div>
			</div>
			<br>
			<br>
			<div class="footer col-sm-12" style="background-color:lavender; padding-top: 20px; ">
          <center><h3> GoPrivate</h3></center>
          <center>Copyright GoPrivate - 2017</center><br>
        </div>
      </div>
</body>