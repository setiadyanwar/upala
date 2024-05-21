<?php

namespace App\Http\Controllers\notifikasi;

use App\Http\Controllers\Controller;
use App\Models\PushNotification;
use Illuminate\Http\Request;

class MasterPushNotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.notifikasi.notifikasi-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mode = 'add';
        return view('content.notifikasi.notifikasi-add', compact('mode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'title' => 'required',
                'content' => 'required',
                'notification_type' => 'required',
                'file' => 'nullable|sometimes|file|image|mimes:jpeg,png,jpg|max:2048'
            ]);
    
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/notifikasi', $filename);
                $validatedData['file'] = $filename;
            }
    
            PushNotification::create([
                'title' => $validatedData['title'],
                'message' => $validatedData['content'],
                'notification_type' => $validatedData['notification_type'],
                'media_attachment' => $validatedData['file']
            ]);
    
            return redirect()->route('notifikasi.index')->with('success', 'Notifikasi berhasil ditambahkan');
        }catch(\Exception $e){
            dd($e);
            return redirect()->route('notifikasi.index')->with('error', 'Notifikasi gagal ditambahkan');
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
        $notifikasi = PushNotification::find($id);
        return view('content.notifikasi.notifikasi-add', compact('mode', 'notifikasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $validatedData = $request->validate([
                'title' => 'required',
                'content' => 'required',
                'notification_type' => 'required',
                'file' => 'nullable|sometimes|file|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $notifikasi = PushNotification::find($id);
    
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/notifikasi', $filename); 
                $validatedData['file'] = $filename; 
    
                if ($notifikasi->file) {
                    $oldImagePath = storage_path('app/public/notifikasi/' . $notifikasi->file);
                    
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }
    
            $notifikasi->update([
                'title' => $validatedData['title'] ?? $notifikasi->title,
                'message' => $validatedData['content'] ?? $notifikasi->message,
                'notification_type' => $validatedData['notification_type'] ?? $notifikasi->notification_type,
                'media_attachment' => $validatedData['file'] ?? $notifikasi->media_attachment
            ]);
    
            return redirect()->route('notifikasi.index')->with('success', 'Notifikasi berhasil diubah');
        }catch(\Exception $e){
            dd($e);
            return redirect()->route('notifikasi.index')->with('error', 'Notifikasi gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            PushNotification::find($id)->delete();
            return redirect()->route('notifikasi.index')->with('success', 'Notifikasi berhasil dihapus');
        }catch(\Exception $e){
            return redirect()->route('notifikasi.index')->with('error', 'Notifikasi gagal dihapus');
        }
    }

    public function api_get_notifikasi(){
        $notifikasi = PushNotification::all();
        return response()->json(['data' => $notifikasi]);
    }
}
