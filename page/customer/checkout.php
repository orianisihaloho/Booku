<?php
$query_kode_beli = mysql_query("SELECT * from selesai where id_cus='$_SESSION[id_cus]' && status_beli='order'");
$data_kode_beli = mysql_fetch_array($query_kode_beli);
$kode_beli = $data_kode_beli['kode_beli'];
$querykupon= mysql_query("SELECT * from Kupon where id_cus='$_SESSION[id_cus]' and id_use_for is null");

?>
<div class="hdkeranjang">
Check Out Pembelian
</div>
<form action="tcek.php" method="post">
<div class="form-group" style="margin-top:10px;">
    <label for="">Kode Pembelian Anda</label>
    <input type="text" name="kode_beli" value="<?php echo $kode_beli; ?>"  class="form-control" readonly/>
</div>
<div class="form-group" style="margin-top:10px;">
    <label for="">Nama Penerima*</label>
    <input type="text" name="penerima"  class="form-control"/>
</div>
<div class="form-group">
    <label for="Modal Name">Provinsi*</label>
    <select class="form-control" name="provinsi">
        <option>--pilih provinsi--</option>
    	<?php
        session_start();
        $tanggal = date('Y-m-d');
    	$qryprov = mysql_query("SELECT * from provinsi");
    	while($dataprov = mysql_fetch_array($qryprov)){
    	?>
    	<option><?php echo $dataprov['provinsi']; ?></option>
    	<?php } ?>
    </select>
    <div id="b"></div>
</div>
<div class="form-group">
    <label for="Modal Name">Kabupaten*</label>
    <input type="text" name="kabupaten"  class="form-control"/>
</div>
<div class="form-group">
    <label for="Modal Name">Kecamatan*</label>
    <input type="text" name="kecamatan"  class="form-control"/>
</div>
<div class="form-group">
    <label for="Modal Name">Kode Pos*</label>
    <input type="text" name="pos"  class="form-control"/>
</div>
<div class="form-group">
    <label for="Modal Name">Desa*</label>
    <input type="text" name="desa"  class="form-control"/>
</div>
<div class="form-group">
    <label for="Modal Name">Rw*</label>
    <input type="number" min='0' name="rw"  class="form-control"/>
</div>
<div class="form-group">
    <label for="Modal Name">Rt*</label>
    <input type="number" min='0' name="rt"  class="form-control"/>
</div>
<div class="form-group">
    <label for="Modal Name">No Rumah**</label>
    <input type="number" min='0' name="rumah"  class="form-control"/>
</div>
<div class="form-group">
    <label for="Modal Name">No Telpon*</label>
    <input type="number" min='0' name="telpon"  class="form-control"/>
</div>
<div class="form-group">
    <label for="Modal Name">Tanggal Pembelian</label><br>
    <input type="text" name="a" value="<?php echo $tanggal; ?>" class="form-control" readonly>
</div>

<div class="form-group">
    <label for="Modal Name">Kode Kupon</label>
<!--     <form method="POST" action="" > -->
    <!-- <input type="text" min='0' name="code"  class="form-control"/> -->
  <!--   </form> -->
  <select class="form-control" name="code">
  <?php

        while($data_kupon = mysql_fetch_array($querykupon)){
        ?>
        <option><?php echo $data_kupon['kupon_code']; ?></option>
        <?php } ?>
    </select>
</div>

<button class="btn btn-danger">Selesaikan Pembayaran</button>
</form>