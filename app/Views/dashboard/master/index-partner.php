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
                        <tbody id="data-doctor">

                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div id="layout-doctor">
                      <form id="tambah-doctor">
                        <input type="hidden" class="txt_csrf txt_csrf_doctor" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                        <div class="mb-3">
                          <label class="form-label required">Dokter</label>
                          <div>
                            <input type="text" class="form-control required" name="doctor" placeholder="dr.agung" id="doctor">
                            <div class="invalid-feedback error_doctor"></div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label required">Spesialis</label>
                          <div>
                            <input type="text" class="form-control" name="spesialis" placeholder="jantung" id="spesialis">
                            <div class="invalid-feedback error_spesialis"></div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label required">Alamat</label>
                          <div>
                            <input type="text" class="form-control" name="address" id="address" placeholder="jl.rajawali maguwoharjo depok sleman">
                            <div class="invalid-feedback error_address"></div>
                          </div>
                        </div>
                        <div class="text-end">
                          <button type="submit" class="btn btn-primary save-doctor">Tambah</button>
                        </div>
                      </form>
                    </div>
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
                        <tbody id="data-apoteker">

                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div id="layout-apoteker">
                      <form id="tambah-apoteker">
                        <input type="hidden" class="txt_csrf txt_csrf_apoteker" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                        <div class="mb-3">
                          <label class="form-label required">Apoteker</label>
                          <div>
                            <input type="text" class="form-control" name="apoteker" id="apoteker" placeholder="dr.agung">
                            <div class="invalid-feedback error_apoteker"></div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label required">No SIK</label>
                          <div>
                            <input type="text" class="form-control" name="nosik" id="nosik" placeholder="123/78-12">
                            <div class="invalid-feedback error_nosik"></div>
                          </div>
                        </div>
                        <div class="text-end">
                          <button type="submit" class="btn btn-primary save-apoteker">Tambah</button>
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

    function loadDataDoctor() {
      $.ajax({
        url: '<?= site_url() ?>api/master/doctors/get',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          console.log(response);
          if (response.success) {
            var res = response.result;
            var row = '';
            for (var i = 0; i < res.length; i++) {
              row += `<tr>
                        <td>${i+1}</td>
                        <td>
                          ${res[i].name}
                        </td>
                        <td>
                        ${res[i].spesialis}
                        </td>
                        <td>
                          <a href="#" id="edit-doctor" data-doctor="${res[i].id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                              <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                              <path d="M16 5l3 3"></path>
                            </svg></a>
                          <a href="#" id="delete-doctor" class="text-red" data-doctor="${res[i].id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M4 7l16 0"></path>
                              <path d="M10 11l0 6"></path>
                              <path d="M14 11l0 6"></path>
                              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                            </svg>
                          </a>
                        </td>
                      </tr>`
            }
            $('#data-doctor').html(row)
          } else {
            var row = `<tr><td colspan='3' class="text-center">Data no found</td></tr>`;
            $('#data-doctor').html(row)
          }
        }
      })
    }
    loadDataDoctor()
    $(document).on('submit', '#tambah-doctor', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>api/master/doctors/store',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.save-doctor').prop('disabled', true);
          $('.save-doctor').html('Process...');
        },
        complete: function() {
          $('.save-doctor').prop('disabled', false);
          $('.save-doctor').html('Tambah');
        },
        success: function(response) {
          console.log(response);
          $('.txt_csrf').val(response.token)
          if (response.error) {
            $('.txt_csrf').val(response.token);
            let data = response.error
            let fields = ["doctor", "spesialis", "address"];
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
            loadDataDoctor();
            $('#tambah-doctor').trigger('reset');
            $('#doctor').removeClass('is-invalid');
            $('#spesialis').removeClass('is-invalid');
            $('#address').removeClass('is-invalid');
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          }
        }
      })
    })
    $(document).on('click', '#edit-doctor', function(e) {
      e.preventDefault();
      var doctorID = $(this).data('doctor');
      $.ajax({
        url: '<?= site_url() ?>api/master/doctors/edit',
        type: 'GET',
        dataType: 'json',
        data: {
          id: doctorID,
        },
        success: function(response) {
          console.log(response);
          var res = response.result
          $('.txt_csrf').val(response.token);
          if (response.success) {
            var form = `<form id="update-doctor">
                    <input type="hidden" class="txt_csrf txt_csrf_doctor" name="<?= csrf_token() ?>" value="${response.token}">
                    <input type="hidden" name="id_doc" value="${res.id}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="mb-3">
                      <label class="form-label required">Dokter</label>
                      <div>
                        <input type="text" class="form-control required" name="udoctor" placeholder="dr.agung" id="udoctor" value="${res.name}">
                        <div class="invalid-feedback error_udoctor"></div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label required">Spesialis</label>
                      <div>
                        <input type="text" class="form-control" name="uspesialis" placeholder="jantung" id="uspesialis" value="${res.spesialis}">
                        <div class="invalid-feedback error_uspesialis"></div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label required">Alamat</label>
                      <div>
                        <input type="text" class="form-control" name="uaddress" id="uaddress" placeholder="jl.rajawali maguwoharjo depok sleman" value="${res.address}">
                        <div class="invalid-feedback error_uaddress"></div>
                      </div>
                    </div>
                    <div class="text-end">
                      <button type="submit" class="btn btn-danger cancel-update">Cancel</button>
                      <button type="submit" class="btn btn-success update-doctor">Update</button>
                    </div>
                  </form>`;
            $('#layout-doctor').html(form);
          }
        }
      })
    })
    $(document).on('click', '.cancel-update', function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?= site_url() ?>api/master/doctors/canceled',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            var form =
              `<form id="tambah-doctor">
              <input type="hidden" class="txt_csrf txt_csrf_doctor" name="<?= csrf_token() ?>" value="${response.token}">
              <div class="mb-3">
                <label class="form-label required">Dokter</label>
                <div>
                  <input type="text" class="form-control required" name="doctor" placeholder="dr.agung" id="doctor">
                  <div class="invalid-feedback error_doctor"></div>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label required">Spesialis</label>
                <div>
                  <input type="text" class="form-control" name="spesialis" placeholder="jantung" id="spesialis">
                  <div class="invalid-feedback error_spesialis"></div>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label required">Alamat</label>
                <div>
                  <input type="text" class="form-control" name="address" id="address" placeholder="jl.rajawali maguwoharjo depok sleman">
                  <div class="invalid-feedback error_address"></div>
                </div>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary save-doctor">Tambah</button>
              </div>
            </form>`
            $('#layout-doctor').html(form);
          }
        }
      })
    })
    $(document).on('submit', '#update-doctor', function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?= site_url() ?>api/master/doctors/update',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.update-doctor').prop('disabled', true);
          $('.update-doctor').html('Process...');
        },
        complete: function() {
          $('.update-doctor').prop('disabled', false);
          $('.update-doctor').html('Update');
        },
        success: function(response) {
          console.log(response);
          $('.txt_csrf').val(response.token)
          if (response.error) {
            $('.txt_csrf').val(response.token);
            let data = response.error
            let fields = ["udoctor", "uspesialis", "uaddress"];
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
            loadDataDoctor();
            $('#udoctor').removeClass('is-invalid');
            $('#uspesialis').removeClass('is-invalid');
            $('#uaddress').removeClass('is-invalid');
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
            var form =
              `<form id="tambah-doctor">
              <input type="hidden" class="txt_csrf txt_csrf_doctor" name="<?= csrf_token() ?>" value="${response.token}">
              <div class="mb-3">
                <label class="form-label required">Dokter</label>
                <div>
                  <input type="text" class="form-control required" name="doctor" placeholder="dr.agung" id="doctor">
                  <div class="invalid-feedback error_doctor"></div>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label required">Spesialis</label>
                <div>
                  <input type="text" class="form-control" name="spesialis" placeholder="jantung" id="spesialis">
                  <div class="invalid-feedback error_spesialis"></div>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label required">Alamat</label>
                <div>
                  <input type="text" class="form-control" name="address" id="address" placeholder="jl.rajawali maguwoharjo depok sleman">
                  <div class="invalid-feedback error_address"></div>
                </div>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary save-doctor">Tambah</button>
              </div>
            </form>`
            $('#layout-doctor').html(form);
          }
        }
      })
    })
    $(document).on('click', '#delete-doctor', function(e) {
      e.preventDefault()
      if (confirm('Apakah anda yakin menghapus data?')) {
        var csrfName = $('.txt_csrf_doctor').attr('name');
        var csrfHash = $('.txt_csrf_doctor').val()
        var dataID = $(this).data('doctor');
        var element = this
        $.ajax({
          url: '<?= site_url() ?>api/master/doctors/delete',
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
                loadDataDoctor();
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

    function loadDataApoteker() {
      $.ajax({
        url: '<?= site_url() ?>api/master/apoteker/get',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          console.log(response);
          if (response.success) {
            var res = response.result;
            var row = '';
            for (var i = 0; i < res.length; i++) {
              row += `<tr>
                        <td>${i+1}</td>
                        <td>
                          ${res[i].apoteker}
                        </td>
                        <td>
                          <a href="#" id="edit-apoteker" data-apoteker="${res[i].id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                              <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                              <path d="M16 5l3 3"></path>
                            </svg></a>
                          <a href="#" id="delete-apoteker" class="text-red" data-apoteker="${res[i].id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M4 7l16 0"></path>
                              <path d="M10 11l0 6"></path>
                              <path d="M14 11l0 6"></path>
                              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                            </svg>
                          </a>
                        </td>
                      </tr>`
            }
            $('#data-apoteker').html(row)
          } else {
            var row = `<tr><td colspan='3' class="text-center">Data no found</td></tr>`;
            $('#data-apoteker').html(row)
          }
        }
      })
    }
    loadDataApoteker()
    $(document).on('submit', '#tambah-apoteker', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>api/master/apoteker/store',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.save-apoteker').prop('disabled', true);
          $('.save-apoteker').html('Process...');
        },
        complete: function() {
          $('.save-apoteker').prop('disabled', false);
          $('.save-apoteker').html('Tambah');
        },
        success: function(response) {
          console.log(response);
          $('.txt_csrf').val(response.token)
          if (response.error) {
            $('.txt_csrf').val(response.token);
            let data = response.error
            let fields = ["apoteker", "nosik"];
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
            loadDataApoteker();
            $('#tambah-apoteker').trigger('reset');
            $('#apoteker').removeClass('is-invalid');
            $('#nosik').removeClass('is-invalid');
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          }
        }
      })
    })
    $(document).on('click', '#edit-apoteker', function(e) {
      e.preventDefault();
      var doctorID = $(this).data('apoteker');
      $.ajax({
        url: '<?= site_url() ?>api/master/apoteker/edit',
        type: 'GET',
        dataType: 'json',
        data: {
          id: doctorID,
        },
        success: function(response) {
          console.log(response);
          var res = response.result
          $('.txt_csrf').val(response.token);
          if (response.success) {
            var form = `<form id="update-apoteker">
                      <input type="hidden" class="txt_csrf txt_csrf_apoteker" name="<?= csrf_token() ?>" value="${response.token}">
                      <input type="hidden" name="id_apt" value="${res.id}">
                      <input type="hidden" name="_method" value="PUT">
                      <div class="mb-3">
                        <label class="form-label required">Apoteker</label>
                        <div>
                          <input type="text" class="form-control" name="uapoteker" id="uapoteker" placeholder="dr.agung" value="${res.apoteker}">
                          <div class="invalid-feedback error_uapoteker"></div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label required">No SIK</label>
                        <div>
                          <input type="text" class="form-control" name="unosik" id="unosik" placeholder="123/78-12" value="${res.no_sik}">
                          <div class="invalid-feedback error_unosik"></div>
                        </div>
                      </div>
                      <div class="text-end">
                        <button type="button" class="btn btn-danger cancel-apoteker">Cancel</button>
                        <button type="submit" class="btn btn-success update-apoteker">Update</button>
                      </div>
                    </form>`;
            $('#layout-apoteker').html(form);
          }
        }
      })
    })
    $(document).on('click', '.cancel-apoteker', function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?= site_url() ?>api/master/apoteker/canceled',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            var form =
              `<form id="tambah-apoteker">
                  <input type="hidden" class="txt_csrf txt_csrf_apoteker" name="<?= csrf_token() ?>" value="${response.token}">
                  <div class="mb-3">
                    <label class="form-label required">Apoteker</label>
                    <div>
                      <input type="text" class="form-control" name="apoteker" id="apoteker" placeholder="dr.agung">
                      <div class="invalid-feedback error_apoteker"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label required">No SIK</label>
                    <div>
                      <input type="text" class="form-control" name="nosik" id="nosik" placeholder="123/78-12">
                      <div class="invalid-feedback error_nosik"></div>
                    </div>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary save-apoteker">Tambah</button>
                  </div>
                </form>`
            $('#layout-apoteker').html(form);
          }
        }
      })
    })
    $(document).on('submit', '#update-apoteker', function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?= site_url() ?>api/master/apoteker/update',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.update-apoteker').prop('disabled', true);
          $('.update-apoteker').html('Process...');
        },
        complete: function() {
          $('.update-apoteker').prop('disabled', false);
          $('.update-apoteker').html('Update');
        },
        success: function(response) {
          console.log(response);
          $('.txt_csrf').val(response.token)
          if (response.error) {
            $('.txt_csrf').val(response.token);
            let data = response.error
            let fields = ["uapoteker", "unosik"];
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
            loadDataApoteker();
            $('#uapoteker').removeClass('is-invalid');
            $('#unosik').removeClass('is-invalid');
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
            var form =
              `<form id="tambah-apoteker">
                  <input type="hidden" class="txt_csrf txt_csrf_apoteker" name="<?= csrf_token() ?>" value="${response.token}">
                  <div class="mb-3">
                    <label class="form-label required">Apoteker</label>
                    <div>
                      <input type="text" class="form-control" name="apoteker" id="apoteker" placeholder="dr.agung">
                      <div class="invalid-feedback error_apoteker"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label required">No SIK</label>
                    <div>
                      <input type="text" class="form-control" name="nosik" id="nosik" placeholder="123/78-12">
                      <div class="invalid-feedback error_nosik"></div>
                    </div>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary save-apoteker">Tambah</button>
                  </div>
                </form>`
            $('#layout-apoteker').html(form);
          }
        }
      })
    })
    $(document).on('click', '#delete-apoteker', function(e) {
      e.preventDefault()
      if (confirm('Apakah anda yakin menghapus data?')) {
        var csrfName = $('.txt_csrf_apoteker').attr('name');
        var csrfHash = $('.txt_csrf_apoteker').val()
        var dataID = $(this).data('apoteker');
        var element = this
        $.ajax({
          url: '<?= site_url() ?>api/master/apoteker/delete',
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
                loadDataApoteker()
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