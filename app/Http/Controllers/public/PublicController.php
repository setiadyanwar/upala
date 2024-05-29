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
        $menu = MasterProduk::all();
        
        $page = 'home';

        return view('public_view.index', compact('navcolor', 'latest_publication', 'latest_three_publications', 'menu', 'page'));
    }

    public function about()
    {
        $page = 'about';
        return view('public_view.about', compact('page'));
    }

    public function contact()
    {
        $page = 'kontak';
        return view('public_view.contact', compact('page'));
    }

    public function menu()
    {
        $menu = MasterProduk::all();
        $page = 'menu';
        return view('public_view.menu', compact('menu', 'page'));
    }
}
