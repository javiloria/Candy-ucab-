-- Eliminando tablas
--se deben borrar las tablas que hacen reerencias(tienen la foranea)
DROP TABLE  TEXTURA;
DROP TABLE  TIPO_CARAMELO;
DROP TABLE  PAGO;
DROP TABLE  DEBITO;
DROP TABLE  CREDITO;
DROP TABLE  CHEQUE;
DROP TABLE  VENTA;
DROP TABLE  DESCUENTO;
DROP TABLE  VACACION;
DROP TABLE  ROLE_USUARIO;
DROP TABLE  PASSWORD_RESETS;
DROP TABLE  telefono;
DROP TABLE  CARNET;
DROP TABLE  PRO_PRE;
DROP TABLE  lug_jur;
DROP TABLE  PRESUPUESTO;
DROP TABLE  ClienteNatural;
DROP TABLE  clientejuridico;
DROP TABLE  PED_STA;
DROP TABLE  ASISTENCIA;
DROP TABLE  HORARIO;
DROP TABLE  contacto;
DROP TABLE  STATUS;
DROP TABLE  PRODUCTO;
DROP TABLE  ARSENAL ;
DROP TABLE  DIARIO;
DROP TABLE  Empleado;
DROP TABLE  SALARIO;
DROP TABLE  PED_DEP;
DROP TABLE  PEDIDO;
DROP TABLE  DEPARTAMENTO;
DROP TABLE  USUARIO;
DROP TABLE  ROLES;
DROP TABLE  TIENDA;
DROP TABLE  LUGAR;
-- ELiminacion de secuencias
DROP SEQUENCE con_id_sec;
DROP SEQUENCE presupuesto_pcod_seq;
DROP SEQUENCE pro_pre_seq;
DROP SEQUENCE rol_id_sec;
DROP SEQUENCE role_user_id_seq;
DROP SEQUENCE tel_id_sec;
DROP SEQUENCE tienda_cod_sec;
