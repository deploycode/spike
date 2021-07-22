<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('public', function () {
    return new \Symfony\Component\HttpFoundation\JsonResponse(array(

            "Domain"=>"tigocolombiaqa",
            "OrderId"=> "v52277740atmc-01",
            "State"=>"ready-for-handling",
            "LastState"=>"window-to-cancel",
            "LastChange"=>"2019-08-14T17:11:39.2550122Z",
            "CurrentChange"=>"2019-08-14T17:12:48.0965893Z",
            "Origin"=> array(
                        "Account"=>"tigocolombiaqa",
                        "Key"=>"vtexappkey-tigocolombiaqa-NSYTJL",
            )
    ));
});
