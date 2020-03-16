use bd_ordenes_de_pedido_rdw;
create table tbl_orden_trabajo_info_seccion_dos(pk_ord_tra_inf_sec_dos bigint(50) primary key auto_increment, 
fk_ord_tra_inf_sec_uno bigint(50),hora_entrada varchar(13), hora_salida varchar(13), numeracion varchar(40), sello varchar(30), 
estado_luces_externas tinyint(2), estado_luces_internas tinyint(2), apertura_puerta tinyint(2),pito tinyint(2), golpes tinyint(2), rayones tinyint(2));