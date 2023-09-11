@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Edit Event</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
            @endif
						<form  method="post" action="/admin/update-event/{{$event->id}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="exampleInputUsername1">Event Name</label>
								<input type="text" name="event_name" value="{{$event->event_name}}" class="form-control"  placeholder="e.g Growing Your Business" required>
							</div>
							<div class="row">
								<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputUsername1">Venue Name</label>
											<input type="text" name="venue_name" value="{{$event->venue_name}}" class="form-control"  placeholder="e.g Miami Hall" required>
										</div>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputUsername1">Expected Participants</label>
											<input type="number" name="expected_participants" value="{{$event->expected_participants}}" class="form-control"  placeholder="e.g 50" required>
										</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputUsername1">Venue Address</label>
								<input type="text" name="venue_address" value="{{$event->venue_address}}" class="form-control"  placeholder="e.g #34 Adekunle street" required>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect3">Event Type</label>
								<select class="form-control form-control-sm" name="event_type_id">
         <option value="{{ $event->event_type_id }}"  selected> {{ $event->eventType->name}}</option>
         @foreach($eventTypes as $eventType)
          @if($event->event_type_id != $eventType->id)
           <option value="{{$eventType->id }}"> {{ $eventType->name}}</option>
          @endif
         @endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="exampleTextarea1">Event Link</label>
								<textarea class="form-control" name="event_link">{{$event->event_link}}</textarea>
							</div>
							<div class="row">
								<div class="col-md-6">
										<div class="form-group">
											<label for="event_start_date">Event Start Date (mm/dd/yyyy)</label>
											<input type="text" name="start_date" value="{{date('m/d/Y', strtotime($event->start_date))}}" class="form-control"  placeholder="e.g Miami Hall" required>
										</div>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label for="event_end_date">Event End Date (mm/dd/yyyy)</label>
											<input type="text" name="end_date" value="{{date('m/d/Y', strtotime($event->end_date))}}" class="form-control "  placeholder="e.g 50" required>
										</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
										<div class="form-group">
											<label for="event_start_time">Event Start Time</label>
											<input type="time" name="start_time" value="{{$event->start_time}}" class="form-control"  placeholder="e.g Miami Hall" required>
										</div>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label for="event_end_time">Event End Time</label>
											<input type="time" name="end_time" value="{{$event->end_time}}" class="form-control "  placeholder="e.g 50" required>
										</div>
								</div>
							</div>
						
							<div class="form-group">
								<label for="editor">Description</label>
								<textarea class="form-control editor"  id="editor" name="description">{{$event->description}}</textarea>
							</div>
							
							<div class="form-group">
								<label>Event Image
									<small class="form-text text-muted">Required Dimension: 1200px X 500px</small>
								</label>								

								<input type="file" name="event_image" class="form-control mb-3">
        <img class="" src="{{asset('/images/'. $event->event_image) }} "width="193" height="130"/>
							</div>

							<div class="form-group">
								<label>Image Thumbnail
									<small id="thumbnail" class="form-text text-muted">Required Dimension: 214px X 240px</small>
								</label>
								<input type="file" name="thumbnail" class="form-control mb-3">
        <img class="" src="{{asset('/images/'. $event->thumbnail) }} "width="193" height="130"/>
        
							</div>

							<div class="form-group">
								<label>Invitation Email Banner
									<small id="invitation_email_banner" class="form-text text-muted">Required Dimension: 600px X 260px</small>
								</label>
								<input type="file" name="invitation_email_banner" class="form-control mb-3">
								<img class="" src="{{asset('/images/'. $event->invitation_email_banner) }} "width="193" height="130"/>
							</div>


							<div class="form-group ml-4">
								<div class="">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input radioCheck" name="invite_user" id="c01" onclick="check(this);" value="1" {{ ($event->invite_user == "1")? "checked" : "" }}>
										Invite SME Users
									</label>
								</div>
								<div class="">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input radioCheck" name="invite_user" id="c02" onclick="check(this);" value="2" {{ ($event->invite_user == "2")? "checked" : "" }}>
										Invite Non SME Users
									</label>
								</div>
								<div class="">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input radioCheck" name="invite_user" id="c03" onclick="check(this);" value="3" {{ ($event->invite_user == "3")? "checked" : "checked" }}>
										Invite All Users
									</label>
								</div>
							</div>

							<div class="form-group">
								<label>SME's</label>
								<input type="file" name="SME" class="form-control">
							</div>

							<div class="form-group">
								<label>Non SME's</label>
								<input type="file" name="nonSme" class="form-control">
							</div> 
							
							<button type="submit" class="btn btn-primary mr-2">Update</button>
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
  <script>


    function check(input)
    {
    	var checkboxes = document.getElementsByClassName("radioCheck");
    	
    	for(var i = 0; i < checkboxes.length; i++)
    	{
    		//uncheck all
    		if(checkboxes[i].checked == true)
    		{
    			checkboxes[i].checked = false;
    		}
    	}
    	
    	//set checked of clicked object
    	if(input.checked == true)
    	{
    		input.checked = false;
    	}
    	else
    	{
    		input.checked = true;
    	}	
    }
  </script>
@endsection
    