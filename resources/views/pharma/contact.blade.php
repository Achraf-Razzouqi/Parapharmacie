<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>
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

<?php
use App\categories;
$categories=categories::all();
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
        }?>


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

 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Get In Touch</h2>
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe> --}}

          </div>
          <div class="col-md-12">
    
            <form action="#" method="post">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Subject </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>
    
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>




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