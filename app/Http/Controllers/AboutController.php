<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
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
        
        $about = About::first();
        
        return view("about",compact("about"))->with('fireAlert', false);
     
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

        $about = new About();
        $about->nombre=$request->nombre;
        $about->name=$request->name;
        $about->texto1=$request->texto1;
        $about->text1=$request->text1;
        $about->boton=$request->boton;
        $about->button=$request->button;
        $about->email=$request->email;
        $about->save();
       
        //$carrusel = null;
        //$header1 = Header::all();
        return view("about",compact("about"))->with('fireAlert', true);
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
            $nombreimagen = $id."img_about".".".$imagen->guessExtension();
           // echo $nombreimagen;
            $ruta = public_path("images/about/");
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $about = About::find($id); 
            $about->img_fondo = $nombreimagen;
            $about->save();    
          } 
    }else{

        $about = About::find($request->id); 
        $about->nombre=$request->nombre;
        $about->name=$request->name;
        $about->texto1=$request->texto1;
        $about->text1=$request->text1;
        $about->boton=$request->boton;
        $about->button=$request->button;
        $about->email=$request->email;
        $about->save();
    }

       //$header1 = Header::all();
       return view("about",compact("about"))->with('fireAlert', true);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
