@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Add News</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
            @endif
						<form  method="post" action="/add-news" enctype="multipart/form-data">
							@csrf
       <div class="form-group">
								<label>News Title</label>
								<input type="text" name="news_title" class="form-control"  placeholder="Title" required>
							</div>

       <div class="form-group">
								<label>Audience</label>
								<select class="form-control form-control-sm" name="role_id">
									@foreach($roles as $role)
									 <option value="{{$role->id}}">{{$role->name}}</option>
									@endforeach
								</select>
							</div>

       <div class="form-group">
								<label for="editor">Exerpts</label>
								<textarea class="form-control editor" name="excerpt"></textarea>
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
								<label> News PDF
									<small class="form-text text-muted">Required Dimension: 1440px X 326px</small>
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
    