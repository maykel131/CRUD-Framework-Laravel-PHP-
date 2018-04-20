<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  {!!Html::style('bootstrap/bootstrap.min.css')!!}
  {!!Html::style('datatable/bootstrap.css')!!}
  {!!Html::style('datatable/dataTables.bootstrap4.min.css')!!}
  {!!Html::style('alertify/css/alertify.css')!!}
  {!!Html::style('alertify/css/themes/bootstrap.css')!!}
  {!!Html::style('fontawesome/css/font-awesome.css')!!}


  {!!Html::script('jquery.min.js')!!}
  {!!Html::script('bootstrap/popper.min.js')!!}
  {!!Html::script('bootstrap/bootstrap.min.js')!!}
  {!!Html::script('datatable/jquery.dataTables.min.js')!!}
  {!!Html::script('datatable/dataTables.bootstrap4.min.js')!!}
  {!!Html::script('alertify/alertify.js')!!}

	
</head>

  <body>
    <header>
      <div class="container">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </header>
    <div class="container">
            @yield('content')
    </div>

 


    <section>
    </section>

    <footer>
    </footer>

  
  </body>
</html>