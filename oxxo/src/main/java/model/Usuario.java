package model;

public class Usuario {
    
    private String username;
    private String nombre;
    private String password;
    private int idusuario; 
    private String email;
    private String puesto;
    private String perfil;

    public void dbusuario(){
        conexionsql conn = new conexionsql();
        conn.conectar();
    }

    public Usuario(){
        
    }
    
    public Usuario(String username, String nombre, String password, int idusuario, String email, String puesto, String perfil) {
        this.username = username;
        this.nombre = nombre;
        this.password = password;
        this.idusuario = idusuario;
        this.email = email;
        this.puesto = puesto;
        this.perfil = perfil;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public int getIdusuario() {
        return idusuario;
    }

    public void setIdusuario(int idusuario) {
        this.idusuario = idusuario;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPuesto() {
        return puesto;
    }

    public void setPuesto(String puesto) {
        this.puesto = puesto;
    }
    
    public String getPerfil() {
        return perfil;
    }

    public void setPerfil(String perfil) {
        this.perfil = perfil;
    }
    
}
