<?php 

/* View */
$router->get('', 'PageController@index');
$router->get('home', 'PageController@home');
$router->get('login', 'PageController@login');
$router->get('distribute', 'PageController@distribute');

/* Login */
$router->get('logout', 'LoginController@logout');
$router->post('auth', 'LoginController@login');

/* Upload */
$router->post('uploadfile', 'UploadController@upload');
$router->post('distributeupd', 'UploadController@distributeupd');

/* Register */
$router->get('registration', 'RegisterController@index');
$router->post('reg', 'RegisterController@register');