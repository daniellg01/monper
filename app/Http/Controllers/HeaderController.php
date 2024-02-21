<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       // echo "estoy en index";
        
        $header = Header::first();
        
        return view("header",compact("header"))->with('fireAlert', false);
     
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
      //  echo "estoy en store";

        $header = new Header();
        $header->palabra1=$request->palabra1;
        $header->palabra2=$request->palabra2;
        $header->palabra3=$request->palabra3;
        $header->word1=$request->word1;
        $header->word2=$request->word2;
        $header->word3=$request->word3;
        $header->save();
       
        //$carrusel = null;
        $header1 = Header::all();
        return view("header",compact("header","header1"))->with('fireAlert', true);
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
    public function update(Request $request)
    {

    //   echo "estoy en update";
       //echo $request->id;
       $id= $request->id;

        if($request->hasFile("imagen") || $request->hasFile("imagen1")){
          
          if($request->hasFile("imagen")){
            //imagen fondo
            $request->validate([
                'imagen' => 'required|image|mimes:png,jpg,jpeg,gif,svg,tiff|max:5000', 
            ]);

            $imagen = $request->file("imagen");
            $nombreimagen = $id."img_header".".".$imagen->guessExtension();
           // echo $nombreimagen;
            $ruta = public_path("images/header/");
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $header = Header::find($id); 
            $header->img_fondo = $nombreimagen;
            $header->save();    
          } else{

            $request->validate([
                'imagen1' => 'required|image|mimes:png,jpg,jpeg,gif,svg,tiff|max:5000', 
            ]);    
            
            $imagen = $request->file("imagen1");
            $nombreimagen = $id."img_header_logo".".".$imagen->guessExtension();
            //echo $nombreimagen;
            //return;
            $ruta = public_path("images/header/");
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $header = Header::find($id); 
           // echo $nombreimagen;
            $header->img_logo = $nombreimagen;
            $header->save();    
          }
    }else{

        $header = Header::find($request->id); 
        $header->palabra1=$request->palabra1;
        $header->palabra2=$request->palabra2;
        $header->palabra3=$request->palabra3;
        $header->word1=$request->word1;
        $header->word2=$request->word2;
        $header->word3=$request->word3;
        $header->save();
        
     
    }

       $header1 = Header::all();
       return view("header",compact("header","header1"))->with('fireAlert', true);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
