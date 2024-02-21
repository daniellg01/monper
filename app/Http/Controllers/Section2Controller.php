<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section2;

class Section2Controller extends Controller
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
        
        $section2 = Section2::first();
        
        return view("section2",compact("section2"))->with('fireAlert', false);
     
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

        $section2 = new Section2();
        $section2->palabra1=$request->palabra1;
        $section2->word1=$request->word1;
        $section2->save();
       
        //$carrusel = null;
        //$header1 = Header::all();
        return view("section2",compact("section2"))->with('fireAlert', true);
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
            $nombreimagen = $id."img_section2".".".$imagen->guessExtension();
           // echo $nombreimagen;
            $ruta = public_path("images/section2/");
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $section2 = Section2::find($id); 
            $section2->img_fondo = $nombreimagen;
            $section2->save();    
          } 
    }else{

        $section2 = Section2::find($request->id); 
        $section2->palabra1=$request->palabra1;
        $section2->word1=$request->word1;
        $section2->save();
        
     
    }

       //$header1 = Header::all();
       return view("section2",compact("section2"))->with('fireAlert', true);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
