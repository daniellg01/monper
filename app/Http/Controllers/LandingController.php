<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Section2;
use App\Models\About;
use App\Models\Ourservice;
use App\Models\Footer;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::first();  
        if ($header==null){$header1=0;}else{$header1=1;}
        $idioma = 0;
        $section2 = Section2::first();
        if ($section2==null){$section21=0;}else{$section21=1;}
        $about = About::first();
        if ($about==null){$about1=0;}else{$about1=1;}
        $our_service = Ourservice::first();
        if ($our_service==null){$our_service1=0;}else{$our_service1=1;}
        $footer = Footer::first();
        if ($footer==null){$footer1=0;}else{$footer1=1;}

        return view("landing",compact("header","header1","idioma","section2","section21","about","about1","our_service","our_service1","footer","footer1"))->with('fireAlert', false);
     
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
     
        $header = Header::first();  
        if ($header==null){$header1=0;}else{$header1=1;}
        $idioma = $id;
        if ($idioma!=0 && $idioma!=1){
            $idioma=0;
        }
        $section2 = Section2::first();
        if ($section2==null){$section21=0;}else{$section21=1;}
        
        $about = About::first();
        if ($about==null){$about1=0;}else{$about1=1;}

        $our_service = Ourservice::first();
        if ($our_service==null){$our_service1=0;}else{$our_service1=1;}

        $footer = footer::first();
        if ($footer==null){$footer1=0;}else{$footer1=1;}

        return view("landing",compact("header","header1","section2","idioma","section21","about","about1","our_service","our_service1","footer","footer1"))->with('fireAlert', false);
     
        
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
