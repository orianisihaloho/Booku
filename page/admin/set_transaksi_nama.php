 <?php
  $nama = $_POST['nama'];
  $query = mysql_query("SELECT * from customer where nama_cus like '%$nama%'");
  while($data = mysql_fetch_array($query)){
  $query_id = mysql_query("SELECT * FROM selesai where id_cus='$data[id_cus]'");
   while($datal =mysql_fetch_array($query_id) ) {
  $qrycus = mysql_query("SELECT * from customer where id_cus='$data[id_cus]'");
  $datacus = mysql_fetch_array($qrycus);
  $nama = $datacus['nama_cus'];
  ?>
  <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $nama; ?></td>
      <td><?php echo $datal['status_beli'] ?></td>
      <td><?php echo $datal['tgl_order'] ?></td>
      <td>
         <a href="#" class='detail_order btn btn-info' id='<?php echo  $datal['id_selesai']; ?>'>Detail Order</a>
         <a href="#" class='edit btn btn-primary' id='<?php echo  $datal['id_selesai']; ?>'>Edit</a>
         <a href="#" onclick="confirm_modal('del_transaksi.php?&id=<?php echo  $data['id_selesai']; ?>'); " class="btn btn-danger">Delete</a>
      </td>
  </tr>
<?php
$i++; 
$count++;
  }
}
  ?>