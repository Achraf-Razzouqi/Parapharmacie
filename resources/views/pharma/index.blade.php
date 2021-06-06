<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{-- <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet"> --}}

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#a:focus
  	{
  		
  	}
  </style>


</head>

<body style="background-color: rgb(250,250,250);">
<form action="{{route('categories.showIndex')}}" method="GET">
  @csrf<?php
 // use Auth;if($products->isEmpty())
 if(Auth::user()==null)
        {
          $count =DB::table('paniers')->count();
        }
        else 
        {
          $idU=Auth::user()->id;
          $count = DB::table('paniers')->where('idClient','=',$idU)
    ->count();
        }
        // echo $_SESSION['auth']."ndiuuiuyuyug";
    ?>
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

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
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
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="a1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="a1.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="a1.jpg" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="a2.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    
  </div>



  <br>
  <br>






    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h3 style="color: white;">Des produits <br> à prix réduits</h3>
                
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h3 style="color: white;">Livraison en <br> moins 24h</h3>

              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
               <h3 style="color: white;">Un paiement en  <br>ligne sécurisé </h3>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="shop-single.html"> <img src="images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Bioderma</a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.html"> <img src="images/product_02.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Chanca Piedra</a></h3>
            <p class="price">$70.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.html"> <img src="images/product_03.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
            <p class="price">$120.00</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">

            <a href="shop-single.html"> <img src="images/product_04.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Cetyl Pure</a></h3>
            <p class="price"><del>45.00</del> &mdash; $20.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.html"> <img src="images/product_05.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">CLA Core</a></h3>
            <p class="price">$38.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="shop-single.html"> <img src="images/product_06.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Poo Pourri</a></h3>
            <p class="price"><del>$89</del> &mdash; $38.00</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="{{url('/shop')}}" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <a href="shop-single.html"> <img src="images/product_03.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.html"> <img src="images/product_01.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.html"> <img src="images/product_02.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.html"> <img src="images/product_04.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
</div></div>
    <section class="ftco-section ftco-no-pb contact-section" style="background-color: white;">
    	<div style="background-color: white;"><center ><h2>Contact</h2></center></div><br><br>
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">

          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Massira</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+212 5 20 20 2020</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">parapharmacie@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">parapharmacie.com</a></p>
	          </div>
          </div>
        </div>
      </div><br><br>
    </section></div></div>



<div style="background-color: rgb(250,250,250);">
	<center><img src="2761d933-e79c-4ee0-acfd-86e440ca68aa.jpg" style="width: 90px;"></center>

        <footer class="site-footer"  >
        	
        	
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Vous trouverez sur notre site les plus grandes marques de pharmacie et parapharmacie comme Bion, Avène, Nuxe, Uriage, Bioderma, Lierac, Dermagor, Vichy, La Roche Posay, Arkopharma...</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <a href="#"><span class="icon-twitter" style="font-size: 30px;"></span></a><br>
                <a href="#"><span class="icon-facebook" style="font-size: 30px;"></span></a><br>
                <a href="#"><span class="icon-instagram" style="font-size: 30px;"></span></a>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> ELMehdi Bouchachia<i class="icon-heart" aria-hidden="true"></i> 
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div></div>
    </footer></div>
</form>
<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>