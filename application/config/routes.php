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
// INICIO
$route["ventas/inicio"] = "clientes/inicio";
$route["ventas/registrarnota"] = "clientes/registrarnota";

/*
**********************************************************
***** ADMINISTRACION DE LAS VENTAS E INVENTARIOS ******
***********************************************************
*/
$route["iniciar"] = "clientes";
$route["ventas/laboratorio"] = "clientes/laboratorio";

//USUARIOS
$route["ventas/crearusuario"] = "usuarios/crearusuarios";
$route["ventas/actualizarusuario"] = "usuarios/actualizarusuarioperfil";
$route["ventas/getusuario/(:num)"] = "usuarios/getusuariosid/$1";

//GASTOS
$route["ventas/creargasto"] = "gastos/creargasto";

//INVENTARIOS
$route["ventas/patologia"] = "clientes/patologia";
$route["ventas/crearproductos"] = "inventarios/createproductos";
$route["ventas/actualizarproductos"] = "inventarios/actualizarproductos";
$route["ventas/verproducto/(:num)"] = "inventarios/getProductoId/$1";
$route["ventas/traerstock/(:num)"] = "inventarios/getstock/$1";
$route["ventas/crearentrada"] = "inventarios/crearentrada";
$route["ventas/crearsalida"] = "inventarios/crearsalida";
$route["ventas/consultainventario/(:num)"] = "inventarios/getConsultaInventario/$1";
$route["ventas/consultarkardex"] = "inventarios/consultarkardex";
$route["ventas/actualizarimagen"] = "inventarios/actualizarimagen";
$route["ventas/eliminarproductos"] = "inventarios/eliminarproductos";


//VENTAS
$route["ventas/getproductoventa"] = "ventas/getproductoventa";
$route["ventas/generarpdfventas/(:any)"] = "ventas/pdfreciboventa/$1";
$route["ventas/verproducto/(:num)"] = "ventas/getproductoid/$1";
$route["ventas/crearventa"] = "ventas/crearventa";
$route["ventas/abrircaja"] = "ventas/guardaraperturacaja";
$route["ventas/cerrarcaja"] = "ventas/cerrarcaja";

$route["ventas/getventadetalle/(:num)"] = "ventas/getventadetalledevolucion/$1";
$route["ventas/devolucionventa"] = "ventas/devolucionventa";

//
$route["ventas/ecografias"] = "clientes/ecografias";
$route["ventas/gastos"] = "clientes/gastos";
$route["ventas/ventas"] = "clientes/ventas";
$route["iniciarsesionclientes"] = "login/iniciarsesionclientes";
$route["cerrarsesionclientes"] = "login/cerrarsesionclientes";



// DEVOLUCIONES
$route["ventas/devoluciones"] = "clientes/devoluciones";

//PROVEEDORES
$route["ventas/proveedores"] = "clientes/proveedores";
$route["ventas/crearproveedor"] = "proveedores/guardarproveedores";

//REPORTES
$route["ventas/reportedia/(:any)/(:any)/(:any)"] = "reportes/reportedia/$1/$2/$3";
$route["ventas/reportecategoriaventa/(:any)/(:any)/(:any)"] = "reportes/Reporteventacategoria/$1/$2/$3";
$route["ventas/gananciageneral"] = "reportes/gananciageneral";
$route["ventas/reportekardex/(:any)/(:any)"] = "reportes/reportekardex/$1/$2";
$route["ventas/reporteinventario/(:num)"] = "reportes/getinventariototal/$1";
$route["ventas/reportegastos/(:any)/(:any)"] = "reportes/getgastos/$1/$2";
$route["ventas/reportesumacategorias/(:any)/(:any)"] = "reportes/gettodascategoriastotal/$1/$2";


// ECOMMERCE
$route["ecommerce/inicio"] = "ecommerce";
