<?php
    include "../../db.php";
	$kd=$_GET['id'];
	$qry=mysql_query("SELECT * FROM diskon WHERE id_buku_diskon='$kd'");
	while($r = mysql_fetch_array($qry)) {
?>
<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header" style="text-align:center;background:indianred;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Buku</h4>
        </div>

        <div class="modal-body">
        	<form action="p_edit_buk_diskon.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		<div class="form-group" style="padding-bottom: 10px;">
                    <label for="Modal Name">Kategori</label>
                    <select class="form-control" name="kategori">
                        <?php
                            $idkat = $r['id_kategori'];
                            $qrykat = mysql_query("SELECT * from kategori where id_kategori = '$idkat'");
                            $kat = mysql_fetch_array($qrykat);
                            $kategori = $kat['kategori'];
                            $q_allkat = mysql_query("SELECT * from kategori"); 
                        ?>
                            <option selected><?php echo $kategori ?></option>
                            <?php while($kat1 = mysql_fetch_array($q_allkat)){ ?>
                            <option><?php echo $kat1['kategori']; ?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                	<label for="Modal Name">Judul Buku</label>
                    <input type="hidden" name="id_buku_diskon"  class="form-control" value="<?php echo $r['id_buku_diskon']; ?>" />
     				<input type="text" name="judul"  class="form-control" value="<?php echo $r['judul']; ?>"/>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">Pengarang</label>
                    <input type="text" name="pengarang"  class="form-control" value="<?php echo $r['pengarang']; ?>"/>
                    </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">penerbit</label>
                    <input type="text" name="penerbit"  class="form-control" value="<?php echo $r['penerbit']; ?>"/>
                    </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">Harga Buku</label>
                    <input type="text" name="harga"  class="form-control" value="<?php echo $r['harga']; ?>"/>
                    </div>
					
				 <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">Diskon</label>
                    <input type="text" name="diskon"  class="form-control" value="<?php echo $r['diskon']; ?>"/>
                    </div>	
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">Deskripsi</label>
                    <input type="text" name="deskripsi"  class="form-control" value="<?php echo $r['deskripsi']; ?>"/>
                    </div>
                     <label for="Modal Name">Jumlah Halaman</label>
                    <input type="text" name="halaman"  class="form-control" value="<?php echo $r['hal']; ?>"/>
                    </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">Gambar Buku</label>
                    <input type="file" name="gambar" value="<?php echo $r['gambar']; ?>"/>
                    </div>
	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>
            	<?php } ?>
            </div>

           
        </div>
    </div>