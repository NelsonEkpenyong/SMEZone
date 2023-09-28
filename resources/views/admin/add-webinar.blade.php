@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Add Webinar Recording</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
            @endif
						<form  method="post" action="/admin/webinar-recordings" enctype="multipart/form-data">
							@csrf
       
							<div class="form-group">
								<label>Webinar Name</label>
								<input type="text" name="webinar_name" class="form-control"  placeholder="E.G. The real cost of high employee turnover" required>
							</div>
       <div class="form-group">
								<label>Webinar Link</label>
								<textarea class="form-control editor" name="webinar_link" rows="2"></textarea>
							</div>

							<div class="form-group">
								<label> Webinar Thunbnail
									<small class="form-text text-muted">Required Dimension: 601 X 260px</small>
								</label>								
								<input type="file" name="webinar_thumbnail" class="form-control">
							</div>
							
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection
    