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
            <button class="btn btn-success" id="calcular">Calcular</button>
        </div>
            <table class="tabla">
                <thead>
                    <tr class="variables">
                        <th  class="mesHeader">Mes</th>
                        <th  class="sueldoHeader">Sueldo imponible</th>
                        <th  class="impuestoHeader">Impuestos retenidos</th>
                        <th  class="honorarioHeader">Honorario Bruto</th>
                        <th  class="impuestoRetHeader">Impuestos retenidos</th>
                    </tr>
                </thead>
            
                <tbody class="meses">
                        <tr class="enero">
                            <td class="mes">Enero</td>
                            <td class="SueldoImp" id="eneSI"> <input type="number" placeholder="Ingrese su sueldo imponible" class="input" min='0'> </td>
                            <td class="ImpRet" id="eneIR"><input type="number" placeholder="Ingrese su impuesto retenido" class="input" min='0'></td>
                            <td class="HonBrut" id="eneHB"><input type="number" placeholder="Ingrese su honorario bruto" class="input" min='0'></td>
                            <td class="ImpRet" id="eneIRHB"><input type="number" placeholder="Ingrese su impuesto retenido por honorario bruto" class="input" min='0'></td>
                        </tr>
                        <tr class="febrero">
                            <td class="mes">Febrero</td>
                            <td class="SueldoImp" id="eneSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="febIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="febHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="febIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="marzo">
                            <td class="mes">Marzo</td>
                            <td class="SueldoImp" id="marSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="marIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="marHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="marIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="abril">
                            <td class="mes">Abril</td>
                            <td class="SueldoImp" id="abrSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="abrIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="abrHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="abrIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="mayo">
                            <td class="mes">Mayo</td>
                            <td class="SueldoImp" id="maySI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="mayIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="mayHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="mayIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="junio">
                            <td class="mes">Junio</td>
                            <td class="SueldoImp" id="junSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="junIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="junHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="junIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="julio">
                            <td class="mes">Julio</td>
                            <td class="SueldoImp" id="julSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="julIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="julHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="julIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="agosto">
                            <td class="mes">Agosto</td>
                            <td class="SueldoImp" id="agoSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="agoIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="agoHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="agoIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="septiembre">
                            <td class="mes">Septiembre</td>
                            <td class="SueldoImp" id="esepSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="sepIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="sepHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="sepIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="octubre">
                            <td class="mes">Octubre</td>
                            <td class="SueldoImp"id="octSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="octIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="octHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="octIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="noviembre">
                            <td class="mes">Noviembre</td>
                            <td class="SueldoImp" id="novSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="novIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="novHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="novIRHB"><input type="number" placeholder="" class="input" min='0'></td>
                        </tr>
                        <tr class="diciembre">
                            <td class="mes">Diciembre</td>
                            <td class="SueldoImp" id="dicSI"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="dicIR"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="HonBrut" id="dicHB"><input type="number" placeholder="" class="input" min='0'></td>
                            <td class="ImpRet" id="dicIRHB"><input type="number" placeholder="" class="input" min='0'></td>
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

        var sueldoImp = [];
        var impRet = [];
        var honBrut = [];
        var impRetHB = [];

        var meses = [
            sueldoImp,
            impRet,
            honBrut,
            impRetHB    
        ];

        $(document).ready(function() {
            $('#calcular').click(function() {
                for(let j = 0; j < 12; j++){
                    for(let i = 1; i < 5; i++){
                        meses.push(meses[i-1].push($('tbody').children().eq(j).children().eq(i).children().val()));
                    }
                }

                /*for(let i = 0; i < 4; i++){
                    for(let j = 0; j < 12; j++){
                        console.log(meses[i][j])
                    }
                    console.log('---------')
                }*/

                $.ajax({
                    url: 'calcular.php',
                    type: 'post',
                    data: {'data': JSON.stringify(meses)},
                    success: function(data) {
                        console.log(data)
                    }
                })
            })
        })
    </script>
</html>