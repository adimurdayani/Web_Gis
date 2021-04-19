<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; WebGis Desa Lioka <?= date('Y'); ?></p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/komponen_depan/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/komponen_depan/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url('assets/komponen_belakang/') ?>js/metisMenu.min.js"></script>

<script type="text/javascript" src="<?= base_url('assets/komponen_depan/') ?>datatable/datatables.min.js"></script>

<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>
</body>

</html>