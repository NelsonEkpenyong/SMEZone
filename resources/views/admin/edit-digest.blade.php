@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Edit Radio Digest</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
            @endif
						<form  method="post" action="/admin/update-digest/{{$digest->id}}" enctype="multipart/form-data">
							@csrf
       
							<div class="form-group">
								<label>Digest Name</label>
								<input type="text" name="digest_name" class="form-control" value="{{$digest->digest_name}}">
							</div>
       <div class="form-group">
								<label>Digest Link</label>
								<textarea class="form-control editor" name="digest_link" rows="5">{{$digest->digest_link}}</textarea>
							</div>

							<div class="form-group">
								<label> Digest Thunbnail
									<small class="form-text text-muted">Required Dimension: 601 X 260px</small>
								</label>								
								<input type="file" name="digest_thumbnail" class="form-control mb-3">
        <img class="" src="{{asset('/images/'. $digest->digest_thumbnail) }} "width="193" height="130"/>
							</div>
							
							<button type="submit" class="btn btn-primary mr-2">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection
    