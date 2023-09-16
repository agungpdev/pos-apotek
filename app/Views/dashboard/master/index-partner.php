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
          Dokter dan Apoteker
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
                <a href="#tabs-dokter" class="nav-link <?= $param == 'dokter' ? 'active' : '' ?>" data-bs-toggle="tab" aria-selected="<?= $param == 'dokter' ? 'true' : 'false' ?>" role="tab" tabindex="-1">Dokter</a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#tabs-apoteker" class="nav-link <?= $param == 'apoteker' ? 'active' : '' ?>" data-bs-toggle="tab" aria-selected="<?= $param == 'apoteker' ? 'true' : 'false' ?>" role="tab" tabindex="-1">Apoteker</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane <?= $param == 'dokter' ? 'active show' : '' ?>" id="tabs-dokter" role="tabpanel">
                <h4>Doktor</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Dokter</th>
                            <th>Spesialis</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>
                              Dr.Herman
                            </td>
                            <td>
                              Bedah
                            </td>
                            <td>
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
                                </svg>
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <form>
                      <div class="mb-3">
                        <label class="form-label required">Dokter</label>
                        <div>
                          <input type="text" class="form-control" name="doktor" placeholder="dr.agung">
                          <small class="form-hint">Dokter minimal 8 karakter</small>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label required">Spesialis</label>
                        <div>
                          <input type="text" class="form-control" name="spesialis" placeholder="jantung">
                          <!-- <small class="form-hint">Dokter minimal 8 karakter</small> -->
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label required">Alamat</label>
                        <div>
                          <input type="text" class="form-control" name="alamat" placeholder="jl.rajawali maguwoharjo depok sleman">
                          <!-- <small class="form-hint">Dokter minimal 8 karakter</small> -->
                        </div>
                      </div>
                      <div class="text-end">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="tab-pane <?= $param == 'apoteker' ? 'active show' : '' ?>" id="tabs-apoteker" role="tabpanel">
                <h4>Apoteker</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Apoteker</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>
                              Apotek Pharma
                            </td>
                            <td>
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
                                </svg>
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <form>
                      <div class="mb-3">
                        <label class="form-label required">Apoteker</label>
                        <div>
                          <input type="text" class="form-control" name="apoteker" placeholder="dr.agung">
                          <small class="form-hint">Apoteker minimal 4 karakter</small>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label required">No SIK</label>
                        <div>
                          <input type="text" class="form-control" name="nosik" placeholder="123/78-12">
                          <!-- <small class="form-hint">Dokter minimal 8 karakter</small> -->
                        </div>
                      </div>
                      <div class="text-end">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </div>
                    </form>
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