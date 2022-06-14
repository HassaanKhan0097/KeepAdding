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
$route['default_controller'] = 'KeepAdding';
// $route['default_controller'] = 'Products';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




// !!------------- Default Routes (Default)  ----------------------!!

$route['signin'] = 'KeepAdding/signin';
$route['signin_submit'] = 'KeepAdding/signin_submit';
$route['signout'] = 'KeepAdding/signout';

$route['signup'] = 'KeepAdding/signup';





// !!------------- Free Routes (Default)  ----------------------!!
$route['home'] = 'Index'; //here Index is chk from home
$route['order'] = 'Order'; //here Order is controller
$route['order/create'] = 'Order/create';
$route['order/delete/(:num)'] = 'Order/delete';
$route['order/update/(:num)'] = 'Order/update/$1';





// !!------------- Contractor Routes  ----------------------!!
$route['contractorpages'] = 'contractorpages/Index'; //here appraiserpages is folder -> Index is controller
// $route['contractorpages/create-channel'] = 'contractorpages/File';
// $route['contractorpages/logout'] = 'contractorpages/Index/logout';

// $route['contractorpages/workinprogress'] = 'appraiserpages/WorkInProgress';

// $route['appraiser/setup'] = 'appraiserpages/Setup';

// $route['appraiser/log'] = 'appraiserpages/Log';


// !!------------- Paypal Routes  ----------------------!!
    $route['paypal'] = 'Payment';
    $route['paypal/success'] = 'Payment/success';
    $route['paypal/fail'] = 'Payment/fail';
    $route['paypal/ipn'] = 'Payment/ipn';


    // $route['paypal/success'] = 'Paypal/success';
    // $route['paypal/fail'] = 'Paypal/fail';
    // $route['paypal/ipn'] = 'Paypal/ipn';