package controller;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;
import model.conexionsql;

@WebServlet(name = "SvContacto", urlPatterns = {"/SvContacto"})
public class SvContacto extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out=response.getWriter();
        String motivo = request.getParameter("motivo");
        String nombre = request.getParameter("nombre");
        String apellido = request.getParameter("apellido");
        String correo = request.getParameter("correo");
        String telefono = request.getParameter("telefono");
        String tienda = request.getParameter("tienda");
        String comentario = request.getParameter("mensaje");
        Boolean verificacion = null;
        /*Impresión de mensajes*/
            System.out.println("motivo: "+motivo);
            System.out.println("nombre: "+nombre);
            System.out.println("apellido: "+apellido);
            System.out.println("correo: "+correo);
            System.out.println("telefono: "+telefono);
            System.out.println("tienda: "+tienda);
            System.out.println("comentario: "+comentario);
        /*Conexión a la base de datos*/
        CRUD crud = new CRUD();
        try {
            crud.INSERT(motivo, nombre, apellido, correo, 0, tienda, comentario);
            System.out.println("El registro se guardó correctamente.");
            verificacion = true;
        } catch (Exception e) {
            System.out.println("El registro no se guardó "+e);
            verificacion = false;
    }
        try {
            if (verificacion.equals(true)) {
                 response.sendRedirect("/oxxo/view/inicio.php");
            }else{
                 response.sendRedirect("/oxxo/contacto.jsp");
            }
        } catch (Exception e) {
            System.out.println("Error en la verificación del registro: "+e);
        }
        
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }

}
