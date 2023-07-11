package model;

import jakarta.persistence.Column;
import jakarta.persistence.Table;
import java.io.Serializable;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
@Table(name="oxxo")
public class contacto implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    @Column (name="motivo")
    private String motivo;
    @Column (name="cliente_nombre")
    private String nombre;
    @Column (name="cliente_apellido")
    private String apellido;
    @Column (name="cliente_correo")
    private String correo;
    @Column (name="tienda")
    private String tienda;
    @Column (name="comentario")
    private String comentario;
    @Column (name="cliente_telefono")
    private int telefono;

    public contacto() {
        
    }
    
    public contacto(String motivo, String nombre, String apellido, String correo, String tienda, String comentario, int telefono) {
        this.motivo = motivo;
        this.nombre = nombre;
        this.apellido = apellido;
        this.correo = correo;
        this.tienda = tienda;
        this.comentario = comentario;
        this.telefono = telefono;
    }

    public String getMotivo() {
        return motivo;
    }

    public void setMotivo(String motivo) {
        this.motivo = motivo;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getApellido() {
        return apellido;
    }

    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    public String getCorreo() {
        return correo;
    }

    public void setCorreo(String correo) {
        this.correo = correo;
    }

    public String getTienda() {
        return tienda;
    }

    public void setTienda(String tienda) {
        this.tienda = tienda;
    }

    public String getComentario() {
        return comentario;
    }

    public void setComentario(String comentario) {
        this.comentario = comentario;
    }

    public int getTelefono() {
        return telefono;
    }

    public void setTelefono(int telefono) {
        this.telefono = telefono;
    }
    
    
    
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof contacto)) {
            return false;
        }
        contacto other = (contacto) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "model.Econtacto[ id=" + id + " ]";
    }
    
}
