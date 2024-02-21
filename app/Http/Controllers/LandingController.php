<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

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
        return view("landing",compact("header","header1","idioma"))->with('fireAlert', false);
     
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
        return view("landing",compact("header","header1","idioma"))->with('fireAlert', false);
     
        
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
