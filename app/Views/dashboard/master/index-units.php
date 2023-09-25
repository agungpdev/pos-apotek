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
          Category, Satuan dan Lokasi
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
                <a href="#tabs-category" class="nav-link <?= $param == 'category' ? 'active' : '' ?>" data-bs-toggle="tab" aria-selected="<?= $param == 'category' ? 'true' : 'false' ?>" role="tab" tabindex="-1">Category</a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#tabs-satuan" class="nav-link <?= $param == 'satuan' ? 'active' : '' ?>" data-bs-toggle="tab" aria-selected="<?= $param == 'satuan' ? 'true' : 'false' ?>" role="tab" tabindex="-1">Satuan</a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#tabs-location" class="nav-link <?= $param == 'location' ? 'active' : '' ?>" data-bs-toggle="tab" aria-selected="<?= $param == 'location' ? 'true' : 'false' ?>" role="tab" tabindex="-1">Location</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane <?= $param == 'category' ? 'active show' : '' ?>" id="tabs-category" role="tabpanel">
                <h4>Category</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody id="body-category">

                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div id="layoutFormCategory">

                    </div>
                    <form id="form-add-category">
                      <input type="hidden" class="txt_csrf txt_csrf_category" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                      <div class="mb-3">
                        <label class="form-label required">Category</label>
                        <div>
                          <input type="text" class="form-control required" id="category" name="category" placeholder="Obat bebas" autocomplete="off">
                          <div class="invalid-feedback error_category"></div>
                        </div>
                      </div>
                      <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-save-cat">Tambah</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="tab-pane <?= $param == 'satuan' ? 'active show' : '' ?>" id="tabs-satuan" role="tabpanel">
                <h4>Satuan</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Satuan</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody id="body-satuan">

                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div id="layoutFormUnit">

                    </div>
                    <form id="form-add-unit">
                      <input type="hidden" class="txt_csrf txt_csrf_units" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                      <div class="mb-3">
                        <label class="form-label required">Satuan</label>
                        <div>
                          <input type="text" class="form-control" id="units" name="unit" placeholder="PCS" autocomplete="off">
                          <div class="invalid-feedback error_units"></div>
                        </div>
                      </div>
                      <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-unit">Tambah</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="tab-pane <?= $param == 'location' ? 'active show' : '' ?>" id="tabs-location" role="tabpanel">
                <h4>Location</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Location</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody id="body-location">

                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div id="layoutFormLocation">

                    </div>
                    <form id="form-add-location">
                      <input type="hidden" class="txt_csrf txt_csrf_location" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                      <div class="mb-3">
                        <label class="form-label required">Lokasi</label>
                        <div>
                          <input type="text" class="form-control required" id="location" name="location" placeholder="Rak utama" autocomplete="off">
                          <div class="invalid-feedback error_location"></div>
                        </div>
                      </div>
                      <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-loc">Tambah</button>
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
<script type="text/javascript">
  $(document).ready(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1500,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
      },
    });

    function loadDataCategory() {
      $.ajax({
        url: '<?= site_url() ?>api/master/categories/get',
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
            <td>${res[i].category_name}</td>
            <td><a href="#" id="btn-category-edit" data-category="${res[i].category_id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                <path d="M16 5l3 3"></path>
              </svg></a>
              <a href="#" class="text-red" id="btn-category-delete" data-category="${res[i].category_id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            $('#body-category').html(row)
          } else {
            var row = `<tr><td colspan='3' class="text-center" >Data no found</td></tr>`;
            $('#body-category').html(row)
          }
        }
      })
    }
    loadDataCategory()

    $('#form-add-category').on('submit', function(e) {
      e.preventDefault()
      var csrfName = $('.txt_csrf_category').attr('name');
      var csrfHash = $('.txt_csrf_category').val()
      var dataCat = $('#category').val()
      $.ajax({
        url: '<?= site_url() ?>api/master/categories/store',
        type: 'POST',
        dataType: 'json',
        data: {
          [csrfName]: csrfHash,
          category: dataCat
        },
        beforeSend: function() {
          $('.btn-save-cat').prop('disabled', true);
          $('.btn-save-cat').html('Process...');
        },
        complete: function() {
          $('.btn-save-cat').prop('disabled', false);
          $('.btn-save-cat').html('Tambah');
        },
        success: function(response) {
          console.log(response);
          $('.txt_csrf').val(response.token)
          if (response.error) {
            const data = response.error
            if (data.error_category) {
              $('#category').addClass('is-invalid');
              $('.error_category').html(data.error_category)
            } else {
              $('#category').removeClass('is-invalid');
            }
          } else {
            loadDataCategory();
            $('#category').removeClass('is-invalid');
            $('#form-add-category').trigger('reset');
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          }
        }
      })
    })
    $(document).on('click', '#btn-category-delete', function(e) {
      e.preventDefault()
      if (confirm('Apakah anda yakin menghapus data?')) {
        var csrfName = $('.txt_csrf_category').attr('name');
        var csrfHash = $('.txt_csrf_category').val()
        var dataID = $(this).data('category');
        var element = this
        $.ajax({
          url: '<?= site_url() ?>api/master/categories/delete',
          type: 'POST',
          dataType: 'json',
          data: {
            _method: 'delete',
            [csrfName]: csrfHash,
            id: dataID
          },
          success: function(response) {
            console.log(response);
            if (response.status == 'success') {
              $(element).closest('tr').fadeOut();
              setTimeout(() => {
                $('.txt_csrf').val(response.token)
                loadDataCategory()
              }, 1500)
              Toast.fire({
                icon: response.status,
                title: response.message,
              });
            } else {
              Toast.fire({
                icon: response.status,
                title: response.message,
              });
            }
          }
        })
      }
    })
    $(document).on('click', '#btn-category-edit', function(e) {
      e.preventDefault();
      var catID = $(this).data('category');
      $.ajax({
        url: '<?= site_url() ?>api/master/categories/edit',
        type: 'GET',
        dataType: 'json',
        data: {
          id: catID,
        },
        success: function(response) {
          console.log(response);
          var res = response.result
          $('.txt_csrf_category_update').val(response.token)
          if (response.status == 'success') {
            var form = `<form id="form-update-category">
                        <input type="hidden" class="txt_csrf_category_update" name="<?= csrf_token() ?>" value="${response.token}">
                        <div class="mb-3">
                          <label class="form-label required">Category</label>
                          <div>
                            <input type="hidden" id="field-update-id" class="form-control" name="category-update-id" value="${res.category_id}">
                            <input type="text" class="form-control" id="field-category-update" name="category-update" value="${res.category_name}" autocomplete="off">
                            <div class="invalid-feedback error_category_up"></div>
                          </div>
                        </div>
                        <div class="text-end">
                          <button type="submit" class="btn btn-success btn-up-cat">Update</button>
                          <button type="button" id="close-category-update" class="btn btn-warning">Close</button>
                        </div>
                      </form>`
            $('#layoutFormCategory').html(form)
          }
        }
      })
    })
    $(document).on('click', '#close-category-update', function(e) {
      e.preventDefault()
      $('#form-update-category').remove();
    })
    $(document).on('submit', '#form-update-category', function(e) {
      e.preventDefault()
      var csrfName = $('.txt_csrf_category_update').attr('name');
      var csrfHash = $('.txt_csrf_category_update').val()
      var dataID = $('#field-update-id').val()
      var category = $('#field-category-update').val()
      $.ajax({
        url: '<?= site_url() ?>api/master/categories/update',
        method: 'POST',
        dataType: 'json',
        data: {
          _method: 'put',
          [csrfName]: csrfHash,
          id: dataID,
          category: category
        },
        beforeSend: function() {
          $('.btn-up-cat').prop('disabled', true);
          $('.btn-up-cat').html('Process...');
        },
        complete: function() {
          $('.btn-up-cat').prop('disabled', false);
          $('.btn-up-cat').html('Update');
        },
        success: function(response) {
          console.log(response);
          if (response.error) {
            $('.txt_csrf').val(response.token)
            const data = response.error
            if (data.error_category_up) {
              $('#field-category-update').addClass('is-invalid');
              $('.error_category_up').html(data.error_category_up)
            } else {
              $('#field-category-update').removeClass('is-invalid');
            }
          } else if (response.success) {
            $('.txt_csrf').val(response.token)
            loadDataCategory();
            $('#field-category-update').removeClass('is-invalid');
            $('#form-update-category').remove();
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

    function loadDataUnits() {
      $.ajax({
        url: '<?= site_url() ?>api/master/units/get',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            var res = response.result;
            var row = '';
            for (var i = 0; i < res.length; i++) {
              row += `<tr>
            <td>${i+1}</td>
            <td>${res[i].unit_name}</td>
            <td><a href="#" id="btn-unit-edit" data-unit="${res[i].unit_id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                <path d="M16 5l3 3"></path>
              </svg></a>
              <a href="#" class="text-red" id="btn-unit-delete" data-unit="${res[i].unit_id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            $('#body-satuan').html(row)
          } else {
            var row = `<tr><td colspan='3' class="text-center">Data no found</td></tr>`;
            $('#body-satuan').html(row)
          }
        }
      })
    }
    loadDataUnits()

    $('#form-add-unit').on('submit', function(e) {
      e.preventDefault()
      var csrfName = $('.txt_csrf_units').attr('name');
      var csrfHash = $('.txt_csrf_units').val()
      var dataUnits = $('#units').val()
      $.ajax({
        url: '<?= site_url() ?>api/master/units/store',
        type: 'POST',
        dataType: 'json',
        data: {
          [csrfName]: csrfHash,
          unit: dataUnits
        },
        beforeSend: function() {
          $('.btn-unit').prop('disabled', true);
          $('.btn-unit').html('Process...');
        },
        complete: function() {
          $('.btn-unit').prop('disabled', false);
          $('.btn-unit').html('Tambah');
        },
        success: function(response) {
          console.log(response);
          if (response.error) {
            const data = response.error
            if (data.error_units) {
              $('.txt_csrf').val(response.token)
              $('#units').addClass('is-invalid');
              $('.error_units').html(data.error_units)
            } else {
              $('.txt_csrf').val(response.token)
              $('#units').removeClass('is-invalid');
            }
          } else if (response.success) {
            $('.txt_csrf').val(response.token)
            loadDataUnits();
            $('#units').removeClass('is-invalid');
            $('#form-add-unit').trigger('reset');
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          } else {
            $('.txt_csrf').val(response.token)
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          }
        }
      })
    })

    $(document).on('click', '#btn-unit-delete', function(e) {
      e.preventDefault()
      if (confirm('Apakah anda yakin menghapus data?')) {
        var csrfName = $('.txt_csrf_units').attr('name');
        var csrfHash = $('.txt_csrf_units').val()
        var dataID = $(this).data('unit');
        var element = this
        $.ajax({
          url: '<?= site_url() ?>api/master/units/delete',
          type: 'POST',
          dataType: 'json',
          data: {
            _method: 'delete',
            [csrfName]: csrfHash,
            id: dataID
          },
          success: function(response) {
            console.log(response);
            if (response.status == 'success') {
              $(element).closest('tr').fadeOut();
              setTimeout(() => {
                $('.txt_csrf').val(response.token)
                loadDataUnits()
              }, 1500)
              Toast.fire({
                icon: response.status,
                title: response.message,
              });
            } else {
              $('.txt_csrf').val(response.token)
              Toast.fire({
                icon: response.status,
                title: response.message,
              });
            }
          }
        })
      }
    })
    $(document).on('click', '#btn-unit-edit', function(e) {
      e.preventDefault();
      var unitID = $(this).data('unit');
      $.ajax({
        url: '<?= site_url() ?>api/master/units/edit',
        type: 'GET',
        dataType: 'json',
        data: {
          id: unitID
        },
        success: function(response) {
          console.log(response);
          $('.txt_csrf_units_update').val(response.token)
          var res = response.result
          if (response.status == 'success') {
            var form = `<form id="form-update-unit">
                        <input type="hidden" class="txt_csrf txt_csrf_units_update" name="<?= csrf_token() ?>" value="${response.token}">
                        <div class="mb-3">
                          <label class="form-label required">Satuan</label>
                          <div>
                            <input type="hidden" class="form-control" id="field-unit-update-id" name="unit-update-id" value="${res.unit_id}">
                            <input type="text" class="form-control" id="field-unit-update-name" name="unit-update" value="${res.unit_name}" autocomplete="off">
                            <div class="invalid-feedback error_units_up"></div>
                          </div>
                        </div>
                        <div class="text-end">
                          <button type="submit" class="btn btn-success btn-unit-up">Update</button>
                          <button type="button" id="close-update-unit" class="btn btn-warning">Close</button>
                        </div>
                      </form>`
            $('#layoutFormUnit').html(form)
          } else {
            alert(response.result)
          }
        }
      })
    })
    $(document).on('click', '#close-update-unit', function(e) {
      e.preventDefault()
      $('#form-update-unit').remove();
    })
    $(document).on('submit', '#form-update-unit', function(e) {
      e.preventDefault()
      var csrfName = $('.txt_csrf_units_update').attr('name');
      var csrfHash = $('.txt_csrf_units_update').val()
      var dataID = $('#field-unit-update-id').val()
      var unit = $('#field-unit-update-name').val()
      $.ajax({
        url: '<?= site_url() ?>api/master/units/update',
        method: 'POST',
        dataType: 'json',
        data: {
          _method: 'put',
          [csrfName]: csrfHash,
          id: dataID,
          unit: unit
        },
        beforeSend: function() {
          $('.btn-unit-up').prop('disabled', true);
          $('.btn-unit-up').html('Process...');
        },
        complete: function() {
          $('.btn-unit-up').prop('disabled', false);
          $('.btn-unit-up').html('Update');
        },
        success: function(response) {
          console.log(response);
          if (response.error) {
            $('.txt_csrf').val(response.token)
            const data = response.error
            if (data.error_units_up) {
              $('.txt_csrf').val(response.token)
              $('#field-unit-update-name').addClass('is-invalid');
              $('.error_units_up').html(data.error_units_up)
            } else {
              $('.txt_csrf').val(response.token)
              $('#field-unit-update-name').removeClass('is-invalid');
            }
          } else if (response.success) {
            $('.txt_csrf').val(response.token)
            loadDataUnits();
            $('#field-unit-update-name').removeClass('is-invalid');
            $('#form-update-unit').remove();
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

    function loadDataLocation() {
      $.ajax({
        url: '<?= site_url() ?>api/master/location/get',
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
            <td>${res[i].location_name}</td>
            <td><a href="#" id="btn-location-edit" data-location="${res[i].location_id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                <path d="M16 5l3 3"></path>
              </svg></a>
              <a href="#" class="text-red" id="btn-location-delete" data-location="${res[i].location_id}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            $('#body-location').html(row)
          } else {
            var row = `<tr><td colspan='3' class="text-center">Data no found</td></tr>`;
            $('#body-location').html(row)
          }
        }
      })
    }
    loadDataLocation()

    $('#form-add-location').on('submit', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>api/master/location/store',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.btn-loc').prop('disabled', true);
          $('.btn-loc').html('Process...');
        },
        complete: function() {
          $('.btn-loc').prop('disabled', false);
          $('.btn-loc').html('Tambah');
        },
        success: function(response) {
          console.log(response);
          if (response.error) {
            const data = response.error
            if (data.error_location) {
              $('.txt_csrf').val(response.token)
              $('#location').addClass('is-invalid');
              $('.error_location').html(data.error_location)
            } else {
              $('.txt_csrf').val(response.token)
              $('#location').removeClass('is-invalid');
            }
          } else if (response.success) {
            $('.txt_csrf').val(response.token)
            loadDataLocation();
            $('#location').removeClass('is-invalid');
            $('#form-add-location').trigger('reset');
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          } else {
            $('.txt_csrf').val(response.token)
            Toast.fire({
              icon: response.errors,
              title: response.message,
            });
          }
        }
      })
    })
    $(document).on('click', '#btn-location-delete', function(e) {
      e.preventDefault()
      if (confirm('Apakah anda yakin menghapus data?')) {
        var csrfName = $('.txt_csrf_location').attr('name');
        var csrfHash = $('.txt_csrf_location').val()
        var dataID = $(this).data('location');
        var element = this
        $.ajax({
          url: '<?= site_url() ?>api/master/location/delete',
          type: 'POST',
          dataType: 'json',
          data: {
            _method: 'delete',
            [csrfName]: csrfHash,
            id: dataID
          },
          success: function(response) {
            console.log(response);
            if (response.status == 'success') {
              $(element).closest('tr').fadeOut();
              setTimeout(() => {
                $('.txt_csrf').val(response.token)
                loadDataLocation()
              }, 1500)
              Toast.fire({
                icon: response.status,
                title: response.message,
              });
            } else {
              $('.txt_csrf').val(response.token)
              Toast.fire({
                icon: response.status,
                title: response.message,
              });
            }
          }
        })
      }
    })
    $(document).on('click', '#btn-location-edit', function(e) {
      e.preventDefault();
      var locID = $(this).data('location');
      $.ajax({
        url: '<?= site_url() ?>api/master/location/edit',
        type: 'GET',
        dataType: 'json',
        data: {
          id: locID
        },
        success: function(response) {
          console.log(response);
          var res = response.result
          if (response.status == 'success') {
            var form = `<form id="form-update-location">
                        <input type="hidden" class="txt_csrf txt_csrf_units_update" name="<?= csrf_token() ?>" value="${response.token}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mb-3">
                          <label class="form-label required">Lokasi</label>
                          <div>
                            <input type="hidden" class="form-control" name="id-up-loc" value="${res.location_id}">
                            <input type="text" class="form-control" id="loc_up" name="location-update" value="${res.location_name}" autocomplete="off">
                            <div class="invalid-feedback error_location_up"></div>
                          </div>
                        </div>
                        <div class="text-end">
                          <button type="submit" class="btn btn-success btn-loc-up">Update</button>
                          <button type="button" id="close-location-update" class="btn btn-warning">Close</button>
                        </div>
                      </form>`
            $('#layoutFormLocation').html(form)
          }
        }
      })
    })
    $(document).on('click', '#close-location-update', function(e) {
      e.preventDefault()
      $('#form-update-location').remove();
    })
    $(document).on('submit', '#form-update-location', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>api/master/location/update',
        method: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.btn-loc-up').prop('disabled', true);
          $('.btn-loc-up').html('Process...');
        },
        complete: function() {
          $('.btn-loc-up').prop('disabled', false);
          $('.btn-loc-up').html('Update');
        },
        success: function(response) {
          console.log(response);

          if (response.error) {
            $('.txt_csrf').val(response.token)
            const data = response.error
            if (data.error_location_up) {
              $('.txt_csrf').val(response.token)
              $('#loc_up').addClass('is-invalid');
              $('.error_location_up').html(data.error_location_up)
            } else {
              $('.txt_csrf').val(response.token)
              $('#loc_up').removeClass('is-invalid');
            }
          } else if (response.success) {
            $('.txt_csrf').val(response.token)
            loadDataLocation();
            $('#loc_up').removeClass('is-invalid');
            $('#form-update-location').remove();
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