<?php

// $router->get('/get','DetailsController@DetailsSelect');

// $router->post('/post','DetailsController@DetailsCreate');

// $router->put('/put','DetailsController@DetailsUpdate');

// $router->delete('/delete','DetailsController@DetailsDelete');

$router->get('/get','BuilderController@GetAllData');

$router->get('/getcolumn','BuilderController@GetAllColumn');

$router->post('/post','BuilderController@CreateData');

$router->put('/put','BuilderController@UpdateData');

$router->delete('/delete','BuilderController@DeleteData');
