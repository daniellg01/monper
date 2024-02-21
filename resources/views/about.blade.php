@extends('adminlte::page')

@section('title', 'About')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>About</h1>
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


           
            @if ($about==null)
               <form role="form" method="POST" action="{{route('about.store')}}">
                  @csrf
                                
            @else
                <form role="form" method="POST" action="{{route('about.update')}}">
                  @csrf       
                  @method('PUT')
            @endif  

            @if ($about!=null) 
              <div class="card-body">
                <div class="form-group">
                    <input type="hidden" autofocus value="{{$about->id}}" name="id" id="id">
                    <label for="nombre">Nombre:</label>
                    <input type="text" autofocus value="{{$about->nombre}}" class="form-control" name="nombre" id="nombre" placeholder="Introduzca el nombre">
                    <label for="texto1">Texto1:</label>
                    <input type="text" autofocus value="{{$about->texto1}}" class="form-control" name="texto1" id="texto1" placeholder="Introduzca el texto1">
                    <label for="boton">Botón:</label>
                    <input type="text" autofocus value="{{$about->boton}}" class="form-control" name="boton" id="boton" placeholder="Introduzca texto del botón">
                    <label for="email">Email:</label>
                    <input type="email" autofocus value="{{$about->email}}" class="form-control" name="email" id="email" placeholder="Introduzca el correo electrónico">
                    <label for="name">Name:</label>
                    <input type="text" autofocus value="{{$about->name}}" class="form-control" name="name" id="name" placeholder="Enter the name">
                    <label for="text1">Text1:</label>
                    <input type="text" autofocus value="{{$about->text1}}" class="form-control" name="text1" id="text1" placeholder="Enter text1">
                    <label for="button">Button:</label>
                    <input type="text" autofocus value="{{$about->button}}" class="form-control" name="button" id="button" placeholder="Enter the text of the button">
                </div>
              </div>
              @else
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" autofocus value="" name="id" id="id">
                    <label for="nombre">Nombre:</label>
                    <input type="text" autofocus value="" class="form-control" name="nombre" id="nombre" placeholder="Introduzca el nombre">
                    <label for="texto1">Texto1:</label>
                    <input type="text" autofocus value="" class="form-control" name="texto1" id="texto1" placeholder="Introduzca el texto1">
                    <label for="boton">Botón:</label>
                    <input type="text" autofocus value="" class="form-control" name="boton" id="boton" placeholder="Introduzca texto del botón">
                    <label for="email">Email:</label>
                    <input type="email" autofocus value="" class="form-control" name="email" id="email" placeholder="Introduzca el correo electrónico">
                    <label for="name">Name:</label>
                    <input type="text" autofocus value="" class="form-control" name="name" id="name" placeholder="Enter the name">
                    <label for="text1">Text1:</label>
                    <input type="text" autofocus value="" class="form-control" name="text1" id="text1" placeholder="Enter text1">
                    <label for="button">Button:</label>
                    <input type="text" autofocus value="" class="form-control" name="button" id="button" placeholder="Enter the text of the button">
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


    @if ($about!=null)
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Imagen Fondo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('about.update')}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" autofocus value="{{$about->id}}" name="id" id="id">
                  <label for="exampleInputFile">Imagen</label>
                  <div class="input-group">
                    <div class="custom-file" id="contenedor">
                      <input type="file" accept="img/*" id="imagen" name="imagen" class="custom-file-input" >
                      <label class="custom-file-label" for="imagen">Encuentra imagen</label>
                    </div>
                    </div>
                    <div class="input-group">
                        <img src="{{asset("images/about/$about->img_fondo")}}" id="pre" class="img-fluid mt-3" alt="">
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

