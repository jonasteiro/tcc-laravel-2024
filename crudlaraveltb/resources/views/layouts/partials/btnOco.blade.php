<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Adicionar/Editar Ocorrência</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <label for="participants">Participantes</label>
                        <input type="text" class="form-control" id="participants" name="participants" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Data</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="0">Concluído</option>
                            <option value="1">Em progresso</option>
                            <option value="2">Pendente</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    
//nnsauhnduansduianduiansduiasn

document.getElementById('infoForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const formData = new FormData(this);
        const ocorrenciaId = this.getAttribute('data-id'); // Obtém o ID do ocorrencia do atributo data-id
    
        const url = ocorrenciaId ? `/ocorrencias/${ocorrenciaId}` : '{{ route('ocorrencias.store') }}'; // URL para PUT ou POST
        const method = ocorrenciaId ? 'PUT' : 'POST'; // Método para PUT ou POST
    
        fetch(url, {
            method: method,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
            title: formData.get('title'),
            description: formData.get('description'),
            participants: formData.get('participants'),
            date: formData.get('date'),
            status: formData.get('status')
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.message === 'ocorrencia salvo com sucesso!' || data.message === 'ocorrencia atualizado com sucesso!') {
                if (ocorrenciaId) {
                    updateOcorrencia(ocorrenciaId, {
                    title: formData.get('title'),
                    description: formData.get('description'),
                    participants: formData.get('participants'),
                    date: formData.get('date'),
                    status: formData.get('status')
                    });
                } else {
                    renderOcorrencia({
                    id: data.id,
                    title: formData.get('title'),
                    description: formData.get('description'),
                    participants: formData.get('participants'),
                    date: formData.get('date'),
                    status: formData.get('status')
                    });
                }
    
                const infoModal = bootstrap.Modal.getInstance(document.getElementById('infoModal'));
                infoModal.hide();
                document.getElementById('infoForm').reset()
                document.getElementById('infoForm').removeAttribute('data-id');
                document.querySelector('.btn-danger')?.remove(); // Remove o botão de excluir se existir
            }
        })
        document.getElementById('infoForm').reset()
        .catch(error => console.error('Erro:', error));
    });

    function renderOcorrencia(ocorrencia) {
        const infoBox = document.createElement('div');
        infoBox.className = 'ocorrencia-card rounded text-center border border-dark border-2 excesso';
        infoBox.setAttribute('data-id', ocorrencia.id);
    
        infoBox.innerHTML = `
            <div class="d-flex justify-content-end">
                <button class="btn btn-sm btn-warning m-2" onclick="editOcorrencia(${ocorrencia.id})">Editar</button>
            </div>
            <p><strong>Nome:</strong> ${ocorrencia.title}</p>
            <p><strong>CPF:</strong> ${ocorrencia.description}</p>
            <p><strong>Nome dos Pais:</strong> ${ocorrencia.participants}</p>
            <p><strong>Telefone:</strong> ${ocorrencia.date}</p>
            <p><strong>Telefone dos Pais:</strong> ${ocorrencia.status}</p>
        `;
        
        document.getElementById('ocorrenciaContainer').appendChild(infoBox);
    }

    function updateOcorrencia(id, ocorrencia) {
        const card = document.querySelector(`[data-id='${id}']`);
        if (card) {
            card.innerHTML = `
                <div class="d-flex justify-content-end">
                    <button class="btn btn-sm btn-warning m-2" onclick="editOcorrencia(${id})">Editar</button>
                </div>
                <p><strong>Nome:</strong> ${ocorrencia.title}</p>
                <p><strong>CPF:</strong> ${ocorrencia.description}</p>
                <p><strong>Nome dos Pais:</strong> ${ocorrencia.participants}</p>
                <p><strong>Telefone:</strong> ${ocorrencia.date}</p>
                <p><strong>Telefone dos Pais:</strong> ${ocorrencia.status}</p>
            `;
        }
    }

    function editOcorrencia(id) {
        fetch(`/ocorrencias/${id}/edit`)
            .then(response => response.json())
            .then(ocorrencia => {
                document.getElementById('title').value = ocorrencia.title;
                document.getElementById('description').value = ocorrencia.description;
                document.getElementById('participants').value = ocorrencia.participants;
                document.getElementById('date').value = ocorrencia.date;
                document.getElementById('status').value = ocorrencia.status;
    
                let deleteButton = document.querySelector('.btn-danger');
                if (!deleteButton) {
                    deleteButton = `<button type="button" class="btn btn-danger" onclick="deleteOcorrencia(${id})">Excluir</button>`;
                    document.getElementById('infoForm').insertAdjacentHTML('beforeend', deleteButton);
                }
    
                document.getElementById('infoForm').setAttribute('data-id', id);
    
                const infoModal = new bootstrap.Modal(document.getElementById('infoModal'));
                infoModal.show();
            })
            .catch(error => console.error('Erro:', error));
    }

    function deleteOcorrencia(id) {
        if (confirm('Tem certeza que deseja excluir este ocorrência?')) {
            fetch(`/ocorrencias/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.message === 'ocorrência excluído com sucesso!') {
                    const card = document.querySelector(`[data-id='${id}']`);
                    if (card) {
                        card.remove();
                    }
                    const infoModal = bootstrap.Modal.getInstance(document.getElementById('infoModal'));
                    infoModal.hide();
                }
            })
            .catch(error => console.error('Erro:', error));
        }
    }

    document.getElementById('infoModal').addEventListener('hidden.bs.modal', function () {
        const backdrops = document.querySelectorAll('.modal-backdrop');
        backdrops.forEach(backdrop => backdrop.remove());
        document.body.classList.remove('modal-open');
        document.body.style.removeProperty('padding-right');
    });
</script>


