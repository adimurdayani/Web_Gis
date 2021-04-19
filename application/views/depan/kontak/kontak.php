<!-- ======== @Region: #content ======== -->
<div id="content">
 <div class="container" id="about">
  <div class="row">
   <!--main content-->
   <div class="block block-border-bottom">
    <!--Alerts-->
    <h3 class="block-title text-weight-strong text-uppercase">
     Alerts
    </h3>
    <iframe
     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63748.735915633326!2d120.16496443118402!3d-3.0148949240378156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d93e03ef72f9f91%3A0x3030bfbcaf770c0!2sPalopo%2C%20Wara%2C%20Kota%20Palopo%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1597300522196!5m2!1sid!2sid"
     width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
     tabindex="0"></iframe>

    <h3 class="block-title text-weight-strong text-uppercase">
     Kirim Pesan
    </h3>
    <?= $this->session->flashdata('msg'); ?>
    <div class="row">
     <div class="col-lg-4">

     </div>
     <div class="col-lg-4">
      <?= form_open('belakang/pesan/tbh_data/'); ?>
      <div class="form-group">
       <label for="nama">Nama Lengkap</label>
       <input type="text" name="nama" id="nama" placeholder="Input nama lengkap" class="form-control">
      </div>
      <div class="form-group">
       <label for="no_hp">No. Telp</label>
       <input type="text" name="no_hp" id="no_hp" placeholder="Input nomor telp" class="form-control">
      </div>
      <div class="form-group">
       <label for="alamat">Alamat</label>
       <input type="text" name="alamat" id="alamat" placeholder="Input alamat lengkap" class="form-control">
      </div>
      <div class="form-group">
       <label for="isi">Isi Pesan</label>
       <textarea name="isi" id="isi" rows="5" class="form-control"></textarea>
      </div>
      <div class="form-group">
       <button type="submit" class="btn btn-primary">Kirim</button>
       <button type="reset" class="btn btn-danger">Reset</button>
      </div>
      <?= form_close(); ?>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>