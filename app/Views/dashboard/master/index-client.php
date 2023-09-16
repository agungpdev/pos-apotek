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
                    <a href="#" class="btn btn-outline-primary w-25">
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
<?= $this->endSection() ?>