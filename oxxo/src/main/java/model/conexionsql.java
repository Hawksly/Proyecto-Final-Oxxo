package model;

import java.sql.Connection;
import java.sql.DriverManager;
import javax.swing.JOptionPane;

public class conexionsql {
    Connection conn = null;
    String url = "jdbc:postgresql://localhost:5432/oxxo";
    String username = "postgres";
    String password = "admin123";
    
    public Connection conectar(){
        try {
            Class.forName("org.postgresql.Driver");
            conn=DriverManager.getConnection(url, username, password);
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Error al conectar "+e,"Error",JOptionPane.ERROR_MESSAGE);
        }
        return conn;
    }
}
