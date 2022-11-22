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
													<div class="form-group col-lg-8">
													<label for="title">Title</label>
													<input type="text" id="title" class="form-control-file form-control" name="title">
													@error('title')
													<p style="color:red">{{$message}}</p>
													@enderror
													</div>

													<div class="form-group col-lg-8">
													<label for="shortDesc">Description</label>
													<input type="text" id="shortDesc" class="form-control-file form-control" name="description">
													@error('description')
													<p style="color:red">{{$message}}</p>
													@enderror
													</div>

													<div class="form-group">
													<label for="slide">Image</label>
													<input type="file" id="slide" class="form-control-file" name="image">
													@if(!empty($model->image))
													<img src="{{'/projects/thumbnail/'.$model->image}}" />
													@endif
													@error('image')
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