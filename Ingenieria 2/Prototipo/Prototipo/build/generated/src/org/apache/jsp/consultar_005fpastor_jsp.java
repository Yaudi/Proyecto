package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class consultar_005fpastor_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      out.write("    <head>\n");
      out.write("        <meta charset=\"utf-8\">\n");
      out.write("        <title>Documento sin título</title>\n");
      out.write("        <script type=\"text/javascript\" src=\"pastor.js\"></script>\n");
      out.write("        <link rel=\"stylesheet\" type=\"text/css\" href=\"Interfaz.css\" />\n");
      out.write("        <link rel=\"stylesheet\" type=\"text/css\" href=\"Formularios.css\" />\n");
      out.write("        <style type=\"text/css\">\n");
      out.write("            .conta {\n");
      out.write("                width: 85%;\n");
      out.write("                background-color: #FFFFFF;\n");
      out.write("                margin: 0 auto;\n");
      out.write("                text-align: center;\n");
      out.write("\n");
      out.write("            }\n");
      out.write("            .conte {\n");
      out.write("                width: 100%;\n");
      out.write("                height: 400px;\n");
      out.write("                margin-left: auto;\n");
      out.write("                margin-right: auto;\n");
      out.write("            }\n");
      out.write("            .tabla {\n");
      out.write("                margin-left: auto;\n");
      out.write("                margin-right: auto;\n");
      out.write("            }\n");
      out.write("        </style>\n");
      out.write("    </head>\n");
      out.write("\n");
      out.write("    <body class=\"body\">\n");
      out.write("        <div class=\"conta\">\n");
      out.write("            <header class=\"header\">\n");
      out.write("                <div class=\"encabezado\">\n");
      out.write("                    <div class=\"left\">\n");
      out.write("                        <a href=\"inicio_pastor.html\"><img src=\"metodista.jpg\" width=\"180\" height=\"\" id=\"Insert_logo\" style=\"background-color: #C6D580; display:block;\" /></a>\n");
      out.write("                    </div>\n");
      out.write("                    <div class=\"right\">\n");
      out.write("                        <h1>Iglesia Metodista</h1>\n");
      out.write("                        <h1>Manantiales de Vida</h1>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("            </header>\n");
      out.write("            <article class=\"conte\">\n");
      out.write("                <div id=\"capa\">\n");
      out.write("                    <h1 class=\"titulo\">Consultas</h1>\n");
      out.write("                    <section>\n");
      out.write("                        <form>\n");
      out.write("                            <table class=\"tabla\" width=\"600\" height=\"\" border=\"0\" cellspacing=\"1\" style=\"background-color: white; text-align: center\">\n");
      out.write("                                <tbody>\n");
      out.write("                                    <tr>\n");
      out.write("                                        <td><input class=\"boton\" type=\"button\" value=\"Miembros\" onclick=\"consultarPastor()\"></td>\n");
      out.write("                                        <td><input class=\"boton\" type=\"button\" value=\"Celulas\" onclick=\"consultarCelula()\"></td>\n");
      out.write("                                        <td><input type=\"button\" value=\"Inventario\" onclick=\"consultarInventario()\"></td>\n");
      out.write("                                    </tr>\n");
      out.write("                                </tbody>\n");
      out.write("                            </table>\n");
      out.write("                        </form>\n");
      out.write("                    </section>\n");
      out.write("                </div>\n");
      out.write("            </article>\n");
      out.write("        </div>\n");
      out.write("    </body>\n");
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
