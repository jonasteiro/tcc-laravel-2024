@extends('layouts.partials.essentials')
<!-- Navbar -->
@include('layouts.partials.navbarlogged')

  <body id="body">
    

    <div class="position-relative m-3 border border-dark border-3 rounded p-5 " >

        <div class="fs-1 mb-3">Lista de todos os alunos  </div>

        <div> <button class="position-absolute top-0 end-0 mx-3 rounded" id="AddALunos" data-bs-toggle="modal" data-bs-target="#alunoModal">Adicionar Alunos</button></div>
    
        <div class="alunos-container   d-flex ">
            
              <!-- Container para adicionar o novo conteúdo -->
              <div id="alunoContainer" class="mt-4"></div>
              
      </div>


    </div>
    <div id="alunoContainer"></div>
    @include('layouts.partials.btnAlunos')
  </body>
