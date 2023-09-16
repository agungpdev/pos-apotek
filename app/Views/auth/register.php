<?= $this->extend('auth/layout_auth') ?>
<?= $this->section('content') ?>
<div class="d-flex flex-column">
  <div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
      </div>
      <form class="card card-md" id="form-register" autocomplete="off" novalidate>
        <input type="hidden" class="txt_csrf_signup" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <div class="card-body">
          <h2 class="card-title text-center mb-4">Create new account</h2>
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter name">
            <div class="invalid-feedback error_name"></div>
          </div>
          <div class="mb-3">
            <label class="form-label">email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="your@mail.com">
            <div class="invalid-feedback error_email"></div>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
            <div class="invalid-feedback error_password"></div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100 btn-signup">Create new account</button>
          </div>
        </div>
      </form>
      <div class="text-center text-muted mt-3">
        Already have account? <a href="<?= site_url() ?>" tabindex="-1">Sign in</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    const Toast = Swal.mixin({
      showConfirmButton: true,
    });
    $(document).on('submit', '#form-register', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>auth/signup',
        method: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.btn-signup').prop('disabled', true);
          $('.btn-signup').html('Processing requests');
        },
        complete: function() {
          $('.btn-signup').prop('disabled', false);
          $('.btn-signup').html('Create new account');
        },
        success: function(response) {
          if (response.error) {
            $('.txt_csrf_signup').val(response.token);
            let data = response.error
            let fields = ["name", "email", "password"];
            fields.forEach((field) => {
              if (data['error_' + field]) {
                $('#' + field).addClass('is-invalid');
                $('.error_' + field).html(data['error_' + field])
              } else {
                $('#' + field).removeClass('is-invalid');
                $('#' + field).addClass('is-valid is-valid-lite');
              }
            })
          } else {
            $('.txt_csrf_signup').val(response.token);
            $('#form-register').trigger('reset')
            $('#name').removeClass('is-invalid is-valid is-valid-lite');
            $('#email').removeClass('is-invalid is-valid is-valid-lite');
            $('#password').removeClass('is-invalid is-valid is-valid-lite');
            Toast.fire({
              icon: response.status,
              title: response.message,
              confirmButtonText: 'Login',
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
<?= $this->endSection() ?>