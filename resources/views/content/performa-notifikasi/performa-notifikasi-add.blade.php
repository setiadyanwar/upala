@extends('layouts/layoutMaster')

@section('title', 'eCommerce Product Add - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/quill/typography.scss',
  'resources/assets/vendor/libs/quill/katex.scss',
  'resources/assets/vendor/libs/quill/editor.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/dropzone/dropzone.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/quill/katex.js',
  'resources/assets/vendor/libs/quill/quill.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/dropzone/dropzone.js',
  'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/tagify/tagify.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-ecommerce-product-add.js'
])
@endsection

@section('content')
<h4 class="py-3 mb-0">
  <span class="text-muted fw-light">Performa Notifikasi /</span><span class="fw-medium">  {{ $mode == 'add' ? 'Tambah' : 'Edit' }} Broadcast</span>
</h4>

<div class="app-ecommerce">
  <form action="{{ $mode == 'add' ? route('performa-notifikasi.store') : route('performa-notifikasi.update', ['performa-notifikasi' => $pn->id]) }}" method="POST" id="add-order" enctype="multipart/form-data">
    @csrf
    @if($mode == 'edit')
      @method('PUT')
    @endif
  <!-- Add Product -->
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

    <div class="d-flex flex-column justify-content-center">
      <h4 class="mb-1 mt-3"> {{ $mode == 'add' ? 'Tambah' : 'Edit' }} Broadcast</h4>
    </div>
    <div class="d-flex align-content-center flex-wrap gap-3">
       <button type="submit" class="btn btn-primary">Kirim Broadcast</button>
    </div>

  </div>

  <div class="row">

    <!-- First column-->
    <div class="col-12 col-lg-8">
      <!-- Product Information -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-tile mb-0">Filter Pelanggan</h5>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-12 col-lg-6 mb-3">
              <label class="form-label" for="ecommerce-product-name">Minimal Jumlah Terakhir Kunjungan (x kali)</label>
              <input type="number" class="form-control" id="jumlah_terakhir_kunjungan"  placeholder="Jumlah Terakhir Kunjungan" aria-label="Jumlah Terakhir Kunjungan">
            </div>
    
            <div class="col-12 col-lg-6 mb-3">
              <label class="form-label" for="ecommerce-product-name">Minimal Umur Member (Satuan Harian)</label>
              <input type="number" class="form-control" id="umur-member" value="0" placeholder="Umur Member"  aria-label="Umur Member">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-12 col-lg-6 mb-3">
              <label class="form-label" for="ecommerce-product-name">Dalam Periode x Hari Kebelakang</label>
              <input type="number" class="form-control" id="dalam-periode"  placeholder="Dalam Periode Hari"  aria-label="Dalam Periode Hari">
            </div>
            
            <div class="col-12 col-lg-4 mb-3 d-flex align-items-end">
              <button type="button" class="btn btn-primary" onclick="getPelanggan()">🔎 Filter Pelanggan</button>
            </div>
          </div>
          <hr>
          <table class="table table-responsive table-striped">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Kontak</th>
                <th>Bergabung Sejak</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="isi">
              <tr>
                <td colspan="4" class="text-center">Belum ada Pelanggan</td>
              </tr>
            </tbody>
          </table>
      </div>
      <!-- /Product Information -->
      </div>
    </div>

    <!-- /Second column -->
    <div class="col-12 col-lg-4">
      <!-- Variants -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Notifikasi Yang Dikirim</h5>
        </div>
        <div class="card-body">

            <div data-repeater-list="group-a">
              <div data-repeater-item>
                <div class="row">

                  <div class="mb-3 col-12">
                    <label class="form-label" for="form-repeater-1-1">Notifikasi Template</label>
                    <select id="form-repeater-1-1" name="notifikasi" class="select2 form-select" data-placeholder="notifikasi">
                      <option value="">Pilih Notifikasi</option>
                      @foreach($notifikasi as $n)
                      <option value="{{ $n->id }}" {{ $mode == 'edit' && $n->id == $pn->notifikasi_id ? 'selected' : '' }}>{{ $n->title }} - {{ $n->created_at }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="mb-3 col-8">
                      <input type="checkbox" id="via-wa-checkbox" name="via_wa" value="0" disabled class="form-check-input" />
                      <label class="form-label" for="via-wa-checkbox">Via WA</label>
                  </div>

                  <div class="mb-3 col-8">
                      <input type="checkbox" id="email-checkbox" checked name="via_email" value="1" class="form-check-input" />
                      <label class="form-label" for="email-checkbox">Via Email</label>
                  </div>

                </div>
              </div>
            </div>
            <!-- <div>
              <button class="btn btn-primary" data-repeater-create>
                Add another option
              </button>
            </div> -->
        </div>
      </div>
      <!-- /Variants -->
    <!-- /Second column -->
    </div>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
 function getPelanggan() {
    let jumlahTerakhirKunjungan = $('#jumlah_terakhir_kunjungan').val();
    let umurMember = $('#umur-member').val();
    let dalamPeriode = $('#dalam-periode').val();

    let url = '{{ route("api-get-pelanggan") }}';

    let params = [];
    if (jumlahTerakhirKunjungan) {
        params.push('jumlahTerakhirKunjungan=' + jumlahTerakhirKunjungan);
    }
    if (umurMember) {
        params.push('umurMember=' + umurMember);
    }
    if (dalamPeriode) {
        params.push('dalamPeriode=' + dalamPeriode);
    }

    if (params.length > 0) {
        url += '?' + params.join('&');
    }

    $.ajax({
        url: url,
        type: 'GET',
        success: function(response) {
            populateTable(response.data);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
  }
</script>
<script>
  
  function populateTable(data){
    $('#isi').empty(); // Remove existing rows from the table
  
    for (var key in data) {
      if (data.hasOwnProperty(key)) {
        var val = data[key];
        var createdAtDate = new Date(val.created_at);
        var currentDate = new Date();

        // Calculate the difference in milliseconds
        var timeDiff = currentDate - createdAtDate;

        // Convert the difference to days
        var daysDiff = Math.floor(timeDiff / (1000 * 60 * 60 * 24));

        var tableRow = `<tr id="${key}">
                          <td>${val.nama}
                          <input type="hidden" name="pelanggan[]" value="${val.id}">
                          </td>
                          <td>${val.email} - ${val.no_telp}</td>
                          <td>${daysDiff} Hari Yang Lalu</td>
                          <td><button class="btn btn-danger" type="button" onclick="removeItem('${key}')">Hapus</button></td>
                        </tr>`;
        $('#isi').append(tableRow);
      }
    }
  } 
</script>
<script>
  var items = {};


function addNewPesanan(){
  var product = $('#product-add').val();
  var product_name = $('#product-add option:selected').text();
  var qty = $('#qty-add').val();
  var kondisi = $('#kondisi-add').val();
  var kondisi_name = $('#kondisi-add option:selected').text();
  var level = $('#level-add').val();
  var level_name = $('#level-add option:selected').text();

  if(product == '' || qty == '' || kondisi == '' || level == ''){
    alert('Isikan Seluruh Input Pesanan');
    return;
  }

  var newItemKey = product + '_' + kondisi + '_' + level; // Unique key based on product, kondisi, and level

  // Check if the product is already in the items array
  if (items[newItemKey]) {
    // If it exists, check if kondisi or level is different

    if (items[newItemKey].kondisi !== kondisi || items[newItemKey].level !== level) {
      // If different, create a new item
      items[newItemKey] = {
        product: product,
        product_name: product_name,
        qty: qty,
        kondisi: kondisi,
        kondisi_name: kondisi_name,
        level: level,
        level_name: level_name
      };
    } else {
      // If kondisi and level are the same, update the quantity
      items[newItemKey].qty = parseInt(items[newItemKey].qty) + parseInt(qty);
    }
  } else {
    // If the product does not exist, add it to the items array
    items[newItemKey] = {
      product: product,
      product_name: product_name,
      qty: qty,
      kondisi: kondisi,
      kondisi_name: kondisi_name,
      level: level,
      level_name: level_name
    };
  }

  // Call populateTable to update the table with the new item
  populateTable();
}

function editQty(productId){
  // Assuming you have an input field with id="edit-qty" where the user can enter the new quantity
  var newQty = $('#edit-qty').val();
  items[productId].qty = newQty;
  populateTable(); // Update the table after editing the quantity
}

function removeItem(productId){
  var elementToRemove = document.getElementById(productId);

  if (elementToRemove) {
      elementToRemove.remove();
  } else {
      console.log("Element with ID " + productId + " not found.");
  }
}
</script>
@endsection
