<?php

namespace App\Http\Controllers\pelanggan;

use App\Http\Controllers\Controller;
use App\Models\CustomerBill;
use App\Models\MasterPelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count = MasterPelanggan::count();
        return view('content.pelanggan.pelanggan-list', compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mode = 'add';
        return view('content.pelanggan.pelanggan-add', compact('mode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'nama_pelanggan' => 'required',
                'email' => 'nullable|email',
                'nomor_telepon' => 'nullable'
            ]);

            MasterPelanggan::create([
                'nama' => $validatedData['nama_pelanggan'],
                'email' => $validatedData['email'],
                'no_telp' => $validatedData['nomor_telepon'],
                // 'registered_by' => auth()->user()->id,
                'registered_by' => 1,
                'registered_at' => now()
            ]);

            return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan');
        }catch(\Exception $e){
            return redirect()->route('pelanggan.index')->with('error', 'Pelanggan gagal ditambahkan');
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
        $mode = 'edit';
        $pelanggan = MasterPelanggan::find($id);
        return view('content.pelanggan.pelanggan-add', compact('mode', 'pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $validatedData = $request->validate([
                'nama_pelanggan' => 'required',
                'email' => 'nullable|email',
                'nomor_telepon' => 'nullable'
            ]);

            $pelanggan = MasterPelanggan::find($id);

            if(!$pelanggan) return redirect()->route('pelanggan.index')->with('error', 'Pelanggan tidak ditemukan');

            $pelanggan->update([
                'nama' => $validatedData['nama_pelanggan'],
                'email' => $validatedData['email'],
                'no_telp' => $validatedData['nomor_telepon']
            ]);

            return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diubah');
        }catch(\Exception $e){
            return redirect()->route('pelanggan.index')->with('error', 'Pelanggan gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $pelanggan = MasterPelanggan::find($id);

            if(!$pelanggan) return redirect()->route('pelanggan.index')->with('error', 'Pelanggan tidak ditemukan');

            $pelanggan->delete();

            return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus');
        }catch(\Exception $e){
            return redirect()->route('pelanggan.index')->with('error', 'Pelanggan gagal dihapus');
        }
    }

    public function api_get_pelanggan(Request $request){
        $jumlahTerakhirKunjungan = $request->query('jumlahTerakhirKunjungan', null);
        $umurMember = $request->query('umurMember', null);
        $dalamPeriode = $request->query('dalamPeriode', null);

        // Build your query logic here based on the parameters
        $query = MasterPelanggan::query();

        if (!is_null($jumlahTerakhirKunjungan)) {
            $query->whereHas('orders', function($q) use ($jumlahTerakhirKunjungan) {
                $q->groupBy('pelanggan_id')
                    ->havingRaw('COUNT(*) >= ?', [$jumlahTerakhirKunjungan]);
            });
        }

        if (!is_null($umurMember)) {
            $startDate = now()->subDays($umurMember);
            $query->where('created_at', '<=', $startDate);
        }

        if (!is_null($dalamPeriode)) {
            $startDate = now()->subDays($dalamPeriode);
            
            $orderIds = CustomerBill::where('created_at', '>=', $startDate)->pluck('id')->toArray();
            
            $query->whereHas('orders', function($q) use ($orderIds) {
                $q->whereIn('id', $orderIds);
            });
        }

        $pelanggan = $query->get();

        return response()->json([
            'data' => $pelanggan
        ]);
    }
}
