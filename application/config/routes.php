<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login/log';
$route['logout'] = 'Akun/logout';
// $route['login'] = 'login';
$route['akun'] = 'Akun/akun';
$route['akun/tambah'] = 'Akun/tambahakun';
$route['akun/edit/(:any)'] = 'Akun/editakun/$1';
$route['akun/hapus/(:any)'] = 'Akun/hapusakun/$1';
$route['produktivitas'] = 'Akun/produktivitas';
$route['log'] = 'Akun/log';
$route['monitor'] = 'Akun/monitor';
$route['klien'] = 'Klien/klien';
$route['klien/tambah'] = 'Klien/tambahklien';
$route['klien/edit/(:any)'] = 'Klien/editklien/$1';
$route['klien/hapus/(:any)'] = 'Klien/hapusklien/$1';
$route['riwayat/(:any)'] = 'Klien/riwayat/$1';
$route['order'] = 'Order/order';
$route['order/tambah'] = 'Order/tambahorder';
$route['order/edit/(:any)'] = 'Order/editorder/$1';
$route['order/hapus/(:any)'] = 'Order/hapusorder/$1';
$route['order/verifikasi/(:any)'] = 'Order/verifikasi/$1';
$route['order/selesai/(:any)'] = 'Order/selesai/$1';
$route['protokol'] = 'Protokol/protokol';
$route['protokol/tambah'] = 'Protokol/tambahprotokol';
$route['protokol/edit/(:any)'] = 'Protokol/editprotokol/$1';
$route['protokol/hapus/(:any)'] = 'Protokol/hapusprotokol/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
