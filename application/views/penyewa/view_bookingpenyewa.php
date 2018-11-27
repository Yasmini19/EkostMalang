<?php
  $this->load->view('penyewa/header_penyewa.php');
?>

<div class="container">
  <div class="container">
    <table id="table_id" class="table table-striped"><br><br><br>
      <thead class="thead-dark">
        <tr>
          <th>ID Booking</th>
          <th>ID User</th>
          <th>ID Kost</th>
          <th>Tgl Booking</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>
    <tbody>
      <?php

        foreach ($booking as $i) :
          $id       = $i['id_booking'];
          $iduser    = $i['fk_id_user'];
          $idkost   = $i['fk_id_kost'];
          $tglbooking    = $i['tgl_booking'];
          $harga  = $i['harga'];
        
      ?>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $iduser ?></td>
        <td><?php echo $idkost ?></td>
        <td><?php echo $tglbooking ?></td>
        <td><?php echo $harga ?></td>
        <td>
          <div class="btn-group">
            <a href="<?php echo site_url('Booking_Controller/delete_booking/'.$i['id_booking']) ?>" class="btn btn-outline-danger">Cancel</a>
          </div>
        </td>
      </tr>
    <?php endforeach;?>
    </tbody>
  </table>
</div>
<?php
  $this->load->view('footer_u');
?>
    </div>
</body>
</html>