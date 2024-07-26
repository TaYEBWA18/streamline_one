<?php
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//the home page default routr
Route::get('/', function () {
    return view('welcome');
})->name('home');

//To Return a welcome message
Route::get('/welcome', function(){
    return'Welcome to Stream';
});

//The contact us page
Route::get('/contact', function(){
    return view('contactus');
})->name('contact');

//Named Route for about us

Route::get('/about', function(){
    return view('about');
})->name('about');

//Routes with Parameters $Id
Route::get('/user/{id}', function($id){
    return 'Your user id is: '.$id;
});

//Optional Parameters Categories and items
Route::get('/Category/{Category?}/{item?}', function($Category = "No category selected",$item='No Item Selected')
{
    return 'Your category is: '.$Category. ' and item is: '.$item;
});

Route::get('/local', function(){
    return view('local');
});

//Grouped Routes for Admin 

Route::middleware(['radmin'])->prefix('admin')->group(function(){//applying the middleware to the route group
    Route::get('/settings', function(){
        return 'Admin Setting';
    })->name('admin_settings');

    Route::get('/dashboard', function(){
        return 'Admin Dashboard';
    })->name('admin_dashboard');
});


//un authorised route........
Route::get('/unauthorized', function(){
    Return('Unauthorised access: ');
})->name('unauthorized');

// Here, we need to add resource route for product crud application.
Route::resource('/patients',PatientController::class);

//login route

Route::get('/login', function(){
   return view('login');
})->name('login');

Route::get('/sign_up', function(){
    return view('sign_up');
 })->name('sign_up');
 
