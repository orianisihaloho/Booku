<?php
    include "../../db.php";
	$kd=$_GET['id'];
	$qry=mysql_query("SELECT * FROM stok_diskon WHERE id_buku_diskon='$kd'");
	while($r = mysql_fetch_array($qry)) {
?>
<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header" style="text-align:center;background:indianred;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Jumlah Stok</h4>
        </div>

        <div class="modal-body">
        	<form action="p_edit_stok_diskon.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Jumlah Stok</label>
                    <input type="hidden" name="id_buku_diskon"  class="form-control" value="<?php echo $r['id_buku_diskon']; ?>" />
     				<input type="number" name="stok_diskon"  class="form-control" value="<?php echo $r['stok_diskon']; ?>"/>
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