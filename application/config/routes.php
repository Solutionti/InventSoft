<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
**********************************************************
******* SOFTWARE MEDICAL CLINIC version 1.0.0.0 **********
***********************************************************
*/

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//LOGIN
$route["iniciarsesion"] = "login/iniciarsesion";
$route["cerrarsesion"] = "login/cerrarsesion";
$route["cerrarsesionclientes"] = "login/cerrarsesionclientes";

/*
**********************************************************
***** SECCION DE CONSULTA DE LABORATORIO PAGINA WEB ******
***********************************************************
*/
$route["iniciar"] = "clientes";
$route["clientes/laboratorio"] = "clientes/laboratorio";

//USUARIOS
$route["clientes/crearusuario"] = "usuarios/crearusuarios";
$route["clientes/actualizarusuario"] = "usuarios/actualizarusuarioperfil";
$route["clientes/getusuario/(:num)"] = "usuarios/getusuariosid/$1";

//GASTOS
$route["clientes/creargasto"] = "gastos/creargasto";

//INVENTARIOS
$route["clientes/patologia"] = "clientes/patologia";
$route["clientes/crearproductos"] = "inventarios/createproductos";
$route["clientes/actualizarproductos"] = "inventarios/actualizarproductos";
$route["clientes/verproducto/(:num)"] = "inventarios/getProductoId/$1";
$route["clientes/traerstock/(:num)"] = "inventarios/getstock/$1";
$route["clientes/crearentrada"] = "inventarios/crearentrada";
$route["clientes/crearsalida"] = "inventarios/crearsalida";
$route["clientes/consultainventario/(:num)"] = "inventarios/getConsultaInventario/$1";
$route["clientes/consultarkardex"] = "inventarios/consultarkardex";
$route["clientes/actualizarimagen"] = "inventarios/actualizarimagen";

//VENTAS
$route["clientes/getproductoventa"] = "ventas/getproductoventa";
$route["clientes/generarpdfventas/(:any)"] = "ventas/pdfreciboventa/$1";
$route["clientes/verproducto/(:num)"] = "ventas/getproductoid/$1";
$route["clientes/crearventa"] = "ventas/crearventa";
$route["clientes/abrircaja"] = "ventas/guardaraperturacaja";
$route["clientes/cerrarcaja"] = "ventas/cerrarcaja";
//
$route["clientes/ecografias"] = "clientes/ecografias";
$route["clientes/gastos"] = "clientes/gastos";
$route["clientes/ventas"] = "clientes/ventas";
$route["iniciarsesionclientes"] = "login/iniciarsesionclientes";
$route["cerrarsesionclientes"] = "login/cerrarsesionclientes";

// DEVOLUCIONES
$route["clientes/devoluciones"] = "clientes/devoluciones";

//PROVEEDORES
$route["clientes/proveedores"] = "clientes/proveedores";
$route["clientes/crearproveedor"] = "proveedores/guardarproveedores";

//REPORTES
$route["clientes/reportedia/(:any)/(:any)/(:any)"] = "reportes/reportedia/$1/$2/$3";
$route["clientes/reportecategoriaventa/(:any)/(:any)/(:any)"] = "reportes/Reporteventacategoria/$1/$2/$3";
$route["clientes/gananciageneral"] = "reportes/gananciageneral";
$route["clientes/reportekardex/(:any)/(:any)"] = "reportes/reportekardex/$1/$2";
$route["clientes/reporteinventario/(:num)"] = "reportes/getinventariototal/$1";




