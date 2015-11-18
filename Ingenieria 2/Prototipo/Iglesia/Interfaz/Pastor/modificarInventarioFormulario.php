<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="../../CSS/Interfaz.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/Formularios.css" />
    </head>
    <body>
        <?php
            include ("../../controladora/Inventario/controladoraInventario.php");
            $controlInventario = new controladoraInventario;
            $serieInventario = $_POST['serieInventario'];
            $inventario =$controlInventario->obtenerInventario($serieInventario);
        ?>
        <h1>Modificar Inventario</h1>
        <form id="modificarInventario" method="POST">
            <table border="0" style="background-color: white; text-align: center">
                <tbody>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"text\" id=\"\" name=\"\" value=\"".$inventario->getSerieInventario()."\" disabled=\"disabled\"/>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"hidden\" id=\"serieInventario\" name=\"serieInventario\" value=\"".$inventario->getSerieInventario()."\" />";
                                echo "<input class=\"texto\" type=\"text\" id=\"nombreInventario\" name=\"nombreInventario\"  value=\"".$inventario->getNombreInventario()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"texto\" id=\"modeloInventario\" name=\"modeloInventario\" value=\"".$inventario->getModeloInventario()."\"/>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"texto\" id=\"marcaInventario\" name=\"marcaInventario\" value=\"".$inventario->getMarcaInventario()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"texto\" id=\"estadoInventario\" name=\"estadoInventario\" value=\"".$inventario->getEstadoInventario()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo "<input class=\"texto\" type=\"texto\" id=\"cantidadInventario\" name=\"cantidadInventario\" value=\"".$inventario->getCantidadInventario()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                                echo"<textarea COLS=\"22\" ROWS=\"5\" NAME=\"descripcionInventario\" id=\"descripcionInventario\" >".$inventario->getDescripcionInventario()."</textarea>";
                        
                                //echo "<input class=\"texto\" type=\"texto\" id=\"descripcion\" name=\"descripcion\" value=\"".$inventario->getDescripcionInventario()."\" />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input class="boton" type="submit" value="Modificar"></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <script lang="text/Javascript" src="../../JS/ajaxInventario.js" ></script>
    </body>
</html>
