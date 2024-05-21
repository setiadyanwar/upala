<?php

namespace App\Http\Controllers\order;

use App\Http\Controllers\Controller;
use App\Models\CustomerBill;
use App\Models\CustomerOrder;
use App\Models\MasterPelanggan;
use App\Models\MasterProduk;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.order.order-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mode = 'add';
        $pelanggan = MasterPelanggan::all();
        $produk = MasterProduk::all();
        return view('content.order.order-add', compact('mode', 'pelanggan', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'product.*' => 'required',
                'qty.*' => 'required',
                'kondisi.*' => 'required',
                'level.*' => 'required',
                'member' => 'required',
            ]);
    
            $bill = CustomerBill::create([
                'pelanggan_id' => $validatedData['member'],
                'employee_id' => 2,
            ]);

            foreach($validatedData['product'] as $key => $value){
                $bill->order()->create([
                    'bill_id' => $bill->id,
                    'produk_id' => $value,
                    'qty' => $validatedData['qty'][$key],
                    'condition' => $validatedData['kondisi'][$key],
                    'level' => $validatedData['level'][$key],
                ]);
            }
    
            return redirect()->route('order.index')->with('success', 'Produk berhasil ditambahkan');
        }catch(\Exception $e){
            dd($e);
            return redirect()->route('order.index')->with('error', 'Produk gagal ditambahkan');
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
        $pelanggan = MasterPelanggan::all();
        $produk = MasterProduk::all();
        $order = CustomerBill::with(['order', 'pelanggan', 'order.produk'])->find($id);
        return view('content.order.order-add', compact('mode', 'order', 'pelanggan', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $validatedData = $request->validate([
                'product.*' => 'required',
                'qty.*' => 'required',
                'kondisi.*' => 'required',
                'level.*' => 'required',
                'member' => 'required',
            ]);

            $bill = CustomerBill::find($id);
    
            $bill->update([
                'pelanggan_id' => $validatedData['member'] ?? $bill->pelanggan_id,
                'employee_id' => 2,
            ]);

            foreach ($validatedData['product'] as $key => $value) {
                $order = $bill->order()->where('produk_id', $value)
                ->where('condition', $validatedData['kondisi'][$key])
                ->where('level',$validatedData['level'][$key])->first();
            
                if ($order) {
                    $order->update([
                        'qty' => $validatedData['qty'][$key],
                        'condition' => $validatedData['kondisi'][$key],
                        'level' => $validatedData['level'][$key],
                    ]);
                } else {
                    $bill->order()->create([
                        'bill_id' => $bill->id,
                        'produk_id' => $value,
                        'qty' => $validatedData['qty'][$key],
                        'condition' => $validatedData['kondisi'][$key],
                        'level' => $validatedData['level'][$key],
                    ]);
                }
            }
            
    
            return redirect()->route('order.index')->with('success', 'Produk berhasil ditambahkan');
        }catch(\Exception $e){
            dd($e);
            return redirect()->route('order.index')->with('error', 'Produk gagal ditambahkan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            MasterProduk::destroy($id);
            return redirect()->route('order.index')->with('success', 'Produk berhasil dihapus');
        }catch(\Exception $e){
            dd($e);
            return redirect()->route('order.index')->with('error', 'Produk gagal dihapus');
        }
    }

    public function api_get_order(){
        $order = CustomerBill::with(['pelanggan', 'employee', 'order', 'order.produk'])->get();
        return response()->json(['data' => $order]);
    }
}
