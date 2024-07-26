
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <title>Ocorrências</title>
    <script src="https://kit.fontawesome.com/ad3460fbc5.js" crossorigin="anonymous"></script>
</head>

<body id="body">

    @include('layouts.partials.navbarlogged')
    <!-- Texto escrito Ocorrências -->
    <div class=" m-4 text-center  fs-1 fw-bold ">Ocorrências</div>

    <!-- Botões abaixo do texto de ocorrências -->
    <div class="d-flex align-items-center justify-content-center border border-dark border-2 p-2 text-center">  

        

        <button id="emitir" class=" border border-dark border-1 border rounded-2 m-1 fs-2 fw-bold">  Emitir Relatório <i class="fa-regular fa-clipboard ms-1"></i> </button>

        <button id="filtrar" class="border border-dark border-1 border rounded-2 m-1 fs-2 fw-bold"> <i class="fa-solid fa-list me-1"></i> Filtrar</button>

        <button id="add" class=" border border-dark border-1 border rounded-2 m-1 fs-2 text-wrap fw-bold" data-bs-toggle="modal" data-bs-target="#infoModal"> Adicionar Ocorrência <i class="fa-solid fa-plus ms-1"></i></button>

    </div>


    <div class="border border-dark border-2 border-top-0">

        <div class="ms-1 fs-2">Ordenar <i class="fa-solid fa-chevron-down"></i></div>

        

    </div>

    <div id="infoContainer">
        <!-- Retângulos de informações serão inseridos aqui -->

    </div>


    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Adicionar Informações</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="infoForm">
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="participants">Pessoas que participaram</label>
                            <input type="text" class="form-control" id="participants" name="participants" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Data</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="Concluído">Concluído</option>
                                <option value="Em progresso">Em progresso</option>
                                <option value="Pendente">Pendente</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>







<script>
    document.getElementById('infoForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Obtém os valores do formulário
    const title = document.getElementById('title').value;
    const description = document.getElementById('description').value;
    const participants = document.getElementById('participants').value;
    const date = document.getElementById('date').value;
    const status = document.getElementById('status').value;

    // Cria o novo retângulo de informação
    const infoBox = document.createElement('button');
    infoBox.className = 'info-box expand-btn d-flex border border-dark border-1 border rounded-2 my-2 w-100 fs-3 text-wrap fw-bold  align-items-center justify-content-center text-center';
    infoBox.innerHTML = `
    
        <span>${title}</span>
        <span><strong>Pessoas que participaram:</strong> ${participants}</span>
        <span><strong>Data:</strong> ${date}</span>
        <span><strong>Status:</strong> ${status}</span>
        <span class="description">${description}</span>
        <button class="btn expand-btn"><i class=" test fa-solid fa-maximize ms-3 "></i></button>
    
    `;

    // Adiciona o evento de clique ao botão de ampliar
    infoBox.querySelector('.expand-btn').addEventListener('click', function() {
        infoBox.classList.toggle('expanded');
    });

    // Adiciona o novo retângulo ao container
    document.getElementById('infoContainer').appendChild(infoBox);

    // Fecha o modal
    $('#infoModal').modal('hide');

    // Limpa o formulário
    document.getElementById('infoForm').reset();
});
</script>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
