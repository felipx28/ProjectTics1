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
                    <div class="vl"></div>
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
                <h1 class="description-title">¿Cómo te ayudaremos?</h1>
                <div class="h6-header">
                    <h6>Nos basaremos en los datos que tú nos entregas.</h6>
                </div>
                <div class="p-description">
                    <p>En esta página, mediante los datos que tú nos otorgues, como el valor bruto de tu boleta, liquidaciones de sueldo, tus impuestos retenidos, calcularemos
                        y estimaremos a través de fórmulas dadas por el SII, si te corresponde una devolución de impuestos, o bien, realizar un pago de éstos.
                    </p>
                </div>
            </div>
            <div class="signUp-form">
                <form id="form" action="userAdd.php" method="POST">
                    <div class="form-header">
                        <span>Ingrese sus datos</span>
                        <?php if(isset($_GET['msg'])) echo $_GET['msg']; ?>
                        <hr class="hr-form-header">
                    </div>
                    <div class="form-body">
                        <label for="name" class="form-label">Nombre: </label>
                        <input type="text" class="form-name-value" id="name" name="name" placeholder="Ingrese su nombre" title="Campo para que ingreses tu nombre, así te recordaremos más fácil ;)"required>
                        <label for="password" class="form-label">Contraseña: </label>
                        <input type="password" class="form-password-value" id="password"  name="password" placeholder="Ingrese su contraseña" title="Aquí puedes ingresar tu contraseña. ¡Tranquilo! con nosotros estás totalmente seguro." required onChange="onChange()">
                        <label for="password-ver" class="form-label">Repita su contraseña: </label>
                        <input type="password" class="form-password-ver-value" id="password-ver" name="password-ver"  placeholder="Ingrese su contraseña" title="Ingresa nuevamente tú contraseña. ¡Busca alguna que sea fácil de recordar!" required onChange="onChange()">
                        <label for="email" class="form-label">  Correo: </label>
                        <input type="email" class="form-email-value" id="email" name="email"  placeholder="Ingrese su correo" title="Necesitamos tu correo solamente para facilitar tu ingreso en una próxima visita. ¡Sin spam!"required>
                        <label for="worker-type" class="form-label">Trabajador: </label>
                        <select name="worker-type">
                            <option >Elegir</option>
                            <option id="dependiente" name="worker-type" value="Dependiente">Dependiente</option>
                            <option id="independiente" name="worker-type" value="Independiente">Independiente</option>
                        </select>
                    </div>
                    <div class="form-footer"></div>
                        <hr class="hr-form-footer">
                        <button type="submit" class="btn btn-dark" id="registro">Registrarse</button>
                        <a href="login.php" class="loginButton">¿Ya tienes una cuenta?</a>
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
    <script>
            function onChange() {
                const password = document.querySelector('input[name=password]');
                const password_ver = document.querySelector('input[name=password-ver]');
                if (password_ver.value === password.value) {
                    password_ver.setCustomValidity('');
                } else {
                    password_ver.setCustomValidity('Las contraseñas no coinciden.');
                }
            }
    </script>
</html>