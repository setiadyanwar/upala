<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\MasterProduk;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navcolor = 'bg-transparent text-white';
        $latest_publication = Publication::orderBy('created_at', 'desc')->take(1)->get()[0];
        $latest_three_publications = Publication::orderBy('created_at', 'desc')->take(3)->get();

        return view('public_view.index', compact('navcolor', 'latest_publication', 'latest_three_publications'));
    }

    public function about()
    {
        return view('public_view.about');
    }

    public function contact()
    {
        return view('public_view.contact');
    }

    public function menu()
    {
        $menu = MasterProduk::all();
        return view('public_view.menu', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
}
