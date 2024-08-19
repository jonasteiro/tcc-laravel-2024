
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Enfermaria</title>
        @include('layouts.partials.essentials')
    </head>

    <body id="body">

        @include('layouts.partials.navbarlogged')
        <!-- Texto escrito Ocorrências -->
        <div class=" m-4 text-center  fs-1 fw-bold ">Enfermaria</div>

        <!-- Botões abaixo do texto de ocorrências -->
        <div class="d-flex align-items-center justify-content-center border border-dark border-2 p-2 text-center">  

            
            @include('layouts.partials.btnEmitirRelat')
            <!-- <button id="emitir" class=" border border-dark border-1 border rounded-2 m-1 fs-2 fw-bold" data-bs-toggle="modal" data-bs-target="#relatorio">  Emitir Relatórios <i class="fa-regular fa-clipboard ms-1"></i> </button> -->
            <a href="{{route('enfermaria.pdf',['download'=>'pdf'])}}" class="btn btn-secondary btn-sm float-left">PDF</a>  

            <button id="filtrar" class="border border-dark border-1 border rounded-2 m-1 fs-2 fw-bold" data-bs-toggle="modal" data-bs-target="#filterModal"> <i class="fa-solid fa-list me-1"></i> Filtrar</button>

            <button id="add" class=" border border-dark border-1 border rounded-2 m-1 fs-2 text-wrap fw-bold" data-bs-toggle="modal" data-bs-target="#infoModal"> Adicionar Atestados <i class="fa-solid fa-plus ms-1"></i></button>

        </div>


        <div class="border border-dark border-2 border-top-0">
            <!-- Link que abre o dropdown -->
        <a class="ms-1 fs-2 text-dark text-decoration-none" href="#" id="ordenarLink">Ordenar ▼</a>
        </div>

            

        </div>

        <div id="infoContainer" >
            <!-- Retângulos de informações serão inseridos aqui -->
            
        </div>

        @include('layouts.partials.btnOco')





    </body>
    @include('layouts.partials.btnFiltro')
    @include('layouts.partials.btnOrdenar')
    </html>
