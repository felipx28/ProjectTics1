<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tax Helper</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" href="icon/logo/icon.ico">
    </head>

    <body>
      <div class="container" id="header">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" id="logo">
            <span class="logo">  TH </span>
            <div class="vl"></div> <!--width 40 height 32-->
            <span class="name"> Tax Helper</span>
          </a>
          <ul class="nav nav-pills" id="btnContainer">
            <li class="nav-item"><a href="index.php" class="btn btn-white" role="button" id="home">Home</a></li>
            <li class="nav-item"><a href="signUp.php" class="btn btn-white" role="button" id="signUp">Registrarse</a></li>
            <li class="nav-item"><a href="login.php" class="btn btn-white" role="button" id="login">Ingresar</a></li>
          </ul>
        </header> 
      </div>

      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="images/taxImage.jpg" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Bienvenido a Tax Helper</h1>
            <p class="lead">En esta página te ayudamos a calcular tu declaración de renta anual, para ver si te corresponde devolución de impuestos, o pago de estos mismos. ¡Regístrate ya para poder acceder a nuestros servicios!</p>
          </div> <!--© 2022 Copyright-->
        </div>
      </div>
      
      <hr class="beforeFooter">
      
      <footer class="footer mt-auto py-3">
        <div class="containerFooter">
        <span>Diseñado y Desarrollado por: Gonzalo, Tomás & Felipe</span>
        <hr class="footerHR">
        <span class="text-muted">© 2022 Copyright</span>
        </div>
    </footer>
    
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>