
        <?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
       
        include '../../db.php';
//        query
        $sql =  "SELECT * FROM katalog";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 10; // jumlah record per halaman
        $reload = "katalog.php?page=&pagination=true";
        @$page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysql_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>
        <div class="hdkonten"style="background:indianred">
        Data Kategori Usia
        </div>
<div class="container">
  <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>      

<table id="mytable" class="table table-bordered" style="width:75%;">
    <thead>
      <th style="width:60px"><center>No</center></th>
      <th><center>Nama Kategori Usia</center></th>
      <th style="width:120px;"><center>Aksi</center></th>
    </thead>
<?php 
$no =1;
  while(($count<$rpp) && ($i<$tcount)) {
  mysql_data_seek($result,$i);
  $data = mysql_fetch_array($result);
  ?>
  <tr>
      <td><center><?php echo $no++ ?></center></td>
      <td><?php echo  $data['katalog'] ?></td>
      <td>
      <center>
         <a href="#" class='open_modal btn btn-primary' id='<?php echo  $data['id_katalog']; ?>'><span class="glyphicon glyphicon-pencil"></span></a>
         <a href="#" class="btn btn-danger" onclick="confirm_modal('del_katalog.php?&id=<?php echo  $data['id_katalog']; ?>');"><span class="glyphicon glyphicon-trash"></span></a>
     </center>
      </td>
  </tr>
<?php
$i++; 
$count++;
  }
?>
</table>
</div>
 <div><?php echo paginate_one($reload, $page, $tpages); ?></div>

<!-- Modal Popup untuk tambah katalog--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="text-align:center;background:indianred;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel" >Tambah Kategori Usia</h4>
        </div>

        <div class="modal-body">
          <form action="tambah_katalog.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label for="Modal Name">Kategori</label>
                    <select class="form-control" name="kategori">
                        <?php
                            $q_allkat = mysql_query("SELECT * from kategori"); 
                            while($kat1 = mysql_fetch_array($q_allkat)){
                        ?>
                            <option><?php echo $kat1['kategori']; ?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Kategori Usia</label>
                  <input type="text" name="katalog"  class="form-control" placeholder="Kategori Usia" required/>
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

           

            </div>

           
        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header" style="text-align:center;background:indianred;color:#fff;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Hapus data? ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Confirm</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
           $.ajax({
                   url: "edit_katalog.php",
                   type: "GET",
                   data : {id: m,},
                   success: function (ajaxData){
                   $("#ModalEdit").html(ajaxData);
                   $("#ModalEdit").modal('show',{backdrop: 'true'});
               }
               });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>
