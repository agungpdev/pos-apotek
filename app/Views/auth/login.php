<?= $this->extend('auth/layout_auth') ?>
<?= $this->section('content') ?>
<div class=" d-flex flex-column bg-white">
  <div class="row g-0 flex-fill">
    <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
      <div class="container container-tight my-5 px-lg-5">
        <div class="text-center mb-4">
          <a href="#" class="navbar-brand navbar-brand-autodark"><img src="<?= site_url('assets') ?>/img/brand.svg" height="36" alt="Apotech"></a>
        </div>
        <div class="alert alert-danger d-none text-center" id="alert" role="alert">
        </div>
        <h2 class="h3 text-center mb-3">
          Login to your account
        </h2>
        <form id="form-signin" autocomplete="off" novalidate>
          <input type="hidden" class="txt_csrf_signin" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="your@email" autocomplete="off">
            <div class="invalid-feedback error_email"></div>
          </div>
          <div class="mb-2">
            <label class="form-label">
              Password
              <span class="form-label-description">
                <a href="#">I forgot password</a>
              </span>
            </label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Your password" autocomplete="off">
            <div class="invalid-feedback error_password"></div>
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input type="checkbox" class="form-check-input" />
              <span class="form-check-label">Remember me on this device</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100 btn-signin">Sign in</button>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="<?= site_url() ?>create-account" tabindex="-1">Sign up</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
      <!-- Photo -->
      <div class="bg-cover h-100 min-vh-100" style="background-image: url(<?= site_url('assets') ?>/img/campaign-creators.jpg)"></div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    const Toast = Swal.mixin({
      showConfirmButton: true,
    });
    $(document).on('submit', '#form-signin', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>auth/signin',
        method: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.btn-signin').prop('disabled', true);
          $('.btn-signin').html('Authenticate...');
        },
        complete: function() {
          $('.btn-signin').prop('disabled', false);
          $('.btn-signin').html('Sign in');
        },
        success: function(response) {
          console.log(response);
          if (response.error) {
            $('#alert').addClass('d-none')
            $('.txt_csrf_signin').val(response.token);
            const data = response.error
            const fields = ["email", "password"];
            fields.forEach((field) => {
              if (data['error_' + field]) {
                $('#' + field).addClass('is-invalid');
                $('.error_' + field).html(data['error_' + field])
              } else {
                $('#' + field).removeClass('is-invalid');
                $('#' + field).addClass('is-valid is-valid-lite');
              }
            })
          } else if (response.status) {
            $('.txt_csrf_signin').val(response.token);
            $('#email').removeClass('is-invalid is-valid is-valid-lite');
            $('#password').removeClass('is-invalid is-valid is-valid-lite');
            $('#alert').removeClass('d-none')
            $('#alert').html(response.message)
          } else {
            window.open(response.url, '_self')
          }
        }
      })
    })
  })
</script>
<?= $this->endSection() ?>