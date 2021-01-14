<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Front');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Front::index');
$routes->get('/privacy', 'Front::privacy');
$routes->get('/terms', 'Front::terms');
$routes->get('/login', 'Front::login');
$routes->get('/loginaction', 'Front::loginaction');
$routes->get('/logout', 'Front::logout');
$routes->get('/register', 'Front::register');
$routes->post('/registeraction', 'Front::registeraction');
$routes->get('/cregister', 'Front::cregister');
$routes->get('/clogin', 'Front::clogin');
$routes->get('/sregister', 'Front::sregister');
$routes->get('/slogin', 'Front::slogin');
$routes->get('/aregister', 'Front::aregister');
$routes->get('/alogin', 'Front::alogin');
$routes->get('/forgot', 'Front::forgot');
$routes->get('/profilesetup', 'Front::profilesetup');
$routes->get('/register/verify/email', 'Front::registerverifyemail');
$routes->get('/register/verify/phone', 'Front::registerverifyphone');


$routes->get('/applicant/dashboard', 'Applicant::dashboard');
$routes->get('/applicant/education', 'Applicant::education');
$routes->get('/applicant/experiences_container', 'Applicant::experiences_container');
$routes->get('/applicant/dashboard', 'Applicant::dashboard');
$routes->get('/applicant/teams', 'Applicant::teams');
$routes->get('/applicant/jobdash', 'Applicant::jobdash');
$routes->get('/applicant/events', 'Applicant::events');
$routes->post('/applicant/createeventaction', 'Applicant::createeventaction');
$routes->get('/applicant/allaboutyou', 'Applicant::allaboutyou');
$routes->get('/applicant/recommendations', 'Applicant::recommendations');
$routes->post('/applicant/recommendation/request', 'Applicant::recommendationrequest');
$routes->post('applicant/recommendation/offer', 'Applicant::recommendationoffer');
$routes->get('applicant/settings', 'Applicant::settings');
$routes->get('applicant/search', 'Applicant::search');
$routes->get('applicant/messages/inbox', 'Applicant::messagesinbox');
$routes->get('applicant/messages/sent', 'Applicant::messagessent');
$routes->get('/applicant/jobs', 'Applicant::jobs');

$routes->get('/company/jobdash', 'Company::jobdash');
$routes->get('/company/messages/inbox', 'Company::inbox');
$routes->get('/company/messages/sent', 'Company::sent');

$routes->get('/school/jobdash', 'School::jobdash');
$routes->get('/school/messages/inbox', 'School::inbox');
$routes->get('/school/messages/sent', 'School::sent');


$routes->get('/association/jobdash', 'Association::jobdash');
$routes->get('/association/messages/inbox', 'Association::inbox');
$routes->get('/association/messages/sent', 'Association::sent');


$routes->get('/applicant/recommendation/request/details/(:any)', 'Applicant::RecommendationRequestDetails/$1');
$routes->get('/applicant/recommendation/request/accept/(:any)', 'Applicant::RecommendationRequestAccept/$1');
$routes->get('/applicant/recommendation/offer/details/(:any)', 'Applicant::RecommendationOfferDetails/$1');
$routes->get('/company/message/details/(:any)/(:any)', 'Company::messagedetails/$1/$2');
$routes->get('/school/message/details/(:any)/(:any)', 'School::messagedetails/$1/$2');
$routes->get('/association/message/details/(:any)/(:any)', 'Association::messagedetails/$1/$2');

$routes->get('/applicant/event/(:any)', 'Applicant::event/$1');
$routes->get('/message/(:any)', 'Applicant::message/$1');
$routes->get('/team/(:any)/messages', 'Applicant::teammessages/$1');

$routes->get('applicant/jobdashmessages/(:any)', 'Applicant::jobdashmessages/$1');

$routes->get('verifyemail/(:any)/(:any)', 'Front::CompanyVerifyEmail/$1/$2');
//$routes->get('/(:any)', 'Front::profile/$1');/



/**
 * --------------------------------------------------------------------
 * Additional$routes->get('/applicant/events', 'Applicant::events'); Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
