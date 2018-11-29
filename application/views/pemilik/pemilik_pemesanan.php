<?php
  $this->load->view('header_p');
  require('conn/config.php');
?>

<br>
<br>

<div class="container">
   <div class="jumbotron shadow p-3 mb-5 bg-blue rounded">
     <div class="container">
  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  			
  			</div>
  		</div>
  	</div>
  </div>

  <main role="main" class="container">
<table class="table" back>
  <thead class="thead-dark">
    <tr>
      <th>Nomor Booking</th>
      <th>Nomor User</th>
      <th>Nomor Kost</th>
      <th>Tanggal Booking</th>
      <th>Harga</th>
    </tr>
  </thead>
  <tbody style="background-color: white">
    <?php foreach ($booking_list as $key): ?>
    <tr>
          <th><?php echo $key->id_booking?></th>
          <th><?php echo $key->fk_id_user?></th>
          <th><?php echo $key->fk_id_kost?></th>
          <th><?php echo $key->tgl_booking?></th>
          <th><?php echo $key->harga?></th>
          
    </tr>
    <?php endforeach ?>
  </tbody>

</table>
</main>