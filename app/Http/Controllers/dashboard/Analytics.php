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
      'total_pengunjung' => CustomerBill::count(),
      'total_member' => MasterPelanggan::count(),
      'total_penjualan' => CustomerOrder::count(),
    ];

    $notifikasi = [
      'total_notifikasi' => PushNotification::count(),
      'total_notifikasi_terkirim' => NotificationTargetHistory::count(),
    ];

    return view('content.apps.app-ecommerce-dashboard', compact('statistik', 'notifikasi'));
  }
}
