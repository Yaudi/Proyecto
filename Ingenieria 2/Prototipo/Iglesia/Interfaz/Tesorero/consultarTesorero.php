<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <script type="text/javascript" src="../../JS/tesorero.js"></script>
        <link rel="stylesheet" type="text/css" href="../../CSS/Formularios.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/Interfaz.css" />
        <style type="text/css">
            .conta {
                width: 85%;
                background-color: #FFFFFF;
                margin: 0 auto;
                text-align: center;
            }
            .conte {
                width: 100%;
                height: 400px;
                margin-left: auto;
                margin-right: auto;
            }
            .tabla {
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>

    <body class="body">
        <div class="conta">
            <header class="header">
                <div class="encabezado">
                    <div class="left">
                        <a href="inicioTesorero.php"><img src="../../Imagenes/metodista.jpg" width="180" height="" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a>
                    </div>
                    <div class="right">
                        <h1>Iglesia Metodista</h1>
                        <h1>Manantiales de Vida</h1>
                    </div>
                </div>
            </header>
            <article class="conte">
                <div id="capa">
                    <h1 class="titulo">Consultas</h1>
                    <section>
                        <table class="tabla" width="600" height="" border="0" cellspacing="1" style="background-color: white; text-align: center">
                            <tbody>
                                <tr>
                                    <td><input class="boton" type="button" value="Total" onclick="consultarTotal()"></td>
                                    <td><input class="boton" type="button" value="Tipo" onclick="consultarTipo()"></td>
                                    <td><input class="boton" type="button" value="Fecha" onclick="consultarFecha()"></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </article>
        </div>
    </body>
</html>
