<?php
    include "../../db.php";
	$kd=$_GET['id'];
	$qry=mysql_query("SELECT * FROM diskon WHERE id_buku_diskon='$kd'");
	while($r = mysql_fetch_array($qry)) {
?>
<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Atur Diskon</h4>
        </div>

        <div class="modal-body">
        	<form action="p_atur_diskon.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" style="padding-bottom: 10px;">
                	<label for="Modal Name">Harga </label>
                    <input type="hidden" name="id_buku_diskon"  class="form-control" value="<?php echo $r['id_buku_diskon']; ?>" />
     				<input type="text" name="harga"  class="form-control" value="<?php echo $r['harga']; ?>"/>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                <label for="Modal Name">Diskon</label>
                    <input type="text" name="pengarang"  class="form-control" value="<?php echo $r['diskon']; ?>"/>
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