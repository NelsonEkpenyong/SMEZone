@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Add Course Category</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
            @endif
						<form  method="post" action="/add-course-category" enctype="multipart/form-data">
							@csrf
							
							<div class="form-group">
								<label for="exampleInputUsername1">Category Name</label>
								<input type="text" name="title" class="form-control"  placeholder="e.g Finance" required>
							</div>
						
							<div class="form-group">
								<label for="editor">Category Description</label>
								<textarea class="form-control editor" name="description"></textarea>
							</div>
							
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
@endsection
    