<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\SliderModel;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
    	return view('backend.slider.index');
    }

    public function create(){
    	$model = new SliderModel;
    	return view('backend.slider.form',compact('model'));
    }
}
