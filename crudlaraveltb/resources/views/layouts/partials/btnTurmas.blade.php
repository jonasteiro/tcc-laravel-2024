 <!--Botões -->
 <div class=" m-3 box02 p-2"> 
            
    @include('layouts.partials.btnEmitirRelat')
    <button id="btn02" class="p-3  border-1 rounded m-2" data-bs-toggle="modal" data-bs-target="#relatorio">Relatórios</button>
    
    <a href="{{ route('dependencias')}}"> <button id="btn02" class="p-3  border-1 rounded m-2">Dependências</button></a>

<button id="btn02" class="p-3  border-1 rounded m-2">Estatísticas</button>

</div>

