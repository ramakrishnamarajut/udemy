<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('home');
})->name('home');*/

Route::group(['prefix'=>'grouping'],function(){
    Route::get('/greet/{name?}', function ($name = null) {
        return view('actions.greet',['name' => $name]);
    })->name('greet');

    Route::get('/hug', function () {
        return view('actions.hug');
    })->name('hug');

    Route::get('/kiss', function () {
        return view('actions.kiss');
    })->name('kiss');

    Route::post('/niceform', function (\Illuminate\Http\Request $request) {
        if(isset($request['action']) && isset($request['name'])){
            if(strlen($request['name']) > 0){
                return view('actions.niceform',['action'=>$request['action'],'name'=>$request['name']]);
            }
            return redirect()->back();
        }
        return redirect()->back();
    })->name('niceform');
});
Route::get('/',[
    'uses' => 'NiceActionController@getHome'
]);
    
//Route::group(['prefix'=>'controllerintro'],function(){
    
    Route::get('/{action}/{name?}',[
        'uses'=>'NiceActionController@getNiceAction',
        'as'=>'niceaction'
    ]);
    
    Route::post('/nicepostaction',[
        'uses' => 'NiceActionController@postNiceAction',
        'as' => 'nicepostaction'
    ] );
//});