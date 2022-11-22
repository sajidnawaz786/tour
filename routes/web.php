<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HomeController;
use App\Http\controllers\backend\UserController;
use App\Http\controllers\backend\GalleryController;
use App\Http\controllers\backend\SliderController;
use Illuminate\Support\Facades\Validator;
use App\Models\backend\SliderModel;
use App\Models\Product;
use App\Models\Quote;
use Illuminate\Http\Response;
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

Route::get('/', function () {
	$data['cars'] = Product::where('active',1)->get();
    return view('frontend.pages.home',$data);
});

Route::get('about', function () {
    return view('frontend.pages.about');
});

Route::get('gallery', function () {
    return view('frontend.pages.gallery');
});

Route::get('vehicles-list', function () {
    return view('frontend.pages.vehicles');
});

Route::post('sendQuot', function () {

	$req = request()->data;
	$data = array();
	parse_str($req, $data);
    $validator = Validator::make($data,[
    	'name' => 'required',
    	'contact' => 'required',
    	'cnic' => 'required',
    	'driver' => 'required',
    	'origin' => 'required',
    	'destination' => 'required',
    	'date' => 'required',
    	'booking_days' => 'required'
    ]);

    if ($validator->fails())
    {
        return response()->json($validator->errors());
    }

	$model = new Quote;
	$model->product_id = decrypt($data['product']);
	$model->name = $data['name'];
	$model->contact = $data['contact'];
	$model->cnic = $data['cnic'];
	$model->driver = $data['driver'];
	$model->origin = $data['origin'];
	$model->destination = $data['destination'];
	$model->booking_date = $data['date'];
	$model->booking_days = $data['booking_days'];
	$model->message = $data['message'];

	if($model->save()){
		return "success";
	}	else  {
		return "error";
	}

});

Route::prefix('admin/')->middleware('guest')->group(function(){
	Route::get('login', [UserController::class, 'login'])->name('login');
	Route::post('login', [UserController::class, 'loginUser']);
	Route::get('signup',[UserController::class,'signup']);
	Route::post('signup',[UserController::class,'store']);
});

Route::prefix('admin/')->middleware('auth')->group(function(){
	Route::get('dashboard',[HomeController::class, 'dashboard']);
	Route::get('logout',[UserController::class,'logout']);
	Route::resource('gallery', GalleryController::class);
	Route::resource('slides', SliderController::class);
});

Route::get('{slug}', function ($slug) {
	$data['car'] = Product::where('slug',$slug)->first();
    return view('frontend.pages.product',$data);
});