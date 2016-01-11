<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'ViewController@home');
    Route::get('/cont', ['middleware' => 'guest', 'uses'=>'ViewController@accounts']);
    Route::get('/trainings', 'ViewController@trainings');
    Route::get('/arii-de-studiu', 'ViewController@arii');
    Route::get('/panou-de-administrare', ['middleware'=>'auth', 'uses'=>'ViewController@panou']);
    Route::get('/contact', 'ViewController@contact');
    Route::get('/faq', 'ViewController@faq');
    Route::get('/hackathon', 'ViewController@hackathon');
    Route::get('/conferinta', 'ViewController@conferinta');
    Route::get('/logout', ['middleware'=>'auth', 'uses'=>'AccountController@logout']);


    Route::get('/trainer', ['middleware'=>'trainerAuth', 'uses'=>'ViewController@trainerIndex']);
    Route::get('/trainer/add-training', ['middleware'=>'trainerAuth', 'uses'=>'ViewController@trainerAdd']);
    Route::get('/trainer/selectParticipants/{id}', ['middleware'=>'trainerAuth', 'uses'=>'ViewController@trainerSelect']);



    Route::post('/requests/register', 'AccountController@registerAccount');
    Route::post('/requests/login', 'AccountController@login');
});*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'ViewController@home');
    Route::get('/cont', ['middleware' => 'guest', 'uses'=>'ViewController@accounts']);
    //Route::get('/trainings/{area?}', 'ViewController@trainings');
    Route::get('/trainings', 'ViewController@trainings');
    Route::get('/trainings/{training}', 'ViewController@training');
    Route::get('/arii-de-studiu', 'ViewController@arii');
    Route::get('/arii-de-studiu/subarii/{id_arie}', 'ViewController@subarii');
    Route::get('/panou-de-administrare', ['middleware'=>'auth', 'uses'=>'ViewController@panou']);
    Route::get('/contact', 'ViewController@contact');
    Route::get('/faq', 'ViewController@faq');
    Route::get('/hackathon', 'ViewController@hackathon');
    Route::get('/conferinta', 'ViewController@conferinta');
    Route::get('/logout', ['middleware'=>'auth', 'uses'=>'AccountController@logout']);


    Route::get('/trainer', ['middleware'=>'trainerAuth', 'uses'=>'ViewController@trainerIndex']);
    //Route::get('/trainer/add-training', ['middleware'=>'trainerAuth', 'uses'=>'ViewController@trainerAdd']);
    Route::get('/trainer/selectParticipants/{id}', ['middleware'=>'trainerAuth', 'uses'=>'ViewController@trainerSelect']);


    Route::post('/requests/register', 'AccountController@registerAccount');
    Route::post('/requests/login', 'AccountController@login');
    Route::post('/requests/addGroup', 'TrainingController@addGroup');
    Route::post('/requests/trainer/addTraining', ['middleware'=>'trainerAuth', 'uses'=>'TrainingController@addTraining']);
    Route::post('/requests/update', 'AccountController@updateUserInfo');
    Route::get('images/{filename}', function ($filename)
    {
        $path = storage_path() . '/images/' . $filename;

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    });
});