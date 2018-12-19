<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>EatNow</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Oswald:400,700|PT+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <header id="main-header">
    <div class="barra clearfix">
      <div class="grid-1 ocultar">
      <form action="platos.php" method="post">
        <div id="search-wrapper">
          <input type="search" name="nombre_alimento" id="search" placeholder="Buscar" />
          <i class="fa fa-search"></i>
        </div>
        en
        <div id="search-wrapper">
          <input type="search" name="nombre_ciudad" id="search" placeholder="España,Madrid" />
          <i class="fa fa-map-marker"></i>
        </div>
        <input type="submit" name="buscar" style="display: none" />
        </form>
      </div>
      <div class="grid-3">
        <div class="elemento">

        </div>
        <div class="elemento ocultar ">
          <div class="button">
            <i class="fas fa-comment"></i>
            Mensajes
          </div>
        </div>
        <div class="elemento">
          <div class="button">
            <a href="registro.php">Registrate</a>
          </div>
        </div>
        <div class="elemento">
          <div class="button">
            <a href="index.php">Inicia sesión</a>
          </div>
        </div>
        <div class="elemento ocultar">

          <a href="mis_platos.php">
            <div class="button">
              <i class="fas fa-plus"></i>
              Subir plato
            </div>
          </a>

        </div>
  </header>
  <header  class = "ocultar" id="sub-header">
    <div class="barra-lateral">
      <a href="perfil.php">
        <div class="parte-lateral">
          <div class="subparte"><i class="fas fa-user"></i></div>
          <p>Perfil</p>
        </div>
      </a>
      <a href="mis_platos.php">
        <div class="parte-lateral">
          <div class="subparte"><i class="fas fa-list-ul"></i></div>
          <p>Mis Platos</p>
        </div>
      </a>
      <div class="parte-lateral">
        <div class="subparte"><i class="fas fa-utensils"></i></div>
        <p>Platos</p>
      </div>
      <div class="parte-lateral">
        <div class="subparte"><i class="fas fa-comment"></i></div>
        <p>Mensajes</p>
      </div>
    </div>
  </header>
  <!--main-header-->
  <div id="contenido">
    
  
