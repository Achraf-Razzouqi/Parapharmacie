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
  

</head>

<body >
  <form action="{{route('panier.showP')}}" method="GET">
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



<div class="container" style="background-color: white;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <form action="{{route('Cart.destroy' , ['id'])}}" method="get">
                @csrf
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $total=0;
                  $red=0;
                  ?>
                  @foreach ($data as $item)
                 
          
                 <?php 
                
                    $total+=$item->prix*$item->qte;
                     
                      
                 ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{url('images',$item->img)}}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$item->nom}}</h2>
                    </td>
                    <td>{{$item->prix}}</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        
                      {{$item->qte}}
                         
                        
                      </div>
    
                    </td>
                    
                    <td>
                        <a href="{{url('/destroy',$item->idPanier)}}" class="btn btn-primary height-auto">X </a>
                    </td>
                  </tr>  
               
    
                  
                  @endforeach
                </tbody>
                
              </table>
            </div>
          </form>
        </div>
    
        <div class="row">
          <div class="col-md-6">
            
            <div class="row">
              <div class="col-md-12">
                <br><br>
                <?php
                  $a="en livraison";
                  $b="en ligne";
                ?>
                 <?php
                  if(Auth::user()!=null)
        {
                 $l=DB::table('users')->where('type','like','Proffesionnel')
                 ->where('id','=',$idU  )->count();
               // dd($l);
               if($l>0)
               {
                  $red=$total-$total*0.15;
               }
               else 
               {
                  if($cal>2)
                      {
                         $red+=$total-$total*0.1;
                      }
                      else 
                      {
                        $red=$total;
                      }
               }
              }
              else {
                $red=$total;
              }
                 ?>
                <label class="text-black h4" for="coupon">Type Paiement:</label><br><br>
                <?php   if(Auth::user()!=null)
                {?>
                @if ($l == 0)
                
                 @if ($total>=600)
                    <a href="{{url('thankyou',$a)}}" class="btn btn-primary "  name="buy">En livraison</a>

                     @endif
                    
                @else
                <a href="{{url('thankyou',$a)}}" class="btn btn-primary "  name="buy">En livraison</a>

                @endif
                <?php } ?>
                <a href="{{url('thankyou',$b)}}" class="btn btn-primary "  name="buy">En Ligne</a>

              </div>
              <div class="col-md-8 mb-3 mb-md-0">
              </div>
             
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">{{$total}}MAD</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total with reduction</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">{{$red}} MAD</strong>
                  </div>
                </div>
                @csrf
                <div class="row">
                  <div class="col-md-12">
                   
                    
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>


{{-- {{$_POST['']}} --}}
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

<?php


?>