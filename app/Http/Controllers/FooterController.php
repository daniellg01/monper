<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
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
        
        $footer = Footer::first();
        
        return view("footer",compact("footer"))->with('fireAlert', false);
     
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

        $footer = new Footer();
        $footer->titulo=$request->titulo;
        $footer->title=$request->title;
        $footer->nombre=$request->nombre;
        $footer->name=$request->name;
        $footer->email=$request->email;
        $footer->tel=$request->tel;
        $footer->url=$request->url;
        $footer->direccion=$request->direccion;
        $footer->redes=$request->redes;
        $footer->network=$request->network;
        $footer->x=$request->x;
        $footer->instagram=$request->instagram;
        $footer->linkedin=$request->linkedin;
        $footer->facebook=$request->facebook;        
        $footer->save();
       
        //$carrusel = null;
        //$header1 = Header::all();
        return view("footer",compact("footer"))->with('fireAlert', true);
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
            $nombreimagen = $id."img_footer".".".$imagen->guessExtension();
           // echo $nombreimagen;
            $ruta = public_path("images/footer/");
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $footer = Footer::find($id); 
            $footer->img_fondo = $nombreimagen;
            $footer->save();    
          } 
    }else{

        $footer = Footer::find($request->id); 
        $footer->titulo=$request->titulo;
        $footer->title=$request->title;
        $footer->nombre=$request->nombre;
        $footer->name=$request->name;
        $footer->email=$request->email;
        $footer->tel=$request->tel;
        $footer->url=$request->url;
        $footer->direccion=$request->direccion;
        $footer->redes=$request->redes;
        $footer->network=$request->network;
        $footer->x=$request->x;
        $footer->instagram=$request->instagram;
        $footer->linkedin=$request->linkedin;
        $footer->facebook=$request->facebook;        
        $footer->save();
        
    }

       //$header1 = Header::all();
       return view("footer",compact("footer"))->with('fireAlert', true);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
