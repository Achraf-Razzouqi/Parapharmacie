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
          <a href="{{ url('FOURgesprod') }}" class="simple-text logo-normal">
            espace fournisseur
          </a>
        </div>
         <div class="sidebar-wrapper">
          <ul class="nav">    
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('FOURgesprod') }}">
                <i class="material-icons">grade</i>
                <p>Gestion des produits</p>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('FOURgescat') }}">
                <i class="material-icons">view_module</i>
                <p>Gestion des categoies</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('FOURmod',session('data')['id']) }}">
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
                <a href="{{url('/dec')}}" class="nav-link" href="  " id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                      <h4 class="card-title">Ajouter une categorie</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body">

                  <form action="{{ url('FOURgescat')}}" method="post">
                    {{ csrf_field()}}
                    <div class="form-group">
                      <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter le nom de la categorie">
                    </div>
                    <center><button type="submit" class="btn btn-primary">Ajouter</button></center>
                  </form>

                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Liste des categories</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Date</th>
                      <th>Action</th>
                    </thead>
                      
                    <tbody>
                          @foreach($listcat as $cat)
                            <tr>
                              <td>{{$cat->id}}</td>
                              <td>{{$cat->nom}}</td>
                              <td>{{$cat->created_at}}</td>
                              <td>
                                   <a href="{{url('FOURgescat/'.$cat->id.'/edit')}}" class="btn btn-default">editer</a>
                                 
                                
                              </td>
                            </tr>


                          @endforeach
    
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

		</div>

    </div>


  
  </body>
</html>
