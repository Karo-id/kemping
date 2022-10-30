  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?=BASE_URL;?>plugins/adminlte/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?=BASE_URL;?>plugins/adminlte/bootstrap/js/bootstrap.min.js"></script>
  <!-- AdminLTE -->
  <script src="<?=BASE_URL;?>js/adminlte/adminlte.js"></script>
  <!-- Font Awesome -->
  <script src="<?=BASE_URL;?>plugins/adminlte/fontawesome-free/js/all.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?=BASE_URL;?>plugins/adminlte/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/jszip/jszip.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/pdfmake/pdfmake.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/pdfmake/vfs_fonts.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?=BASE_URL;?>plugins/adminlte/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
  </script>
  </body>

  </html>
