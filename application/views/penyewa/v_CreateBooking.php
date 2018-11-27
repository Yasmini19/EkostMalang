<?php
  $this->load->view('penyewa/header_penyewa.php');
?>

<div class="container">
    	<?php 
        echo form_open_multipart('Booking_Controller/create', 
          array(
            'class' => 'b_validation',
            'novalidate' => ''));
      ?>
      <div class="col-sm-9">
       <h4><small>NEW POST HERE</small></h4>
       <hr>
        <label>ID USER</label>
        <input type="text" class="form-control" name="fk_id_user" value="<?php echo $this->session->userdata('logged_in')['id_user'] ?>" required readonly><br>
        <div class="invalid-feedback">Please Fill The Tittle!</div>
        <label>ID KOST</label>
        
        <input type="text" class="form-control" name="fk_id_kost" value="<?php echo $data['id_kost']?>" required readonly><br>
        <div class="invalid-feedback">Please Fill The Author!</div>
        <label>Tgl Booking</label>
        <input type="date" class="form-control" name="tgl_booking" value="#" required><br>
        <div class="invalid-feedback">Please Fill The Content!</div>
        <label>Harga</label>
        <input type="number" class="form-control" name="harga" value="<?php echo $data['harga']?>" required readonly><br>
        <div class="invalid-feedback">Please Fill The Image!</div>
        <input type="submit" id="submitBtn" class="btn btn-primary" value="Booking"><hr>
        
      </div>
    </div>

    <script>
      (function() {
       'use strict';
       window.addEventListener('load', function() {
         var forms = document.getElementsByClassName('b_validation');
         var validation = Array.prototype.filter.call(forms, function(form) {
           form.addEventListener('submit', function(event) {
             if (form.checkValidity() === false) {
               event.preventDefault();
               event.stopPropagation();
             }
             form.classList.add('was-validated');
           }, false);
         });
       }, false);
      })();
    </script>

</body>

<?php
  $this->load->view('footer_u');
?>