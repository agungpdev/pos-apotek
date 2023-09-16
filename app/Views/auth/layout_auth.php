<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
  <?= $this->renderSection('content') ?>
  <script src="<?= site_url('assets') ?>/js/tabler.min.js?1684106062" defer></script>
  <script src="<?= site_url('assets') ?>/js/demo.min.js?1684106062" defer></script>

</body>

</html>