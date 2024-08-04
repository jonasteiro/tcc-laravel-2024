@include('layouts.partials.essentials')
<body id="body">
    @include('layouts.partials.navbarlogged')


    <div class="d-flex text-center border border-dark border-3 border-top-0  ">

        <div class="border border-dark border-2 m-3 box01 p-2 fs-1" id="ic"> <i class="fa-solid fa-laptop"></i> Informática 1</div>
        
        @include('layouts.partials.btnTurmas')


    </div>


    <div class="alunos-container align-items-center justify-content-center text-center d-flex mt-2">
          <button class="aluno-card rounded m-1 p-2 text-center border border-dark border-2">
            <div class="aluno-icon">
                👤
            </div>
            <div class="aluno-info">
                <p>Nome</p>
                <p>Idade</p>
                <p>Turma</p>
            </div>
        </button>

        
          <button class="aluno-card rounded m-1 p-2 text-center border border-dark border-2">
            <div class="aluno-icon">👤</div>
            <div class="aluno-info">
                <p>Nome</p>
                <p>Idade</p>
                <p>Turma</p>
            </div>
        </button>

          <button class="aluno-card rounded m-1 p-2 text-center border border-dark border-2">
            <div class="aluno-icon">👤</div>
            <div class="aluno-info">
                <p>Nome</p>
                <p>Idade</p>
                <p>Turma</p>
            </div>
        </button>

          <button class="aluno-card rounded m-1 p-2 text-center border border-dark border-2">
            <div class="aluno-icon">👤</div>
            <div class="aluno-info">
                <p>Nome</p>
                <p>Idade</p>
                <p>Turma</p>
            </div>
        </button>

          <button class="aluno-card rounded m-1 p-2 text-center border border-dark border-2">
            <div class="aluno-icon">👤</div>
            <div class="aluno-info">
                <p>Nome</p>
                <p>Idade</p>
                <p>Turma</p>
            </div>
        </button>

          <button class="aluno-card rounded m-1 p-2 text-center border border-dark border-2">
            <div class="aluno-icon">👤</div>
            <div class="aluno-info">
                <p>Nome</p>
                <p>Idade</p>
                <p>Turma</p>
            </div>
        </button>


    </div>







</body>
