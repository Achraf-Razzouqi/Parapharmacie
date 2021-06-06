<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


  <link rel="stylesheet" href="{{asset('css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<style type="text/css">
	.r3,.r4,.r2,.r1,img:hover
	{
		padding: 10px;

	}
	.r1
	{
		position: absolute;
		background-color: rgb(250,250,250);
		top: 350px;
		left: 160px;
		color: gray;
	}
	
	.r2
	{
		position: absolute;
		background-color:rgb(250,250,250);
		top: 350px;
		left: 160px;
		color: gray;
	}
	.r3
	{
		position: absolute;
		background-color: white;
		top: 350px;
		left: 160px;
		color: gray;
	}
	.r4
	{
		position: absolute;
		background-color: white;
		top: 350px;
		left: 160px;
		color: gray;

	}

</style>

</head>


<body>
  <form action="{{ route('shop.show') }}" method="GET" >
    @csrf

    <?php
    if(Auth::user()==null)
           {
             $count =DB::table('paniers')->count();
           }
           else 
           {
             $idU =Auth::user()->id;
             $count = DB::table('paniers')->where('idClient','=',$idU )
       ->count();
       $cal=DB::table('commandes')->where('idClient','=',$idU )
       ->count();         
           }
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
              <img src="{{asset('2761d933-e79c-4ee0-acfd-86e440ca68aa.jpg')}}" style="width: 90px;">
            </div>
          </div>
         
          <div class="icons">
            
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number"><?php echo $count ?></span>
            </a>
            <ul class="navbar-nav ml-auto">
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
                @foreach ($categories as $categorie)
                    <a class="dropdown-item" href="{{url('searchCat',$categorie->id)}}">{{ucwords($categorie->nom)}}</a>
                   
                    @endforeach</ul>

                <li><a href="{{url('/shop')}}"> Liste Produits</a></li>

                <li><a href="{{url('/commandes')}}"> Mes Commandes</a></li>
                <li><a href="{{url('/contact')}}"> Contact</a></li>
                
              </ul>
            </li>
           
          </ul></li></li></ul>
        </nav>
      </div>
</div>
   

    <div class="site-section">
      <div class="container">
        
        
	
		<center >
            <h1 class="mb-3 bread">Acheter les articles</h1>
         </center><br><br>

    <section class="ftco-section ftco-no-pb contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
            @foreach ($produits as $produit)
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
               
              
                        <h3 class='mb-4'> {{$produit->nom }} </h3>
                <img src="{{url('images',$produit->img)}}" style='width: 105%; '' class='imag'> 
                    <span class='r1'>{{$produit->prix}} MAD</span><br>
	            <input type='submit' class='btn btn-primary' value='acheter' name='p1' >
              
                
                
               


          		
	          </div>
          </div>  @endforeach
         
         
        </div>
      </div>
      <br><br>
    			
     </section></div></div></div>
      

<!--jame3iya 3ama t2ssissiya
jame3iya 3omomiya
jame3iya 3omomiya issetitna2iya -->



  


<div style="background-color: rgb(250,250,250);">
	<center><img src="{{asset('2761d933-e79c-4ee0-acfd-86e440ca68aa.jpg')}}" style="width: 90px;"></center>

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



    