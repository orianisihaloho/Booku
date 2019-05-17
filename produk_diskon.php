<div>
<center>
<img src="img/gambar_buku/<?php echo $diskonbuku['gambar']; ?>"><br>
<a href="#"><?php echo $diskonbuku['judul']; ?></a><br><font color="red"><strike> Rp.<?php echo number_format($diskonbuku['harga']); ?>,-</strike></font><br> Diskon <?php echo number_format ($diskonbuku['diskon']); ?>% <br> Rp.<?php echo number_format($diskonbuku['harga_diskon']); ?>,-<br>

<?php 
$qrystok_diskon= mysql_query("SELECT * FROM stok_diskon where id_buku_diskon='$diskonbuku[id_buku_diskon]'");
while($stok_diskon= mysql_fetch_array($qrystok_diskon)){
 ?>
<br><div style="text-align:center;">stok tersedia <b><?php echo $stok_diskon['stok_diskon']; ?></b></div>
<?php if($stok_diskon['stok_diskon']>=1){ ?>
<a data-toggle="modal" data-target="#detail" class="btn btn-success open" id='<?php echo  $diskonbuku['id_buku_diskon']; ?>'>detail</a>
<?php }} ?>


<script type="text/javascript">
   $(document).ready(function () {
   $(".open").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
            url: "detail_diskon.php",
    			   type: "GET",
    			   data : {id: m,},
    			   success: function (ajaxData){
      			   $("#detail").html(ajaxData);
      			   $("#detail").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>
</div>