<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav mx-auto">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
     <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active dropdown">
     <a class="nav-link" href="<?= base_url('tujuan'); ?>">
      Profil Masyarakat Miskin Desa Lioka
     </a>
     <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="<?= base_url('tujuan'); ?>">Tujuan WebGis</a>
      <a class="dropdown-item" href="<?= base_url('visimisi'); ?>">Visi dan Misi</a>
      <a class="dropdown-item" href="<?= base_url('struktur'); ?>">Struktur Organisasi</a>
     </div> -->
    </li>
    <li class="nav-item active dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      WebGis Desa Lioka
     </a>
     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="<?= base_url('peta_maskin'); ?>">Peta Masyarakat Miskin</a>
      <!-- <a class="dropdown-item" href="<?= base_url('peta_administrasi'); ?>">Peta Administrasi</a> -->
      <a class="dropdown-item" href="<?= base_url('peta_penyebaran'); ?>">Peta Temantik</a>
     </div>
    </li>
    <li class="nav-item active">
     <a class="nav-link" href="<?= base_url('login/login'); ?>">Login</a>
    </li>
   </ul>
  </div>
 </div>
</nav>