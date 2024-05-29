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
  <span class="text-muted fw-light">Publikasi /</span><span class="fw-medium"> {{ $mode == 'add' ? 'Tambah' : 'Edit' }} Publikasi</span>
</h4>

<div class="app-ecommerce">
  <form action="{{ $mode == 'add' ? route('publikasi.store') : route('publikasi.update', ['publikasi' => $publikasi->id]) }}" method="POST" id="add-Publikasi" enctype="multipart/form-data">
  @csrf
  @if($mode == 'edit')
    @method('PUT')
  @endif
  <!-- Add Product -->
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

    <div class="d-flex flex-column justify-content-center">
      <h4 class="mb-1 mt-3">{{ $mode == 'add' ? 'Tambah' : 'Edit' }} Publikasi</h4>
    </div>
    <div class="d-flex align-content-center flex-wrap gap-3">
      <button type="submit" class="btn btn-primary">Simpan Publikasi</button>
    </div>

  </div>

  <div class="row">

    <!-- First column-->
    <div class="col-12 col-lg-8">
      <!-- Product Information -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-tile mb-0">Informasi Publikasi</h5>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-name">Title</label>
            <input type="text" value="{{ $mode == 'edit' ? $publikasi->title : '' }}" class="form-control" id="ecommerce-product-name" placeholder="Title" name="title" aria-label="Title">
          </div>
          <!-- Short Description -->
          <div>
            <label class="form-label">Short Description</label>
            <input type="text" value="{{ $mode == 'edit' ? $publikasi->short_description : '' }}" class="form-control" id="ecommerce-product-name" placeholder="Deskripsi Singkat" name="short_description" aria-label="Short Description">
          </div>
          <!-- Description -->
          <div>
            <label class="form-label">Konten</label>
            <div class="form-control p-0 pt-1">
              <div class="comment-toolbar border-0 border-bottom">
                <div class="d-flex justify-content-start">
                  <span class="ql-formats me-0">
                    <button class="ql-bold"></button>
                    <button class="ql-italic"></button>
                    <button class="ql-underline"></button>
                    <button class="ql-list" value="ordered"></button>
                    <button class="ql-list" value="bullet"></button>
                    <button class="ql-link"></button>
                    <button class="ql-image"></button>
                  </span>
                </div>
              </div>
              <div class="comment-editor border-0 pb-4" id="ecommerce-category-description">
              </div>

            </div>
          </div>

        </div>
      </div>
      <!-- /Product Information -->
    </div>
    <!-- /Second column -->

    <!-- Second column -->
    <div class="col-12 col-lg-4">
      <!-- Variants -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-title mb-0">Tipe</h5>
        </div>
        <div class="card-body">

            <div data-repeater-list="group-a">
              <div data-repeater-item>
                <div class="row">

                  <div class="mb-3 col-12">
                    <label class="form-label" for="form-repeater-1-1">Kategori</label>
                    <select id="form-repeater-1-1" name="type" class="select2 form-select" data-placeholder="Size">
                      <option value="1" {{ $mode == 'edit' && $publikasi->type == '1' ? 'selected' : '' }}>Blog</option>
                      <option value="2" {{ $mode == 'edit' && $publikasi->type == '2' ? 'selected' : '' }}>Promo</option>
                      <option value="3" {{ $mode == 'edit' && $publikasi->type == '3' ? 'selected' : '' }}>Event</option>
                    </select>
                  </div>

                  <!-- <div class="mb-3 col-8">
                    <label class="form-label invisible" for="form-repeater-1-2">Not visible</label>
                    <input type="number" id="form-repeater-1-2" class="form-control" placeholder="Enter size" />
                  </div> -->

                </div>
              </div>
            </div>
            <!-- <div>
              <button class="btn btn-primary" data-repeater-create>
                Add another option
              </button>
            </div> -->
          </form>
        </div>
      </div>
      <!-- /Variants -->
    <!-- /Second column -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $("#add-Publikasi").on("submit", function () {
      var hvalue = $('.ql-editor').html();
      $(this).append("<textarea name='content' style='display:none'>"+hvalue+"</textarea>");
    });

    @if($mode == 'edit')
    var quill = new Quill('#ecommerce-category-description', {
      theme: 'snow'
    });
    quill.root.innerHTML = "{!! $publikasi->content !!}";
    @endif
  });

</script>
@endsection
