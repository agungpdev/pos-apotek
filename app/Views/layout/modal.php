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
        <h5 class="modal-title">Import File Obat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="import-obat" enctype="multipart/form-data">
          <input type="hidden" class="txt_csrf txt_csrf_obat" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
          <div class="mb-3">
            <div class="form-label required">Choose file</div>
            <input type="file" class="form-control" name="import_obat" id="import_obat">
            <small class="form-hint">Extensi file harus xls,xlsx. download format file untuk <a href="<?= site_url('sample/sample-obat.xlsx') ?>">obat</a></small>
            <div class="invalid-feedback error_file_obat"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success btn-import-obat">Import</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal modal-blur fade" id="modal-import-supplier" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Import File Supplier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="import-supplier" enctype="multipart/form-data">
          <input type="hidden" class="txt_csrf txt_csrf_supplier" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
          <div class="mb-3">
            <div class="form-label required">Choose file</div>
            <input type="file" class="form-control" name="import_supplier" id="import_supplier">
            <small class="form-hint">Extensi file harus xls,xlsx. download format file untuk <a href="<?= site_url('sample/sample-supplier.xlsx') ?>">supplier</a></small>
            <div class="invalid-feedback error_file_supplier"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success btn-import-supplier">Import</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal modal-blur fade" id="modal-import-customer" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Import File Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="import-customer" enctype="multipart/form-data">
          <input type="hidden" class="txt_csrf txt_csrf_customer" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
          <div class="mb-3">
            <div class="form-label required">Choose file</div>
            <input type="file" class="form-control" name="import_customer" id="import_customer">
            <small class="form-hint">Extensi file harus xls,xlsx. download format file untuk <a href="<?= site_url('sample/sample-customer.xlsx') ?>">customer</a> </small>
            <div class="invalid-feedback error_file_customer"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success btn-import-customer">Import</button>
      </div>
      </form>
    </div>
  </div>
</div>