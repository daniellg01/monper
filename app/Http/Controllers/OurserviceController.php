<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourservice;

class OurserviceController extends Controller
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
        
        $our_services = Ourservice::first();
        
        return view("our_services",compact("our_services"))->with('fireAlert', false);
     
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

        $our_services = new Ourservice();
        $our_services->titulo=$request->titulo;
        $our_services->subtitulo1=$request->subtitulo1;
        $our_services->subtitulo2=$request->subtitulo2;
        $our_services->subtitulo3=$request->subtitulo3;
        $our_services->texto1=$request->texto1;
        $our_services->texto2=$request->texto2;
        $our_services->texto3=$request->texto3;
        $our_services->title=$request->title;
        $our_services->subtitle1=$request->subtitle1;
        $our_services->subtitle2=$request->subtitle2;
        $our_services->subtitle3=$request->subtitle3;
        $our_services->text1=$request->text1;
        $our_services->text2=$request->text2;
        $our_services->text3=$request->text3;
        $our_services->save();
       
        //$carrusel = null;
        //$header1 = Header::all();
        return view("our_services",compact("our_services"))->with('fireAlert', true);
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
            $nombreimagen = $id."img_ourservice".".".$imagen->guessExtension();
           // echo $nombreimagen;
            $ruta = public_path("images/our_services/");
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $our_services = Ourservice::find($id); 
            $our_services->img_fondo = $nombreimagen;
            $our_services->save();    
          } 
    }else{

        $our_services = Ourservice::find($request->id); 
        $our_services->titulo=$request->titulo;
        $our_services->subtitulo1=$request->subtitulo1;
        $our_services->subtitulo2=$request->subtitulo2;
        $our_services->subtitulo3=$request->subtitulo3;
        $our_services->texto1=$request->texto1;
        $our_services->texto2=$request->texto2;
        $our_services->texto3=$request->texto3;
        $our_services->title=$request->title;
        $our_services->subtitle1=$request->subtitle1;
        $our_services->subtitle2=$request->subtitle2;
        $our_services->subtitle3=$request->subtitle3;
        $our_services->text1=$request->text1;
        $our_services->text2=$request->text2;
        $our_services->text3=$request->text3;
        $our_services->save();
        
    }

       //$header1 = Header::all();
       return view("our_services",compact("our_services"))->with('fireAlert', true);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
