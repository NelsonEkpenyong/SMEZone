@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Postpone Event</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
      @endif

      <div class="form-group">
       <div class="row">
        <div class="col-md-6">
          <div class="form-group">
           <label for="event_start_date">Current Event Start Date</label>
           <input type="text" value="{{$event->start_date->toFormattedDateString()}}" class="form-control"  disabled>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
           <label for="event_end_date">Current Event End Date</label>
           <input type="text" name="end_date" value="{{$event->end_date->toFormattedDateString()}}" class="form-control" disabled>
          </div>
        </div>
       </div>
      </div>
      

      <hr class="mb-5">
      
						<form  method="post" action="/admin/postpone/{{$event->id}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<div class="row">
         <div class="col-md-6">
           <div class="form-group">
            <label for="event_start_date">Next Event Start Date</label>
            <input type="date" name="start_date" class="form-control" required>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
            <label for="event_end_date">Next Event End Date</label>
            <input type="date" name="end_date" class="form-control" required>
           </div>
         </div>
        </div>
							</div>
							
							<button type="submit" class="btn btn-primary mr-2">Postpone</button>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection
    