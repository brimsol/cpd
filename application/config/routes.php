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
$route['admin/dishes/add'] = "backend/dishes/add";
/*Products Pagination*/
$route['admin/dishes/(:num)'] = "backend/dishes/index/$1";
/*Add New Products*/
$route['admin/special/add'] = "backend/special/add";
/*Add New Products*/
$route['admin/special/edit/(:num)'] = "backend/special/edit/$1";
/*Products Pagination*/
$route['admin/special/(:num)'] = "backend/special/index/$1";
/*View Products @ backend*/
$route['admin/dishes/view/(:num)'] = "backend/dishes/view/$1";
/*View Products @ backend*/
$route['admin/special/view/(:num)'] = "backend/special/view/$1";
/*View Store @ backend*/
$route['admin/store/view/(:num)'] = "backend/stores/view/$1";
/*View Swatches @ backend*/
$route['admin/swatche/view/(:num)'] = "backend/swatches/view/$1";
/*Edit Products*/
$route['admin/dishes/edit/(:num)'] = "backend/dishes/edit/$1";
/*Products In a collection*/
$route['admin/products/in_collection/(:num)'] = "backend/products/in_collection/$1";
/*Add New Collection*/
$route['admin/categories/add'] = "backend/categories/add";
/*Edit Collection*/
$route['admin/categories/edit/(:num)'] = "backend/categories/edit/$1";
/*Add New Page*/
$route['admin/page/add'] = "backend/pages/add";
/*Edit Page*/
$route['admin/page/edit/(:num)'] = "backend/pages/edit/$1";
/*List All Pages*/
$route['admin/pages'] = "backend/pages";
$route['admin/page'] = "backend/pages";
/*List All Categories*/
$route['admin/categories'] = "backend/categories";
/*List All Products*/
$route['admin/dishes'] = "backend/dishes";
/*List All Products*/
$route['admin/special'] = "backend/special";
/*List All Slider*/
$route['admin/slider'] = "backend/slider";
/*Add New Slider*/
$route['admin/slider/add'] = "backend/slider/add";
/*Edit Slider*/
$route['admin/slider/edit/(:num)'] = "backend/slider/edit/$1";
/*Delete Product*/
$route['admin/dishes/delete/(:num)/(:any)'] = "backend/dishes/delete/$1/$2";
/*Delete Swatches*/
$route['admin/categories/delete/(:num)'] = "backend/categories/delete/$1";
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