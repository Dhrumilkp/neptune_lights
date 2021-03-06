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
$route['default_controller'] = 'welcome';
$route['admin'] = 'Admin/Admin_controller';
$route['auth'] = 'Admin/Admin_controller/auth';
$route['home'] = 'Admin/Admin_controller/home';
$route['logout'] = 'Admin/Admin_controller/logout';
$route['categories'] = 'Admin/Admin_controller/categories';
$route['products'] = 'Admin/Admin_controller/products';
$route['createnewmaincat'] = 'Admin/Admin_controller/createnewmaincat';
$route['delete_cat'] = 'Admin/Admin_controller/delete_cat';
$route['add_new_sub_cat'] = 'Admin/Admin_controller/add_new_sub_cat';
$route['delete_sub_cat'] = 'Admin/Admin_controller/delete_sub_cat';
$route['upload_new_product'] = 'Admin/Admin_controller/upload_new_product';
$route['sliders'] = 'Admin/Admin_controller/sliders';
$route['createnew_slider'] = 'Admin/Admin_controller/createnew_slider';
$route['delete_a_product'] = 'Admin/Admin_controller/delete_a_product';
$route['delete_slider_from_page'] = 'Admin/Admin_controller/delete_slider_from_page';
$route['contactus'] = 'Admin/Admin_controller/contactus';
$route['update_contact_info'] = 'Admin/Admin_controller/update_contact_info';
$route['category/(:any)'] = 'welcome/category_fetching/$1';
$route['view-product/(:any)'] = 'welcome/product_single_page/$1';
$route['all-product/(:any)'] = 'welcome/product_all/$1';
$route['contact-us'] = 'welcome/contact_us';
$route['landing'] = 'welcome/landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
