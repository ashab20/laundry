<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'AuthCtrl/login';
$route['registration'] = 'AuthCtrl/registration';
$route['logout']['get'] = 'AuthCtrl/logout';



// quick service
$route['quick/create']['get'] = 'QuickCtrl/step';
$route['quick/create']['post'] = 'QuickCtrl/add';
$route['quick/addcustomer']['get'] = 'QuickCtrl/customer_add';
$route['quick/update']['get'] = 'QuickCtrl/edit';
$route['quick/addproduct']['get'] = 'QuickCtrl/products_add';
$route['quick/findcustomer']['get'] = 'QuickCtrl/find_customer';

$route['dashboard'] = 'DashboardCtrl/index';


// search 
$route['search']["get"] = 'OrderCtrl/index';
$route['search/item']["get"] = 'OrderCtrl/search';

// Customers Routes
$route['customer/create']['get'] = 'CustomerCtrl/create';
$route['customer/create']['post'] = 'CustomerCtrl/create';
$route['customer/list']['get'] = 'CustomerCtrl/index';
$route['customer/update/(:num)']['get'] = 'CustomerCtrl/update/$1';
$route['customer/update/(:num)']['post'] = 'CustomerCtrl/update/$1';
$route['customer/delete/(:num)']['get'] = 'CustomerCtrl/delete/$1';

// order Routes
$route['order/laundry'] = 'OrderCtrl/laundry';
$route['order/tailor'] = 'OrderCtrl/tailor';
$route['order/delete/(:num)']['get'] = 'OrderCtrl/delete/$1';

// Service Routes
$route['service']['get'] = 'ServiceCtrl/index';
$route['service/laundry']['get'] = 'ServiceCtrl/laundry';
$route['service/tailor']['get'] = 'ServiceCtrl/tailor';
$route['service/create']['get'] = 'ServiceCtrl/create';
$route['service/create']['post'] = 'ServiceCtrl/create';
$route['service/update/(:num)']['get'] = 'ServiceCtrl/update/$1';
$route['service/update/(:num)']['post'] = 'ServiceCtrl/update/$1';
$route['service/delete/(:num)']['get'] = 'ServiceCtrl/delete/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
