CREATE TABLE PRODUCTO (
    p_cod numeric(20),
    p_nombre varchar(50),
    p_tipo varchar(50),
    p_precio numeric(20,3),
    p_imagen varchar(200),
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
constraint Lugar_check_tipo check( l_tipo in('estado','municipio','parroquia'))
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

CREATE TABLE ROLE_USER(
      id integer NOT NULL DEFAULT nextval('role_user_id_seq'),
      role_id integer NOT NULL,
      user_id integer NOT NULL,
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

CREATE sequence users_id_seq
increment by 1
start with 1;

CREATE TABLE  users(
  id integer NOT NULL DEFAULT nextval('users_id_seq'),
     name varchar(255)  NOT NULL,
     email varchar(255) NOT NULL,
     password varchar(255) NOT NULL,
     remember_token varchar(100) ,
     created_at timestamp(0) without time zone,
     updated_at timestamp(0) without time zone,
     CONSTRAINT PK_id_users PRIMARY KEY (id),
     CONSTRAINT users_email_unique UNIQUE (email)
);

CREATE TABLE ASISTENCIA(
	a_ci  numeric(15) NOT NULL,
	a_fechallegada timestamp  without time zone NOT NULL,
	a_fechasalida timestamp  without time zone NOT NULL,
	constraint PK_horario PRIMARY KEY(a_ci)
);
