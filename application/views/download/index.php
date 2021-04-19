<!DOCTYPE html>
<html lang="en"><head>
  <title><?= $judul; ?></title>
  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url('assets/komponen_belakang/') ?>css/bootstrap.min.css" rel="stylesheet">
</head><body>

  <center>
    <h3>LAPORAN DATA PERSEBARAN MASYARAKAT MISKIN DI DESA LIOKA</h3>
  </center>

  <table border="1" class="table table-bordered table-responsive">
    <tr>
      <th class="text-center">NO</th>
      <th class="text-center">NOMOR KK</th>
      <th class="text-center">NAMA</th>
      <th class="text-center">JENIS KELAMIN</th>
      <th class="text-center">PEKERJAAN</th>
      <th class="text-center">LUAS RUMAH</th>
      <th class="text-center">ALAMAT</th>
    </tr>
    <tbody>
      <?php
      $no = 1;
      foreach ($get_data as $data) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $data['no_kk']; ?></td>
          <td><?= $data['nama']; ?></td>
          <td><?= $data['jenis_kelamin']; ?></td>
          <td class="text-center"><?= $data['pekerjaan']; ?></td>
          <td><?= $data['luas_rumah']; ?></td>
          <td><?= $data['alamat']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body></html>