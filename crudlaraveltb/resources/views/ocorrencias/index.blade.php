
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" > 
    <title>Ocorrências</title>
</head>
<body>

        @include('layouts.partials.navbarlogged')
        <!-- Texto escrito Ocorrências -->
        <div class="border border-dark border-2 text-center border-top-0 border-bottom-0 fs-2 fw-bold">Ocorrências</div>
        
        <!-- Botões abaixo do texto de ocorrências -->
        <div class="d-flex align-items-center justify-content-center border border-dark border-2 p-2 text-center">

            <div id="emitir" class="border border-dark border-1 border rounded-2 m-1 fw-bold " >  Emitir <br> Relatório</div>

            <div id="pesquisar" class="border border-dark border-1 border rounded-2 m-1 fw-bold "> Filtrar</div>

            <div id="relatorio"class="border border-dark border-1 border rounded-2 m-1 fw-bold">Adicionar <br> Relatório</div>
        </div>

        <div class="border border-dark border-2 border-top-0">

            <div class="ms-1">Ordenar</div>

            
            <div class="border border-dark border-1 border rounded-2 m-1 p-1 ps-3">Titulo Ocorrência</div>


        </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>


