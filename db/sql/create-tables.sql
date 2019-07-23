CREATE TABLE codigosProductor (
    id INT(255) AUTO_INCREMENT NOT NULL,
    codigoProductor VARCHAR(255) NOT NULL,
    CONSTRAINT pk_codigosProductor PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE sorteos (
    id INT(255) AUTO_INCREMENT NOT NULL,
    numeroCamarote INT(255) NOT NULL,
    CONSTRAINT pk_sorteos PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE usuarios (
    id INT(255) AUTO_INCREMENT NOT NULL,
    codigoProductor_id INT(255) NOT NULL,
    numeroCamarote_id INT(255) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    tipoDocumento VARCHAR(255) NOT NULL,
    numeroDocumento INT(255) NOT NULL,
    telefono VARCHAR(255) NOT NULL,
    correoElectronico VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    pais VARCHAR(255) NOT NULL,
    provincia VARCHAR(255) NOT NULL,
    ciudad VARCHAR(255) NOT NULL,
    pasaporte VARCHAR(255) NOT NULL,
    coberturaMedica VARCHAR(255) NOT NULL,
    fecha date NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT fk_usuarios_codigoProductor FOREIGN KEY(codigoProductor_id) REFERENCES codigosProductor(id),
    CONSTRAINT fk_usuarios_numeroCamarote FOREIGN KEY(numeroCamarote_id) REFERENCES sorteos(id),
    CONSTRAINT uq_correoElectronico UNIQUE(correoElectronico)
)ENGINE=InnoDb;