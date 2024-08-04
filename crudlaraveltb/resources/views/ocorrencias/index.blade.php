<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ocorrências</title>
    @include('layouts.partials.essentials')
</head>

<body id="body">

    <!-- Navbar -->
    @include('layouts.partials.navbarlogged')

    <!-- Título da página -->
    <div class="m-4 text-center fs-1 fw-bold">
        Ocorrências
    </div>

    <!-- Seção de Botões -->
    <div class="d-flex align-items-center justify-content-center border border-dark border-2 p-2 text-center">
        <!-- Botão para emitir relatório -->
        @include('layouts.partials.btnEmitirRelat')
        <button id="emitir" class="border border-dark border-1 border rounded-2 m-1 fs-2 fw-bold" data-bs-toggle="modal" data-bs-target="#relatorio">
            Emitir Relatório <i class="fa-regular fa-clipboard ms-1"></i>
        </button>
        
        <!-- Botão para abrir modal de filtro -->
        <button id="filtrar" class="border border-dark border-1 border rounded-2 m-1 fs-2 fw-bold" data-bs-toggle="modal" data-bs-target="#filterModal">
            <i class="fa-solid fa-list me-1"></i> Filtrar
        </button>
        
        <!-- Botão para adicionar ocorrência -->
        <button id="add" class="border border-dark border-1 border rounded-2 m-1 fs-2 text-wrap fw-bold" data-bs-toggle="modal" data-bs-target="#infoModal">
            Adicionar Ocorrência <i class="fa-solid fa-plus ms-1"></i>
        </button>
    </div>

    <!-- Seção para ordenação -->
    <div class="border border-dark border-2 border-top-0">
        <!-- Link que abre o dropdown -->
        <a class="ms-1 fs-2 text-dark text-decoration-none" href="#" id="ordenarLink">Ordenar ▼</a>
    </div>

    <!-- Container para informações -->
    <div id="infoContainer">
        <!-- Retângulos de informações serão inseridos aqui -->
    </div>

    <!-- Botões adicionais -->
    @include('layouts.partials.btnOco')
    @include('layouts.partials.btnFiltro')

</body>
@include('layouts.partials.btnOrdenar')
</html>

