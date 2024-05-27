@extends('layouts/layoutMaster')

@section('title', 'eCommerce Dashboard - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
  ])
@endsection

@section('page-script')
@vite(['resources/assets/js/app-ecommerce-dashboard.js', 'resources/assets/js/app-ecommerce-product-list.js'])
@endsection

@section('content')
<div class="row">
  <!-- View sales -->
  <div class="col-xl-4 mb-4 col-lg-5 col-12">
    <div class="card">
      <div class="d-flex align-items-start row">
        <div class="col-7">
          <div class="card-body text-nowrap">
            <h5 class="card-title mb-0">Halo {{ Session::get('user')->name }}! </h5>
            <p class="mb-2">{{ Session::get('role')->nama }}</p>
            <!-- <h4 class="text-primary mb-1">$48.9k</h4> -->
            <!-- <a href="javascript:;" class="btn btn-primary">View Sales</a> -->
          </div>
        </div>
        <div class="col-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{ asset('assets/img/illustrations/card-advance-sale.png')}}" height="140" alt="view sales">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- View sales -->

  <!-- Statistics -->
  <div class="col-xl-8 mb-4 col-lg-7 col-12">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between mb-3">
          <h5 class="card-title mb-0">Statistik</h5>
          <small class="text-muted">Updated Automatically</small>
        </div>
      </div>
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded-pill bg-label-primary me-3 p-2"><i class="ti ti-shopping-cart ti-sm"></i></div>
              <div class="card-info">
                <h5 class="mb-0">{{ $statistik['total_penjualan'] }}</h5>
                <small>Order</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
              <div class="card-info">
                <h5 class="mb-0">{{ $statistik['total_pengunjung'] }}</h5>
                <small>Pengunjung</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded-pill bg-label-danger me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
              <div class="card-info">
                <h5 class="mb-0">{{ $statistik['total_member'] }}</h5>
                <small>Member</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
              <div class="card-info">
                <h5 class="mb-0">{{ $notifikasi['total_notifikasi'] }}</h5>
                <small>Jumlah Notifikasi Template</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Statistics -->

  <div class="col-xl-4 col-12">
    <div class="row">
      <!-- Generated Leads -->
      <div class="col-xl-12 mb-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-column">
                <div class="card-title mb-auto">
                  <h5 class="mb-1 text-nowrap">Broadcast Engagement</h5>
                  <small>Overall Sudah Terkirim ke:</small>
                </div>
                <div class="chart-statistics">
                  <h3 class="card-title mb-1">{{ $notifikasi['total_notifikasi_terkirim'] }} Orang</h3>
                  <!-- <small class="text-success text-nowrap fw-medium"><i class='ti ti-chevron-up me-1'></i> 15.8%</small> -->
                </div>
              </div>
              <div id="generatedLeadsChart" data-template="{{ $notifikasi['total_notifikasi'] }}" data-sent="{{ $notifikasi['total_notifikasi_terkirim'] }}"></div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Generated Leads -->

      <!-- Expenses -->
      <!-- <div class="col-xl-6 mb-4 col-md-3 col-6">
        <div class="card">
          <div class="card-header pb-0">
            <h5 class="card-title mb-0">82.5k</h5>
            <small class="text-muted">Expenses</small>
          </div>
          <div class="card-body">
            <div id="expensesChart"></div>
            <div class="mt-md-2 text-center mt-lg-3 mt-3">
              <small class="text-muted mt-3">$21k Expenses more than last month</small>
            </div>
          </div>
        </div>
      </div> -->
      <!--/ Expenses -->

      <!-- Profit last month -->
      <!-- <div class="col-xl-6 mb-4 col-md-3 col-6">
        <div class="card">
          <div class="card-header pb-0">
            <h5 class="card-title mb-0">Profit</h5>
            <small class="text-muted">Last Month</small>
          </div>
          <div class="card-body">
            <div id="profitLastMonth"></div>
            <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
              <h4 class="mb-0">624k</h4>
              <small class="text-success">+8.24%</small>
            </div>
          </div>
        </div>
      </div> -->
      <!--/ Profit last month -->


    </div>
  </div>

  <!-- Invoice table -->
  <div class="col-xl-8 mb-4 col-12">
    <div class="card">
      <div class="table-responsive card-datatable">
        <table class="datatables-notifikasi table" id="datatables-performa-notifikasi">
          <thead class="border-top">
            <tr>
              <th></th>
              <th></th>
              <th>Tanggal</th>
              <th>Tipe Broadcast</th>
              <th>Template Notifikasi</th>
              <th>Dikirim ke</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
  <!-- /Invoice table -->

</div>
@endsection
