<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" type="image/png" href="<?= site_url() ?>/favicon.ico">
  <title><?= $title ?></title>
  <!-- CSS files -->
  <link href="<?= site_url('assets') ?>/css/tabler.min.css?1684106062" rel="stylesheet" />
  <link href="<?= site_url('assets') ?>/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
  <link href="<?= site_url('assets') ?>/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
  <link href="<?= site_url('assets') ?>/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
  <link href="<?= site_url('assets') ?>/css/demo.min.css?1684106062" rel="stylesheet" />
  <script src="<?= site_url('assets') ?>/js/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>
</head>

<body>
  <script src="<?= site_url('assets') ?>/js/demo-theme.min.js?1684106062"></script>
  <div class="page">
    <!-- Navbar -->
    <?= $this->include('layout/topbar') ?>
    <?= $this->include('layout/menu') ?>
    <div class="page-wrapper">
      <?= $this->renderSection('content') ?>
      <?= $this->include('layout/footer') ?>
    </div>
  </div>
  <?= $this->include('layout/modal') ?>
  <!-- Tabler Core -->
  <script src="<?= site_url('assets') ?>/js/tabler.min.js?1684106062" defer></script>
  <script src="<?= site_url('assets') ?>/js/demo.min.js?1684106062" defer></script>
  <script>
    $(document).ready(function() {
      const Toast = Swal.mixin({
        showConfirmButton: true,
      });
      $(document).on('submit', '#import-obat', function(e) {
        var input = new FormData(this);
        e.preventDefault();
        $.ajax({
          url: '<?= site_url('dashboard/import/obat') ?>',
          type: 'post',
          data: input,
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $('.btn-import-obat').prop('disabled', true);
            $('.btn-import-obat').html('Loading...');
          },
          complete: function() {
            $('.btn-import-obat').prop('disabled', false);
            $('.btn-import-obat').html('Import');
          },
          success: function(response) {
            console.log(response);
            if (response.error) {
              const data = response.error
              if (data.error_file_obat) {
                $('.txt_csrf_obat').val(response.token);
                $('#import_obat').addClass('is-invalid');
                $('.error_file_obat').html(data.error_file_obat)
              } else {
                $('.txt_csrf_obat').val()
                $('#import_obat').removeClass('is-invalid');
              }
            } else {
              $('.txt_csrf_obat').val(response.token);
              $('#import_obat').removeClass('is-invalid');
              Toast.fire({
                icon: response.status,
                text: response.message,
                confirmButtonText: 'Ok',
                confirmButtonColor: '#206bc4',
              }).then((result) => {
                if (result.isConfirmed) {
                  window.open(response.url, '_self')
                }
              })
            }
          }

        })
      })

      $(document).on('submit', '#import-supplier', function(e) {
        var input = new FormData(this);
        e.preventDefault();
        $.ajax({
          url: '<?= site_url('dashboard/import/supplier') ?>',
          type: 'post',
          data: input,
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $('.btn-import-supplier').prop('disabled', true);
            $('.btn-import-supplier').html('Loading...');
          },
          complete: function() {
            $('.btn-import-supplier').prop('disabled', false);
            $('.btn-import-supplier').html('Import');
          },
          success: function(response) {
            console.log(response);
            if (response.error) {
              const data = response.error
              if (data.error_file_supplier) {
                $('.txt_csrf_supplier').val(response.token);
                $('#import_supplier').addClass('is-invalid');
                $('.error_file_supplier').html(data.error_file_supplier)
              } else {
                $('.txt_csrf_supplier').val()
                $('#import_supplier').removeClass('is-invalid');
              }
            } else {
              $('.txt_csrf_supplier').val(response.token);
              $('#import_supplier').removeClass('is-invalid');
              Toast.fire({
                icon: response.status,
                text: response.message,
                confirmButtonText: 'Ok',
                confirmButtonColor: '#206bc4',
              }).then((result) => {
                if (result.isConfirmed) {
                  window.open(response.url, '_self')
                }
              })
            }
          }

        })
      })

      $(document).on('submit', '#import-customer', function(e) {
        var input = new FormData(this);
        e.preventDefault();
        $.ajax({
          url: '<?= site_url('dashboard/import/customer') ?>',
          type: 'post',
          data: input,
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $('.btn-import-customer').prop('disabled', true);
            $('.btn-import-customer').html('Loading...');
          },
          complete: function() {
            $('.btn-import-customer').prop('disabled', false);
            $('.btn-import-customer').html('Import');
          },
          success: function(response) {
            console.log(response);
            if (response.error) {
              const data = response.error
              if (data.error_file_customer) {
                $('.txt_csrf_customer').val(response.token);
                $('#import_customer').addClass('is-invalid');
                $('.error_file_customer').html(data.error_file_customer)
              } else {
                $('.txt_csrf_customer').val()
                $('#import_customer').removeClass('is-invalid');
              }
            } else {
              $('.txt_csrf_customer').val(response.token);
              $('#import_customer').removeClass('is-invalid');
              Toast.fire({
                icon: response.status,
                text: response.message,
                confirmButtonText: 'Ok',
                confirmButtonColor: '#206bc4',
              }).then((result) => {
                if (result.isConfirmed) {
                  window.open(response.url, '_self')
                }
              })
            }
          }

        })
      })
    })
  </script>
</body>

</html>