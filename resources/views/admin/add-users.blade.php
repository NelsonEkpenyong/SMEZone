@extends('layouts.admin.app')
    @section('content')

		<div class="row">
   <div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Add Users</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
      @endif
						<form  method="post" action="/store-users" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label>Bulk upload users
									<small class="form-text text-muted">Required extensions: .xls, .xlsm, .xlsx</small>
								</label>								
								<input type="file" name="users" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection
    