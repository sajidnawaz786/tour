@extends('backend.layout')
@section('content')

									<div class="card card-default">										
										<div class="card-header card-header-border-bottom">
											<h2>{{$heading}}</h2>
											<a href="/admin/gallery/create">
												<button class="btn btn-sm btn-primary" style="float:left">Add New</button> 
											</a>
										</div>
										<div class="card-body">
											<table class="table table-striped table-bordered">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Title</th>
														<th scope="col">Description</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
                                                    <?php $counter = 0; ?>
                                                    @if(isset($projects))
													@foreach($projects as $project)
                                                    <?php $counter++ ?>
                                                    <tr>
														<td scope="row">{{$counter}}</td>
														<td>{{$project->title}}</td>
														<td>{{$project->description}}</td>
														<td><a href="/admin/projects/{{$project->id}}">Edit</a>
														<form method="POST" action="/admin/projects/{{$project->id}}">
														@method('DELETE')
														@csrf
														<button type="submit" class="btn btn-primary">Delete</button>
														</form>
														</td>
													</tr>
													@endforeach
													@endif
												</tbody>
											</table>
										</div>
									</div>
								
@endsection