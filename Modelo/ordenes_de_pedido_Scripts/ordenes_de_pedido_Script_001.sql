use bd_ordenes_de_pedido_rdw;
create table tbl_orden_trabajo_info_seccion_uno(pk_ord_tra_inf_sec_uno bigint(50) primary key auto_increment, fk_empresa bigint(50), fk_vehiculo bigint(50), 
nombre_completo_vehiculo varchar(150), celular_vehiculo varchar(15), version_regisbus varchar(15), placa varchar(15), numero_interno varchar(15), 
nombre_completo_propietario varchar(150), celular_propietario varchar(15), fecha_registro varchar(13));