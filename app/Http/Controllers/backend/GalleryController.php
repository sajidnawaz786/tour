<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\GalleryModel;

class GalleryController extends Controller
{
    public function index(){

    	$data['heading'] = 'Gallery';
    	return view('backend.gallery.index',$data);
    }

    public function create(){
    	$model = new GalleryModel();
    	$data['heading'] = 'Add Gallery';
    	return view('backend.gallery.form', compact('model'), $data);
    }
}
