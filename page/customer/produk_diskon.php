<center>
<img src="../../img/gambar_buku/<?php echo $buku_diskon['gambar']; ?>"><br>
<a href="#"><?php echo $buku_diskon['judul']; ?></a><br><font color="red"><strike> Rp.<?php echo number_format($buku_diskon['harga']); ?>,-</strike></font><br> Diskon <?php echo number_format($buku_diskon['diskon']); ?> % <br>Rp.<?php echo number_format($buku_diskon['harga_diskon']); ?>,-
<?php 
$qrystok = mysql_query("SELECT * FROM stok_diskon where id_buku_diskon='$buku_diskon[id_buku_diskon]'");
while($stok = mysql_fetch_array($qrystok)){
 ?>
<br><div style="text-align:center;">stok tersedia <b><?php echo $stok['stok_diskon']; ?></b></div>
<?php if($stok['stok_diskon']>=1){ ?>
<a data-toggle="modal" data-target="#detail" class="btn btn-success open" id='<?php echo  $buku_diskon['id_buku_diskon']; ?>'>Lihat Detail</a>
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