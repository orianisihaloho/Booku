<?php
    include "../../db.php";
    $kd=$_GET['id'];
    $qry=mysql_query("SELECT * FROM selesai WHERE kode_beli='$kd'");
    while($r = mysql_fetch_array($qry)) {
?>
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header" style="text-align:center;background:indianred;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Status Kirim</h4>
        </div>

        <div class="modal-body">
            <form action="p_edit_transaksi.php?a=status kirim" name="modal_popup" enctype="multipart/form-data" method="POST">
                
                <div class="form-group" >
                    <label for="Modal Name">Nama Customer</label>
                    <input type="hidden" name="kd"  class="form-control" value="<?php echo $r['kode_beli']; ?>" />
                    <?php
                    $query = mysql_query("SELECT * from customer where id_cus='$r[id_cus]'");
                    $data = mysql_fetch_array($query);
                    $nama = $data['nama_cus'];
                    ?>
                    <input type="text" name="nama_cus"  class="form-control" value="<?php echo $nama; ?>"/>
                </div>
                <div class="form-group">
                <label>Status Buku</label>
                <select name="status_kirim" class="form-control">
                    <option selected><?php echo $r['status_pengiriman']; ?></option>
                    <option>belum dikirim</option>
                    <option>dikirim</option>
                </select>
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