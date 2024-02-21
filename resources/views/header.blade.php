@extends('adminlte::page')

@section('title', 'Header')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Header</h1>
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


           
            @if ($header==null)
               <form role="form" method="POST" action="{{route('header.store')}}">
                  @csrf
                                
            @else
                <form role="form" method="POST" action="{{route('header.update')}}">
                  @csrf       
                  @method('PUT')
            @endif  

            @if ($header!=null) 
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" autofocus value="{{$header->id}}" name="id" id="id">
                    <label for="palabra1">Texto1:</label>
                    <input type="text" autofocus value="{{$header->palabra1}}" class="form-control" name="palabra1" id="palabra1" placeholder="Introduzca el texto1">
                    <label for="palabra2">Texto2:</label>
                    <input type="text" autofocus value="{{$header->palabra2}}" class="form-control" name="palabra2" id="palabra2" placeholder="Introduzca el texto2">
                    <label for="palabra3">Texto3:</label>
                    <input type="text" autofocus value="{{$header->palabra3}}" class="form-control" name="palabra3" id="palabra3" placeholder="Introduzca el texto3">
                    <label for="word1">Text1:</label>
                    <input type="text" autofocus value="{{$header->word1}}" class="form-control" name="word1" id="word1" placeholder="Input text1">
                    <label for="word2">Text2:</label>
                    <input type="text" autofocus value="{{$header->word2}}" class="form-control" name="word2" id="word2" placeholder="Input text2">
                    <label for="word3">Text3:</label>
                    <input type="text" autofocus value="{{$header->word3}}" class="form-control" name="word3" id="word3" placeholder="input text3">
                </div>
              </div>
              @else
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" autofocus value="" name="id" id="id">
                    <label for="palabra1">Texto1:</label>
                    <input type="text" autofocus value="" class="form-control" name="palabra1" id="palabra1" placeholder="Introduzca el texto1">
                    <label for="palabra2">Texto2:</label>
                    <input type="text" autofocus value="" class="form-control" name="palabra2" id="palabra2" placeholder="Introduzca el texto2">
                    <label for="palabra3">Texto3:</label>
                    <input type="text" autofocus value="" class="form-control" name="palabra3" id="palabra3" placeholder="Introduzca el texto3">
                    <label for="word1">Text1:</label>
                    <input type="text" autofocus value="" class="form-control" name="word1" id="word1" placeholder="Input text1">
                    <label for="word2">Text2:</label>
                    <input type="text" autofocus value="" class="form-control" name="word2" id="word2" placeholder="Input text2">
                    <label for="word3">Text3:</label>
                    <input type="text" autofocus value="" class="form-control" name="word3" id="word3" placeholder="input text3">

                    
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


    @if ($header!=null)
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Imagen Fondo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('header.update')}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" autofocus value="{{$header->id}}" name="id" id="id">
                  <label for="exampleInputFile">Imagen</label>
                  <div class="input-group">
                    <div class="custom-file" id="contenedor">
                      <input type="file" accept="img/*" id="imagen" name="imagen" class="custom-file-input" >
                      <label class="custom-file-label" for="imagen">Encuentra imagen</label>
                    </div>
                    </div>
                    <div class="input-group">
                        <img src="{{asset("images/header/$header->img_fondo")}}" id="pre" class="img-fluid mt-3" alt="">
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


        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Imagen Logo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('header.update')}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" autofocus value="{{$header->id}}" name="id" id="id">
                  <label for="exampleInputFile">Imagen</label>
                  <div class="input-group">
                    <div class="custom-file" id="contenedor">
                      <input type="file" accept="img/*" id="imagen1" name="imagen1" class="custom-file-input" >
                      <label class="custom-file-label" for="imagen1">Encuentra imagen</label>
                    </div>
                    </div>
                    <div class="input-group">
                        <img src="{{asset("images/header/$header->img_logo")}}" id="pre1" class="img-fluid mt-3" alt="">
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
                <button type="submit" class="btn btn-block btn-success btn-lg"><span class=" fas fa-external-link-alt"></span>Subir Logo</button>

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

    const $seleccionArchivos1 = document.querySelector("#imagen1"),
    $imagenPrevisualizacion1 = document.querySelector("#pre1");

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

    $seleccionArchivos1.addEventListener("change", () => {
     const archivos = $seleccionArchivos1.files;
        if (!archivos || !archivos.length) {
           $imagenPrevisualizacion1.src = "";
          return;
        }
     const primerArchivo = archivos[0];
     const objectURL = URL.createObjectURL(primerArchivo);
     $imagenPrevisualizacion1.src = objectURL;
    });
    
    }); </script>
@stop

