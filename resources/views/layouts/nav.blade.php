
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-sm-9" id="header-email">			
					<i class="fa fa-envelope"></i>
					<span>dmarkovic1977@gmail.com</span>
			</div>

      @if(auth()->check())


       <a href="/logout" class="nav-link ml-auto" >{{ auth()->user()->name }}</a>

			@else

			<div class="col-sm-3 float-md-right" id="user-form-right">
				<a href="#" id="login-register-nav" class="prijava-registracija" ><i class="fa fa-user-circle"></i><span class="pl-2 mr-0">Prijavljivanje/Registracija</span></a>
			</div>

			@endif
	
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-4 mt-5 mt-4">
				<a href="" class="fb"><i class="fa fa-facebook-f mr-3"></i></a>
				<a href="" class="i"><i class="fa fa-instagram"></i></a>
			</div>
			<div class="col-3 ml-5" id="logo-betica">
				<img src="{{ asset('images/logo-betica.png') }}" class="img-fluid">
			</div>
			<div class="col-4 ml-3">
				<div class="float-right mt-5">
					<a href="#" class="search-site"><i class="fa fa-search" id="toggle-search-line"></i></a>
				</div>
									<!-- Search form -->
					<form class="md-form form-sm active-pink active-pink-2 mt-5">
					  <input class="form-control form-control-sm ml-5 w-75" type="text" placeholder="Pretraga"
					    aria-label="Search" id="show-hide-line">
					</form>
			</div>
		</div>
	</div>
	<nav id="nav">
		<div class="container">
			<div class="row pb-0 mb-0 menu" id="menu">
				<ul class="mb-0">
					<li><a href="#" class="menu-item ">Kontakt</a></li>
					<li><a href="#" class="menu-item ">Galerija</a></li>
					<li id="active-dd"><a href="#" class="menu-item ">Usluge</a>
								<div class="sub-menu" id="sub-menu">
									<ul>
										@foreach($category as $categories)

										<li><a href="#">{{$categories->name}}</a></li>

										@endforeach
									</ul>
								</div>
					</li>
					<li><a href="#" class="menu-item ">O nama</a></li>
					<li><a href="#" class="menu-item active">Početna</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>	