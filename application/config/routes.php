<?php

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


// Default route to Welcome controller
$route['default_controller'] = 'welcome'; 


// Frontend Routes
$route['home'] = 'FrontEnd_Controller/Main';  
$route['about/principlemessage'] = 'FrontEnd_Controller/Main/principlemessage';  
$route['about/schoolvision'] = 'FrontEnd_Controller/Main/schoolvision';  
$route['about/schoolmission'] = 'FrontEnd_Controller/Main/schoolmission';  
$route['about/schoolmanagment'] = 'FrontEnd_Controller/Main/schoolmanagment';  
$route['about/adminstaff'] = 'FrontEnd_Controller/Main/adminstaff';  
$route['about/rulesregulations'] = 'FrontEnd_Controller/Main/rulesregulations';  
$route['about/faqs'] = 'FrontEnd_Controller/Main/faqs';
$route['acadimics/schooltime'] = 'FrontEnd_Controller/Main/schooltime';
$route['acadimics/calender'] = 'FrontEnd_Controller/Main/calender';
$route['acadimics/task'] = 'FrontEnd_Controller/Main/task';
$route['acadimics/uniform'] = 'FrontEnd_Controller/Main/uniform';
$route['acadimics/datesheet'] = 'FrontEnd_Controller/Main/datesheet';
$route['acadimics/worksheet'] = 'FrontEnd_Controller/Main/worksheet';
$route['acadimics/forms'] = 'FrontEnd_Controller/Main/forms';
$route['acadimics/facaulty'] = 'FrontEnd_Controller/Main/faculty';
$route['admission/admissiontest'] = 'FrontEnd_Controller/Main/admissiontest';
$route['admission/admissionreg'] = 'FrontEnd_Controller/Main/admissionreg';
$route['admission/feesstructure'] = 'FrontEnd_Controller/Main/feesstructure';
$route['admission/admissionpolicy'] = 'FrontEnd_Controller/Main/admissionpolicy';
$route['admission/agecriteria'] = 'FrontEnd_Controller/Main/agecriteria';
$route['admission/admissiontests'] = 'FrontEnd_Controller/Main/admissiontests';
$route['achievments/fbise'] = 'FrontEnd_Controller/Main/fbise';
$route['achievments/successstories'] = 'FrontEnd_Controller/Main/successstories';
$route['facilities'] = 'FrontEnd_Controller/Main/facilities';
$route['gallery'] = 'FrontEnd_Controller/Main/gallery';
$route['contact'] = 'FrontEnd_Controller/Main/contact';
$route['events'] = 'FrontEnd_Controller/Main/events';



// Backend Routes
$route['login'] = 'BackEnd_Controller/Admin_login';
$route['auth/login'] = 'BackEnd_Controller/Admin_login/authenticate';
$route['auth/logout'] = 'BackEnd_Controller/Admin_login/logout';

// Dashboard
$route['admin/dashboard'] = 'BackEnd_Controller/Dashboard';
// Academics
$route['academics/faculty'] = 'BackEnd_Controller/Academics';
$route['academics/addfaculty'] = 'BackEnd_Controller/Academics/addfaculty';
$route['faculty/remove'] = 'BackEnd_Controller/Academics/deletefaculty';
$route['updatefaculty/(:num)'] = 'BackEnd_Controller/Academics/updatefaculty/$1';
// Gallery
$route['admin/gallery'] = 'BackEnd_Controller/Gallery';
$route['admin/addgallery'] = 'BackEnd_Controller/Gallery/addimages';
$route['deleteimages'] = 'BackEnd_Controller/Gallery/delete';
$route['updateimages/(:num)'] = 'BackEnd_Controller/Gallery/updateimages/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
