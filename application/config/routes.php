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

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//   ____          _                            
//  / ___|   _ ___| |_ ___  _ __ ___   ___ _ __ 
// | |  | | | / __| __/ _ \| '_ ` _ \ / _ \ '__|
// | |__| |_| \__ \ || (_) | | | | | |  __/ |   
//  \____\__,_|___/\__\___/|_| |_| |_|\___|_|   
                                             
$route['default_controller'] = 'front/index';
$route['dashboard'] ='front/dashboard';
$route['categories'] ='front/category';
$route['subcategories/(:num)'] ='front/SubCategory';
$route['products/(:num)'] ='front/Products';
$route['logout'] ='front/Logout';

// __     __             _            
// \ \   / /__ _ __   __| | ___  _ __ 
//  \ \ / / _ \ '_ \ / _` |/ _ \| '__|
//   \ V /  __/ | | | (_| | (_) | |   
//    \_/ \___|_| |_|\__,_|\___/|_|  

$route['vendor/login'] = 'vendor/index';
$route['vendor/dashboard'] ='vendor/Dashboard';
$route['vendor/logout'] ='vendor/Logout';


//     _       _           _       _     _             _             
//    / \   __| |_ __ ___ (_)_ __ (_)___| |_ _ __ __ _| |_ ___  _ __ 
//   / _ \ / _` | '_ ` _ \| | '_ \| / __| __| '__/ _` | __/ _ \| '__|
//  / ___ \ (_| | | | | | | | | | | \__ \ |_| | | (_| | || (_) | |   
// /_/   \_\__,_|_| |_| |_|_|_| |_|_|___/\__|_|  \__,_|\__\___/|_|   

$route['admin/login'] = 'admin/index';
$route['admin/dashboard'] ='admin/Dashboard';
$route['admin/logout'] ='admin/Logout';