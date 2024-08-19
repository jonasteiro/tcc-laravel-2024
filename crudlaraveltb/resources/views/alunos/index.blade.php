@extends('layouts.partials.essentials')
@include('layouts.partials.navbarlogged')

<body id="body">
    <div class="position-relative m-3 border border-dark border-3 rounded p-5 ">
        <div class="fs-1 mb-3">Lista de todos os alunos</div>
        <div> 
            <button class="position-absolute top-0 end-0 mx-3 rounded" id="AddALunos" data-bs-toggle="modal" data-bs-target="#alunoModal">Adicionar Alunos</button>
        </div>
        <div class="alunos-container d-flex">
            <!-- Container para adicionar o novo conteúdo -->
            <div id="alunoContainer" class="mt-4 d-flex flex-wrap mx-2 gap-2">
                @foreach($alunos as $aluno)
                    <div class="aluno-card rounded text-center border border-dark border-2 excesso" data-id="{{ $aluno->id }}">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-sm btn-warning m-2" onclick="editAluno({{ $aluno->id }})">Editar</button>
                        </div>
                        <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
                        <p><strong>CPF:</strong> {{ $aluno->cpf }}</p>
                        <p><strong>Nome dos Pais:</strong> {{ $aluno->nome_pais }}</p>
                        <p><strong>Telefone:</strong> {{ $aluno->telefone }}</p>
                        <p><strong>Telefone dos Pais:</strong> {{ $aluno->telefone_pais }}</p>
                        <p><strong>Email:</strong> {{ $aluno->email }}</p>
                        <p><strong>Email dos Pais:</strong> {{ $aluno->email_pais }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

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

    @include('layouts.partials.btnAlunos')
</body>
