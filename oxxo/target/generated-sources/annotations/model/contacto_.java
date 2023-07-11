package model;

import javax.annotation.processing.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="org.eclipse.persistence.internal.jpa.modelgen.CanonicalModelProcessor", date="2023-07-10T16:56:02", comments="EclipseLink-2.7.10.v20211216-rNA")
@StaticMetamodel(contacto.class)
public class contacto_ { 

    public static volatile SingularAttribute<contacto, String> motivo;
    public static volatile SingularAttribute<contacto, String> tienda;
    public static volatile SingularAttribute<contacto, String> apellido;
    public static volatile SingularAttribute<contacto, String> correo;
    public static volatile SingularAttribute<contacto, Long> id;
    public static volatile SingularAttribute<contacto, String> comentario;
    public static volatile SingularAttribute<contacto, Integer> telefono;
    public static volatile SingularAttribute<contacto, String> nombre;

}