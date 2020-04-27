<? php


$router->get('/get','TestController@GetAllData');
$router->post('/post','TestController@CreateData');
$router->put('/put','TestController@UpdateData');
$router->delete('/delete','TestController@DeleteData');

$router->get('/getid','TestController@GetDataByID');
$router->get('/count','TestController@Count');
$router->get('/max','TestController@Max');
$router->get('/min','TestController@Min');
$router->get('/avg','TestController@Avg');
$router->get('/sum','TestController@Sum');
