@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monper Events</title>
</head>
<body>
 @if ($header1!=0)
 <div class="bg-image" style="background-image:url({{asset("images/header/$header->img_fondo")}});background-size:cover; height: 100vh;">
 @else
 <div class="bg-image">
 @endif

<div class="row col-xs-12">
   
    <div class=" col-xs-12 d-flex align-items-end justify-content-end" style="height:100px">
       
       <div class="px-5 mx-5 text-white d-none d-sm-block" style="font-size: 24px;">
          <span><button type="button"  onclick="window.location='{{ route('landing', ['id' => 0]) }}'" class="text-white border-0" style="background-color:transparent" >ES</button></span>      
          <span><button type="button"  onclick="window.location='{{ route('landing', ['id' => 1]) }}'" class="text-white border-0" style="background-color:transparent" >EN</button></span>      
       </div>

       <div class="px-3 mx-3 text-white d-block d-sm-none" style="font-size: 20px;">
          <span><button type="button"  onclick="window.location='{{ route('landing', ['id' => 0]) }}'" class="text-white border-0" style="background-color:transparent" >ES</button></span>      
          <span><button type="button"  onclick="window.location='{{ route('landing', ['id' => 1]) }}'" class="text-white border-0" style="background-color:transparent" >EN</button></span>      
       </div>
    </div>
   
</div>
<div class="row col-xs-4" >

   <div class="ps-5">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ps-5">
    @if ($header1!=0)
        <img class="d-none d-sm-block" src="{{asset("images/header/$header->img_logo")}}"  style="width: 150px;" id="pre1"  alt="">
        <img class="d-block d-sm-none" src="{{asset("images/header/$header->img_logo")}}"  style="width: 100px;" id="pre1"  alt="">
    @endif    
    </div>
    </div>
</div>

<div class="row" style="height:200px"></div>

<div class="row d-none d-sm-block ps-5" style="height:12%;"><!-- esconde en xs-->
    <div class=" col-xs-10 ps-5 py-0 my-0 text-white d-flex align-items-botton ">
    @if ($header1!=0)
        @if ($idioma==0)
        <h1 class="display-1" style="font: normal 700 96px Arial , tahoma, sans-serif;">{{$header->palabra1}}</h1>
        @else
        <h1 class="display-1" style="font: normal 700 96px Arial , tahoma, sans-serif;">{{$header->word1}}</h1>
        @endif
    @endif
    </div>
</div>

<div class="row d-block d-sm-none ps-4" style="height:10%;"><!-- show en xs-->
    <div class="col-xs-10 py-0 my-0 text-white d-flex align-items-botton ">
    @if ($header1!=0)
        @if ($idioma==0)
           <h1 class="display-1" style="font: normal 700 70px Arial , tahoma, sans-serif;">{{$header->palabra1}}</h1>
        @else
        <h1 class="display-1" style="font: normal 700 70px Arial , tahoma, sans-serif;">{{$header->word1}}</h1>
        @endif
    @endif
    </div>
</div>

<div class="row d-none d-sm-block ps-5"> <!-- esconde en xs-->
    <div class="col-xs-4 ps-5 text-white">
    @if ($header1!=0)
       @if ($idioma==0)
       <h1 class="display-1" style="font: normal 700 96px Arial , tahoma, sans-serif;">{{$header->palabra2}}</h1>
       @else
       <h1 class="display-1" style="font: normal 700 96px Arial , tahoma, sans-serif;">{{$header->word2}}</h1>
       @endif
    @endif   
    </div>
</div>

<div class="row d-block d-sm-none ps-4" ><!-- show en xs-->
    <div class="col-xs-4 text-white">
    @if ($header1!=0)
       @if ($idioma==0)
         <h1 class="display-1" style="font: normal 700 70px Arial , tahoma, sans-serif;">{{$header->palabra2}}</h1>
       @else
         <h1 class="display-1" style="font: normal 700 70px Arial , tahoma, sans-serif;">{{$header->word2}}</h1>
       @endif  
    @endif   
    </div>
</div>

<div class="row d-none d-sm-block ps-5" ><!-- esconde en xs-->
    <div class="col-xs-6 ps-5">
    @if ($header1!=0)  
       @if ($idioma==0)  
         <h1 class="display-1" style="color: #a8a39d;font: normal 36px Arial , vergana, sans-serif;">{{$header->palabra3}}</h1>
       @else
         <h1 class="display-1" style="color: #a8a39d;font: normal 36px Arial , vergana, sans-serif;">{{$header->word3}}</h1>
       @endif  
    @endif   
    </div>
</div>

<div class="row d-block d-sm-none ps-4" >
    <div class=" col-xs-6 "><!-- show en xs-->
    @if ($header1!=0)    
       @if ($idioma==0)  
         <h1 class="display-1" style="color: #a8a39d;font: normal 30px Arial , vergana, sans-serif;">{{$header->palabra3}}</h1>
       @else
         <h1 class="display-1" style="color: #a8a39d;font: normal 30px Arial , vergana, sans-serif;">{{$header->word3}}</h1>
       @endif  
    @endif   
    </div>
</div>

<div class="row" style="height:200px"></div>

</div>

</body>
</html>


