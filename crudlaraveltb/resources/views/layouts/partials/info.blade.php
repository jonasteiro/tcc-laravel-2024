<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informática</title>
    @include('layouts.partials.essentials')
</head>
<body id="body">
    @include('layouts.partials.navbarlogged')


    <div class="d-flex text-center border border-dark border-3 border-top-0 ">

        <div class="border border-dark border-2 m-3 box01 p-2 fs-1 rounded" id="ic"> <i class="fa-solid fa-laptop"></i> Informática</div>
        
       @include('layouts.partials.btnTurmas')


    </div>


    <div class=" border border-dark border-3 border-top-0 align-items-center justify-content-center text-center p-2">

        <!-- Turmas -->
        <span class="fs-1">Turmas</span>
        <div class="d-flex mt-2">

            <button id="btn03" class="p-3 border-1 rounded m-1">
                <a class="text-decoration-none text-dark" href="{{ route('info1')}}">
                <i id="ic" class="fa-solid fa-laptop"></i> Informática 1
                </a>
            </button>
            <button id="btn03" class="p-3 border-1 rounded m-1">
                <a class="text-decoration-none text-dark" href="{{ route('info2')}}">
                <i id="ic" class="fa-solid fa-laptop"></i> Informática 2
                </a>
            </button>
            <button id="btn03" class="p-3 border-1 rounded m-1">
                <a class="text-decoration-none text-dark" href="{{ route('info3')}}">
                <i id="ic" class="fa-solid fa-laptop"></i> Informática 3
                </a>
            </button>
            <button id="btn03" class="p-3 border-1 rounded m-1">
                <a class="text-decoration-none text-dark" href="{{ route('info4')}}">
                <i id="ic" class="fa-solid fa-laptop"></i> Informática 4
                </a>
            </button>

        </div>
    </div>






</body>
</html>