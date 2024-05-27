<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\MasterProduk;
use Illuminate\Http\Request;

class MasterProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count = MasterProduk::count();
        return view('content.produk.product-list', compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mode = 'add';
        return view('content.produk.product-add', compact('mode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'nama_produk' => 'required',
                'content' => 'required',
                'tipe' => 'required',
                'file' => 'nullable|sometimes|file|image|mimes:jpeg,png,jpg|max:2048'
            ]);
    
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/produk', $filename);
                $validatedData['file'] = $filename;
            }
    
            MasterProduk::create([
                'nama' => $validatedData['nama_produk'],
                'deskripsi' => $validatedData['content'],
                'tipe' => $validatedData['tipe'],
                'file' => $validatedData['file']
            ]);
    
            return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
        }catch(\Exception $e){
            dd($e);
            return redirect()->route('produk.index')->with('error', 'Produk gagal ditambahkan');
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
        $produk = MasterProduk::find($id);
        return view('content.produk.product-add', compact('mode', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try{
            $validatedData = $request->validate([
                'nama_produk' => 'required',
                'content' => 'required',
                'tipe' => 'required',
                'file' => 'nullable|sometimes|file|image|mimes:jpeg,png,jpg|max:2048'
            ]);
    
            $produk = MasterProduk::find($id);
    
            if($produk == null){
                return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan');
            }
    
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/produk', $filename); 
                $validatedData['file'] = $filename; 
    
                if ($produk->file) {
                    $oldImagePath = storage_path('app/public/produk/' . $produk->file);
                    
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }
    
            $produk->nama = $validatedData['nama_produk'];
            $produk->deskripsi = $validatedData['content'];
            $produk->tipe = $validatedData['tipe'];
            $produk->file = $validatedData['file'] ?? $produk->file;
            $produk->save();
    
            return redirect()->route('produk.index')->with('success', 'Produk berhasil diubah');
        } catch(\Exception $e){
            return redirect()->route('produk.index')->with('error', 'Produk gagal diubah');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $produk = MasterProduk::find($id);
    
            if($produk == null){
                return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan');
            }
    
            if ($produk->file) {
                $oldImagePath = storage_path('app/public/produk/' . $produk->file);
                
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $produk->delete();
    
            return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
        } catch(\Exception $e){
            return redirect()->route('produk.index')->with('error', 'Produk gagal dihapus');
        }
    }

    public function api_get_produk(){
        $produk = MasterProduk::all();
        return response()->json(['data' => $produk]);
    }
}
