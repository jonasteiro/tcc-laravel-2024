<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informática</title>
    <script src="https://kit.fontawesome.com/ad3460fbc5.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    @include('layouts.partials.navbarlogged')


    <div class="d-flex text-center border border-dark border-3 border-top-0 ">

        <div class="border border-dark border-2 m-3 box01 p-2 fs-1 rounded" id="ic"> <i class="fa-solid fa-laptop"></i> Informática</div>
        
        <!--Botões -->
        <div class=" m-3 box02 p-2"> 
            
            <button id="btn02" class="p-3  border-1 rounded m-2">Relatórios</button>
            
            <button id="btn02" class="p-3  border-1 rounded m-2">Dependências</button>

        <button id="btn02" class="p-3  border-1 rounded m-2">Estatísticas</button>
    
        </div>


    </div>


    <div class=" border border-dark border-3 border-top-0 align-items-center justify-content-center text-center p-2">

        <!-- Turmas -->
        <span class="fs-1 ">Turmas</span>
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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2 rounded.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>
</html>