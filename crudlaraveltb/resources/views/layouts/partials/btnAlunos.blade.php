@include('layouts.partials.essentials')

<!-- Modal -->
<div class="modal fade" id="alunoModal" tabindex="-1" aria-labelledby="alunoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alunoModalLabel">Formulário de Cadastro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="infoForm">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf">
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome_pais" placeholder="Nome dos Pais" name="nome_pais">
                        <label for="nome_pais">Nome dos Pais</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="telefone" placeholder="Telefone" name="telefone">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="telefone_pais" placeholder="Telefone dos Pais" name="telefone_pais">
                        <label for="telefone_pais">Telefone dos Pais</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email_pais" placeholder="Email dos Pais" name="email_pais">
                        <label for="email_pais">Email dos Pais</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Container para adicionar o novo conteúdo -->
<div id="alunoContainer" class="mt-4"></div>

<script>
document.getElementById('infoForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Obtém os valores do formulário
    const nome = document.getElementById('nome').value;
    const cpf = document.getElementById('cpf').value;
    const nome_pais = document.getElementById('nome_pais').value;
    const telefone = document.getElementById('telefone').value;
    const telefone_pais = document.getElementById('telefone_pais').value;
    const email = document.getElementById('email').value;
    const email_pais = document.getElementById('email_pais').value;

    // Cria o novo retângulo de informação
    const infoBox = document.createElement('div');
    infoBox.className = 'aluno-card rounded text-center border border-dark border-2 excesso';
    infoBox.innerHTML = `
        <p><strong>Nome:</strong> ${nome}</p>
        <p><strong>CPF:</strong> ${cpf}</p>
        <p><strong>Nome dos Pais:</strong> ${nome_pais}</p>
        <p><strong>Telefone:</strong> ${telefone}</p>
        <p><strong>Telefone dos Pais:</strong> ${telefone_pais}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Email dos Pais:</strong> ${email_pais}</p>
    `;

    // Adiciona o novo retângulo ao container
    document.getElementById('alunoContainer').appendChild(infoBox);

    // Fecha o modal de maneira mais direta
    const alunoModal = document.getElementById('alunoModal');
    const modalInstance = bootstrap.Modal.getInstance(alunoModal);
    modalInstance.hide();

    // Remove o backdrop manualmente
    alunoModal.addEventListener('hidden.bs.modal', function () {
        const backdrops = document.querySelectorAll('.modal-backdrop');
        backdrops.forEach(backdrop => backdrop.remove());
        document.body.classList.remove('modal-open');
        document.body.style.removeProperty('padding-right');
    });

    // Limpa o formulário
    document.getElementById('infoForm').reset();
});
</script>
