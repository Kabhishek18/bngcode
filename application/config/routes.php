<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = 'front/PageNotFound';
$route['translate_uri_dashes'] = FALSE;

//   ____          _                            
//  / ___|   _ ___| |_ ___  _ __ ___   ___ _ __ 
// | |  | | | / __| __/ _ \| '_ ` _ \ / _ \ '__|
// | |__| |_| \__ \ || (_) | | | | | |  __/ |   
//  \____\__,_|___/\__\___/|_| |_| |_|\___|_|   
                                             
$route['default_controller'] = 'front/index';

$route['privacy'] = 'front/Privacy';
$route['about'] = 'front/About';
$route['terms'] = 'front/Terms';
$route['contact'] = 'front/Contact';
$route['pricings'] = 'front/Pricings';
$route['product-listing'] = 'front/ProductListing';
$route['dashboard'] ='front/dashboard';
$route['requirement'] ='front/Requirement';
$route['verify/(:any)/(:any)/(:any)/(:any)'] ='front/EmailVerification';
$route['logisticslead'] ='front/LogisticsLead';

$route['changeuser/(:any)/(:any)/(:any)/(:any)'] ='front/ResetPassword';

//DealerShip
$route['logistics'] ='front/Dealership';
$route['viewlead'] ='front/ViewLead';
//Category
$route['categories'] ='front/category';
//Category Single
$route['category/(:num)'] ='front/categorysingle';
//Category Productt
$route['subcategories/(:num)'] ='front/SubCategory';
//Product Single
$route['products/(:num)'] ='front/Products';
$route['logout'] ='front/Logout';

// __     __             _            
// \ \   / /__ _ __   __| | ___  _ __ 
//  \ \ / / _ \ '_ \ / _` |/ _ \| '__|
//   \ V /  __/ | | | (_| | (_) | |   
//    \_/ \___|_| |_|\__,_|\___/|_|  
$route['vendor'] = 'vendor/Index';
$route['vendor/login'] = 'vendor/Index';
// eMail Verfication @ front 
$route['vendor/dashboard'] ='vendor/Dashboard';
$route['change/(:any)/(:any)/(:any)/(:any)'] ='vendor/ResetPassword';
$route['vendor/profile'] ='vendor/Profile';
$route['vendor/requirement'] ='vendor/Requirement';
$route['AjaxRequest'] ='vendor/AjaxRequest';
$route['payment'] ='vendor/Payment';
$route['thankyou'] = 'vendor/RazorThankYou';
$route['checkout'] ='vendor/Checkout';

$route['cancelSubscrip'] ='vendor/cancelSubscrip';
//Category

$route['vendor/category'] ='vendor/Category';
$route['vendor/category/edit/(:num)'] ='vendor/CategoryAdd';
$route['vendor/category/add'] ='vendor/CategoryAdd';
//Product
$route['vendor/product'] ='vendor/Product';
$route['vendor/product/edit/(:num)'] ='vendor/ProductAdd';
$route['vendor/product/add'] ='vendor/ProductAdd';



$route['vendor/logout'] ='vendor/Logout';


//     _       _           _       _     _             _             
//    / \   __| |_ __ ___ (_)_ __ (_)___| |_ _ __ __ _| |_ ___  _ __ 
//   / _ \ / _` | '_ ` _ \| | '_ \| / __| __| '__/ _` | __/ _ \| '__|
//  / ___ \ (_| | | | | | | | | | | \__ \ |_| | | (_| | || (_) | |   
// /_/   \_\__,_|_| |_| |_|_|_| |_|_|___/\__|_|  \__,_|\__\___/|_|   

$route['admin/login'] = 'admin/index';
$route['admin/dashboard'] ='admin/Dashboard';
$route['admin/speciallist'] ='admin/SpecialList';
$route['admin/category'] ='admin/Category';
$route['admin/category/edit/(:num)'] ='admin/CategoryAdd';
$route['admin/category/add'] ='admin/CategoryAdd';

$route['admin/vendor'] ='admin/Vendor';
$route['admin/vendor/edit/(:num)'] ='admin/VendorAdd';
$route['admin/vendor/add'] ='admin/VendorAdd';



$route['admin/requirement'] ='admin/Requirement';
$route['admin/product'] ='admin/Product';
$route['admin/product/edit/(:num)'] ='admin/ProductAdd';
$route['admin/product/add'] ='admin/ProductAdd';

$route['admin/logout'] ='admin/Logout';