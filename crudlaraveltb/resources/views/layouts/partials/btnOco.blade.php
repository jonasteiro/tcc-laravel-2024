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
