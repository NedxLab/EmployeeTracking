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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'adminauth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// estacode
$route['user'] = "user/index";
$route['userEdit/(:any)'] = "user/edit/$1";
$route['userUpdate/(:any)']['put'] = "user/update/$1";
$route['userdelete/(:any)']['delete'] = "user/delete/$1";

// estacode
$route['estacode'] = "estacode/index";
$route['estacodeCreate']['post'] = "estacode/store";
$route['estacodeEdit/(:any)'] = "estacode/edit/$1";
$route['estacodeUpdate/(:any)']['put'] = "estacode/update/$1";
$route['estacodedelete/(:any)']['delete'] = "estacode/delete/$1";

// ticketing
$route['ticketing'] = "ticketing/index";
$route['ticketingCreate']['post'] = "ticketing/store";
$route['ticketingEdit/(:any)'] = "ticketing/edit/$1";
$route['ticketingUpdate/(:any)']['put'] = "ticketing/update/$1";
$route['ticketingdelete/(:any)']['delete'] = "ticketing/delete/$1";

// program-fee
$route['programfee'] = "programfee/index";
$route['programfeeCreate']['post'] = "programfee/store";
$route['programfeeEdit/(:any)'] = "programfee/edit/$1";
$route['programfeeUpdate/(:any)']['put'] = "programfee/update/$1";
$route['programfeedelete/(:any)']['delete'] = "programfee/delete/$1";