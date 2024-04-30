

<div class="border border-dark border-1 border-bottom-0">
	<!--Off Canvas -->
	<nav class="navbar navbar-expand-lg ">
		<div class="container-fluid">
			<!--Logo IFPR -->
			<div class="">
				<a class="navbar-brand me-auto " href="#"> <img src="/assets/img/funcionaNmrl.png" class="img-fluid" alt="logo ifpr"></a>
			</div>
		  
		  
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

		  @guest
		  <a href="{{ route('login.perform') }}" class="login-button ms-auto me-1">Entrar</a>
		  @endguest

		  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		</div>
	  </nav>


</div>

<!--Pesquisar-->
<div class="d-flex align-items-center border border-dark border-1 mb-0 ">
	<form class="w-100% rounded-4 " role="search">
	  <input class="w-100%" type="search" class="form-control" placeholder="Search..." aria-label="Search">
	</form>
  </div>