<!-- ======== @Region: #content ======== -->
<div id="content">
 <div class="container" id="about">
  <div class="row">
   <!--main content-->
   <div class="col-md-9 col-md-push-3">
    <div class="page-header">
     <h1>
      Sejarah
     </h1>
    </div>
    <div class="block block-border-bottom-grey block-pd-sm">
     <h3 class="block-title">
      <?= $get_sejarah['judul']; ?>
     </h3>
     <img src="<?= base_url('assets/img/') ?>about-us.png" alt="About us"
      class="img-responsive img-thumbnail pull-right m-l m-b">
     <p><?= $get_sejarah['isi']; ?></p>
    </div>
   </div>
   <!-- sidebar -->
   <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
    <ul class="nav nav-pills nav-stacked">
     <li>
      <a href="<?= base_url('tujuan/') ?>">
       Tujuan WebGis
       <small>WebGis masyarakat miskin</small>
      </a>
     </li>
     <li>
      <a href="<?= base_url('visimisi/') ?>">
       Visi dan Misi
       <small>WebGis masyarakat miskin</small>
      </a>
     </li>
     <li>
      <a href="<?= base_url('struktur/') ?>">
       Struktur Organisasi
       <small>WebGis masyarakat miskin</small>
      </a>
     </li>
     <li>
      <a href="<?= base_url('tentang/') ?>">
       Tentang
       <small>WebGis masyarakat miskin</small>
      </a>
     </li>
     <li class="active">
      <a href="<?= base_url('sejarah/') ?>" class="first">
       Sejarah
       <small>WebGis masyarakat miskin</small>
      </a>
     </li>
    </ul>
   </div>
  </div>
 </div>
</div>