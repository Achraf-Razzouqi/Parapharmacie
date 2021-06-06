<html>
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
  
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
  
	  <link rel="stylesheet" href="css/style1.css">
  
  
	<link rel="stylesheet" href="css/aos.css">
  
	<link rel="stylesheet" href="css/style.css">
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <body>
		<div class="site-wrap" style="background-color: rgb(250,250,250);">
    

			<div class="site-navbar py-2" style="background-color: rgb(250,250,250);">
		
			  <div class="search-wrap" style="background-color: rgb(255,250,250);">
				<div class="container" style="background-color: rgb(255,250,250);">
				  <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
				  <form action="#" method="post">
					<input type="text" class="form-control" placeholder="Search keyword and hit enter...">
				  </form>
				</div>
			  </div>
		
			  <div class="container">
				<div class="d-flex align-items-center justify-content-between">
				  <div class="logo">
					<div class="site-logo">
					  <img src="2761d933-e79c-4ee0-acfd-86e440ca68aa.jpg" style="width: 90px;">
					</div>
				  </div>
				 
				  <div class="icons">
					
					<a href="{{url('cart')}}" class="icons-btn d-inline-block bag">
					  <span class="icon-shopping-bag"></span>
					  <span class="number"><?php echo $count ?? '' ?></span>
					</a> <ul class="navbar-nav ml-auto">
					  <!-- Authentication Links -->
					  @guest
						  <li class="nav-item">
							  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						  </li>
						  @if (Route::has('register'))
							  <li class="nav-item">
								  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							  </li>
						  @endif
					  @else
						  <li class="nav-item dropdown">
							  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								  {{ Auth::user()->name }} <span class="caret"></span>
							  </a>
		
							  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="{{ route('logout') }}"
									 onclick="event.preventDefault();
												   document.getElementById('logout-form').submit();">
									  {{ __('Logout') }}
								  </a>
		
								 
							  </div>
						  </li>
					  @endguest
				  </ul>
				 
		
							  
		
				  </div>
				</div>
			  </div>
		
		
		
		
		
			   <div class="main-nav d-none d-lg-block">
					<nav class="site-navigation text-right text-md-center" role="navigation">
					  <ul class="site-menu js-clone-nav d-none d-lg-block">
					  <li >
					  <a href="{{url('/home')}}">Home</a>                
							</li>
		
					  
		
						<li class="has-children">
						  <a href="#">Categorie</a>
						  <ul class="dropdown">
							<?php
							use App\categories;
							  $categories=categories::all();
							 
							?>
							@foreach ($categories as $categorie)
							<a class="dropdown-item" href="{{url('searchCat',$categorie->id)}}">{{ucwords($categorie->nom)}}</a>
						   
							@endforeach
							</ul>
		
		
		
		
							<li><a href="{{url('/shop')}}"> Liste Produits</a></li>
		
							<li><a href="{{url('/commandes')}}"> Mes Commandes</a></li>
		
							<li><a href="{{url('/contact')}}"> Contact</a></li>
							
						  </ul>
						</li>
					   
					  </ul></li></li></ul>
					</nav>
				  </div>
			</div>
			<form action="{{ route('Admin.AuthA') }}" method="post" >

	@csrf	
	<div class="float-right" >
	</div>
	

	<a href="{{url('login')}}" >Client</a>
	<a href="{{url('connF')}}" >Fournisseur</a>
	

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin') }}</div>

                <div class="card-body">
                   

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control"  name="login" required>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input  type="password" name="password" class="form-control" required>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                   	<button type="submit" class="btn btn-primary">
                                   Connecter
                                </button>
                                </div>
                            </div>
                        </div>	
</form>
</body>
</html>