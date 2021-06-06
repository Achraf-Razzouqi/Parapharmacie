<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      ESPACE ADMIN
    </title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
    />
    <link
      href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}"
      rel="stylesheet"
    />
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
  </head>

  <body class="">
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="purple"
        data-background-color="white"
        data-image="../assets/img/sidebar-1.jpg"
      >
      <div class="logo">
          <a href="{{ url('gescom') }}" class="simple-text logo-normal">
            espace admin
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('gescom') }}">
                <i class="material-icons">shopping_basket</i>
                <p>Gestion des commandes</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('gesprod') }}">
                <i class="material-icons">grade</i>
                <p>Gestion des produits</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('gescli') }}">
                <i class="material-icons">perm_identity</i>
                <p>Gestion des clients</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('gesfour') }}">
                <i class="material-icons">local_shipping</i>
                <p>Gestion des fournisseurs</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('gescat') }}">
                <i class="material-icons">view_module</i>
                <p>Gestion des categoies</p>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('modadm',session('da')['id']) }}">
                <i class="material-icons">settings</i>
                <p>Modifier info </p>
              </a>
            </li>
            <li class="nav-item active-pro">
                <div class="nav-link" class="copyright center">
             RAZZOUQI Achraf &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
        
            </div>
            </li>
          </ul>
        </div>
      </div>
		

		
		 <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
             
             
              <li class="nav-item dropdown">
                <a href="{{url('/decA')}}" class="nav-link" href="  " id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  DECONNEXION<i class="material-icons">exit_to_app</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
			


			  <br><br><br><br><br>
        <div style="margin-right:15px; margin-left:15px;">
        <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <h4 class="card-title">Modifier info</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body">

                  <form action="{{ url('modadm/'.$Admin->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field()}}

                    <div class="form-group">
                      <input type="text" name="login" value="{{$Admin->login}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter le nom de la categorie">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" value="{{$Admin->password}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter le nom de la categorie">
                    </div>
                    <center><button type="submit" class="btn btn-primary">Modifier</button></center>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
    


      </div>

          

    </div>


  
  </body>
</html>
