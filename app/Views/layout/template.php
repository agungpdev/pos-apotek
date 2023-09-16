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
  <?= $this->renderSection('modal') ?>
  <!-- Tabler Core -->
  <script src="<?= site_url('assets') ?>/js/tabler.min.js?1684106062" defer></script>
  <script src="<?= site_url('assets') ?>/js/demo.min.js?1684106062" defer></script>
</body>

</html>