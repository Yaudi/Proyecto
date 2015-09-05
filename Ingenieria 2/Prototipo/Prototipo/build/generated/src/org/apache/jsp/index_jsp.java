package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class index_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      out.write("        <title>Login</title>\n");
      out.write("        <link rel=\"stylesheet\" type=\"text/css\" href=\"Formularios.css\" />\n");
      out.write("        <link rel=\"stylesheet\" type=\"text/css\" href=\"Logeo.css\" />\n");
      out.write("        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        <div class=\"container\">\n");
      out.write("            <header class=\"header\">\n");
      out.write("                <div class=\"encabezado\">\n");
      out.write("                    <div class=\"left\">\n");
      out.write("                        <a href=\"index.jsp\"><img src=\"metodista.jpg\" width=\"180\" height=\"\" id=\"Insert_logo\" style=\"background-color: #C6D580; display:block;\" /></a>\n");
      out.write("                    </div>\n");
      out.write("                    <div class=\"rigth\">\n");
      out.write("                        <h1>Iglesia Metodista</h1>\n");
      out.write("                        <h1>Manantiales de Vida</h1>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("            </header>\n");
      out.write("            <article class=\"content\">\n");
      out.write("                <section>\n");
      out.write("                    <table width=\"558\" height=\"90\" border=\"0\" align=\"center\" style=\"background-color: white; text-align: center\">\n");
      out.write("                        <tr>\n");
      out.write("                            <td>\n");
      out.write("                                <div style=\"margin: 40px auto\">\n");
      out.write("                                    <form>\n");
      out.write("                                        <input class=\"texto\" type=\"text\" name=\"usuario\" placeholder=\"Usuario\"><br><br/>\n");
      out.write("                                        <input class=\"texto\" type=\"password\" name=\"contrasena\" placeholder=\"Contraseña\"><br><br/>\n");
      out.write("\n");
      out.write("                                        <button class=\"boton\" type=\"submit\">Continuar</button>\n");
      out.write("                                    </form>\n");
      out.write("                                </div>\n");
      out.write("                            </td>\n");
      out.write("                        </tr>\n");
      out.write("                    </table>\n");
      out.write("                </section>\n");
      out.write("            </article>\n");
      out.write("        </div>\n");
      out.write("    </body>\n");
      out.write("</html>");
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
