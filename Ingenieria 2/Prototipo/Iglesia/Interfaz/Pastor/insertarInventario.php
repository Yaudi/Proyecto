<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../../../CSS/Formularios.css" />
        <title>JSP Page</title>
        <script type="text/javascript">
            <!--
            //validaciones numericas
            //Validar que el campo de formulario contenga sólo números
            /*function validacion(f)  {
            if (isNaN(f.cantidadInventario.value)) {
            alert("Error:\nEste campo debe tener sólo números.");
            f.cantidadInventario.focus();
            return (false);
             } ////onsubmit="return validacion(this)" <-- en el form "formularioInventario"


            }
              function validarSiNumero(numero){
                if (!/^([0-9])*$/.test(numero))
                  alert("El valor " + numero + " no es un número");
              }//onChange="validarSiNumero(this.value);" <-- en el imput "cantidadInventario"
*/

            // -->
        </script>
    </head>
    <body>
        <h1>A&ntilde;adir al Inventario</h1>
        <form id="formularioInventario" method="POST" >
            <table border="0" style="background-color: white; text-align: center">
                <tbody>
                    <tr>
                        <td><input class="texto" id="serieInventario" name="serieInventario" type="text" placeholder="Serie"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" id="nombreInventario" name="nombreInventario" type="text" placeholder="Nombre"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" id="modeloInventario" name="modeloInventario" type="text" placeholder="Modelo"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" id="marcaInventario" name="marcaInventario" type="text" placeholder="Marca"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" id="estadoInventario" name="estadoInventario" type="text" placeholder="Estado"></td>
                    </tr>
                    <tr>
                        <td><input class="texto" id="cantidadInventario" name="cantidadInventario" type="number" placeholder="Cantidad"></td>
                    </tr>
                    <tr>
                        <td><textarea COLS=22 ROWS=5 NAME="descripcionInventario" id="descripcionInventario" placeholder="Descripci&oacute;n..."></textarea> </td>   
                        <?php
                        //<td><input class="texto" id="descripcion" name="descripcion" type="text" placeholder="Descripcion"></td>
                        ?>
                    </tr>
                    <tr>
                        <td><input class="boton" type="submit" value="Guardar" onclick=""></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <script lang="text/Javascript" src="../../JS/ajaxInventario.js" ></script>
    </body>
</html>
