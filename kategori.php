<div class="hdnav"style="background-color: indianred ">
Kategori
</div>
<ul class="kategori" >
<?php 
include"pagination2.php";
$querykategori = mysql_query("SELECT * from kategori");
		$rpp = 4; // jumlah record per halaman
        $reload = "index.php?page=&pagination=true";
        @$page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysql_num_rows($querykategori);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
while(($count<$rpp) && ($i<$tcount)) {
  mysql_data_seek($querykategori,$i);
  $kategori = mysql_fetch_array($querykategori);
?>
<li><a href="index.php?kategori=<?php echo $kategori['id_kategori'] ?>"><span class="glyphicon glyphicon-list"></span> <?php echo $kategori['kategori'] ?></a></li>
<?php 
$i++; 
$count++;
} ?>
</ul>
 <div><?php echo paginate_kategori($reload, $page, $tpages); ?></div>