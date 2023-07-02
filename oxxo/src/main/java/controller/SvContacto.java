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
        /*Impresión de mensajes*/
        try{
            System.out.println("motivo: "+motivo);
            System.out.println("nombre: "+nombre);
            System.out.println("apellido: "+apellido);
            System.out.println("correo: "+correo);
            System.out.println("telefono: "+telefono);
            System.out.println("tienda: "+tienda);
            System.out.println("comentario: "+comentario);
        }finally{
            System.out.close();
        }
        conexionsql con = new conexionsql();
        try {
            Connection conexion = con.conectar();
            Statement st = conexion.createStatement();
            String sql = "INSERT INTO consulta (motivo, cliente_nombre, cliente_apellido, cliente_correo, cliente_telefono, tienda, comentario) "
                + "VALUES ('"+motivo+"','"+nombre+"','"+apellido+"','"+correo+"',"+telefono+",'"+tienda+"','"+comentario+"')";
            st.execute(sql);
            st.close();
            conexion.close();
            System.out.println("El registro se guardó correctamente.");
        } catch (SQLException e) {
            System.out.println("El registro no se guardó "+e);
    }
        
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }

}
