<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Mentor;
use App\Models\Produk;
use App\Models\Project;
use Illuminate\Http\Request;

class LandingController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $produks = Produk::all();
        $projects = Project::all();
        return view('welcome', compact(['blogs','produks','projects']));
    }

}
