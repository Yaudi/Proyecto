<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin t�tulo</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #02064F;
	margin: 0;
	padding: 0;
	color: #000;
}
/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no a�adir relleno ni m�rgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aqu� o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aqu� se aplicar� en cascada en la lista .nav, a no ser que escriba un selector m�s espec�fico. */
	padding: 0;
	margin: 0;
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando est� rodeada por un v�nculo */
	border: none;
}
/* ~~ La aplicaci�n de estilo a los v�nculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* a no ser que aplique estilos a los v�nculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificaci�n visual r�pida */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionar� a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un rat�n. */
	text-decoration: none;
}
/* ~~ Este contenedor de anchura fija rodea a todas las dem�s bloques ~~ */
.container {
	width: 85%;
	background-color: #FFFFFF;
	margin: 0 auto; /* el valor autom�tico de los lados, unido a la anchura, centra el dise�o  */
}
/* ~~ No se asigna una anchura al encabezado. Se extender� por toda la anchura del dise�o. ~~ */
header {
	background-color: #93C0F0;
}
/* ~~ Estas son las columnas para el dise�o. ~~ 

1) El relleno s�lo se sit�a en la parte superior y/o inferior de los elementos del bloque. Los elementos situados dentro de estos bloques tienen relleno a los lados. Esto le ahorra las "matem�ticas de modelo de cuadro". Recuerde que si a�ade relleno o borde lateral al bloque propiamente dicho, �ste se a�adir� a la anchura que defina para crear la anchura *total*. Tambi�n puede optar por eliminar el relleno del elemento en el  bloque y colocar un segundo bloque dentro de �ste sin anchura y el relleno necesario para el dise�o deseado.

2) No se asigna margen a las columnas, ya que todas ellas son flotantes. Si es preciso a�adir un margen, evite colocarlo en el lado hacia el que se produce la flotaci�n (por ejemplo: un margen derecho en un bloque configurado para flotar hacia la derecha). En muchas ocasiones, puede usarse relleno como alternativa. En el caso de bloques para los que deba incumplirse esta regla, deber� a�adir una declaraci�n "display:inline" a la regla del elemento del bloque para evitar un error que provoca que algunas versiones de Internet Explorer dupliquen el margen.

3) Dado que las clases se pueden usar varias veces en un documento (y que tambi�n se pueden aplicar varias clases a un elemento), se ha asignado a las columnas nombres de clases en lugar de ID. Por ejemplo, dos bloques de barra lateral podr�an apilarse si fuera necesario. Si lo prefiere, �stas pueden cambiarse a ID f�cilmente, siempre y cuando las utilice una sola vez por documento.

4) Si prefiere que la navegaci�n est� a la izquierda en lugar de a la derecha, simplemente haga que estas columnas floten en direcci�n opuesta (todas a la izquierda en lugar de todas a la derecha) y �stas se representar�n en orden inverso. No es necesario mover los bloques por el c�digo fuente HTML.

*/
.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
}
.content {
	width: 100%;
        height: 400px;
	margin-left: auto;
  	margin-right: auto;
}
.tabla {
	margin-left: auto;
  	margin-right: auto;
}
.titulo{
    text-align: center;
}
aside {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding: 10px 0;
}

/* ~~ Este selector agrupado da espacio a las listas del �rea de .content ~~ */
.content ul, .content ol {
	padding: 0 15px 15px 40px; /* este relleno reproduce en espejo el relleno derecho de la regla de encabezados y de p�rrafo incluida m�s arriba. El relleno se ha colocado en la parte inferior para que el espacio existente entre otros elementos de la lista y a la izquierda cree la sangr�a. Estos pueden ajustarse como se desee. */
}

/* ~~ Los estilos de lista de navegaci�n (pueden eliminarse si opta por usar un men� desplegable predefinido como el de Spry) ~~ */
ul.nav {
	list-style: none; /* esto elimina el marcador de lista */
	border-top: 1px solid #666; /* esto crea el borde superior de los v�nculos (los dem�s se sit�an usando un borde inferior en el LI) */
	margin-bottom: 15px; /* esto crea el espacio entre la navegaci�n en el contenido situado debajo */
}
ul.nav li {
	border-bottom: 1px solid #666; /* esto crea la separaci�n de los botones  */
}
ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurar� de que los v�nculos mantengan el aspecto de bot�n incluso despu�s de haber sido visitados  */
	padding: 5px 5px 5px 15px;
	display: block; /* esto asigna propiedades de bloque al v�nculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el �rea reaccione a un clic de rat�n. */
	width: 160px;  /*esta anchura hace que se pueda hacer clic en todo el bot�n para IE6. Puede eliminarse si no es necesario proporcionar compatibilidad con IE6. Calcule la anchura adecuada restando el relleno de este v�nculo de la anchura del contenedor de barra lateral. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con rat�n como para los que lo hagan con teclado */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ El pie de p�gina ~~ */
footer {
	padding: 10px 0;
	background-color: #CCC49F;
	position: relative;/* esto da a IE6 el par�metro hasLayout para borrar correctamente */
	clear: both; /* esta propiedad de borrado fuerza a .container a conocer d�nde terminan las columnas y a contenerlas */
}
/* ~~ Clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la p�gina. El elemento flotante debe preceder al elemento junto al que debe aparecer en la p�gina. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la p�gina. El elemento flotante debe preceder al elemento junto al que debe aparecer en la p�gina. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en elemento <br /> o en un bloque vac�o como elemento final tras el �ltimo bloque flotante (dentro de .container) si el pie se elimina o se saca fuera de .container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}

/*Compatibilidad con HTML5: define nuevas etiquetas HTML5 como display:block para que los navegadores sepan c�mo procesar las etiquetas correctamente. */
header, section, footer, aside, article, figure {
	display: block;
}
h1{
    color: #02064F;
    margin-top: 0;	 
    padding-right: 15px;
    padding-left: 15px;
}
 #container {
    text-align: center;
    width:100%;
    height: 180px;
    
}

#left {
    float:left;
    width:180px;
    height: auto;
}

#right {
    float:right;
    width:50%;
    height: 180px;
}
-->
</style><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="pastor.js"></script>
</head>

<body>
<div class="container">
        <header>
            <div id="container">
                    <div id="left">
                        <a href="inicio_pastor.html"><img src="metodista.jpg" width="180" height="" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a>
                    </div>
                    <div id="rigth">
                        <h1>Iglesia Metodista</h1>
                        <h1>Manantiales de Vida</h1>
                    </div>
                </div>
        </header>
  <article class="content">
      <div id="capa">
          <h1 class="titulo">Consultas</h1>
    <section>
    <table class="tabla" width="200" height="" border="0" cellspacing="1">
  	<tbody>
            <tr>
                <td><input type="button" value="Miembros" onclick="consultarPastor()"></td>
                <td><input type="button" value="Celulas" onclick="consultarCelula()"></td>
              <td><input type="button" value="Inventario" onclick="consultarInventario()"></td>
            </tr>
          </tbody>
        </table>
        </section>
    </div>
  <!-- end .content --></article>
  <!-- end .container --></div>
</body>
</html>
