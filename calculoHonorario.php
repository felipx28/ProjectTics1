<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tax Helper</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="icon/logo/icon.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css " rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://izimodal.marcelodolza.com/css/iziModal.css?v=152" rel="stylesheet">
        <link rel="stylesheet" href="https://izitoast.marcelodolza.com/css/iziToast.min.css">
    </head>
    <body> 
        <div class="container" id="header">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto number-dark number-decoration-none" id="logo">
                    <span class="logo">  TH </span>
                    <div class="vl"></div> <!--width 40 height 32-->
                    <span class="name"> Tax Helper</span>
                </a>
                <ul class="nav nav-pills" id="btnContainer">
                    <li class="nav-item"><a href="index.php" class="btn btn-white" role="button" id="home">Home</a></li>
                    <li class="nav-item"><a href="signUp.php" class="btn btn-white" role="button" id="close">Cerrar sesión</a></li>
                </ul>
            </header> 
        </div>
        <div class="informacion">
            <span class="informacionSpan">Ingresa los datos que tienes hasta la fecha. ¡Nosotros nos encargamos de darte una proyección con lo que tienes!</span>
            <br>
            <span class="informacionSpan">Si desea realizar una proyección, deje los meses faltantes en blanco</span>
            <br>
            <span class="informacionSpan">Si no recibió sueldo, colocar 0</span>
            <button class="btn btn-success" id="calcularHonorario" type="submit">Calcular</button>
        </div>

        <div class="modales" id="modal">  
            <span id="resultado"></span>
        </div>

            <table class="tablaHonorario">
                <thead>
                    <tr class="variables">
                        <th  class="mesHeader">Mes</th>
                        <th  class="honorarioHeader">Honorario Bruto</th>
                        <th  class="impuestoRetHeader">Impuestos retenidos</th>
                    </tr>
                </thead>
            
                <tbody class="meses">
                        <tr class="enero">
                            <td class="mes">Enero</td>
                            <td class="HonBrut" id="eneHB"><input type="number" placeholder="Ingrese su honorario bruto" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="eneIRHB"><input type="number" placeholder="Ingrese su impuesto retenido por honorario bruto" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="febrero">
                            <td class="mes">Febrero</td>
                            <td class="HonBrut" id="febHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="febIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="marzo">
                            <td class="mes">Marzo</td>
                            <td class="HonBrut" id="marHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="marIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="abril">
                            <td class="mes">Abril</td>
                            <td class="HonBrut" id="abrHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="abrIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="mayo">
                            <td class="mes">Mayo</td>
                            <td class="HonBrut" id="mayHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="mayIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="junio">
                            <td class="mes">Junio</td>
                            <td class="HonBrut" id="junHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="junIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="julio">
                            <td class="mes">Julio</td>
                            <td class="HonBrut" id="julHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="julIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="agosto">
                            <td class="mes">Agosto</td>
                            <td class="HonBrut" id="agoHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="agoIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="septiembre">
                            <td class="mes">Septiembre</td>
                            <td class="HonBrut" id="sepHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="sepIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="octubre">
                            <td class="mes">Octubre</td>
                            <td class="HonBrut" id="octHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="octIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="noviembre">
                            <td class="mes">Noviembre</td>
                            <td class="HonBrut" id="novHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="novIRHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="diciembre">
                            <td class="mes">Diciembre</td>
                            <td class="HonBrut" id="dicHB"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="dicIRHB"><input type="number" placeholder="" class="input" min="0"></td>
                        </tr>
                </tbody>
            </table>


        <hr class="beforeFooter">
      
        <footer class="footer mt-auto py-3">
            <div class="containerFooter">
            <span>Diseñado y Desarrollado por: Gonzalo, Tomás & Felipe</span>
            <hr class="footerHR">
            <span class="number-muted">© 2022 Copyright</span>
            </div>
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        
        //Funcion que valida que el numero sea positivo o 0
        function validarNumero(value) {
            var valor = $(value).val();
             if (!isNaN(valor) && valor >= 0){
                $(value).val(valor);
            }else{
                $(value).val(0);
            }
        }

        var honBrut = [];
        var impRetHB = [];

        var mesesHonorario = [
            honBrut,
            impRetHB    
        ];

        function negativo() {
            const valor = document.querySelector('input[type=number]');
            if (valor < 0) {
                valor.setCustomValidity('No puedes ingresar valores negativos.');
            } else {
                valor.setCustomValidity('');
            }
        }

        function impHonorario(honBrut, impRetHB) {
            let factorSalariado = 0;
            let cantidadARebajar = 0;
            let impAPHB = 0;
            let impAPfinal = 0;
            let resta = 0;
            let respuesta;
            
            for(let i = 0; i < honBrut.length; i++){
                impAPHB += honBrut[i];
            }

            for(let i = 0; i < impRetHB.length; i++){
                impAPfinal += impRetHB[i];
            }
            
            
            if(impAPHB >= 0 && impAPHB < 8266698){
                respuesta = "El usuario queda exento";
            }
            else if(impAPHB >= 8266698 && impAPHB < 18370440){
                factorSalariado = 0.04;        
                cantidadARebajar = 330667;
            }
            else if (impAPHB >= 18370440 && impAPHB < 30617400) {
                factorSalariado = 0.08;
                cantidadARebajar = 1065485;
    
             }else if (impAPHB >= 30617400 && impAPHB < 42864360) {
                factorSalariado = 0.135;        
                cantidadARebajar = 2749442;

            }else if (impAPHB >= 42864360 && impAPHB < 55111320) {
                factorSalariado = 0.23;        
                cantidadARebajar = 6821556;

            }else if (impAPHB >= 55111320 && impAPHB < 73481760) {
                factorSalariado = 0.304;        
                cantidadARebajar = 10889794;

            }else if (impAPHB >= 73481760 && impAPHB < 189827880) {
                factorSalariado = 0.35;        
                cantidadARebajar = 14279955;

            }else if (impAPHB >= 189827880) {
                factorSalariado = 0.4;        
                cantidadARebajar = 23771349;
            }
                //$aux = $impAPHB;
                 impAPHB = ((impAPHB - (impAPHB * 0.3)) * factorSalariado) - cantidadARebajar;
                //$impRAH = $aux * 0.1225;
                resta = impAPfinal - impAPHB;

                if(respuesta == 'El usuario queda exento'){
                    return 'Usted esta exento y le corresponde una devolución de: $' + impAPfinal 
                }if(resta < 0){
                    respuesta = "Le toca un pago de: $" + resta;    
                    return respuesta
                }else{
                    respuesta = "Le toca una devolucion de: $" + resta;
                    return respuesta
            }
        }

        $(document).ready(function() {

            $("#modal").iziModal({
								title: 'Resultado',
								//subtitle: '.',
								headerColor: '#000',
								group: 'linked', //si izimodal detecta que hay dos o mas del mismo grupo, los agrupa 
								overlayColor: 'rgba(0, 0, 0, 0.7)', //color del overlay (overlay es div gigante que quita el foco de atencion del usuario para hacer que se enfoque en el objeto principal)
								padding: 50
			});

            $('#calcularHonorario').click(function() {
                let divisionHon = 0;
                let divisionImp = 0;

                for(let j = 0; j < 12; j++){
                    for(let i = 1; i < 3; i++){
                        if (parseInt($('tbody').children().eq(j).children().eq(i).children().val()) == 0){
                            mesesHonorario.push(mesesHonorario[i-1].push(0));
                        }else if(isNaN(parseInt($('tbody').children().eq(j).children().eq(i).children().val()))){
                            mesesHonorario.push(mesesHonorario[i-1].push(-1))
                        }else{
                            mesesHonorario.push(mesesHonorario[i-1].push(parseInt($('tbody').children().eq(j).children().eq(i).children().val())));
                        }
                    }
                }

                let sumaHonorario=0;
                let sumaImpuestos=0;
                
                for(let i = 0; i < 2; i++){
                    for(let j = 0; j < 12; j++){
                        if (i== 0){
                            if(mesesHonorario[i][j] == 0){
                                divisionHon += 1
                            }if (i==0 && mesesHonorario[i][j] != -1 && mesesHonorario[i][j] != 0){ 
                                sumaHonorario += mesesHonorario[i][j];
                                divisionHon += 1 
                                //console.log('suma honorario ' + sumaHonorario)
                            }
                        }else if(i==1){
                            if(mesesHonorario[i][j] == 0){   
                                divisionImp += 1    
                            }if (mesesHonorario[i][j] != -1 && mesesHonorario[i][j] != 0){
                                sumaImpuestos += mesesHonorario[i][j];
                                divisionImp += 1
                                //console.log('suma impuestos ' + sumaImpuestos)
                            }
                        }
                    }
                    console.log('---------')
                }

                //console.log('division honorario' + divisionHon)
                //console.log('division Impuesto' + divisionImp)

                let promedioHonorario = sumaHonorario / divisionHon
                let promedioImpuestos = sumaImpuestos / divisionImp

                for(let a = 0; a < 2; a++){
                    for(let b = 0; b < 12; b++) {
                        if(a == 0){
                            if(mesesHonorario[a][b] == -1){
                                let indice = b
                                mesesHonorario[a].splice(b, 1, promedioHonorario)
                            }
                        }else{
                            if(mesesHonorario[a][b] == -1){
                                let indice = b
                                mesesHonorario[a].splice(b, 1, promedioImpuestos)
                            }
                        }
                    }
                }

                $('#resultado').text(impHonorario(mesesHonorario[0], mesesHonorario[1]))
                $('#modal').iziModal('open');

            })
        })
        
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
</html>