<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\CustomerBill;
use App\Models\CustomerOrder;
use App\Models\MasterPelanggan;
use App\Models\NotificationTargetHistory;
use App\Models\PushNotification;
use Illuminate\Http\Request;


class Analytics extends Controller
{
  public function index()
  {
    $statistik = [
      'total_pengunjung' => 0,
      'total_member' => 0,
      'total_penjualan' => 0,
    ];

    $notifikasi = [
      'total_notifikasi' => 0,
      'total_notifikasi_terkirim' => 0,
    ];

    return view('content.apps.app-ecommerce-dashboard', compact('statistik', 'notifikasi'));
  }
}
