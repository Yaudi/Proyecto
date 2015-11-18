<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <script type="text/javascript" src="../../JS/pastor.js"></script>
        <link rel="stylesheet" type="text/css" href="../../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/Formularios.css" />
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
                        <a href="inicioPastor.php"><img src="../../IMAGENES/metodista.jpg" width="180" height="" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a>
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
                        <form>
                            <table class="tabla" width="600" height="" border="0" cellspacing="1" style="background-color: white; text-align: center">
                                <tbody>
                                    <tr>
                                        <td><input class="boton" type="button" value="Miembros" onclick="consultarPastor()"></td>
                                        <td><input class="boton" type="button" value="Celulas" onclick="consultarCelula()"></td>
                                        <td><input class="boton" type="button" value="Inventario" onclick="consultarInventario()"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </section>
                </div>
            </article>
        </div>
    </body>
</html>