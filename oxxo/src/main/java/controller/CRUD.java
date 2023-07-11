package controller;

import java.sql.Connection;
import java.sql.ResultSet;

public class CRUD extends model.conexionsql{
    
    java.sql.Statement st;
    ResultSet rs;
    
    public void INSERT(String motivo, String nombre, String apellido, String correo, int telefono, String tienda, String comentario){
        try {
            Connection conexion = conectar();
            st = conexion.createStatement();
            String sql = "INSERT INTO consulta (motivo, cliente_nombre, cliente_apellido, cliente_correo, cliente_telefono, tienda, comentario) "
                + "VALUES ('"+motivo+"','"+nombre+"','"+apellido+"','"+correo+"',"+telefono+",'"+tienda+"','"+comentario+"')";
            st.execute(sql);
            st.close();
            conexion.close();
            System.out.println("Insertar correcto");
        } catch (Exception e) {
            System.out.println("Error en insertar "+e);
        }
    }
    public void SELECT(String fila, String nombre){
        try {
            Connection conexion = conectar();
            st = conexion.createStatement();
            String sql = "SELECT * FROM "+fila+" WHERE cliente_nombre='"+nombre+"';";
            rs = st.executeQuery(sql);
            if(rs.next()){
                
            }
            st.close();
            conexion.close();
            System.out.println("Mostrar correcto");
        } catch (Exception e) {
            System.out.println("Error en mostrar "+e);
        }
        
    }
    
    public void UPDATE(){
        
    }
    
    public void DELETE(){
        
    }
    
}
