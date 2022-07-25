<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test', function () {
//     event(new App\Events\StatusLiked('Someone'));
//     return "Event has been sent!";
// });

Route::get('send-email', [App\Http\Controllers\EmailController::class, 'sendEmail']);


Route::get('/', function () {
    return view('showNotification');
});

Route::get('getPusher', function (){
   return view('form_pusher');
});

Route::get('/pusher', function() {
    $total = 10;
    for ($i=0; $i <= $total; $i++) { 
        sleep(2);
        $percent = ($i/$total)*100;
        event(new App\Events\HelloPusherEvent($percent));
    }
    return redirect('getPusher');
});
