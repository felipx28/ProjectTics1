<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" href="icon/logo/icon.ico">
    </head>
    <body>
        <div class="container" id="header">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <span class="logo">  TH </span>
                    <div class="vl"></div> <!--width 40 height 32-->
                    <span class="name"> Tax Helper</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="index.php" class="btn btn-white" role="button" id="home">Home</a></li>
                    <li class="nav-item"><a href="signUp.php" class="btn btn-white" role="button" id="signUp">Registrarse</a></li>
                    <li class="nav-item"><a href="login.php" class="btn btn-white" role="button" id="login">Ingresar</a></li>
                </ul>
            </header>
        </div>
        <div class="container-signUp">
            <div class="signUp-description">
                <h1 class="description-title">Simplifica tus cálculos</h1>
                <div class="h6-header">
                    <h6>En solo un par de pasos.</h6>
                </div>
                <div class="p-description">
                    <p>Olvídate de los cálculos manuales y de la calculadora de mano. Una vez ingresado, solo coloca tus datos de ingresos y nosotros hacemos el resto.
                    </p>
                </div>
            </div>
            <div class="signUp-form">
                <form action="userLogin.php" method="POST">
                    <div class="form-header">
                        <span>Ingrese sus datos</span>
                        <?php if(isset($_GET['msg'])) echo $_GET['msg']; ?>
                        <hr class="hr-form-header">
                    </div>
                    <div class="form-body">
                        <label for="email" class="form-label">  Correo: </label>
                        <input type="email" class="form-email-value" id="email" placeholder="Ingrese su correo" name="loginEmail" title="Necesitamos tu correo solamente para facilitar tu ingreso en una próxima visita. ¡Sin spam!"required>
                        <label for="password" class="form-label">Contraseña: </label>
                        <input type="password" class="form-password-value" id="password" placeholder="Ingrese su contraseña" name="loginPassword" title="Aquí puedes ingresar tu contraseña. ¡Tranquilo! con nosotros estás totalmente seguro." required>
                    </div>
                    <div class="form-footer">
                        <hr class="hr-form-footer">
                        <button type="submit" class="btn btn-dark" id="ingreso">Ingresar</button>
                    </div>
                </form>
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