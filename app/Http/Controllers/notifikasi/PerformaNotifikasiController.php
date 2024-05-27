<?php

namespace App\Http\Controllers\notifikasi;

use App\Http\Controllers\Controller;
use App\Mail\BroadcastEmail;
use App\Models\MasterPelanggan;
use App\Models\NotificationTargetHistory;
use App\Models\PushNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class PerformaNotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifikasi = NotificationTargetHistory::with('notifikasi')->select('notification_id', 'sent_date', DB::raw('MAX(via_wa) as wa_option'), DB::raw('MAX(via_email) as email_option'), DB::raw('COUNT(cust_id) as cust_count'))
        ->groupBy('notification_id', 'sent_date')
        ->get();

        $count = count($notifikasi);
        return view('content.performa-notifikasi.performa-notifikasi-list', compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mode= 'add';
        $notifikasi = PushNotification::all();
        return view('content.performa-notifikasi.performa-notifikasi-add', compact('mode', 'notifikasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'pelanggan.*' => 'required',
                'notifikasi' => 'required',
                'via_wa' => 'nullable',
                'via_email' => 'nullable',
            ]);

            $sent_date = now();
    
            foreach ($validatedData['pelanggan'] as $pelanggan) {
                $pelanggan = MasterPelanggan::find($pelanggan);
    
                $nth = NotificationTargetHistory::create([
                    'cust_id' => $pelanggan->id,
                    'notification_id' => $validatedData['notifikasi'],
                    'is_success' => '0',
                    'sent_date' => $sent_date,
                ]);
                
                if (isset($validatedData['via_wa']) && $validatedData['via_wa'] == '1') {
                    $nth->update([
                        'via_wa' => '1'
                    ]);
                }
                
                if (isset($validatedData['via_email']) && $validatedData['via_email'] == '1') {
                    $nth->update(
                        ['via_email' => '1']
                    );

                    $template = PushNotification::find($validatedData['notifikasi']);

                    //send email
                    Mail::to($pelanggan->email)->send(new BroadcastEmail([
                        'title' => $template->title,
                        'content' => $template->message,
                        'media_attachment' => $template->media_attachment,
                        'pelanggan' => $pelanggan
                    ]));
            
                }

                $nth->update(
                    ['is_success' => '1']
                );
                
            }

            return redirect()->route('performa-notifikasi.index')->with('success', 'Performa notifikasi berhasil ditambahkan');
        }catch(\Exception $e){
            dd($e);
            return redirect()->route('performa-notifikasi.index')->with('error', 'Performa notifikasi gagal ditambahkan');
        }

        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function api_get_performa_notifikasi(){
        $notifikasi = NotificationTargetHistory::with('notifikasi')
        ->select('notification_id', 'sent_date', DB::raw('MAX(via_wa) as wa_option'), DB::raw('MAX(via_email) as email_option'), DB::raw('COUNT(cust_id) as cust_count'))
        ->groupBy('notification_id', 'sent_date')
        ->orderBy('sent_date', 'desc')
        ->get();
    
        foreach($notifikasi as $n){
            $n->id = $n->notification_id;
        }
        return response()->json(['data' => $notifikasi]);
    }
}
