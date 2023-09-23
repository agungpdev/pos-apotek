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
<div class="modal modal-blur fade" id="modal-import-obat" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Import File Excel Obat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="import-obat" enctype="multipart/form-data">
          <div class="mb-3">
            <div class="form-label required">Choose file</div>
            <input type="file" class="form-control" name="import_obat">
            <small class="form-hint">Extensi file harus xls,xlsx</small>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Import</button>
      </div>
      </form>
    </div>
  </div>
</div>