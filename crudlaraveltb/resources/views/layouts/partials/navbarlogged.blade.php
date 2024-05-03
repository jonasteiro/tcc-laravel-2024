<!--
<header class="p-3 bg-dark text-white">
  <div class="container">
	<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
  	<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
    	<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
  	</a>
 
  	<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
    	<li><a href="/" class="nav-link px-2 text-secondary">HOME</a></li>
    	<li><a href="" class="nav-link px-2 text-white">Usuários</a></li>
    	<li><a href="" class="nav-link px-2 text-white">Produtos</a></li>
    	<li><a href="" class="nav-link px-2 text-white">Professores</a></li>
    	<li><a href="" class="nav-link px-2 text-white">Disciplinas</a></li>

    	@auth
        	@if ( auth()->user()->role == 'ROLE_USER' )
        	<li><a href="{{ route('solicitacoes.index') }}" class="nav-link px-2 text-white">Solicitações</a></li>
        	@endif
      	@endauth
  	</ul>
 
  	@auth
    	{{auth()->user()->email}}
    	<div class="text-end">
      	<a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
    	</div>
  	@endauth
	</div>
  </div>
</header>
-->
<!-- Nova Navbar-->

<div class="border border-dark border-2 border-bottom-0">
	<!--Off Canvas -->
	<nav class="navbar navbar-expand-lg ">
		<div class="container-fluid">
			<!--Logo IFPR -->
			<div class="">
				<a class="navbar-brand me-auto " href="#"> <img src="/assets/img/funcionaNmrl.png" class="img-fluid m-3 me-5 top-0 start-0" alt="logo ifpr"></a>
			</div>
		  
		  
		  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
			<div class="offcanvas-header">
			  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
			  <ul class="navbar-nav align-items-center justify-content-center flex-grow-1 pe-3">
				<li class="nav-item">
				  <a class="nav-link mx-lg-2 fs-5 " aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-lg-2 fs-5" href="{{ route('produtos.index') }}">Ocorrências</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link mx-lg-2 fs-5" href="{{ route('professores.index') }}">Enfermaria</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link mx-lg-2 fs-5" href="{{ route('disciplinas.index') }}">Mensagens</a>
				  </li>
				@auth
        			@if ( auth()->user()->role == 'ROLE_USER' )
        			<li><a href="{{ route('solicitacoes.index') }}" class="nav-link m-2 fs-5">Solicitações</a></li>
        			@endif
      			@endauth
			  </ul>
			  @auth
    			<div class="fs-5 m-3"> {{auth()->user()->email}}</div>
    			<div>
      			<a href="{{ route('logout.perform') }}" class="btn btn-outline-dark fs-5 m-2 logout">Logout</a>
    			</div>
  				@endauth
			
			  <div>

				<i class="fa-regular fa-circle-user fs-1 mx-3 mt-2"></i>
			  </div>
			</div>
		  </div>

		  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		</div>
	  </nav>


</div>

<!--Pesquisar-->
<div id="" class=" align-items-center border border-dark border-2 mb-0 p-1">
	<form class="rounded-4 " role="search">
	  <input id="" class="m-1 p-1 w-100 border border-dark rounded-4 text-center" type="search" class="form-control" placeholder="Pesquisar..." aria-label="Search">
	</form>
</div>