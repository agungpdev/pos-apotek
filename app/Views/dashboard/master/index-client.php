<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<!-- Page header -->
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <!-- Page pre-title -->
        <div class="page-pretitle">
          Overview
        </div>
        <h2 class="page-title">
          Supplier dan Customer
        </h2>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
              <li class="nav-item" role="presentation">
                <a href="#tabs-supplier" class="nav-link <?= $param == 'supplier' ? 'active' : '' ?>" data-bs-toggle="tab" aria-selected="<?= $param == 'supplier' ? 'true' : 'false' ?>" role="tab" tabindex="-1">Supplier</a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#tabs-customer" class="nav-link <?= $param == 'customer' ? 'active' : '' ?>" data-bs-toggle="tab" aria-selected="<?= $param == 'customer' ? 'true' : 'false' ?>" role="tab" tabindex="-1">Customer</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane <?= $param == 'supplier' ? 'active show' : '' ?>" id="tabs-supplier" role="tabpanel">
                <div class="row mb-3 align-items-center justify-content-between">
                  <div class="col">
                    <h4>Data Supplier</h4>
                  </div>
                  <div class="col text-end">
                    <a href="#" class="btn btn-outline-primary w-25" data-bs-toggle="modal" data-bs-target="#modal-supplier">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                      </svg>
                      Supplier
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body border-bottom py-3">
                        <div class="d-flex">
                          <div class="text-muted">
                            Show
                            <div class="mx-2 d-inline-block">
                              <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Obat count">
                            </div>
                            entries
                          </div>
                          <div class="ms-auto text-muted">
                            Search:
                            <div class="ms-2 d-inline-block">
                              <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                          <thead>
                            <tr>

                              <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M6 15l6 -6l6 6"></path>
                                </svg>
                              </th>
                              <th>Supplier</th>
                              <th>Alamat</th>
                              <th>Kota</th>
                              <th>Kontak</th>
                              <th>Email</th>
                              <th>Website</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody id="data-supplier">

                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer d-flex align-items-center">
                        <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                        <ul class="pagination m-0 ms-auto">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">

                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M15 6l-6 6l6 6"></path>
                              </svg>
                              prev
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item"><a class="page-link" href="#">5</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">
                              next
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 6l6 6l-6 6"></path>
                              </svg>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane <?= $param == 'customer' ? 'active show' : '' ?>" id="tabs-customer" role="tabpanel">
                <div class="row mb-3 align-items-center justify-content-between">
                  <div class="col">
                    <h4>Data Customer</h4>
                  </div>
                  <div class="col text-end">
                    <a href="#" class="btn btn-outline-primary w-25" data-bs-toggle="modal" data-bs-target="#modal-customer">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                      </svg>
                      Customer
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body border-bottom py-3">
                        <div class="d-flex">
                          <div class="text-muted">
                            Show
                            <div class="mx-2 d-inline-block">
                              <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Obat count">
                            </div>
                            entries
                          </div>
                          <div class="ms-auto text-muted">
                            Search:
                            <div class="ms-2 d-inline-block">
                              <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                          <thead>
                            <tr>
                              <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M6 15l6 -6l6 6"></path>
                                </svg>
                              </th>
                              <th>Customer ID</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody id="data-customer">

                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer d-flex align-items-center">
                        <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                        <ul class="pagination m-0 ms-auto">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">

                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M15 6l-6 6l6 6"></path>
                              </svg>
                              prev
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item"><a class="page-link" href="#">5</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">
                              next
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 6l6 6l-6 6"></path>
                              </svg>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal modal-blur fade" id="modal-customer" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Tambah Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="form-customer">
        <input type="hidden" class="txt_csrf txt_csrf_customer" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">Customer ID</label>
                <input type="hidden" class="form-control" id="code_cust" name="code_cust">
                <input type="text" class="form-control" id="id_cust_dis" disabled>
                <div class="invalid-feedback error_code_cust"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">Name</label>
                <input type="text" class="form-control" id="name_cust" name="name_cust">
                <div class="invalid-feedback error_name_cust"></div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="mb-3">
                <label class="form-label">Kontak</label>
                <input type="tel" class="form-control" id="kontak_cust" min="0" name="kontak_cust">
                <div class="invalid-feedback error_kontak_cust"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address_cust" name="address_cust">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary btn-save ms-auto">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 5l0 14"></path>
              <path d="M5 12l14 0"></path>
            </svg>
            Save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal modal-blur fade" id="modal-customer-edit" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Edit Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="customer-update">
        <input type="hidden" class="txt_csrf txt_csrf_customer" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id_cust" id="id_cust">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">Customer ID</label>
                <input type="hidden" class="form-control" id="code_ucust" name="code_ucust" value="C23090001">
                <input type="text" class="form-control" id="code_ucust_dis" value="C23090001" disabled>
                <div class="invalid-feedback error_code_ucust"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">Name</label>
                <input type="text" class="form-control" id="name_ucust" name="name_ucust">
                <div class="invalid-feedback error_name_ucust"></div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="mb-3">
                <label class="form-label">Kontak</label>
                <input type="tel" class="form-control" id="kontak_ucust" min="0" name="kontak_ucust">
                <div class="invalid-feedback error_kontak_ucust"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address_ucust" name="address_ucust">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-success btn-update-cust ms-auto">
            Update
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal modal-blur fade" id="modal-supplier" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Tambah Supplier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="form-supplier">
        <input type="hidden" class="txt_csrf txt_csrf_supplier" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">Nama supplier</label>
                <input type="text" class="form-control" id="name" name="name">
                <div class="invalid-feedback error_name"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">No telp</label>
                <input type="number" class="form-control" id="telp" name="telp">
                <div class="invalid-feedback error_telp"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <div class="invalid-feedback error_email"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">No Hp</label>
                <input type="number" class="form-control" id="hp" name="hp">
                <div class="invalid-feedback error_hp"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">Nama Bank</label>
                <select class="form-select" id="bank" name="bank">
                  <option value="" selected="">Choose</option>
                  <option value="BCA">BCA</option>
                  <option value="BNI">BNI</option>
                  <option value="BRI">BRI</option>
                  <option value="Mandiri">Mandiri</option>
                  <option value="CIMB Niaga">CIMB Niaga</option>

                </select>
                <div class="invalid-feedback error_bank"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">No rekening</label>
                <input type="number" class="form-control" id="rekening" name="rekening">
                <div class="invalid-feedback error_rekening"></div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="mb-3">
                <label class="form-label">Kota</label>
                <input type="text" class="form-control" id="city" name="city">
                <div class="invalid-feedback error_city"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address">
                <div class="invalid-feedback error_address"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="mb-3">
                <label class="form-label">Website</label>
                <div class="input-group">
                  <span class="input-group-text">
                    https://
                  </span>
                  <input type="text" class="form-control" placeholder="domain.com" name="website" autocomplete="off">
                  <!-- <span class="input-group-text">
                  .com
                </span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary btn-save ms-auto">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 5l0 14"></path>
              <path d="M5 12l14 0"></path>
            </svg>
            Save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal modal-blur fade" id="modal-edit-supplier" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Edit Supplier</h5>
        <button type="button" class="btn-close btn-close-supp" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="form-edit-supplier">
        <input type="hidden" class="txt_csrf txt_csrf_supplier_update" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <input type="hidden" name="_method" value="PUT">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <input type="hidden" class="form-control" id="id_sup" name="id">
                <label class="form-label required">Nama supplier</label>
                <input type="text" class="form-control" id="name_sup" name="name">
                <div class="invalid-feedback error_name"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">No telp</label>
                <input type="number" class="form-control" id="telp_sup" name="telp">
                <div class="invalid-feedback error_telp"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">Email</label>
                <input type="email" class="form-control" id="email_sup" name="email">
                <div class="invalid-feedback error_email"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">No Hp</label>
                <input type="number" class="form-control" id="hp_sup" name="hp">
                <div class="invalid-feedback error_hp"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">Nama Bank</label>
                <select class="form-select" id="bank_sup" name="bank">
                  <option value="" selected="">Choose</option>
                  <option value="BCA">BCA</option>
                  <option value="BNI">BNI</option>
                  <option value="BRI">BRI</option>
                  <option value="Mandiri">Mandiri</option>
                  <option value="CIMB Niaga">CIMB Niaga</option>

                </select>
                <div class="invalid-feedback error_bank"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label required">No rekening</label>
                <input type="number" class="form-control" id="rekening_sup" name="rekening">
                <div class="invalid-feedback error_rekening"></div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="mb-3">
                <label class="form-label">Kota</label>
                <input type="text" class="form-control" id="city_sup" name="city">
                <div class="invalid-feedback error_city"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address_sup" name="address">
                <div class="invalid-feedback error_address"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="mb-3">
                <label class="form-label">Website</label>
                <div class="input-group">
                  <span class="input-group-text">
                    https://
                  </span>
                  <input type="text" class="form-control" placeholder="domain.com" id="website_sup" name="website" autocomplete="off">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary btn-close-supp" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-success btn-update-supplier ms-auto">
            Update
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1500,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
      },
    });

    function loadDataSupplier() {
      $.ajax({
        url: '<?= site_url() ?>api/master/suppliers/get',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          console.log(response);
          if (response.status == 'success') {
            var res = response.result;
            var row = '';
            for (var i = 0; i < res.length; i++) {
              row += `<tr>
                      <td><span class="text-muted">${i+1}</span></td>
                      <td><a href="#" class="text-reset" tabindex="-1">${res[i].name}</a></td>
                      <td>
                        ${res[i].address}
                      </td>
                      <td>
                      ${res[i].city}
                      </td>
                      <td>
                      ${res[i].num_hp}
                      </td>
                      <td>
                      <a href="mailto:${res[i].email}" target="_blank">${res[i].email}</a>
                      </td>
                      <td><a href="https://${res[i].website}" target="_blank">${res[i].website}</a></td>
                      <td>
                        <a href="#" id="btn-edit-supplier" data-bs-toggle="modal" data-supplier="${res[i].id}" data-bs-target="#modal-edit-supplier">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                            <path d="M16 5l3 3"></path>
                          </svg></a>
                        <a href="#" id="btn-delete-supplier" class="text-red" data-supplier="${res[i].id}">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 7l16 0"></path>
                            <path d="M10 11l0 6"></path>
                            <path d="M14 11l0 6"></path>
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                          </svg></a>

                      </td>
                    </tr>`;
            }
            $('#data-supplier').html(row)
          } else {
            var row = `<tr><td colspan='3'>Data no found</td></tr>`;
            $('#data-supplier').html(row)
          }
        }
      })
    }
    loadDataSupplier()

    $(document).on('submit', '#form-supplier', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>api/master/suppliers/store',
        method: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.btn-save').prop('disabled', true);
          $('.btn-save').html('Processing...');
        },
        complete: function() {
          $('.btn-save').prop('disabled', false);
          $('.btn-save').html('Save');
        },
        success: function(response) {
          if (response.error) {
            $('.txt_csrf').val(response.token);
            let data = response.error
            let fields = ["name", "email", "hp", "bank", "rekening"];
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
            $('.txt_csrf').val(response.token);
            loadDataSupplier()
            $('#form-supplier').trigger('reset')
            $('#name').removeClass('is-invalid is-valid is-valid-lite');
            $('#email').removeClass('is-invalid is-valid is-valid-lite');
            $('#hp').removeClass('is-invalid is-valid is-valid-lite');
            $('#bank').removeClass('is-invalid is-valid is-valid-lite');
            $('#rekening').removeClass('is-invalid is-valid is-valid-lite');
            Toast.fire({
              icon: response.status,
              title: response.message,
            });
          }
        }
      })
    })

    $(document).on('click', '#btn-edit-supplier', function(e) {
      e.preventDefault();
      var ID = $(this).data('supplier');
      $.ajax({
        url: '<?= site_url() ?>api/master/suppliers/edit',
        type: 'GET',
        dataType: 'json',
        data: {
          id: ID,
        },
        success: function(response) {
          console.log(response);
          var res = response.result
          if (response.success) {
            $('.txt_csrf_supplier_update').val(response.token)
            $('#id_sup').val(res.id)
            $('#name_sup').val(res.name)
            $('#telp_sup').val(res.num_telp)
            $('#hp_sup').val(res.num_hp)
            $('#rekening_sup').val(res.account_number)
            $('#bank_sup').val(res.account_name)
            $('#email_sup').val(res.email)
            $('#website_sup').val(res.website)
            $('#address_sup').val(res.address)
            $('#city_sup').val(res.city)
          }
        }
      })
    })
    $(document).on('click', '.btn-close-supp', function(e) {
      $('#form-edit-supplier').trigger('reset');
    })
    $(document).on('click', '#btn-delete-supplier', function(e) {
      e.preventDefault()
      if (confirm('Apakah anda yakin menghapus supplier ini?')) {
        var csrfName = $('.txt_csrf_supplier').attr('name');
        var csrfHash = $('.txt_csrf_supplier').val()
        var dataID = $(this).data('supplier');
        var element = this
        $.ajax({
          url: '<?= site_url() ?>api/master/suppliers/delete',
          type: 'POST',
          dataType: 'json',
          data: {
            _method: 'delete',
            [csrfName]: csrfHash,
            id: dataID
          },
          success: function(response) {
            console.log(response);
            if (response.success) {
              $(element).closest('tr').fadeOut();
              setTimeout(() => {
                $('.txt_csrf').val(response.token)
                loadDataSupplier()
              }, 1500)
              Toast.fire({
                icon: response.success,
                title: response.message,
              });
            } else {
              $('.txt_csrf').val(response.token)
              Toast.fire({
                icon: response.error,
                title: response.message,
              });
            }
          }
        })
      }
    })
    $(document).on('submit', '#form-edit-supplier', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>api/master/suppliers/update',
        method: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        success: function(response) {
          if (response.success) {
            $('.txt_csrf').val(response.token)
            loadDataSupplier();
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          } else {
            $('.txt_csrf').val(response.token)
            Toast.fire({
              icon: response.error,
              title: response.message,
            });
          }
        }
      })
    })

    function loadDataCustomer() {
      $.ajax({
        url: '<?= site_url() ?>api/master/customers/get',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          console.log(response);
          if (response.success) {
            $('#code_cust').val(response.code);
            $('#id_cust_dis').val(response.code);
            var res = response.result;
            var row = '';
            for (var i = 0; i < res.length; i++) {
              row += `<tr>
                        <td><span class="text-muted">${i+1}</span></td>
                        <td><a href="" class="text-reset" tabindex="-1">${res[i].customer_id}</a></td>
                        <td>
                          ${res[i].name}
                        </td>
                        <td>
                        ${res[i].address}
                        </td>
                        <td>
                          <a href="#" id="edit-customer" data-bs-toggle="modal" data-bs-target="#modal-customer-edit" data-customer="${res[i].id}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                              <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                              <path d="M16 5l3 3"></path>
                            </svg></a>
                          <a href="#" class="text-red" id="btn-delete-customer" data-customer="${res[i].id}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M4 7l16 0"></path>
                              <path d="M10 11l0 6"></path>
                              <path d="M14 11l0 6"></path>
                              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                            </svg></a>

                        </td>
                      </tr>`;
            }
            $('#data-customer').html(row)
          } else {
            var row = `<tr><td colspan='3'>Data no found</td></tr>`;
            $('#data-customer').html(row)
          }
        }
      })
    }
    loadDataCustomer()

    $(document).on('submit', '#form-customer', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>api/master/customers/store',
        method: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.btn-save').prop('disabled', true);
          $('.btn-save').html('Processing...');
        },
        complete: function() {
          $('.btn-save').prop('disabled', false);
          $('.btn-save').html('Save');
        },
        success: function(response) {
          if (response.error) {
            $('.txt_csrf').val(response.token);
            let data = response.error
            let fields = ["name_cust", "code_cust", "kontak_cust"];
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
            $('.txt_csrf').val(response.token);
            loadDataCustomer();
            $('#form-customer').trigger('reset')
            $('#name_cust').removeClass('is-invalid is-valid is-valid-lite');
            $('#kontak_cust').removeClass('is-invalid is-valid is-valid-lite');
            $('#code_cust').removeClass('is-invalid is-valid is-valid-lite');
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          }
        }
      })
    })
    $(document).on('click', '#edit-customer', function(e) {
      e.preventDefault();
      var ID = $(this).data('customer');
      $.ajax({
        url: '<?= site_url('api/master/customers/edit') ?>',
        type: 'get',
        dataType: 'json',
        data: {
          id: ID
        },
        success: function(response) {
          var data = response.result;
          console.log(response);
          if (response.success) {
            $('.txt_csrf_customer').val(response.token);
            $('#id_cust').val(data.id);
            $('#code_ucust').val(data.customer_id);
            $('#code_ucust_dis').val(data.customer_id);
            $('#name_ucust').val(data.name);
            $('#kontak_ucust').val(data.contact);
            $('#address_ucust').val(data.address);
          }
        }
      })
    })
    $(document).on('submit', '#customer-update', function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?= site_url() ?>api/master/customers/update',
        method: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.btn-update-cust').prop('disabled', true);
          $('.btn-update-cust').html('Processing...');
        },
        complete: function() {
          $('.btn-update-cust').prop('disabled', false);
          $('.btn-update-cust').html('Update');
        },
        success: function(response) {
          if (response.error) {
            $('.txt_csrf').val(response.token);
            let data = response.error
            let fields = ["name_ucust", "code_ucust", "kontak_ucust"];
            fields.forEach((field) => {
              if (data['error_' + field]) {
                $('#' + field).addClass('is-invalid');
                $('.error_' + field).html(data['error_' + field])
              } else {
                $('#' + field).removeClass('is-invalid');
                $('#' + field).addClass('is-valid is-valid-lite');
              }
            })
          } else if (response.success) {
            $('.txt_csrf').val(response.token)
            loadDataCustomer()
            $('#name_ucust').removeClass('is-invalid is-valid is-valid-lite');
            $('#kontak_ucust').removeClass('is-invalid is-valid is-valid-lite');
            $('#code_ucust').removeClass('is-invalid is-valid is-valid-lite');
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          } else {
            $('.txt_csrf').val(response.token)
            Toast.fire({
              icon: response.error,
              title: response.message,
            });
          }
        }
      })
    })
    $(document).on('click', '#btn-delete-customer', function(e) {
      e.preventDefault()
      if (confirm('Apakah anda yakin menghapus Customer ini?')) {
        var csrfName = $('.txt_csrf_customer').attr('name');
        var csrfHash = $('.txt_csrf_customer').val()
        var dataID = $(this).data('customer');
        var element = this
        $.ajax({
          url: '<?= site_url() ?>api/master/customers/delete',
          type: 'POST',
          dataType: 'json',
          data: {
            _method: 'delete',
            [csrfName]: csrfHash,
            id: dataID
          },
          success: function(response) {
            console.log(response);
            if (response.success) {
              $(element).closest('tr').fadeOut();
              setTimeout(() => {
                $('.txt_csrf').val(response.token)
                loadDataCustomer()
              }, 1500)
              Toast.fire({
                icon: response.success,
                title: response.message,
              });
            } else {
              $('.txt_csrf').val(response.token)
              Toast.fire({
                icon: response.error,
                title: response.message,
              });
            }
          }
        })
      }
    })
  })
</script>
<?= $this->endSection() ?>