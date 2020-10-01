<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libro = Libro::get();
        
        // $locale = App::getLocale();

        return view('home.index', compact('libro'));

   
    }

    public function show($slug)
    {
        $slung = Libro::where('slug','=', $slug)->firstOrFail();
        return view('home.show',compact('slung'));
    }

}
