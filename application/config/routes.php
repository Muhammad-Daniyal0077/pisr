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
$route['about/adminstaff'] = 'FrontEnd_Controller/Main/adminstaff';  
$route['about/schoolhistory'] = 'FrontEnd_Controller/Main/schoolhistory';
$route['acadimics/calender'] = 'FrontEnd_Controller/Main/calender';
$route['acadimics/task'] = 'FrontEnd_Controller/Main/task';
$route['acadimics/uniform'] = 'FrontEnd_Controller/Main/uniform';
$route['acadimics/datesheet'] = 'FrontEnd_Controller/Main/datesheet';
$route['acadimics/curriculum'] = 'FrontEnd_Controller/Main/curriculum';
$route['acadimics/Academic-sport-program'] = 'FrontEnd_Controller/Main/mtts';
$route['acadimics/specialprograms'] = 'FrontEnd_Controller/Main/specialprograms';
$route['acadimics/assesmentprogram'] = 'FrontEnd_Controller/Main/assesmentprogram';
$route['acadimics/facaulty'] = 'FrontEnd_Controller/Main/faculty';
$route['admission/admissiontest'] = 'FrontEnd_Controller/Main/admissiontest';
$route['admission/admissionreg'] = 'FrontEnd_Controller/Main/admissionreg';
$route['admission/feesstructure'] = 'FrontEnd_Controller/Main/feesstructure';
$route['admission/admissionpolicy'] = 'FrontEnd_Controller/Main/admissionpolicy';
$route['admission/agecriteria'] = 'FrontEnd_Controller/Main/agecriteria';
$route['admission/admissiontests'] = 'FrontEnd_Controller/Main/admissiontests';
$route['admission/faqs'] = 'FrontEnd_Controller/Main/faqs';
$route['achievments/fbise'] = 'FrontEnd_Controller/Main/fbise';
$route['achievments/successstories'] = 'FrontEnd_Controller/Main/successstories';
$route['facilities/general'] = 'FrontEnd_Controller/Main/general';
$route['facilities/libraries'] = 'FrontEnd_Controller/Main/libraries';
$route['facilities/laboratories'] = 'FrontEnd_Controller/Main/laboratories';
$route['facilities/laboratories'] = 'FrontEnd_Controller/Main/laboratories';
$route['facilities/extracurricular'] = 'FrontEnd_Controller/Main/extracurricular';
$route['gallery'] = 'FrontEnd_Controller/Main/gallery';
$route['contact'] = 'FrontEnd_Controller/Main/contact';
$route['downloads'] = 'FrontEnd_Controller/Main/downloads';
$route['events'] = 'FrontEnd_Controller/Main/events';
$route['pdzone'] = 'FrontEnd_Controller/Main/pdzone';
$route['careers/home'] = 'FrontEnd_Controller/Main/careers';
$route['careers/form'] = 'FrontEnd_Controller/Main/careersform';


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


$route['admin/our-team'] = 'BackEnd_Controller/Our_team';
$route['admin/our-team/create'] = 'BackEnd_Controller/Our_team/create';
$route['admin/our-team/edit/(:num)'] = 'BackEnd_Controller/Our_team/edit_our_team/$1';
$route['our_team/remove'] = 'BackEnd_Controller/Our_team/delete_our_team';


$route['admin/wall-of-fame/fbise'] = 'BackEnd_Controller/Wall_of_fame';
$route['admin/wall-of-fame/fbise/create'] = 'BackEnd_Controller/Wall_of_fame/fbise_create';
$route['admin/wall-of-fame/fbise/edit/(:num)'] = 'BackEnd_Controller/Wall_of_fame/fbise_edit/$1';
$route['fbise/remove'] = 'BackEnd_Controller/Wall_of_fame/delete_fbise';

//$route['admin/wall-of-fame'] = 'BackEnd_Controller/Wall_of_fame';

$route['admin/wall-of-fame/success-stories'] = 'BackEnd_Controller/Wall_of_fame/success_stories';
$route['admin/wall-of-fame/success-stories/create'] = 'BackEnd_Controller/Wall_of_fame/success_stories_create';
$route['admin/wall-of-fame/success-stories/edit/(:num)'] = 'BackEnd_Controller/Wall_of_fame/success_stories_edit/$1';
$route['success_stories/remove'] = 'BackEnd_Controller/Wall_of_fame/delete_success_stories';

$route['admin/home-page-settings/our-top-students'] = 'BackEnd_Controller/Home/top_students';
$route['admin/home-page-settings/our-top-students/create'] = 'BackEnd_Controller/Home/top_students_create';
$route['admin/home-page-settings/our-top-students/edit/(:num)'] = 'BackEnd_Controller/Home/top_students_edit/$1';
$route['our_top_students/remove'] = 'BackEnd_Controller/Home/delete_top_students';


$route['admin/faqs'] = 'BackEnd_Controller/Faq';
$route['admin/faqs/create'] = 'BackEnd_Controller/Faq/create';
$route['admin/faqs/edit/(:num)'] = 'BackEnd_Controller/Faq/edit_Faq/$1';
$route['faqs/remove'] = 'BackEnd_Controller/Faq/delete_faqs';


$route['admin/admission/school-admission-policy'] = 'BackEnd_Controller/Admission/school_admission_policy';
$route['admin/admission/admission-test-syllabus'] = 'BackEnd_Controller/Admission/admission_test_syllabus';
$route['admin/admission/admission-test-syllabus/create'] = 'BackEnd_Controller/Admission/admission_test_syllabus_create';
$route['admin/admission/admission-test-syllabus/edit/(:num)'] = 'BackEnd_Controller/Admission/admission_test_syllabus_edit/$1';
$route['syllabus/remove'] = 'BackEnd_Controller/Admission/delete_syllabus';


$route['academics/faculty-designation'] = 'BackEnd_Controller/Academics/faculty_designation';
$route['academics/faculty-designation/edit/(:num)'] = 'BackEnd_Controller/Academics/edit_faculty_designation/$1';
$route['designation/remove'] = 'BackEnd_Controller/Academics/delete_designation';

$route['careers/jobform'] = 'BackEnd_Controller/careers/jobform';
$route['academics/faculty-designation/edit/(:num)'] = 'BackEnd_Controller/Academics/edit_faculty_designation/$1';
$route['designation/remove'] = 'BackEnd_Controller/Academics/delete_designation';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
