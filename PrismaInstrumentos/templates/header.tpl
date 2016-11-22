<!DOCTYPE html>
<html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Prisma Instrumentos</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">
    <link rel="Shortcut Icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    {if isset($msj)}
      <div class="alert alert-{$color}" role="alert">{$msj}</div>
    {/if}
    {if (!$verif)}
    <div class="row" class="well well-lg" >
      <div  class="col-md-5 col-md-offset-2">
        <form id="login" action="index.php?action=login" class="form-inline"  method="POST">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input name="user"type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
          </div>
          <button type="submit" class="alert alert-success" name="login">Ingresar</button>
        </form>
      </div>

      <div class="col-md-5">
        <form class="form-inline" action="index.php?action=registrarse" method="POST">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input name="user"type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
          </div>
          <button type="submit" class="alert alert-danger" name="registrarse">Registrarse</button>
        </form>
      </div>
      {/if}
      </div>
      {if ($verif)}
      <div class="row">
        <div class="col-md-1 col-md-offset-11">
          <form class="" action="index.php?action=logout" method="post">
            <button type="submit" action="" class="alert alert-danger btn-block" name="">salir</button>
          </form>

        </div>
      </div>

      {/if}


    <div class="portada">
      <img class="portada"src="images\portada.jpg" alt="portada" />
    </div>
<div class="row">
    <div class="navi" class="col-md-10 col-md-offset-2">
      <nav class="navbar navbar-inverse" class="col-md-8 col-md-offset-2">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" class="col-md-8 col-md-offset-2">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">
            Prisma Instrumentos
            <span class="glyphicon glyphicon-music" aria-hidden="true">
            </span>
          </a>
        </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" class="col-md-10 col-md-offset-2">
        <ul class="nav navbar-nav">
          <li class="navbuton"><a href="templates/historia.tpl" id="llamadaHist" class="botones"><span class="glyphicon glyphicon-info-sign"></span>Historia de la empresa <span class="sr-only">(current)</span></a></li>
          <li class="navbuton"><a href="templates/local.tpl" id="llamadaLocal"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Como llegar</a></li>
          <li class="navbuton"><a href="templates/instrumentos.tpl" id="llamadaInstGuitarra" ><span class="glyphicon glyphicon-music"></span>Instrumentos </a></li>
          <li class="navbuton"><a href="#contacto"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contacto</a></li>
          {if ($verif)}
            {if ($tipo==1)||($tipo==5)}
            <li class="navbuton"><a href="templates/admin.tpl" id="llamadaAdmin"><span class="glyphicon glyphicon-briefcase" aria-hidden="true" ></span>Panel</a></li>

            {/if}

          {/if}

          </button>
        </ul>
      </div><!-- /.navbar-collapse -->
      </nav>


    </div>
    </div>
