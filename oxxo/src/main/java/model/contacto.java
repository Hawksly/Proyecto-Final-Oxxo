/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;


@Entity
@Table(name="oxxo")
public class contacto {
    
    @Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
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
    
    
}
