<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
/*Admin Logout*/
$route['admin/logout'] = "backend/admin/logout";
/*Admin Logout*/
$route['admin/change_password'] = "backend/admin/change_password";
/*About us*/
$route['about'] = "home/about";
/*FAQ*/
$route['faq'] = "home/contact";
/*Contact Us*/
$route['contact'] = "home/contact";
/*Dashboard*/
$route['dashboard'] = "backend/dashboard";
/*Add New Products*/
$route['admin/product/add'] = "backend/products/add";
/*Products Pagination*/
$route['admin/products/(:num)'] = "backend/products/index/$1";
/*Store Pagination*/
$route['admin/stores/(:num)'] = "backend/stores/index/$1";
/*Swatches Pagination*/
$route['admin/swatches/(:num)'] = "backend/swatches/index/$1";
/*View Products @ backend*/
$route['admin/product/view/(:num)'] = "backend/products/view/$1";
/*View Store @ backend*/
$route['admin/store/view/(:num)'] = "backend/stores/view/$1";
/*View Swatches @ backend*/
$route['admin/swatche/view/(:num)'] = "backend/swatches/view/$1";
/*Edit Products*/
$route['admin/product/edit/(:num)'] = "backend/products/edit/$1";
/*Products In a collection*/
$route['admin/products/in_collection/(:num)'] = "backend/products/in_collection/$1";
/*Swatches In a collection*/
$route['admin/swatches/in_collection/(:num)'] = "backend/swatches/in_collection/$1";
/*Add New Swatche*/
$route['admin/swatche/add'] = "backend/swatches/add";
/*Edit Swatche*/
$route['admin/swatche/edit/(:num)'] = "backend/swatches/edit/$1";
/*Add New Collection*/
$route['admin/collection/add'] = "backend/collections/add";
/*Edit Collection*/
$route['admin/collection/edit/(:num)'] = "backend/collections/edit/$1";
/*Add New Store*/
$route['admin/store/add'] = "backend/stores/add";
/*Edit Store*/
$route['admin/store/edit/(:num)'] = "backend/stores/edit/$1";
/*List All Stores*/
$route['admin/stores'] = "backend/stores";
$route['admin/store'] = "backend/stores";
/*Add New Online Store*/
$route['admin/onlinestore/add'] = "backend/onlinestores/add";
/*Edit Online Store*/
$route['admin/onlinestore/edit/(:num)'] = "backend/onlinestores/edit/$1";
/*Delete Online Store*/
$route['admin/onlinestore/delete/(:num)'] = "backend/onlinestores/delete/$1";
/*List All Online Stores*/
$route['admin/onlinestores'] = "backend/onlinestores";
$route['admin/onlinestore'] = "backend/onlinestores";
/*Delete Store*/
$route['admin/store/delete/(:num)'] = "backend/stores/delete/$1";
/*Add New Page*/
$route['admin/page/add'] = "backend/pages/add";
/*Edit Page*/
$route['admin/page/edit/(:num)'] = "backend/pages/edit/$1";
/*List All Pages*/
$route['admin/pages'] = "backend/pages";
$route['admin/page'] = "backend/pages";
/*List All Collection*/
$route['admin/collections'] = "backend/collections";
$route['admin/collection'] = "backend/collections";
/*List All Products*/
$route['admin/products'] = "backend/products";
$route['admin/product'] = "backend/products";
/*List All Swatches*/
$route['admin/swatches'] = "backend/swatches";
$route['admin/swatche'] = "backend/swatches";
/*List All Slider*/
$route['admin/slider'] = "backend/slider";
/*Add New Slider*/
$route['admin/slider/add'] = "backend/slider/add";
/*Edit Slider*/
$route['admin/slider/edit/(:num)'] = "backend/slider/edit/$1";
/*Delete Product*/
$route['admin/product/delete/(:num)/(:any)'] = "backend/products/delete/$1/$2";
/*Delete Swatches*/
$route['admin/swatche/delete/(:num)/(:any)'] = "backend/swatches/delete/$1/$2";
/*Delete Collection*/
$route['admin/collection/delete/(:num)/(:any)'] = "backend/collections/delete/$1/$2";
/*Delete Page*/
$route['admin/page/delete/(:num)'] = "backend/pages/delete/$1";
/*Delete Slider*/
$route['admin/slider/delete/(:num)/(:any)'] = "backend/slider/delete/$1/$2";
/*Login*/
$route['admin'] = "backend/admin";
/*404*/
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */