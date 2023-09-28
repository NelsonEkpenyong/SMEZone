@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Add Radio Digest</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
            @endif
						<form  method="post" action="/admin/store-digest" enctype="multipart/form-data">
							@csrf
       
							<div class="form-group">
								<label>Digest Name</label>
								<input type="text" name="digest_name" class="form-control"  placeholder="E.G. The real cost of high employee turnover" required>
							</div>
       <div class="form-group">
								<label>Digest Link</label>
								<textarea class="form-control editor" name="digest_link" rows="2"></textarea>
							</div>

							<div class="form-group">
								<label> Digest Thunbnail
									<small class="form-text text-muted">Required Dimension: 601 X 260px</small>
								</label>								
								<input type="file" name="digest_thumbnail" class="form-control">
							</div>
							
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection
    