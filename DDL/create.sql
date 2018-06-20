
CREATE TABLE PRODUCTO (
    p_cod numeric(20),
    p_nombre varchar(50),
    p_tipo varchar(50),
    p_precio numeric(20,3),
    p_imagen varchar(200),
    p_descripcion varchar (200),
    p_cantidad numeric(20),
    updated_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    constraint PK_producto Primary Key(p_cod)

);


CREATE TABLE LUGAR(
l_cod numeric(5),
l_tipo varchar(15) NOT NULL,
l_nombre varchar(50) NOT NULL,
fk_lugar numeric(5),
constraint PK_lugar primary key(l_cod),
constraint fk_lugar foreign key( fk_lugar ) references lugar(l_cod),
constraint Lugar_check_tipo check( l_tipo in('Estado','Municipio','Parroquia'))
);


create sequence con_id_sec
increment by 1
start with 1;

create table contacto(
	co_id integer DEFAULT nextval('con_id_sec'),
	co_nombre varchar(30) not null,
	co_descripcion varchar(191),
	constraint PK_contacto Primary Key(co_id)
);



Create table ClienteNatural(
	C_N_rif numeric(10),
	C_N_cedula numeric(10) NOT NULL,
	C_N_pnombre varchar(30) NOT NULL,
	C_N_snombre varchar(30),
	C_N_papellido varchar(30) NOT NULL,
	C_N_sapellido varchar(30),
	C_N_correo varchar(30) NOT NULL,
	fk_Lugar numeric(5) NOT NULL,
	constraint PK_ClienteNatural Primary Key(C_N_rif),
	constraint FK_ClienteNatural_Lugar foreign Key(fk_Lugar) references Lugar(l_cod)
);


	create sequence tel_id_sec
	increment by 1
	start with 1;

create table clientejuridico(
	c_j_rif numeric(10),
	c_j_correo varchar(50) not null,
	c_j_dcomercial varchar(50) not null,
	c_j_razonsocial varchar(50) not null,
	c_j_sitioweb varchar(100),
	c_j_capital numeric (15,2) not null,
	constraint pk_clientejuridico Primary Key(c_j_rif)
);

create table lug_jur(
	lj_cod numeric(5),
	lj_clientejuridico numeric(10),
	lj_lugar numeric(10),
	constraint pk_lugjur  primary key (lj_cod, lj_clientejuridico, lj_lugar),
	constraint fk_cj foreign key(lj_clientejuridico) references clientejuridico(c_j_rif),
	constraint fk_l foreign key(lj_lugar) references lugar(l_cod)
);


create table telefono(
	t_id integer default nextval('tel_id_sec'),
	t_numero varchar(20) not null,
	fk_clientenatural numeric(10),
	fk_clientejuridico numeric(10),
	fk_contacto integer,
	constraint pk_telefono primary key(t_id),
	constraint fk_telefono_contacto foreign key(fk_contacto) references contacto(co_id),
	constraint fk_telefono_clientenatural foreign key(fk_clientenatural) references clientenatural(c_n_rif),
	constraint fk_telefono_clientejuridico foreign key(fk_clientejuridico) references clientejuridico(c_j_rif)
);


CREATE sequence tienda_cod_sec
increment by 1
start with 1;

CREATE TABLE TIENDA(
    t_cod integer DEFAULT nextval('tienda_cod_sec') ,
    t_tipoTamano varchar(30) NOT NULL,
    t_nombre varchar(50) NOT NULL,
    fk_lugar numeric(5) NOT NULL,
    t_imagen varchar(200),
    constraint PK_Tienda PRIMARY KEY(t_cod),
    constraint FK_Tienda_Lugar foreign key(fk_lugar) references Lugar(l_cod)
);


CREATE sequence rol_id_sec
increment by 1
start with 1;

CREATE TABLE ROLES(
  id integer NOT NULL DEFAULT nextval('rol_id_sec') ,
  name varchar(255)  NOT NULL,
  description varchar(255) NOT NULL,
  created_at timestamp(0) without time zone,
  updated_at timestamp(0) without time zone,
  CONSTRAINT PK_Roles PRIMARY KEY (id)
);

CREATE sequence role_user_id_seq
increment by 1
start with 1;

CREATE TABLE ROLE_USUARIO(
      id integer NOT NULL DEFAULT nextval('role_user_id_seq'),
      role_id integer NOT NULL,
      u_username varchar(50),
      created_at timestamp(0) without time zone,
      updated_at timestamp(0) without time zone,
      CONSTRAINT PK_role_user PRIMARY KEY (id)

);


CREATE TABLE PASSWORD_RESETS(
    email varchar(255) NOT NULL,
    token varchar(255) NOT NULL,
    created_at timestamp(0) without time zone
);


CREATE INDEX password_resets_email_index
    ON public.password_resets USING btree
    (email COLLATE pg_catalog."default")
    TABLESPACE pg_default;

CREATE TABLE ASISTENCIA(
	a_ci  numeric(15) NOT NULL,
	a_fechallegada timestamp  without time zone NOT NULL,
	a_fechasalida timestamp  without time zone NOT NULL,
	constraint PK_horario PRIMARY KEY(a_ci)
);

create table Usuario(
	u_username varchar(50),
  u_password varchar(255) NOT NULL,
  fk_clieNat numeric(10),
  fk_clieJur numeric(10),
  remember_token varchar(100) ,
  created_at timestamp(0) without time zone,
  updated_at timestamp(0) without time zone,
	constraint pk_usuario primary key(u_username),
	constraint fk_usuario_cn foreign key (fk_clienat) references clientenatural(c_n_rif),
	constraint fk_usuario_cj foreign key (fk_cliejur) references clientejuridico(c_j_rif)
);

CREATE sequence presupuesto_pcod_seq
increment by 1
start with 1;

CREATE TABLE PRESUPUESTO(
	P_cod integer NOT NULL DEFAULT nextval('presupuesto_pcod_seq'),
	P_validez numeric(10) ,
	P_monto numeric(20,2) NOT NULL,
	constraint PK_Presupuesto_cod primary key(p_cod)
);
CREATE sequence pro_pre_seq
increment by 1
start with 1;

CREATE TABLE PRO_PRE(
pp_id integer NOT NULL DEFAULT nextval('pro_pre_seq'),
pp_cantidad numeric(20),
pp_username varchar(50),
fk_prod_cod  integer,
fk_pre_cod integer,
constraint PK_PRO_PRE primary key (pp_id),
constraint ForaneaPro_Pre_pro Foreign key (fk_prod_cod) references producto(p_cod),
constraint ForaneaPro_Pre_pre Foreign key (fk_pre_cod ) references presupuesto(p_cod)
);
