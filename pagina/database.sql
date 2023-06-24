drop database if EXISTS kiosco;
create database kiosco;
use kiosco;

create table Dueño(
	id_due integer AUTO_INCREMENT, 
    usuario_due varchar(20),
	clave_due varchar(100) not null,
	modificar_producto varchar(100),
	ingresar_producto varchar(100),
	modificar_precio integer,
	ingresar_precio integer,
	primary key(id_due)
);

create table Empleado(
	id_emp integer AUTO_INCREMENT,
	nombre varchar(50),
	apellido varchar(50),
	ingeso_caja integer,
	egreso_caja integer,
	informe_falta_ventas boolean,
	primary key(id_emp)
);

create table Usser(
	usuario varchar(20),
	clave varchar(100) not null,
	primary key(usuario)
);

create table Producto(
	id_produ integer AUTO_INCREMENT,
	id_due integer ,
	id_emp integer ,
	descripcion varchar(100),
	precio integer,
	primary key(id_produ),
	foreign key(id_due) references Dueño(id_due),
	foreign key(id_emp) references Empleado(id_emp)
);

create table Pedido(
	id_pe integer AUTO_INCREMENT,
	id_produ integer,
	n_pedido integer,
	lista_producto varchar(100),
	primary key(id_pe),
	foreign key(id_produ) references Producto(id_produ)
);

create table Ticket(
	id_ti integer AUTO_INCREMENT,
	id_pe integer,
	precio_f integer, 
	primary key(id_ti),
	foreign key(id_pe) references Pedido(id_pe)
);

insert into Dueño (usuario_due,clave_due) values("Antonio","antonio80");