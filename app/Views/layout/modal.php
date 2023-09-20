<div class="modal modal-blur fade" id="modal-logout" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-title">Are you sure?</div>
        <div>Jika iya, kamu akan keluar dari halaman Dashboard!</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
        <a href="<?= site_url() ?>dashboard/signout" class="btn btn-danger">Yes, signout</a>
      </div>
    </div>
  </div>
</div>