//Route
$router->get('/get',['middleware'=>'auth', 'uses'=>'DetailsController@GetAllData']);


//In app.php uncomment
$app->register(App\Providers\AuthServiceProvider::class);

$app->routeMiddleware([
    'auth' => App\Http\Middleware\Authenticate::class,
]);



//In AuthServiceProvider.php configure
 public function boot()
    {
        $this->app['auth']->viaRequest('api', function ($request) {
            $access_token = $request->header('access_token');
            if($access_token=='123') {
                return new User();
            }else{
                return null;
            }
        });
    }
