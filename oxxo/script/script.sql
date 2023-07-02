-- Database: oxxo

-- DROP DATABASE IF EXISTS oxxo;

CREATE DATABASE oxxo
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Spanish_Spain.1252'
    LC_CTYPE = 'Spanish_Spain.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;

COMMENT ON DATABASE oxxo
    IS 'Base de datos de la tienda Oxxo del proyectooxxo.';
	
/*Creación de tablas*/
	
CREATE TABLE consulta(
	id_consulta SERIAL PRIMARY KEY,
	motivo VARCHAR(100),
	cliente_nombre VARCHAR(100),
	cliente_apellido VARCHAR(100),
	cliente_correo VARCHAR(500),
	cliente_telefono INT,
	tienda VARCHAR(500),
	comentario VARCHAR(1000)
)

/*Mostrar las tablas*/

SELECT * FROM consulta

/*Insertar datos*/

INSERT INTO consulta (motivo,cliente_nombre,cliente_apellido,cliente_correo,cliente_telefono,tienda,comentario)
VALUES ('Consulta','Miguel Alonso','Guillen Medina','u19220707@utp.edu.pe',912350214,'OXXO - Av. Principal',
		'Buena atención al cliente.')