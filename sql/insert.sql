insert into roles values(1,'admin','Administrador');
insert into roles values(2,'user','Usuario');
insert into users values(1,'User','user@example.com','secret');
insert into users values(2,'Admin','admin@example.com','secret');
insert into role_user values(1,2,1);
insert into role_user values(2,1,2);
