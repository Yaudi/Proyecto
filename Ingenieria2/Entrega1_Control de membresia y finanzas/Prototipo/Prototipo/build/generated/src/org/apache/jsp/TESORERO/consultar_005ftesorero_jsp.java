package org.apache.jsp.TESORERO;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class consultar_005ftesorero_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("<!doctype html>\n");
      out.write("<html>\n");
      out.write("<head>\n");
      out.write("<meta charset=\"utf-8\">\n");
      out.write("<title>Documento sin título</title>\n");
      out.write("<style type=\"text/css\">\n");
      out.write("<!--\n");
      out.write("body {\n");
      out.write("\tfont: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;\n");
      out.write("\tbackground-color: #02064F;\n");
      out.write("\tmargin: 0;\n");
      out.write("\tpadding: 0;\n");
      out.write("\tcolor: #000;\n");
      out.write("}\n");
      out.write("/* ~~ Selectores de elemento/etiqueta ~~ */\n");
      out.write("ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */\n");
      out.write("\tpadding: 0;\n");
      out.write("\tmargin: 0;\n");
      out.write("}\n");
      out.write("a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */\n");
      out.write("\tborder: none;\n");
      out.write("}\n");
      out.write("/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */\n");
      out.write("a:link {\n");
      out.write("\tcolor: #42413C;\n");
      out.write("\ttext-decoration: underline; /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */\n");
      out.write("}\n");
      out.write("a:visited {\n");
      out.write("\tcolor: #6E6C64;\n");
      out.write("\ttext-decoration: underline;\n");
      out.write("}\n");
      out.write("a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */\n");
      out.write("\ttext-decoration: none;\n");
      out.write("}\n");
      out.write("/* ~~ Este contenedor de anchura fija rodea a todas las demás bloques ~~ */\n");
      out.write(".container {\n");
      out.write("\twidth: 85%;\n");
      out.write("\tbackground-color: #FFFFFF;\n");
      out.write("\tmargin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño  */\n");
      out.write("}\n");
      out.write("/* ~~ No se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. ~~ */\n");
      out.write("header {\n");
      out.write("\tbackground-color: #93C0F0;\n");
      out.write("}\n");
      out.write("\n");
      out.write(".sidebar1 {\n");
      out.write("\tfloat: left;\n");
      out.write("\twidth: 180px;\n");
      out.write("\tbackground-color: #EADCAE;\n");
      out.write("\tpadding-bottom: 10px;\n");
      out.write("}\n");
      out.write(".content {\n");
      out.write("\twidth: 100%;\n");
      out.write("        height: 400px;\n");
      out.write("\tmargin-left: auto;\n");
      out.write("  \tmargin-right: auto;\n");
      out.write("}\n");
      out.write(".tabla {\n");
      out.write("\tmargin-left: auto;\n");
      out.write("  \tmargin-right: auto;\n");
      out.write("}\n");
      out.write(".titulo{\n");
      out.write("    text-align: center;\n");
      out.write("}\n");
      out.write("aside {\n");
      out.write("\tfloat: left;\n");
      out.write("\twidth: 180px;\n");
      out.write("\tbackground-color: #EADCAE;\n");
      out.write("\tpadding: 10px 0;\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* ~~ Este selector agrupado da espacio a las listas del área de .content ~~ */\n");
      out.write(".content ul, .content ol {\n");
      out.write("\tpadding: 0 15px 15px 40px; /* este relleno reproduce en espejo el relleno derecho de la regla de encabezados y de párrafo incluida más arriba. El relleno se ha colocado en la parte inferior para que el espacio existente entre otros elementos de la lista y a la izquierda cree la sangría. Estos pueden ajustarse como se desee. */\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* ~~ Los estilos de lista de navegación (pueden eliminarse si opta por usar un menú desplegable predefinido como el de Spry) ~~ */\n");
      out.write("ul.nav {\n");
      out.write("\tlist-style: none; /* esto elimina el marcador de lista */\n");
      out.write("\tborder-top: 1px solid #666; /* esto crea el borde superior de los vínculos (los demás se sitúan usando un borde inferior en el LI) */\n");
      out.write("\tmargin-bottom: 15px; /* esto crea el espacio entre la navegación en el contenido situado debajo */\n");
      out.write("}\n");
      out.write("ul.nav li {\n");
      out.write("\tborder-bottom: 1px solid #666; /* esto crea la separación de los botones  */\n");
      out.write("}\n");
      out.write("ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurará de que los vínculos mantengan el aspecto de botón incluso después de haber sido visitados  */\n");
      out.write("\tpadding: 5px 5px 5px 15px;\n");
      out.write("\tdisplay: block; /* esto asigna propiedades de bloque al vínculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el área reaccione a un clic de ratón. */\n");
      out.write("\twidth: 160px;  /*esta anchura hace que se pueda hacer clic en todo el botón para IE6. Puede eliminarse si no es necesario proporcionar compatibilidad con IE6. Calcule la anchura adecuada restando el relleno de este vínculo de la anchura del contenedor de barra lateral. */\n");
      out.write("\ttext-decoration: none;\n");
      out.write("\tbackground-color: #C6D580;\n");
      out.write("}\n");
      out.write("ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */\n");
      out.write("\tbackground-color: #ADB96E;\n");
      out.write("\tcolor: #FFF;\n");
      out.write("}\n");
      out.write("\n");
      out.write("/* ~~ El pie de página ~~ */\n");
      out.write("footer {\n");
      out.write("\tpadding: 10px 0;\n");
      out.write("\tbackground-color: #CCC49F;\n");
      out.write("\tposition: relative;/* esto da a IE6 el parámetro hasLayout para borrar correctamente */\n");
      out.write("\tclear: both; /* esta propiedad de borrado fuerza a .container a conocer dónde terminan las columnas y a contenerlas */\n");
      out.write("}\n");
      out.write("/* ~~ Clases float/clear varias ~~ */\n");
      out.write(".fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */\n");
      out.write("\tfloat: right;\n");
      out.write("\tmargin-left: 8px;\n");
      out.write("}\n");
      out.write(".fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */\n");
      out.write("\tfloat: left;\n");
      out.write("\tmargin-right: 8px;\n");
      out.write("}\n");
      out.write(".clearfloat { /* esta clase puede situarse en elemento <br /> o en un bloque vacío como elemento final tras el último bloque flotante (dentro de .container) si el pie se elimina o se saca fuera de .container */\n");
      out.write("\tclear:both;\n");
      out.write("\theight:0;\n");
      out.write("\tfont-size: 1px;\n");
      out.write("\tline-height: 0px;\n");
      out.write("}\n");
      out.write("\n");
      out.write("/*Compatibilidad con HTML5: define nuevas etiquetas HTML5 como display:block para que los navegadores sepan cómo procesar las etiquetas correctamente. */\n");
      out.write("header, section, footer, aside, article, figure {\n");
      out.write("\tdisplay: block;\n");
      out.write("}\n");
      out.write("h1{\n");
      out.write("    color: #02064F;\n");
      out.write("    margin-top: 0;\t \n");
      out.write("    padding-right: 15px;\n");
      out.write("    padding-left: 15px;\n");
      out.write("}\n");
      out.write(" #container {\n");
      out.write("    text-align: center;\n");
      out.write("    width:100%;\n");
      out.write("    height: 180px;\n");
      out.write("    \n");
      out.write("}\n");
      out.write("\n");
      out.write("#left {\n");
      out.write("    float:left;\n");
      out.write("    width:180px;\n");
      out.write("    height: auto;\n");
      out.write("}\n");
      out.write("\n");
      out.write("#right {\n");
      out.write("    float:right;\n");
      out.write("    width:50%;\n");
      out.write("    height: 180px;\n");
      out.write("}\n");
      out.write("-->\n");
      out.write("</style><!--[if lt IE 9]>\n");
      out.write("<script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>\n");
      out.write("<![endif]-->\n");
      out.write("<script type=\"text/javascript\" src=\"tesorero.js\"></script>\n");
      out.write("</head>\n");
      out.write("\n");
      out.write("<body>\n");
      out.write("<div class=\"container\">\n");
      out.write("        <header>\n");
      out.write("            <div id=\"container\">\n");
      out.write("                    <div id=\"left\">\n");
      out.write("                        <a href=\"inicio_tesorero.html\"><img src=\"metodista.jpg\" width=\"180\" height=\"\" id=\"Insert_logo\" style=\"background-color: #C6D580; display:block;\" /></a>\n");
      out.write("                    </div>\n");
      out.write("                    <div id=\"rigth\">\n");
      out.write("                        <h1>Iglesia Metodista</h1>\n");
      out.write("                        <h1>Manantiales de Vida</h1>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("        </header>\n");
      out.write("    <article class=\"content\">\n");
      out.write("        <div id=\"capa\">\n");
      out.write("            <h1 class=\"titulo\">Consultas</h1>\n");
      out.write("            <section>\n");
      out.write("                <table class=\"tabla\" width=\"200\" height=\"\" border=\"0\" cellspacing=\"1\">\n");
      out.write("                    <tbody>\n");
      out.write("                        <tr>\n");
      out.write("                            <td><input type=\"button\" value=\"Total\" onclick=\"consultarTotal()\"></td>\n");
      out.write("                            <td><input type=\"button\" value=\"Tipo\" onclick=\"consultarTipo()\"></td>\n");
      out.write("                            <td><input type=\"button\" value=\"Fecha\" onclick=\"consultarFecha()\"></td>\n");
      out.write("                        </tr>\n");
      out.write("                    </tbody>\n");
      out.write("                </table>\n");
      out.write("        </section>\n");
      out.write("    </div>\n");
      out.write("  <!-- end .content --></article>\n");
      out.write("  <!-- end .container --></div>\n");
      out.write("</body>\n");
      out.write("</html>\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
