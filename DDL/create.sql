--se deben crear las tablas antes de hacerle referencia
CREATE TABLE ARSENAL(
	  A_numero integer,
	  A_tamañoD numeric(20,2) ,
	  A_disponibilidad numeric(20,2) ,
	constraint PK_arsenal_numero primary key(A_numero)
);

CREATE TABLE SALARIO(
	S_numero	integer	,
	S_monto		numeric(20,2) ,
	S_descuento	numeric(3,2),
	CONSTRAINT PK_Salario_numero PRIMARY KEY(S_numero)
);

CREATE TABLE Empleado(
	E_ci integer,
	E_nacionalidad	varchar(30)	NOT NULL,
	E_especialidad	varchar(50)	NOT NULL,
	E_fecha_ingreso timestamp NOT NULL,
	FK_salario integer		NOT NULL,
	CONSTRAINT PK_Empleado PRIMARY KEY(E_ci)  ,
	constraint FK_Empleado_salario FOREIGN key(FK_salario) references SALARIO(S_numero)
);

CREATE TABLE DIARIO(
	D_cod integer ,
  D_descripcion varchar(200) NOT NULL,
	D_fec_inicio timestamp NOT NULL,
	D_fecha_fin	timestamp NOT NULL,
	FK_empleado integer NOT NULL,
	CONSTRAINT PK_Diario_cod PRIMARY KEY(D_cod),
	CONSTRAINT FK_EMPLEADO_DIARIO FOREIGN KEY(FK_empleado) REFERENCES EMPLEADO(E_ci)
);

CREATE TABLE PRODUCTO (
    p_cod numeric(20),
    p_nombre varchar(50),
    p_tipo varchar(50),
    p_precio numeric(20,3),
    p_imagen varchar(200),
    p_descripcion varchar (200),
    p_cantidad numeric(20),
    FK_arsenal integer,
    FK_diario integer,
    updated_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    constraint PK_producto Primary Key(p_cod),
    constraint FK_producto_arsenal foreign Key(FK_arsenal) references ARSENAL(A_numero),
    constraint FK_producto_diario foreign Key(FK_diario) references Diario(D_cod)
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

create table Usuario(
	u_username varchar(50),
  u_password varchar(255) NOT NULL,
  remember_token varchar(100) ,
  created_at timestamp(0) without time zone,
  updated_at timestamp(0) without time zone,
	constraint pk_usuario primary key(u_username)
);

Create table ClienteNatural(
	C_N_rif numeric(10),
	C_N_cedula numeric(10) NOT NULL,
	C_N_pnombre varchar(30) NOT NULL,
	C_N_snombre varchar(30),
	C_N_papellido varchar(30) NOT NULL,
	C_N_sapellido varchar(30),
	C_N_correo varchar(100) NOT NULL,
  C_N_avatar varchar(191),
  fk_usuario varchar(50),
	fk_Lugar numeric(5) NOT NULL,
	constraint PK_ClienteNatural Primary Key(C_N_rif),
	constraint FK_ClienteNatural_Lugar foreign Key(fk_Lugar) references Lugar(l_cod),
  constraint FK_clientenatural_usuario foreign key (fk_usuario) references Usuario(u_username),
  constraint checkcorreo_clientenatural check(C_N_correo LIKE '%@%.com')
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
  fk_usuario varchar(50),
	constraint pk_clientejuridico Primary Key(c_j_rif),
  constraint FK_clientejuridico_usuario foreign key (fk_usuario) references Usuario(u_username),
  constraint checkcorreo_clientejridico check(c_j_correo LIKE '%@%.com')
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
    t_tipoTamano varchar(10) NOT NULL,
    t_nombre varchar(50) NOT NULL,
    t_imagen varchar(200),
    fk_lugar numeric(5) NOT NULL,
    constraint PK_Tienda PRIMARY KEY(t_cod),
    constraint FK_Tienda_Lugar foreign key(fk_lugar) references Lugar(l_cod),
    constraint check_tipo_tamaño_tienda check(t_tipoTamano in ('Grande','Mediana','Pequeña'))
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

    CREATE TABLE HORARIO (
    	H_cod	integer,
    	H_tipoTurno	varchar(30)	 NOT NULL,
    	H_fechaLlegada timestamp   NOT NULL,
    	H_fechaSalida	timestamp  NOT NULL,
    	CONSTRAINT PK_horario_cod PRIMARY KEY(H_cod),
    	CONSTRAINT check_horario check(H_tipoTurno in('Vespertino','Mañana','Noche'))

    );

CREATE TABLE ASISTENCIA(
	a_ci  numeric(15) NOT NULL,
	a_fechallegada timestamp  without time zone NOT NULL,
	a_fechasalida timestamp  without time zone NOT NULL,
  FK_horario integer,
  FK_empleado integer,
	constraint PK_horario PRIMARY KEY(a_ci),
  constraint ForaneaAsis_hor Foreign key (FK_horario) references HORARIO(h_cod),
  constraint ForaneaAsis_empl Foreign key (FK_empleado) references EMPLEADO(E_ci)
);

CREATE TABLE PEDIDO(
  P_nombre varchar(50),
  p_tipo   varchar(50),
  FK_Tienda integer,
  FK_usuario varchar(50),
  constraint PK_pedido primary key(P_nombre),
  CONSTRAINT FK_Tienda FOREIGN KEY(FK_Tienda) REFERENCES TIENDA(T_cod),
  CONSTRAINT  FK_usuario  FOREIGN KEY(FK_usuario ) REFERENCES USUARIO(u_username)
);

CREATE sequence presupuesto_pcod_seq
increment by 1
start with 1;

CREATE TABLE PRESUPUESTO(
	P_cod integer NOT NULL DEFAULT nextval('presupuesto_pcod_seq'),
	P_validez timestamp ,
	P_monto numeric(20,2) NOT NULL,
  FK_diario integer,
  FK_pedido varchar(100),
  constraint PK_Presupuesto_cod primary key(p_cod),
  constraint FK_Pre_diario Foreign key (FK_diario) references DIARIO(D_cod),
  constraint FK_Pre_pedido Foreign key (FK_pedido ) references Pedido(P_nombre)
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

create table TIPO_CARAMELO(
	c_cod integer,
	c_nombre varchar(50),
	c_descripcion varchar(200),
	FK_producto integer,
	constraint PK_tipo_caramelo primary key(c_cod),
  CONSTRAINT FK_producto_tipo_caramelo Foreign key(FK_producto) references PRODUCTO(p_cod)
);


CREATE TABLE DEPARTAMENTO(
	D_numero integer,
	D_funcion varchar(50) NOT NULL,
	D_tipo	varchar(50) NOT NULL,
	constraint PK_departamento_nu primary key(D_numero),
	constraint check_Departamento_numero check(D_numero in (1,2,3,4,5,6,7,8,9)),
	constraint check_departamento_tipo check (D_tipo in ('venta','pedido','despacho','entrega'))
);



CREATE TABLE PED_DEP(
  PD_cod integer,
  PD_fechapedido timestamp,
  PD_fechaentrega timestamp,
  FK_pedido varchar(50),
  FK_departamento integer,
  constraint PK_ped_dep primary key(PD_cod),
  CONSTRAINT FK_PD_pedido FOREIGN KEY(FK_pedido) REFERENCES PEDIDO(P_nombre) ,
  CONSTRAINT FK_PD_departamento FOREIGN KEY(FK_departamento)   REFERENCES DEPARTAMENTO(D_numero)
);

CREATE TABLE STATUS(
	S_cod integer,
	S_estado varchar(30) NOT NULL,
	CONSTRAINT PK_status_cod PRIMARY KEY(S_cod),
	CONSTRAINT check_status check(S_estado in('Listo','Send-Fabrica','Send-Pedido'))
);

CREATE TABLE PED_STA(
  PS_cod integer,
  FK_pedido varchar(50),
  FK_status integer,
  constraint PK_PED_STA primary key(PS_cod ),
  CONSTRAINT FK_PS_pedido FOREIGN KEY(FK_pedido) REFERENCES PEDIDO(P_nombre)  ,
  CONSTRAINT FK_PD_status FOREIGN KEY(FK_status) REFERENCES STATUS(S_cod)
);

CREATE TABLE CARNET(
  C_numero integer,
  C_nombre varchar(100),
  C_apellido varchar(100),
  C_fecha_reg timestamp,
  FK_clientenatural integer,
  FK_clientejuridido integer,
  constraint PK_CARNET primary key(C_numero),
  CONSTRAINT FK_clientenatural FOREIGN KEY(FK_clientenatural)  REFERENCES ClienteNatural(C_N_rif)  ,
  CONSTRAINT FK_clientejuridido FOREIGN KEY(FK_clientejuridido) REFERENCES  clientejuridico(C_J_rif)
);

CREATE TABLE VENTA(
	V_numeroFac integer ,
	V_fechaFac	timestamp NOT NULL,
	FK_pedido 	varchar(50),
  FK_departamento  integer,
  FK_ped_dep  integer,
	constraint PK_venta_cod primary key(V_numeroFac),
	constraint FK_venta_pedido Foreign key(FK_pedido) references PEDIDO(P_nombre),
  constraint FK_venta_departamento Foreign key(FK_departamento)  references DEPARTAMENTO(D_numero),
  constraint FK_venta_ped_dep Foreign key(FK_ped_dep) references PED_DEP(PD_cod)
);

CREATE TABLE TEXTURA(
	T_cod	integer,
	T_tipo varchar(30) NOT NULL,
	T_tipoCaramelo integer NOT NULL,
	CONSTRAINT PK_Textura_cod PRIMARY KEY(T_cod),
	CONSTRAINT FK_Textura_tipo_car FOREIGN KEY(T_tipoCaramelo)  REFERENCES TIPO_CARAMELO (c_cod),
	CONSTRAINT Check_Textura_tipo check(T_tipo in ('Blando','Duro'))
);


CREATE TABLE DESCUENTO(
	D_cod integer,
	D_porcentaje numeric(3,2) NOT NULL,
	FK_presupuesto integer,
	CONSTRAINT PK_Descuento_cod PRIMARY KEY(D_cod),
	CONSTRAINT FK_empleado_descuento Foreign key(FK_presupuesto) references PRESUPUESTO(P_cod)
);


CREATE TABLE VACACION(
	V_numero	integer ,
	V_cantidadDias	integer NOT NULL,
	FK_empleado	   integer,
	CONSTRAINT PK_Vacacion_numero PRIMARY KEY(V_numero)  ,
	constraint FK_Vacaion_FK_empleado FOREIGN key(FK_empleado) references Empleado(E_ci)
);

CREATE TABLE DEBITO(
  MP_cod integer,
  MP_numero integer NOT NULL,
  MP_efectivo numeric(20,2),
  MP_D_tipo varchar(20) NOT NULL,
  MP_D_banco varchar(50) NOT NULL,
  CONSTRAINT PK_mp_debito PRIMARY KEY(MP_cod)  ,
  CONSTRAINT CHeck_tipo check(MP_D_tipo in ('Maestro','American Express'))
);

CREATE TABLE CREDITO(
  MP_cod integer ,
  MP_numero integer NOT NULL,
  MP_efectivo numeric(20,2),
  MP_C_tipo varchar(20) NOT NULL,
  MP_C_fechaVen timestamp NOT NULL,
  MP_C_numero integer,
  CONSTRAINT PK_mp_credito PRIMARY KEY(MP_cod)  ,
  CONSTRAINT CHeck_tipo check(MP_C_tipo in ('Gold','Platino','Visa'))

);

CREATE TABLE CHEQUE(
  MP_cod integer ,
  MP_numero integer NOT NULL,
  MP_efectivo numeric(20,2),
  MP_CH_cuenta  char(1) NOT NULL,
  MP_CH_banco varchar(50),
  CONSTRAINT PK_mp_cheque PRIMARY KEY(MP_cod) ,
  CONSTRAINT CHeck_cuenta check(MP_CH_cuenta in ('Ahorro','Corriente'))
);

CREATE TABLE PAGO(
  P_cod integer,
  P_monto numeric(20,2) NOT NULL,
  P_fechapago timestamp,
  FK_pedido varchar(50),
  FK_debito integer,
  FK_credito integer,
  FK_cheque integer,
  constraint PK_PAGO primary key(P_cod),
  constraint FK_Pago_pedido FOREIGN key(FK_pedido) references PEDIDO (P_nombre),
  constraint FK_Pago_debito FOREIGN key(FK_debito) references DEBITO (MP_cod ),
  constraint FK_Pago_credito FOREIGN key(FK_credito) references CREDITO (MP_cod ),
  constraint FK_Pago_cheque FOREIGN key(FK_cheque) references CHEQUE (MP_cod )
);
