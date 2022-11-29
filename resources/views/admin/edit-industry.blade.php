@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Edit an Industry</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
            @endif
						<form  method="post" action="/admin/update-industry/{{$industry->id}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="exampleInputUsername1">Industry Name</label>
								<input type="text" name="industry" id="industry" class="form-control"  value="{{$industry->name}}" placeholder="e.g Oil and Gas" required>
        <input type="hidden" name="slug" id="slug">
							</div>
							
							<button type="submit" class="btn btn-primary mr-2" onclick="getInputValue()">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script>

      function getInputValue(){
        var InputValue = document.getElementById('industry').value;
         InputValue = InputValue.replace(/[^a-zA-Z ]/g, "")

         InputValue = InputValue.split(/[' ']/).join('-')
         var slug  = document.getElementById('slug').value = InputValue;
         slug  = slug.toLowerCase()
         var newSlug = slug.replace(/--/g, "-");
         slug = newSlug
      }

  </script>
@endsection
    