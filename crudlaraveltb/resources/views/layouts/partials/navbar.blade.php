<!--
<header class="p-3 bg-dark text-white">
  <div class="container">
	<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
  	<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
    	<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
  	</a>
 
  	<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
    	<li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
    	<li><a href="#" class="nav-link px-2 text-white">Funcionalidades</a></li>
    	<li><a href="#" class="nav-link px-2 text-white">Ajuda</a></li>
  	</ul>
 
  	@guest
    	<div class="text-end">
      	<a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
      	<a href="{{ route('register.perform') }}" class="btn btn-warning">Cadastro</a>
    	</div>
  	@endguest
	</div>
  </div>
</header>
-->

<div>
	<!--Off Canvas -->
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container-fluid">
			<!--Logo IFPR -->
		  <a class="navbar-brand me-auto" href="#"> <img src="/img/ifpr.png" class="img-fuild" alt="logo ifpr"></a>
		  
		  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
			<div class="offcanvas-header">
			  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
			  <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
				<li class="nav-item">
				  <a class="nav-link mx-lg-2 active " aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link mx-lg-2" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-lg-2" href="#">Link</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link mx-lg-2" href="#">Link</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link mx-lg-2" href="#">Link</a>
				  </li>
			  </ul>
			</div>
		  </div>

		  <a href="#" class="login-button">Login</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		</div>
	  </nav>


</div>