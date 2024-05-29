<?php

namespace App\Http\Controllers\publication;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        $count = Publication::count();
        return view('content.publikasi.publikasi-list', compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mode = 'add';
        return view('content.publikasi.publikasi-add', compact('mode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
                'short_description' => 'required',
                'content' => 'required',
                'type' => 'required', 
                'thumbnail' => 'nullable|sometimes|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/publikasi', $filename); 
                $validatedData['thumbnail'] = $filename;
            }
        
            Publication::create([
                'title' => $validatedData['title'],
                'short_description' => $validatedData['short_description'],
                'content' => $validatedData['content'],
                'type' => $validatedData['type'],
                'thumbnail' => isset($validatedData['thumbnail']) ? $validatedData['thumbnail'] : null, 
            ]);
        
            return redirect()->route('publikasi.index')->with('success', 'Publication berhasil ditambahkan'); 
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('publikasi.index')->with('error', 'Publication gagal ditambahkan'); 
        }

    }

    /**
     * Display the specified resource.
     */
    
    // public show publikasi
    public function show(string $id)
    {
        $publication = Publication::find($id);

        if($publication == null){
            return redirect()->route('publikasi.index')->with('error', 'Publikasi tidak ditemukan');
        }

        return view('content.publikasi.publikasi-detail', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mode = 'edit';
        $publikasi = Publication::find($id);
        return view('content.publikasi.publikasi-add', compact('mode', 'publikasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
                'short_description' => 'required',
                'content' => 'required',
                'type' => 'required', 
                'thumbnail' => 'nullable|sometimes|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            $publication = Publication::find($id);
    
            if (!$publication) { // Check for publication existence (not null)
                return redirect()->route('publikasi.index')->with('error', 'Publication not found'); // Adjust route name
            }

            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/publikasi', $filename);
                $validatedData['thumbnail'] = $filename;
    
                // Handle old image deletion (optional, based on your needs)
                if ($publication->file) {
                    $oldImagePath = storage_path('app/public/publikasi/' . $publication->file);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }
    
            $publication->update([
                'title' => $validatedData['title'] ?? $publication->title,
                'short_description' => $validatedData['short_description'] ?? $publication->short_description,
                'content' => $validatedData['content'] ?? $publication->content,
                'type' => $validatedData['type'] ?? $publication->type,
                'thumbnail' => isset($validatedData['thumbnail']) ? $validatedData['thumbnail'] : $publication->thumbnail, 
            ]);
    
            return redirect()->route('publikasi.index')->with('success', 'Publication updated successfully'); // Adjust route name
        } catch (\Exception $e) {
            return redirect()->route('publikasi.index')->with('error', 'Publication update failed'); // Adjust route name
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $publikasi = Publication::find($id);
    
            if($publikasi == null){
                return redirect()->route('publikasi.index')->with('error', 'publikasi tidak ditemukan');
            }
    
            if ($publikasi->file) {
                $oldImagePath = storage_path('app/public/publikasi/' . $publikasi->file);
                
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $publikasi->delete();
    
            return redirect()->route('publikasi.index')->with('success', 'publikasi berhasil dihapus');
        } catch(\Exception $e){
            return redirect()->route('publikasi.index')->with('error', 'publikasi gagal dihapus');
        }
    }

    public function api_get_publikasi(){
        $publikasi = Publication::select('id', 'type', 'times_visited', 'title', 'short_description', 'thumbnail', 'created_at')->get();
        return response()->json(['data' => $publikasi]);
    }
 
}
