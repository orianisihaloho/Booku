<?php
include"../../db.php";
$id_buku_diskon = $_POST['id_buku_diskon'];
$kategori = $_POST['kategori'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$halaman = $_POST['halaman'];
$gambar = $_POST['gambar'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$diskon = $_POST['diskon'];
$id_katego = mysql_query("SELECT * from kategori where kategori='$kategori'");
$id_kategor = mysql_fetch_array($id_katego);
$id_kategori = $id_kategor['id_kategori'];

@$message		= '';
$valid_file		= true;
$max_size		= 1024000; // Ukuran maksimal file yang akan diupload (dalam byte)

if($_FILES['gambar']['name']){
	// if no errors...
	if(!$_FILES['gambar']['error']){

		// now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['gambar']['tmp_name']); //rename file menjadi huruf kecil
		if($_FILES['gambar']['size'] > $max_size) //file tidak boleh lebih besar dari ukuran maksimal
		{
			$valid_file	= false;
			$message	= 'Maaf, file terlalu besar. Max: 1MB';
		}
	


		// Mengatur format file yang boleh diupload
		$image_path = pathinfo($_FILES['gambar']['name'],PATHINFO_EXTENSION); //ambil extensi file
		$extension = strtolower($image_path); //rename extensi file menjadi huruf kecil

		if($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" ) {
			$valid_file = false;
			$message	= "Maaf, file yang diijinkan hanya format JPG, JPEG, PNG & GIF. #".$extension;
		}



		// jika file lolos filter
		if($valid_file == true)
		{
			// mengganti nama gambar
			$rename_nama_file	= date('YmdHis');
			$nama_file_baru		= $rename_nama_file.'.'.$extension;


			// simpan ke database
			mysql_query("UPDATE diskon set judul='$judul',id_kategori='$id_kategori',pengarang='$pengarang',penerbit='$penerbit',hal='$halaman',harga='$harga',deskripsi='$deskripsi',diskon='$diskon',gambar='$nama_file_baru' where id_buku_diskon='$id_buku_diskon'");
			//memindahkan gambar ke tempat yang kita inginkan
			move_uploaded_file($_FILES['gambar']['tmp_name'], '../../img/gambar_buku/'.$nama_file_baru);
			header("location:buku_diskon.php");
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['gambar']['error'];
	}
}
?>