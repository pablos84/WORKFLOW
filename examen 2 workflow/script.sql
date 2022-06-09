create TABLE flujoproceso
(
    flujo varchar(3),
    proceso varchar(3),
    procesosiguiente varchar(3),
    tipo varchar(1),
    rol varchar(20),
    pantalla varchar(30)
);

insert into flujoproceso values ('F1', 'P1', 'P2',	'I', 'FRENTE',	'Inicio');
insert into flujoproceso values ('F1', 'P2', 'P3',	'P', 'FRENTE',	'PpreparaDocumentos');
insert into flujoproceso values ('F1', 'P3', 'P4',	'P', 'FRENTE',	'Presenta');
insert into flujoproceso values ('F1', 'P4', null, 'C', 'DIR. CARRERA',	'VerificaDocumentos');
insert into flujoproceso values ('F1', 'P5', 'P2',	'P', 'DIR. CARRERA',	'Observaciones');
insert into flujoproceso values ('F1', 'P6', 'P7',	'P', 'DIR. CARRERA',	'HabilitaFrente');
insert into flujoproceso values ('F1', 'P7', 'P8',	'P', 'DIR. CARRERA',	'RegistroFrente');
insert into flujoproceso values ('F1', 'P8', 'P9',	'P', 'DIR. CARRERA',	'NotificaRegistro');
insert into flujoproceso values ('F1', 'P9', null,	'F', 'FRENTE', 'VerificaRegistro');


create table flujoprocesocondicionante
(
    flujo varchar(3),
    proceso varchar(3),
    procesosi varchar(3),
    procesono varchar(3)
);


create table flujoprocesoseguimiento
(
    flujo varchar(3),
    proceso varchar(3),
    notramite integer,
    usuario varchar(20),
    fechainicio date,
    horainicio time,
    fechafin date,
    horafin time
);


insert into flujoprocesoseguimiento value ('F1',	'P1',	'1000',	'frente1',	'2022/05/21',	'12:00:00',	'2022/05/21',	'12:10:00');
insert into flujoprocesoseguimiento value ('F1',	'P2',	'1000',	'frente1',	'2022/05/21',	'12:10:00',	'2022/05/21',	'12:30:00');
insert into flujoprocesoseguimiento value ('F1',	'P3',	'1000',	'frente1',	'2022/05/25',	'15:00:00',	null, null);
insert into flujoprocesoseguimiento value ('F1',	'P1',	'1001',	'frente2',	'2022/05/21',	'15:00:00',	'2022/05/21',	'15:30:00');
insert into flujoprocesoseguimiento value ('F1',	'P2',	'1001',	'frente2',	'2022/05/21',	'15:30:00',	'2022/05/21',	'15:40:00');
insert into flujoprocesoseguimiento value ('F1',	'P3',	'1001',	'frente2',	'2022/05/25',	'18:00:00',	null, null);


create table rol
(
    id varchar(3);
    
);

insert into seguimiento values(100,'Moises','F1','P1','2021/10/13 10:00','2021/10/13 12:00');
insert into seguimiento values(100,'Moises','F1','P2','2021/10/13 12:00',null);
insert into seguimiento values(101,'German','F1','P1','2021/10/13 10:00','2021/10/13 12:00');
insert into seguimiento values(101,'German','F1','P2','2021/10/13 12:00',null);
insert into seguimiento values(102,'Melany','F2','P1','2021/10/13 08:00','2021/10/13 10:00');


create usuarios
(
usuario varchar(10),
contrasenia varchar(10),
rol varchar(10)
)

insert into usuarios values('Moises','123456','E');
insert into usuarios values('German','123456','E');
insert into usuarios values('Melany','123456','K')