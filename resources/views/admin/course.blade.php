@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Add Course</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
            @endif
						<form  method="post" action="/add-course" enctype="multipart/form-data">
							@csrf
       <div class="form-group">
								<label>Course Type</label>
								<select class="form-control form-control-sm" name="type_id">
									@foreach($courseType as $i => $course)
									<option value="{{$course->id}}">{{$course->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Course Name</label>
								<input type="text" name="name" class="form-control"  placeholder="e.g Business" required>
							</div>
       <div class="form-group">
								<label>Embeded Link</label>
								<textarea class="form-control editor" name="embed_link" rows="2"></textarea>
							</div>
       <div class="form-group">
								<label>Certificate</label>
								<select class="form-control form-control-sm" name="certificate_id">
									@foreach($certificates as $i => $certificate)
									 <option value="{{$certificate->id}}">{{$certificate->name}}</option>
									@endforeach
								</select>
							</div>
       <div class="form-group">
								<label>Course Category</label>
								<select class="form-control form-control-sm" name="course_category_id">
									@foreach($categories as $category)
									 <option value="{{$category->id}}">{{$category->title}}</option>
									@endforeach
								</select>
							</div>
       <div class="form-group">
								<label for="editor">Synopsis</label>
								<textarea class="form-control editor" name="synopsis" rows="7"></textarea>
							</div>
       <div class="form-group">
								<label for="editor">description</label>
								<textarea class="form-control editor"  id="editor" name="description"></textarea>
							</div>
						
							<div class="form-group">
								<label> Image
									<small class="form-text text-muted">Required Dimension: 1440px X 326px</small>
								</label>								
								<input type="file" name="image" class="form-control">
							</div>

							<div class="form-group">
								<label> PDF <small class="form-text text-muted">Maximum Size: 20MB</small>
								</label>								
								<input type="file" name="pdf" class="form-control">
							</div>
							
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		

		<style>
			.ck-editor__editable_inline{
				height: 15rem;
			}
		</style>
@endsection
    