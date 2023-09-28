@extends('layouts.admin.app')
    @section('content')

		<div class="row">
			<div class="col-md-8 grid-margin stretch-card">
				<div class="card offset-md-3">
					<div class="card-body">
						<h4 class="card-title">Add an Event</h4>
						@if ($errors->any())
							<div class="alert alert-danger" style="border-radius: 10px">
									<ul>
											@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
											@endforeach
									</ul>
							</div>
      @endif
						<form  method="post" action="/admin/store-event" enctype="multipart/form-data" onsubmit="return validateForm()" id="eventForm">
							@csrf

							<div class="row">
								<div class="col-md-9">
									<div class="form-group">
										<label for="exampleInputUsername1">Event Name</label>
										<input type="text" name="event_name" class="form-control"  placeholder="e.g Growing Your Business" required>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputUsername1">Expected Participants</label>
										<input type="number" name="expected_participants" class="form-control"  placeholder="e.g 50" required>
									</div>
							 </div>
							</div>
							<div class="wrapper" id="venue_container">
								<div class="row" id="row[0]">
									<div class="col-md-11">
										<div class="form-group">
											<i class="fa fa-exclamation-circle mt-1" title="This event address comprise; The name of the venue, and the address of the venue. Hit the plus button to add other event venues."></i>
											<label for="exampleInputUsername1">Venue Address </label>
											<input type="text" name="venue_address[0]" class="form-control"  placeholder="e.g Regency Hall, 40 adeniran road, VI, Lagos" required>
										</div>
									</div>
									<div class="col-md-1" style="margin-top: 2.6rem">
										<div class="form-group">
											<button type="button" class=" fa-solid fa-plus" id="add" style="border-radius: 15px; width: 2rem" onclick="addVenue()">
											</button>
										</div>
									</div>
								</div>
							</div>
							

							<div class="form-group">
								<label for="exampleFormControlSelect3">Event Type</label>
								<select class="form-control form-control-sm" name="event_type_id">
									@foreach($eventType as $i => $event)
									<option value="{{$event->id}}" selected>{{$event->name}}</option>
									@endforeach
							
								</select>
							</div>
							<div class="form-group">
								<label for="exampleTextarea1">Event Link</label>
								<textarea class="form-control" name="event_link"></textarea>
							</div>


							<div class="row">
								<div class="col-md-6">
										<div class="form-group">
											<label for="event_start_date">Event Start Date</label>
											<input type="date" name="start_date" class="form-control"  placeholder="e.g Miami Hall" required>
										</div>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label for="event_end_date">Event End Date</label>
											<input type="date" name="end_date" class="form-control "  placeholder="e.g 50" required>
										</div>
								</div>
							</div>

							<div class="wrapper" id="time_container">
								<div class="row" id="time_row[0]">
									<div class="col-md-6">
											<div class="form-group">
												<label for="event_start_time">Event Start Time</label>
												<input type="time" name="start_time[0]" class="form-control"  placeholder="e.g Miami Hall" required>
											</div>
									</div>
									<div class="col-md-5">
											<div class="form-group">
												<label for="event_end_time">Event End Time</label>
												<input type="time" name="end_time[0]" class="form-control "  placeholder="e.g 50" required>
											</div>
									</div>
									<div class="col-md-1" style="margin-top: 2.6rem">
										<div class="form-group">
											<button type="button" class=" fa-solid fa-plus" id="add" style="border-radius: 15px; width: 2rem" onclick="addTime()">
											</button>
										</div>
									</div>
							 </div>
							</div>

							<div class="form-group">
								<label for="editor">Description</label>
								<textarea class="form-control editor"  id="editor" name="description"></textarea>
							</div>
							
							<div class="form-group">
								<label>Event Image
									<small class="form-text text-muted">Required Dimension: 1440px X 326px</small>
								</label>								

								<input type="file" name="event_image" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Image Thumbnail
									<small id="thumbnail" class="form-text text-muted">Required Dimension: 214px X 240px</small>
								</label>
								<input type="file" name="thumbnail" class="form-control">
							
							</div>

							<div class="form-group">
								<label>Invitation Email Banner
									<small id="invitation_email_banner" class="form-text text-muted">Required Dimension: 600px X 260px</small>
								</label>
								<input type="file" name="invitation_email_banner" class="form-control">
								
								
							</div>

							<div class="form-group">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input radioCheck" name="invite_user" id="c01" onclick="check(this);" value="1">
										Invite SME Users
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input radioCheck" name="invite_user" id="c02" onclick="check(this);" value="2">
										Invite Non SME Users
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input radioCheck" name="invite_user" id="c03" onclick="check(this);" value="3">
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
  <script>
			  var form = document.getElementById("eventForm");
		  	var venue_max_fields      = 2; //maximum input boxes allowed
				 var venue_x = 0;
					var time_max_fields = 2; //maximum input boxes allowed
				 var time_x = 0;

				
				var venue_container = document.getElementById("venue_container");
				var time_container  = document.getElementById("time_container");

    const check = (input) => {
    	var checkboxes = document.getElementsByClassName("radioCheck");
    	
    	for(var i = 0; i < checkboxes.length; i++)
    	{
    		 //uncheck all
							if(checkboxes[i].checked == true){
								checkboxes[i].checked = false;
							}
    	}
    	
						//set checked of clicked object
						if(input.checked == true){
							input.checked = false;
						}
						else{
							input.checked = true;
						}	
    }

				const addVenue = () => {
					if(venue_x < venue_max_fields){
										venue_x++;
										let newRow= `<div class="row" id="row[${venue_x}]">
																								<div class="col-md-11">
																									<div class="form-group">
																										<input type="text" name="venue_address[${venue_x}]" class="form-control"  placeholder="e.g Regency Hall, 40 adeniran road, VI, Lagos" required>
																									</div>
																								</div>
																								<div class="col-md-1" style="margin-top: 0.7rem">
																									<div class="form-group">
																										<button type="button" class=" fa-solid fa-minus" id="remove" style="border-radius: 15px; width: 2rem" onclick="removeVenue(this)">
																										</button>
																									</div>
																								</div>
																							</div>`;
																							venue_container.innerHTML += newRow;
						} //end of if

				};
				
				const addTime = () => {
						if(time_x < time_max_fields){
							 time_x++;
								console.log("TIME X:",time_x)
								console.log("VENUE X:",venue_x)
								let newRow = `
									<div class="row" id="row[${time_x}]">
										<div class="col-md-6">
												<div class="form-group">
													<input type="time" name="start_time[${time_x}]" class="form-control"  placeholder="e.g Miami Hall" required>
												</div>
										</div>
										<div class="col-md-5">
												<div class="form-group">
													<input type="time" name="end_time[${time_x}]" class="form-control "  placeholder="e.g 50" required>
												</div>
										</div>
										<div class="col-md-1" style="margin-top: 0.7rem">
											<div class="form-group">
												<button type="button" class=" fa-solid fa-minus" id="add" style="border-radius: 15px; width: 2rem" onclick="removeTime(this)">
												</button>
											</div>
										</div>
									</div>`;
										time_container.innerHTML += newRow;
						}
					}

					const removeVenue = (div) =>{ 
						venue_container.removeChild(div.parentNode.parentNode.parentNode);venue_x--;
					};

					

					const removeTime = (div) =>{ 
						time_container.removeChild(div.parentNode.parentNode.parentNode);time_x--;
					};
  
					
					const validateForm = (event) => {
						event.preventDefault();
							if(venue_x === time_x){
								alert("The Venue Address field must be the same number as the Event Start and End Time")
								return false
							}

							return true
					}



					form.addEventListener("submit", function(event) {
							var numVenueFields = document.querySelectorAll('input[name^="venue_address["]').length;
							var numTimeFields  = document.querySelectorAll('input[name^="start_time["]').length;
							// Check if the numbers are equal
							if (numVenueFields !== numTimeFields) {
									alert("The number of venue addresses does not matches the number of start and end times. They must match.");
									event.preventDefault(); 
							}
					});


		
		</script>
@endsection
    