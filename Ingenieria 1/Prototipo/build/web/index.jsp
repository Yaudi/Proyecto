<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #02064F;
	margin: 0;
	padding: 0;
	color: #000;
}
.titulo{
    text-align: center;
    margin: 230px;
    color: #02064F;
}
a:link {
	color: #42413C;
	text-decoration: none; 
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { 
        text-decoration: none;
}

.container {
	width: 85%;
	background-color: #FFFFFF;
	margin: 0 auto;
}

header {
	background-color: #93C0F0;
}
.content {
	width: 100%;
        height: 350px;
	margin-left: auto;
  	margin-right: auto;
}
h1{
    color: #02064F;
    margin-top: 0;	 
    padding-right: 15px;
    padding-left: 15px;
}
.fltrt {  
        float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en elemento <br /> o en un bloque vacío como elemento final tras el último bloque flotante (dentro de .container) si el pie se elimina o se saca fuera de .container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}

header, section, footer, aside, article, figure {
	display: block;
}

.links a{
    color: #620305;
    text-decoration: none;
}

.seek{
    padding: 0px;
    text-align: center;
    width: 100%;
    color: #72cc05;
}
.seek input{
    width: 200px;
    height: 30px;
    margin: 0px 30px;
    padding: 0px;
    text-align: center;
}

.seek select{
    width: 200px;
    height: 30px;
    margin: 0px 30px;
    padding: 0px 10px;
    text-align: center;
}

.seek button{
    width: 150px;
    height: 50px;
    margin: 20px 20px;
    background: #620305;
    color: white;
    border: 0px;
}

.seek button:hover{
    background: #a5ff3c;
}

.log h4{
    color: #72cc05;
    text-decoration: none;
    margin-bottom: 0px;
}

.log a{
    color: #a5ff3c;
    text-decoration: none;
}

.log a:hover{
    text-decoration: underline;
}

.log input{
    width: 200px;
    height: 30px;
    margin: 0px 30px;
    padding: 0px;
    text-align: center;
}

.log button{
    width: 150px;
    height: 50px;
    margin: 20px 20px;
    background: #02064F;
    color: white;
    border: 0px;
}

.log button:hover{
    background: #040B8A;
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
    </head>

    <body>
        <div class="container">
            <header>
                <div id="container">
                    <div id="left">
                        <a href="index.jsp"><img src="metodista.jpg" width="180" height="" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a>
                    </div>
                    <div id="rigth">
                        <h1>Iglesia Metodista</h1>
                        <h1>Manantiales de Vida</h1>
                    </div>
                </div>
            </header>
            <article class="content">
                <section>
                    <table width="558" height="90" border="0" align="center" style="background-color: white; text-align: center">
                        <tr>
                            <td>
                                <div class="log" style="margin: 40px auto">
                                    <form>
                                        <input type="text" name="usuario" placeholder="Usuario"><br><br/>
                                        <input type="password" name="contrasena" placeholder="Contraseña"><br><br/>

                                        <button type="submit">Continuar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                </section>
            </article>
            <a href="inicio_pastor.html" class="titulo">Pastor</a>
            <a href="inicio_tesorero.html" class="titulo">Tesorero</a>
        </div>
    </body>
</html>