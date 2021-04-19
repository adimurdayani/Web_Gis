<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li>
        <a href="<?= base_url('belakang/dashboard/') ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-tags fa-fw"></i> Kelola Profil<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="<?= base_url('belakang/tujuan/') ?>">Tujuan WebGis</a>
          </li>
          <!-- <li>
            <a href="<?= base_url('belakang/visimisi/') ?>">Visi dan Misi</a>
          </li>
          <li>
            <a href="<?= base_url('belakang/struktur/') ?>">Struktur Organisasi</a>
          </li> -->
          <!-- <li>
            <a href="<?= base_url('belakang/tentang/') ?>">Tentang</a>
          </li>
          <li>
            <a href="<?= base_url('belakang/sejarah/') ?>">Sejarah</a>
          </li> -->
        </ul>
        <!-- /.nav-second-level -->
      </li>
      <!-- <li>
    <a href="#"><i class="fa fa-users fa-fw"></i> Data Maskin<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
     <li>
      <a href="<?= base_url('belakang/maskin/') ?>">List Maskin</a>
     </li>
     <li>
      <a href="<?= base_url('belakang/maskin/tbh_maskin/') ?>">Add Maskin</a>
     </li>
    </ul>
   </li> -->

      <li>
        <a href="#"><i class="fa fa-map fa-fw"></i> Peta Wilayah<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="<?= base_url('belakang/maskin/') ?>">Peta Masyarakat Miskin</a>
          </li>
          <li>
            <a href="<?= base_url('belakang/peta_persebaran') ?>">Peta Tematik</a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>

      <li>
        <a href="#"><i class="fa fa-map fa-fw"></i> Data Alamat<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="<?= base_url('belakang/alamat/') ?>">List alamat</a>
          </li>
          <li>
            <a href="<?= base_url('belakang/alamat/tbh_data/') ?>">Add alamat</a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
      <!-- <li>
        <a href="<?= base_url('belakang/pesan/') ?>"><i class="fa fa-comments fa-fw"></i>
          Pesan</a>
      </li> -->
      <li>
        <a href="#"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="<?= base_url('belakang/user/') ?>">List Users</a>
          </li>
          <li>
            <a href="<?= base_url('belakang/user/tbh_user') ?>">Add User</a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>

    </ul>
  </div>
</div>
</nav>