<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count = User::count();
        return view('content.karyawan.karyawan-list', compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mode = 'add';
        $role = Role::all();
        return view('content.karyawan.karyawan-add', compact('mode', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'nama_karyawan' => 'required',
                'email' => 'nullable|email',
                'password' => 'nullable',
                'role' => 'nullable'
            ]);

            User::create([
                'name' => $validatedData['nama_karyawan'],
                'email' => $validatedData['email'],
                'role_id' => $validatedData['role'],
                'password' => $validatedData['password'],
            ]);

            return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan');
        }catch(\Exception $e){
            dd($e);
            return redirect()->route('karyawan.index')->with('error', 'Karyawan gagal ditambahkan');
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
        $karyawan = User::find($id);
        $role = Role::all();
        return view('content.karyawan.karyawan-add', compact('mode', 'karyawan', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $validatedData = $request->validate([
                'nama_karyawan' => 'required',
                'email' => 'nullable|email',
                'password' => 'nullable',
                'role' => 'nullable'
            ]);

            $karyawan = User::find($id);
            $karyawan->update([
                'name' => $validatedData['nama_karyawan'] ?? $karyawan->name,
                'email' => $validatedData['email'] ?? $karyawan->email,
                'role_id' => $validatedData['role'] ?? $karyawan->role_id,
                'password' => $validatedData['password'] ?? $karyawan->password,
            ]);

            return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diubah');
        }catch(\Exception $e){
            return redirect()->route('karyawan.index')->with('error', 'Karyawan gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $karyawan = User::find($id);
            $karyawan->delete();
            return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus');
        }catch(\Exception $e){
            return redirect()->route('karyawan.index')->with('error', 'Karyawan gagal dihapus');
        }
    }

    public function api_get_karyawan(){
        $karyawan = User::select(['id', 'email', 'name', 'role_id'])->get();
        return response()->json(['data' => $karyawan]);
    }
}
