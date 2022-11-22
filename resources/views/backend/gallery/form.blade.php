@extends('backend.layout')
@section('content')
<div class="card card-default">
										@if(isset($heading))
										<div class="card-header card-header-border-bottom">
											<h2>{{$heading}}</h2>
										</div>
										@endif
										<div class="card-body">
										@if(!$model->exists)
											<form method="POST" action="/admin/gallery" enctype="multipart/form-data">
												@else
												<form method="POST" action="/admin/gallery/{{$model->id}}" enctype="multipart/form-data">
												@method('PUT')
												@endif
                                                @csrf
												<div class="form-group">
													<label for="exampleFormControlFile1">Image <span style="color:red">(1360px X 520px)</span></label>
													<input type="file" multiple="multiple" id="image" class="form-control-file" name="image">
													@if(!empty($model->image))
													<img src="{{'/projects/thumbnail/'.$model->image}}" />
													@endif
													@error('image')
													<p style="color:red">{{$message}}</p>
													@enderror
												</div>
												<div class="form-group" style="display: flex; align-items: flex-start; ">
													<label for="showonhome">
													<input type="checkbox" id="showonhome" class="" name="show_on_home">
													Show on home</label>
													@error('show_on_home')
													<p style="color:red">{{$message}}</p>
													@enderror
												</div>
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>
												</div>
											</form>
										</div>
									</div>
@endsection