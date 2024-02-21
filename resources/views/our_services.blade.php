@extends('adminlte::page')

@section('title', 'Our_services')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Our Services</h1>
@stop

@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->


           
            @if ($our_services==null)
               <form role="form" method="POST" action="{{route('our_services.store')}}">
                  @csrf
                                
            @else
                <form role="form" method="POST" action="{{route('our_services.update')}}">
                  @csrf       
                  @method('PUT')
            @endif  

            @if ($our_services!=null) 
              <div class="card-body">
                <div class="form-group">
                    <input type="hidden" autofocus value="{{$our_services->id}}" name="id" id="id">
                    <label for="titulo">Título:</label>
                    <input type="text" autofocus value="{{$our_services->titulo}}" class="form-control" name="titulo" id="titulo" placeholder="Introduzca el título">
                    <label for="subtitulo1">Subtítulo1:</label>
                    <input type="text" autofocus value="{{$our_services->subtitulo1}}" class="form-control" name="subtitulo1" id="subtitulo1" placeholder="Introduzca el subtítulo1">
                    <label for="texto1">Texto1:</label>
                    <input type="text" autofocus value="{{$our_services->texto1}}" class="form-control" name="texto1" id="texto1" placeholder="Introduzca el texto1">
                    <label for="subtitulo2">Subtítulo2:</label>
                    <input type="text" autofocus value="{{$our_services->subtitulo2}}" class="form-control" name="subtitulo2" id="subtitulo2" placeholder="Introduzca el subtítulo2">
                    <label for="texto2">Texto2:</label>
                    <input type="text" autofocus value="{{$our_services->texto2}}" class="form-control" name="texto2" id="texto2" placeholder="Introduzca el texto2">
                    <label for="subtitulo3">Subtítulo3:</label>
                    <input type="text" autofocus value="{{$our_services->subtitulo3}}" class="form-control" name="subtitulo3" id="subtitulo3" placeholder="Introduzca el subtítulo3">
                    <label for="texto3">Texto3:</label>
                    <input type="text" autofocus value="{{$our_services->texto3}}" class="form-control" name="texto3" id="texto3" placeholder="Introduzca el texto3">
                    <label for="title">Title:</label>
                    <input type="text" autofocus value="{{$our_services->title}}" class="form-control" name="title" id="title" placeholder="Enter the title">
                    <label for="subtitle1">Subtitle1:</label>
                    <input type="text" autofocus value="{{$our_services->subtitle1}}" class="form-control" name="subtitle1" id="subtitle1" placeholder="Enter the subtitle1">
                    <label for="text1">Text1:</label>
                    <input type="text" autofocus value="{{$our_services->text1}}" class="form-control" name="text1" id="text1" placeholder="Enter text1">
                    <label for="subtitle2">Subtitle2:</label>
                    <input type="text" autofocus value="{{$our_services->subtitle2}}" class="form-control" name="subtitle2" id="subtitle2" placeholder="Enter the subtitle2">
                    <label for="text2">Text2:</label>
                    <input type="text" autofocus value="{{$our_services->text2}}" class="form-control" name="text2" id="text2" placeholder="Enter text2">
                    <label for="subtitle3">Subtitle3:</label>
                    <input type="text" autofocus value="{{$our_services->subtitle3}}" class="form-control" name="subtitle3" id="subtitle3" placeholder="Enter the subtitle3">
                    <label for="text3">Text3:</label>
                    <input type="text" autofocus value="{{$our_services->text3}}" class="form-control" name="text3" id="text3" placeholder="Enter text3">
                    
                </div>
              </div>
              @else
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" autofocus value="" name="id" id="id">
                <label for="titulo">Título:</label>
                    <input type="text" autofocus value="" class="form-control" name="titulo" id="titulo" placeholder="Introduzca el título">
                    <label for="subtitulo1">Subtítulo1:</label>
                    <input type="text" autofocus value="" class="form-control" name="subtitulo1" id="subtitulo1" placeholder="Introduzca el subtítulo1">
                    <label for="texto1">Texto1:</label>
                    <input type="text" autofocus value="" class="form-control" name="texto1" id="texto1" placeholder="Introduzca el texto1">
                    <label for="subtitulo2">Subtítulo2:</label>
                    <input type="text" autofocus value="" class="form-control" name="subtitulo2" id="subtitulo2" placeholder="Introduzca el subtítulo2">
                    <label for="texto2">Texto2:</label>
                    <input type="text" autofocus value="" class="form-control" name="texto2" id="texto2" placeholder="Introduzca el texto2">
                    <label for="subtitulo3">Subtítulo3:</label>
                    <input type="text" autofocus value="" class="form-control" name="subtitulo3" id="subtitulo3" placeholder="Introduzca el subtítulo3">
                    <label for="texto3">Texto3:</label>
                    <input type="text" autofocus value="" class="form-control" name="texto3" id="texto3" placeholder="Introduzca el texto3">
                    <label for="title">Title:</label>
                    <input type="text" autofocus value="" class="form-control" name="title" id="title" placeholder="Enter the title">
                    <label for="subtitle1">Subtitle1:</label>
                    <input type="text" autofocus value="" class="form-control" name="subtitle1" id="subtitle1" placeholder="Enter the subtitle1">
                    <label for="text1">Text1:</label>
                    <input type="text" autofocus value="" class="form-control" name="text1" id="text1" placeholder="Enter text1">
                    <label for="subtitle2">Subtitle2:</label>
                    <input type="text" autofocus value="" class="form-control" name="subtitle2" id="subtitle2" placeholder="Enter the subtitle2">
                    <label for="text2">Text2:</label>
                    <input type="text" autofocus value="" class="form-control" name="text2" id="text2" placeholder="Enter text2">
                    <label for="subtitle3">Subtitle3:</label>
                    <input type="text" autofocus value="" class="form-control" name="subtitle3" id="subtitle3" placeholder="Enter the subtitle3">
                    <label for="text3">Text3:</label>
                    <input type="text" autofocus value="" class="form-control" name="text3" id="text3" placeholder="Enter text3">
                </div>
              </div>
            @endif  
              <!-- /.card-body -->

               <div class="card-footer">
                 <button type="submit" class="btn btn-block btn-success btn-lg"><span class="fas fa-external-link-alt"></span>Guardar</button>
               </div>
              </form>

        </div>

    </div>


    @if ($our_services!=null)
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Imagen Fondo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('our_services.update')}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" autofocus value="{{$our_services->id}}" name="id" id="id">
                  <label for="exampleInputFile">Imagen</label>
                  <div class="input-group">
                    <div class="custom-file" id="contenedor">
                      <input type="file" accept="img/*" id="imagen" name="imagen" class="custom-file-input" >
                      <label class="custom-file-label" for="imagen">Encuentra imagen</label>
                    </div>
                    </div>
                    <div class="input-group">
                        <img src="{{asset("images/our_services/$our_services->img_fondo")}}" id="pre" class="img-fluid mt-3" alt="">
                    </div>
                  </div>
                </div>
                @if ($errors->has('imagen'))
                @section('plugins.Sweetalert2', true)
                @push('js')
                <script>
                            Swal.fire({
                        title: "Error!",
                        text: "{{ __('The file is too large or of an invalid type, convert the image to png, jpg, jpeg, gif, svg, or tiff, and verify that it does not exceed 5000 kb') }}",
                        icon: 'error',
                    })
                </script>
                @endpush
                @endif
              <div class="card-footer">
                <button type="submit" class="btn btn-block btn-success btn-lg"><span class=" fas fa-external-link-alt"></span>Subir Imagen</button>

              </div>
            </form>
        </div>

    </div>
    @endif
</div>


@stop


@section('css')
   <!-- <link rel="stylesheet" href="/css/admin_custom.css">-->
   
     <!-- Font Awesome -->
<!-- <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">-->
@stop

@section('js')

<script>
    $(document).ready(function()
    {
        // Read flag from the controller.


        let shouldFire = @json($fireAlert);

        if (shouldFire) {
          Swal.fire('', 'Guardado correctamente', 'success');
        }

    });

    $('document').ready(function(){
        // Obtener referencia al input y a la imagen

    const $seleccionArchivos = document.querySelector("#imagen"),
    $imagenPrevisualizacion = document.querySelector("#pre");

    $seleccionArchivos.addEventListener("change", () => {
     const archivos = $seleccionArchivos.files;
        if (!archivos || !archivos.length) {
           $imagenPrevisualizacion.src = "";
          return;
        }
     const primerArchivo = archivos[0];
     const objectURL = URL.createObjectURL(primerArchivo);
     $imagenPrevisualizacion.src = objectURL;
    });

    
    }); </script>
@stop

