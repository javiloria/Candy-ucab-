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
DROP TABLE  HISTORICO;
DROP TABLE  PUNTO;
DROP TABLE  PRO_PRE;
DROP TABLE  JUR_CON;
DROP TABLE  lug_jur;
DROP TABLE  PRESUPUESTO;
DROP TABLE  ClienteNatural;
DROP TABLE  clientejuridico;
DROP TABLE  PED_STA;
DROP TABLE  ASISTENCIA;
DROP TABLE  HORARIO;
DROP TABLE  contacto;
DROP TABLE  STATUS;
DROP TABLE  OFERTA;
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
drop sequence of_id_sec;
drop sequence carnet_id_sec;
DROP SEQUENCE arsenal_sec;
DROP SEQUENCE cheque_seq;
DROP SEQUENCE credito_seq;
DROP SEQUENCE debito_seq;
DROP SEQUENCE dep_seq;
DROP SEQUENCE descuento_seq;
DROP SEQUENCE diario_sec;
DROP SEQUENCE horario_seq;
DROP SEQUENCE pago_seq;
DROP SEQUENCE ped_dep_seq;
DROP SEQUENCE ped_status_seq;
DROP SEQUENCE salario_sec;
DROP SEQUENCE status_seq;
DROP SEQUENCE textura_seq;
DROP SEQUENCE vacacion_seq;
DROP SEQUENCE venta_seq;
DROP SEQUENCE tipo_cara_seq;
DROP SEQUENCE his_id_sec;
DROP SEQUENCE jc_id_sec;
DROP SEQUENCE lj_id_sec;
DROP SEQUENCE pun_id_sec;