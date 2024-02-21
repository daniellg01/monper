@extends('adminlte::page')

@section('title', 'Footer')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Footer</h1>
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


           
            @if ($footer==null)
               <form role="form" method="POST" action="{{route('footer.store')}}">
                  @csrf
                                
            @else
                <form role="form" method="POST" action="{{route('footer.update')}}">
                  @csrf       
                  @method('PUT')
            @endif  

            @if ($footer!=null) 
              <div class="card-body">
                <div class="form-group">
                    <input type="hidden" autofocus value="{{$footer->id}}" name="id" id="id">
                    <label for="titulo">Título:</label>
                    <input type="text" autofocus value="{{$footer->titulo}}" class="form-control" name="titulo" id="titulo" placeholder="Introduzca el título">
                    <label for="title">Title:</label>
                    <input type="text" autofocus value="{{$footer->title}}" class="form-control" name="title" id="title" placeholder="Enter the title">
                    <label for="nombre">Nombre:</label>
                    <input type="text" autofocus value="{{$footer->nombre}}" class="form-control" name="nombre" id="nombre" placeholder="Introduzca el nombre">
                    <label for="name">Name:</label>
                    <input type="text" autofocus value="{{$footer->name}}" class="form-control" name="name" id="name" placeholder="Enter the name">
                    <label for="correo">Email:</label>
                    <input type="email" autofocus value="{{$footer->email}}" class="form-control" name="email" id="email" placeholder="Introduzca el Email">
                    <label for="tel">Tel:</label>
                    <input type="text" autofocus value="{{$footer->tel}}" class="form-control" name="tel" id="tel" placeholder="Introduzca el teléfono">
                    <label for="url">URL:</label>
                    <input type="text" autofocus value="{{$footer->url}}" class="form-control" name="url" id="url" placeholder="Introduzca la URL">
                    <label for="direccion">Dirección:</label>
                    <input type="text" autofocus value="{{$footer->direccion}}" class="form-control" name="direccion" id="direccion" placeholder="Introduzca la dirección">
                    <label for="redes">Redes Sociales:</label>
                    <input type="text" autofocus value="{{$footer->redes}}" class="form-control" name="redes" id="redes" placeholder="Introduzca mensaje redes sociales">
                    <label for="network">Social Network:</label>
                    <input type="text" autofocus value="{{$footer->network}}" class="form-control" name="network" id="network" placeholder="Enter the social network message">
                    <label for="x">X:</label>
                    <input type="text" autofocus value="{{$footer->x}}" class="form-control" name="x" id="x" placeholder="X">
                    <label for="instragram">Instagram:</label>
                    <input type="text" autofocus value="{{$footer->instagram}}" class="form-control" name="instagram" id="instagram" placeholder="Instagram">
                    <label for="linkedin">LinkedIn:</label>
                    <input type="text" autofocus value="{{$footer->linkedin}}" class="form-control" name="linkedin" id="linkedin" placeholder="LinkedIn">
                    <label for="facebook">Facebook:</label>
                    <input type="text" autofocus value="{{$footer->facebook}}" class="form-control" name="facebook" id="facebook" placeholder="Facebook">
                </div>
              </div>
              @else
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" autofocus value="" name="id" id="id">
                <label for="titulo">Título:</label>
                <label for="titulo">Título:</label>
                    <input type="text" autofocus value="" class="form-control" name="titulo" id="titulo" placeholder="Introduzca el título">
                    <label for="title">Title:</label>
                    <input type="text" autofocus value="" class="form-control" name="title" id="title" placeholder="Enter the title">
                    <label for="nombre">Nombre:</label>
                    <input type="text" autofocus value="" class="form-control" name="nombre" id="nombre" placeholder="Introduzca el nombre">
                    <label for="name">Name:</label>
                    <input type="text" autofocus value="" class="form-control" name="name" id="name" placeholder="Enter the name">
                    <label for="correo">Email:</label>
                    <input type="email" autofocus value="" class="form-control" name="email" id="email" placeholder="Introduzca el Email">
                    <label for="tel">Tel:</label>
                    <input type="text" autofocus value="" class="form-control" name="tel" id="tel" placeholder="Introduzca el teléfono">
                    <label for="url">URL:</label>
                    <input type="text" autofocus value="" class="form-control" name="url" id="url" placeholder="Introduzca la URL">
                    <label for="direccion">Dirección:</label>
                    <input type="text" autofocus value="" class="form-control" name="direccion" id="direccion" placeholder="Introduzca la dirección">
                    <label for="conecta">Redes Sociales:</label>
                    <input type="text" autofocus value="" class="form-control" name="redes" id="redes" placeholder="Introduzca mensaje redes sociales">
                    <label for="network">Social Network:</label>
                    <input type="text" autofocus value="" class="form-control" name="network" id="network" placeholder="Enter the social network message">
                    <label for="x">X:</label>
                    <input type="text" autofocus value="" class="form-control" name="x" id="x" placeholder="X">
                    <label for="instragram">Instagram:</label>
                    <input type="text" autofocus value="" class="form-control" name="instagram" id="instagram" placeholder="Instagram">
                    <label for="linkedin">LinkedIn:</label>
                    <input type="text" autofocus value="" class="form-control" name="linkedin" id="linkedin" placeholder="LinkedIn">
                    <label for="facebook">Facebook:</label>
                    <input type="text" autofocus value="" class="form-control" name="facebook" id="facebook" placeholder="Facebook">                </div>
              </div>
            @endif  
              <!-- /.card-body -->

               <div class="card-footer">
                 <button type="submit" class="btn btn-block btn-success btn-lg"><span class="fas fa-external-link-alt"></span>Guardar</button>
               </div>
              </form>

        </div>

    </div>

 
    @if ($footer!=null)
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Imagen Fondo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('footer.update')}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" autofocus value="{{$footer->id}}" name="id" id="id">
                  <label for="exampleInputFile">Imagen</label>
                  <div class="input-group">
                    <div class="custom-file" id="contenedor">
                      <input type="file" accept="img/*" id="imagen" name="imagen" class="custom-file-input" >
                      <label class="custom-file-label" for="imagen">Encuentra imagen</label>
                    </div>
                    </div>
                    <div class="input-group">
                        <img src="{{asset("images/footer/$footer->img_fondo")}}" id="pre" class="img-fluid mt-3" alt="">
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

