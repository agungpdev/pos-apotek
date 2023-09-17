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
                    <a href="#" class="btn btn-outline-primary w-25">
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
                              <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                              <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M6 15l6 -6l6 6"></path>
                                </svg>
                              </th>
                              <th>Invoice Subject</th>
                              <th>Client</th>
                              <th>VAT No.</th>
                              <th>Created</th>
                              <th>Status</th>
                              <th>Price</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                              <td><span class="text-muted">001401</span></td>
                              <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                              <td>
                                <span class="flag flag-country-us"></span>
                                Carlson Limited
                              </td>
                              <td>
                                87956621
                              </td>
                              <td>
                                15 Dec 2017
                              </td>
                              <td>
                                <span class="badge bg-success me-1"></span> Paid
                              </td>
                              <td>$887</td>
                              <td>
                                <a href="#" class="text-green" data-bs-toggle="modal" data-bs-target="#modal-update-price-obat">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-currency-dollar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path>
                                    <path d="M12 3v3m0 12v3"></path>
                                  </svg>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-edit-obat"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                    <path d="M16 5l3 3"></path>
                                  </svg></a>
                                <a href="#" class="text-red" data-bs-toggle="modal" data-bs-target="#modal-delete-obat"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7l16 0"></path>
                                    <path d="M10 11l0 6"></path>
                                    <path d="M14 11l0 6"></path>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                  </svg></a>

                              </td>
                              <div class="modal modal-blur fade" id="modal-delete-obat" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-status bg-danger"></div>
                                    <div class="modal-body text-center py-4">
                                      <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path>
                                        <path d="M12 9v4"></path>
                                        <path d="M12 17h.01"></path>
                                      </svg>
                                      <h3>Are you sure?</h3>
                                      <div class="text-muted">Do you really want to remove 84 files? What you've done cannot be undone.</div>
                                    </div>
                                    <div class="modal-footer">
                                      <div class="w-100">
                                        <div class="row">
                                          <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                              Cancel
                                            </a></div>
                                          <div class="col"><a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                                              Delete 84 items
                                            </a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal modal-blur fade" id="modal-update-price-obat" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Form update harga obat</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-8">
                                          <div class="mb-3">
                                            <label class="form-label">Report url</label>
                                            <div class="input-group input-group-flat">
                                              <span class="input-group-text">
                                                https://tabler.io/reports/
                                              </span>
                                              <input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-4">
                                          <div class="mb-3">
                                            <label class="form-label">Visibility</label>
                                            <select class="form-select">
                                              <option value="1" selected="">Private</option>
                                              <option value="2">Public</option>
                                              <option value="3">Hidden</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Client name</label>
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Reporting period</label>
                                            <input type="date" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-12">
                                          <div>
                                            <label class="form-label">Additional information</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                        Cancel
                                      </a>
                                      <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M12 5l0 14"></path>
                                          <path d="M5 12l14 0"></path>
                                        </svg>
                                        Create new report
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal modal-blur fade" id="modal-edit-obat" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Form edit data obat</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-8">
                                          <div class="mb-3">
                                            <label class="form-label">Report url</label>
                                            <div class="input-group input-group-flat">
                                              <span class="input-group-text">
                                                https://tabler.io/reports/
                                              </span>
                                              <input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-4">
                                          <div class="mb-3">
                                            <label class="form-label">Visibility</label>
                                            <select class="form-select">
                                              <option value="1" selected="">Private</option>
                                              <option value="2">Public</option>
                                              <option value="3">Hidden</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Client name</label>
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Reporting period</label>
                                            <input type="date" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-12">
                                          <div>
                                            <label class="form-label">Additional information</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                        Cancel
                                      </a>
                                      <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M12 5l0 14"></path>
                                          <path d="M5 12l14 0"></path>
                                        </svg>
                                        Create new report
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </tr>
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
                <label class="form-label">Nama supplier</label>
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
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <div class="invalid-feedback error_email"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">No Hp</label>
                <input type="number" class="form-control" id="hp" name="hp">
                <div class="invalid-feedback error_hp"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Nama Bank</label>
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
                <label class="form-label">No rekening</label>
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
                <label class="form-label">Nama supplier</label>
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
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email_sup" name="email">
                <div class="invalid-feedback error_email"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">No Hp</label>
                <input type="number" class="form-control" id="hp_sup" name="hp">
                <div class="invalid-feedback error_hp"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Nama Bank</label>
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
                <label class="form-label">No rekening</label>
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
          console.log(response);
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
  })
</script>
<?= $this->endSection() ?>