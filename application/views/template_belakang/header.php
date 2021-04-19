<div id="wrapper">

 <!-- Navigation -->
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
   <a class="navbar-brand" href="<?= base_url('belakang/dashboard/') ?>">Administrasi</a>
  </div>

  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
   <span class="sr-only">Toggle navigation</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
  </button>

  <ul class="nav navbar-nav navbar-left navbar-top-links">
   <li><a href="<?= base_url() ?>"><i class="fa fa-home fa-fw"></i> Website</a></li>
  </ul>

  <ul class="nav navbar-right navbar-top-links">

   <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
     <i class="fa fa-user fa-fw"></i> <?= $get_user['nama']; ?><b class="caret"></b>
    </a>
    <ul class="dropdown-menu dropdown-user">
     <li><a href="<?= base_url('belakang/profile') ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
     </li>
     <li><a href="<?= base_url('belakang/user/'); ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
     </li>
     <li class="divider"></li>
     <li><a href="#" data-toggle="modal" data-target="#modal-default"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
     </li>
    </ul>
   </li>
  </ul>
  <!-- /.navbar-top-links -->

  <div class="modal fade" id="modal-default">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
      </button>
     </div>
     <div class="modal-body">
      <p>Apakah anda yakin ingin keluar?</p>
     </div>
     <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      <a href="<?= base_url('login/login/logout') ?>" class="btn btn-primary">Ya</a>
     </div>
    </div>
    <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->