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
          Data Obat
        </h2>
      </div>
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
          <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-obat">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 5l0 14"></path>
              <path d="M5 12l14 0"></path>
            </svg>
            Data Obat
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Obat</h3>
          </div>
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
                  <th class="w-1">No.
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M6 15l6 -6l6 6"></path>
                    </svg>
                  </th>
                  <th>Kode Obat</th>
                  <th>Nama Obat</th>
                  <th>Stok</th>
                  <th>Expired</th>
                  <th>Location</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="body-obat">

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
<div class="modal modal-blur fade" id="modal-obat" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Tambah Data Obat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="form-drug">
        <input type="hidden" class="txt_csrf_drug" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Kode Obat</label>
                <input type="text" class="form-control" id="code" name="code">
                <div class="invalid-feedback error_code"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Barcode</label>
                <input type="text" class="form-control" id="barcode" name="barcode">
                <div class="invalid-feedback error_barcode"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="name" name="name">
                <div class="invalid-feedback error_name"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Satuan</label>
                <select class="form-select" id="units" name="units">
                  <option value="" selected="">Choose</option>

                  <?php foreach ($unit as $key) : ?>
                    <option value="<?= $key['unit_name'] ?>"><?= $key['unit_name'] ?></option>
                  <?php endforeach ?>

                </select>
                <div class="invalid-feedback error_units"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select class="form-select" id="category" name="category">
                  <option value="" selected="">Choose</option>
                  <?php foreach ($category as $key) : ?>
                    <option value="<?= $key['category_name'] ?>"><?= $key['category_name'] ?></option>
                  <?php endforeach ?>
                </select>
                <div class="invalid-feedback error_category"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Lokasi</label>
                <select class="form-select" id="location" name="location">
                  <option value="" selected="">Choose</option>
                  <?php foreach ($location as $key) : ?>
                    <option value="<?= $key['location_name'] ?>"><?= $key['location_name'] ?></option>
                  <?php endforeach ?>
                </select>
                <div class="invalid-feedback error_location"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Stok Minimal</label>
                <input type="number" class="form-control" value="0" id="stock-min" name="stock-min">
                <div class="invalid-feedback error_stock-min"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Tgl Expired</label>
                <input type="date" class="form-control" id="expired" name="expired">
                <div class="invalid-feedback error_expired"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div>
                <label class="form-label">Keterangan tambahan</label>
                <textarea class="form-control" rows="3" id="description" name="description"></textarea>
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
<div class="modal modal-blur fade" id="modal-edit" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Edit Data Obat</h5>
        <button type="button" class="btn-close close-update" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="form-update">
        <input type="hidden" class="txt_csrf_drug" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Kode Obat</label>
                <input type="text" class="form-control" id="code_upv" name="code_upv" disabled>
                <input type="hidden" class="form-control" id="code_up" name="code_up">
                <div class="invalid-feedback error_code"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Barcode</label>
                <input type="text" class="form-control" id="barcode_upv" name="barcode_upv" disabled>
                <input type="hidden" class="form-control" id="barcode_up" name="barcode_up">
                <div class="invalid-feedback error_barcode"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="name_up" name="name_up">
                <div class="invalid-feedback error_name"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Satuan</label>
                <select class="form-select" id="units_up" name="units_up">
                  <option value="" selected="">Choose</option>

                  <?php foreach ($unit as $key) : ?>
                    <option value="<?= $key['unit_name'] ?>"><?= $key['unit_name'] ?></option>
                  <?php endforeach ?>

                </select>
                <div class="invalid-feedback error_units"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select class="form-select" id="category_up" name="category_up">
                  <option value="" selected="">Choose</option>
                  <?php foreach ($category as $key) : ?>
                    <option value="<?= $key['category_name'] ?>"><?= $key['category_name'] ?></option>
                  <?php endforeach ?>
                </select>
                <div class="invalid-feedback error_category"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Lokasi</label>
                <select class="form-select" id="location_up" name="location_up">
                  <option value="" selected="">Choose</option>
                  <?php foreach ($location as $key) : ?>
                    <option value="<?= $key['location_name'] ?>"><?= $key['location_name'] ?></option>
                  <?php endforeach ?>
                </select>
                <div class="invalid-feedback error_location"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Stok Minimal</label>
                <input type="number" class="form-control" value="0" id="stock-min_up" name="stock-min_up">
                <div class="invalid-feedback error_stock-min"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Tgl Expired</label>
                <input type="date" class="form-control" id="expired_up" name="expired_up">
                <div class="invalid-feedback error_expired"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div>
                <label class="form-label">Keterangan tambahan</label>
                <textarea class="form-control" rows="3" id="description_up" name="description_up"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary close-update" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-success btn-update ms-auto">
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
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
      },
    });

    function loadDataObat() {
      $.ajax({
        url: '<?= site_url() ?>api/master/drugs/get',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          console.log(response);
          if (response.status == 'success') {
            var res = response.result;
            var row = '';
            for (var i = 0; i < res.length; i++) {
              row += `<tr>
              <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
            <td>${i+1}</td>
            <td><a href="" class="text-reset" tabindex="-1">${res[i].code}</a></td>
            <td>${res[i].name}</td>
            <td>${res[i].stock != null ? res[i].stock : '0'}</td>
            <td>${res[i].expired}</td>
            <td>${res[i].location}</td>
            <td><a href="#" id="edit-drug" data-drug="${res[i].code}" data-bs-toggle="modal" data-bs-target="#modal-edit">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                <path d="M16 5l3 3"></path>
              </svg></a>
              <a href="#" class="text-red" id="delete-drug" data-drug="${res[i].code}">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            $('#body-obat').html(row)
          } else {
            var row = `<tr><td colspan='3'>Data no found</td></tr>`;
            $('#body-obat').html(row)
          }
        }
      })
    }

    loadDataObat();


    $(document).on('submit', '#form-drug', function(e) {
      e.preventDefault()
      $.ajax({
        url: '<?= site_url() ?>api/master/drugs/store',
        method: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.btn-save').prop('disabled', true);
          $('.btn-save').html('Loading...');
        },
        complete: function() {
          $('.btn-save').prop('disabled', false);
          $('.btn-save').html('Save');
        },
        success: function(response) {
          console.log(response);
          if (response.error) {
            $('.txt_csrf_drug').val(response.token);
            let data = response.error
            let fields = ["code", "barcode", "name", "units", "category", "location", "stock-min", "expired"];
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
            loadDataObat();
            $('#form-drug').trigger('reset');
            $('.txt_csrf_drug').val(response.token);
            $('.is-invalid').removeClass('is-invalid')
            $('.is-valid').removeClass('is-valid is-valid-lite')
            Toast.fire({
              icon: response.status,
              title: response.message,
            });
          }
        }
      })
    })
    $(document).on('click', '#delete-drug', function(e) {
      e.preventDefault();
      if (confirm('Yakin menghapus data ini?')) {
        var csrfName = $('.txt_csrf_drug').attr('name');
        var csrfHash = $('.txt_csrf_drug').val()
        var dataID = $(this).data('drug');
        var element = this
        $.ajax({
          url: '<?= site_url('api/master/drugs/delete') ?>',
          type: 'post',
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
                $('.txt_csrf_drug').val(response.token)
                loadDataObat();
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
    $(document).on('click', '#edit-drug', function(e) {
      e.preventDefault();
      var ID = $(this).data('drug');
      $.ajax({
        url: '<?= site_url('api/master/drugs/edit') ?>',
        type: 'get',
        dataType: 'json',
        data: {
          id: ID
        },
        success: function(response) {
          var data = response.result;
          console.log(response);
          if (response.success) {
            $('.txt_csrf_drug').val(response.token);
            $('#id').val(data.drug_id);
            $('#code_up').val(data.code);
            $('#code_upv').val(data.code);
            $('#barcode_up').val(data.barcode);
            $('#barcode_upv').val(data.barcode);
            $('#name_up').val(data.name);
            $('#units_up').val(data.unit);
            $('#category_up').val(data.category);
            $('#location_up').val(data.location);
            $('#stock-min_up').val(data.stock_minimum);
            $('#expired_up').val(data.expired);
            $('#description_up').val(data.description);
          }
        }
      })
    })
    $(document).on('click', '.close-update', function(e) {
      $('#form-update').trigger('reset');
    })
    $(document).on('submit', '#form-update', function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?= site_url() ?>api/master/drugs/update',
        method: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.btn-update').prop('disabled', true);
          $('.btn-update').html('Loading...');
        },
        complete: function() {
          $('.btn-update').prop('disabled', false);
          $('.btn-update').html('Update');
        },
        success: function(response) {
          if (response.error) {
            $('.txt_csrf_drug').val(response.token);
            let data = response.error
            let fields = ["code_up", "barcode_up", "name_up", "units_up", "category_up", "location_up", "stock-min_up", "expired_up"];
            fields.forEach((field) => {
              if (data['error_' + field]) {
                $('#' + field).addClass('is-invalid');
                $('.error_' + field).html(data['error_' + field])
              } else {
                $('#' + field).removeClass('is-invalid');
                $('#' + field).addClass('is-valid is-valid-lite');
              }
            })
          } else if (response.errors) {
            $('.txt_csrf_drug').val(response.token)
            Toast.fire({
              icon: response.error,
              title: response.message,
            });
          } else {
            $('.txt_csrf_drug').val(response.token)
            $('.is-invalid').removeClass('is-invalid')
            $('.is-valid').removeClass('is-valid is-valid-lite')
            loadDataObat();
            Toast.fire({
              icon: response.success,
              title: response.message,
            });
          }
        }
      })
    })
  })
</script>
<?= $this->endSection() ?>