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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://izimodal.marcelodolza.com/css/iziModal.css?v=152" rel="stylesheet">
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
            <button class="btn btn-success" id="calcularSalariado" type="submit">Calcular</button>
        </div>

        <div class="modales" id="modal">  
            <span id="resultadoSalariado"></span>
        </div>

            <table class="tablaSalariado">
                <thead>
                    <tr class="variables">
                        <th  class="mesHeader">Mes</th>
                        <th  class="sueldoHeader">Sueldo imponible</th>
                        <th  class="impuestoHeader">Impuestos retenidos</th>
                    </tr>
                </thead>
            
                <tbody class="meses">
                        <tr class="enero">
                            <td class="mes">Enero</td>
                            <td class="SueldoImp" id="eneSI"> <input type="number" placeholder="Ingrese su sueldo imponible" class="input" min="0" onkeyup="validarNumero(this)"> </td>
                            <td class="ImpRet" id="eneIR"><input type="number" placeholder="Ingrese su impuesto retenido" class="input" min="0" onkeyup="validarNumero(this)"></td></tr>
                        <tr class="febrero">
                            <td class="mes">Febrero</td>
                            <td class="SueldoImp" id="eneSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="febIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="marzo">
                            <td class="mes">Marzo</td>
                            <td class="SueldoImp" id="marSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="marIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="abril">
                            <td class="mes">Abril</td>
                            <td class="SueldoImp" id="abrSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="abrIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="mayo">
                            <td class="mes">Mayo</td>
                            <td class="SueldoImp" id="maySI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="mayIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="junio">
                            <td class="mes">Junio</td>
                            <td class="SueldoImp" id="junSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="junIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="julio">
                            <td class="mes">Julio</td>
                            <td class="SueldoImp" id="julSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="julIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="agosto">
                            <td class="mes">Agosto</td>
                            <td class="SueldoImp" id="agoSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="agoIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="septiembre">
                            <td class="mes">Septiembre</td>
                            <td class="SueldoImp" id="esepSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="sepIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="octubre">
                            <td class="mes">Octubre</td>
                            <td class="SueldoImp"id="octSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="octIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="noviembre">
                            <td class="mes">Noviembre</td>
                            <td class="SueldoImp" id="novSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="novIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                        </tr>
                        <tr class="diciembre">
                            <td class="mes">Diciembre</td>
                            <td class="SueldoImp" id="dicSI"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
                            <td class="ImpRet" id="dicIR"><input type="number" placeholder="" class="input" min="0" onkeyup="validarNumero(this)"></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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

        function impSalariado(sueldoImp, impRet){
            let factorSalariado = 0;
            let cantidadARebajar = 0;
            let impAP = 0; //impueso anual a pagar
            let impMR = 0; //impuesto mensual retenido
            let resultado;
            let resta;

            for(let i = 0; i < sueldoImp.length; i++){
                impAP += sueldoImp[i];
            }

            for(let i = 0; i < impRet.length; i++){
                impMR += impRet[i];
            }

            if(impAP >= 0 && impAP < 8266698){
                respuesta = 'El usuario queda exento'

            } else if (impAP >= 8266698 && impAP < 18370440){
                factorSalariado = 0.04;        
                cantidadARebajar = 330667;
                
            } else if (impAP >= 18370440 && impAP < 30617400) {
                factorSalariado = 0.08;
                cantidadARebajar = 1065485;
            
            }else if (impAP >= 30617400 && impAP < 42864360) {
                factorSalariado = 0.135;        
                cantidadARebajar = 2749442;

            }else if (impAP >= 42864360 && impAP < 55111320) {
                factorSalariado = 0.23;        
                cantidadARebajar = 6821556;

            }else if (impAP >= 55111320 && impAP < 73481760) {
                factorSalariado = 0.304;        
                cantidadARebajar = 10889794;

            }else if (impAP >= 73481760 && impAP < 189827880) {
                factorSalariado = 0.35;        
                cantidadARebajar = 14279955;
                
            }else if (impAP >= 189827880) {
                factorSalariado = 0.4;        
                cantidadARebajar = 23771349;
            }

            impAP = (impAP * factorSalariado) - cantidadARebajar;
            resta = impMR - impAP;

            if(respuesta === 'El usuario queda exento'){
                return 'El usuario queda exento y le toca una devolucion de: $' + impMR;
            }
            if(resta < 0){
                respuesta = "Le toca un pago de: $" + resta;    
                return respuesta;
            }else{
                respuesta = "Le toca una devolucion de: $" + resta;
                return respuesta;
            }
        }

        var sueldoImp = [];
        var impRet = [];

        var mesesSalariado = [
            sueldoImp,
            impRet,   
        ];

        $(document).ready(function() {

            $("#modal").iziModal({
								title: 'Resultado',
								//subtitle: '.',
								headerColor: '#000',
								group: 'linked', //si izimodal detecta que hay dos o mas del mismo grupo, los agrupa 
								overlayColor: 'rgba(0, 0, 0, 0.7)', //color del overlay (overlay es div gigante que quita el foco de atencion del usuario para hacer que se enfoque en el objeto principal)
								padding: 50
			});

            $('#calcularSalariado').click(function() {
                let divisionSueldo = 0;
                let divisionImp = 0;

                for(let x = 0; x < 12; x++){
                    for(let y = 1; y < 3; y++){
                        if (parseInt($('tbody').children().eq(x).children().eq(y).children().val()) == 0){
                            mesesSalariado.push(mesesSalariado[y-1].push(0));
                        }else if(isNaN(parseInt($('tbody').children().eq(x).children().eq(y).children().val()))){
                            mesesSalariado.push(mesesSalariado[y-1].push(-1))
                        }else{
                            mesesSalariado.push(mesesSalariado[y-1].push(parseInt($('tbody').children().eq(x).children().eq(y).children().val())));
                        }
                    }
                }

                let sumaSueldo = 0;
                let sumaImpuestos = 0;

                for(let i = 0; i < 2; i++){
                    for(let j = 0; j < 12; j++){
                        if (i == 0){
                            if(mesesSalariado[i][j] == 0){
                                divisionSueldo += 1
                            }if (i==0 && mesesSalariado[i][j] != -1 && mesesSalariado[i][j] != 0){ 
                                sumaSueldo += mesesSalariado[i][j];
                                divisionSueldo += 1 
                                //console.log('suma honorario ' + sumaHonorario)
                            }
                        }else if(i == 1){
                            if(mesesSalariado[i][j] == 0){   
                                divisionImp += 1    
                            }if (mesesSalariado[i][j] != -1 && mesesSalariado[i][j] != 0){
                                sumaImpuestos += mesesSalariado[i][j];
                                divisionImp += 1
                                //console.log('suma impuestos ' + sumaImpuestos)
                            }
                        }
                    }
                    //console.log('---------')
                }

                let promedioSueldo = sumaSueldo / divisionSueldo
                let promedioImpuestos = sumaImpuestos / divisionImp

                for(let a = 0; a < 2; a++){
                    for(let b = 0; b < 12; b++) {
                        if(a == 0){
                            if(mesesSalariado[a][b] == -1){
                                let indice = b
                                mesesSalariado[a].splice(b, 1, promedioSueldo)
                            }
                        }else{
                            if(mesesSalariado[a][b] == -1){
                                let indice = b
                                mesesSalariado[a].splice(b, 1, promedioImpuestos)
                            }
                        }
                    }
                }

                $('#resultadoSalariado').text(impSalariado(mesesSalariado[0], mesesSalariado[1]))
                $('#modal').iziModal('open');

                
            })
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
</html>