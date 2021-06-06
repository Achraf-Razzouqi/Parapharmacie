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

 
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


  <link rel="stylesheet" href="{{asset('css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#a:focus
  	{
  		
  	}
  </style>


</head>

<body >

<form action="{{route('shop.Affiche', ['id']) }}"  method="get">
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

  {{-- <span class='r1'>{{$produits->idProduit}} MAD</span><br> --}}
  
{{-- /<input type="text" name="nom" value="{{$produits}}" style="width: 70%;"> --}}

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
            
            <a href="{{url('cart')}}" class="icons-btn d-inline-block bag">
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

    @foreach ($produits as $produit)
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
             
              <img src="{{url('images',$produit->img)}}"  class="img-fluid p-5">
              
            </div>
          </div>
          <div class="col-md-6">
          <h2 class="text-black">{{$produit->nom}}</h2>
          <p>{{$produit->description}}</p>
            

          <p><del>$95.00</del>  <strong class="text-primary h4">{{$produit->prix}}MAD</strong></p>

            
          <form action="{{route('cart.store')}}" method="POST">
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 220px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" placeholder=""
                  aria-label="Example text with button addon" aria-describedby="button-addon1" name="qte">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>
    
            </div>
          
            @csrf
          <p><input type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add To Cart"></p>
          
          <input type="hidden" name="idProduit" value=" {{$produit->id}}">
          <input type="hidden" name="nom" value=" {{$produit->nom}}">
          <input type="hidden" name="prix" value=" {{$produit->prix}}">
          <input type="hidden" name="img" value=" {{$produit->img}}"></form>
         
            <div class="mt-5">
              <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Ordering Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Specifications</a>
                </li>
            
              </ul>
              @if (session('success'))
              <div class="alert alert-success">

                {{session('success')}}
                    </div>
                  
              @endif
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th>Material</th>
                      <th>Description</th>
                      <th>Packaging</th>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 BT</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>144/CS</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 EA</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            
                  <table class="table custom-table">
            
                    <tbody>
                      <tr>
                        <td>HPIS CODE</td>
                        <td class="bg-light">999_200_40_0</td>
                      </tr>
                      <tr>
                        <td>HEALTHCARE PROVIDERS ONLY</td>
                        <td class="bg-light">No</td>
                      </tr>
                      <tr>
                        <td>LATEX FREE</td>
                        <td class="bg-light">Yes, No</td>
                      </tr>
                      <tr>
                        <td>MEDICATION ROUTE</td>
                        <td class="bg-light">Topical</td>
                      </tr>
                    </tbody>
                  </table>
            
                </div>
            
              </div>
            </div>

    
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <<div style="background-color: rgb(250,250,250);">
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
        </footer></div></form>

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