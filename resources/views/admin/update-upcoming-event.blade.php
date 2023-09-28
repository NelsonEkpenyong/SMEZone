@extends('layouts.admin.app')
    @section('content')

     <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
       <div class="card offset-md-3">
        <div class="card-body">
         <h4 class="card-title h4">UPDATE FEATURED UPCOMING EVENT IMAGE</h4>
         @if ($errors->any())
          <div class="alert alert-danger" style="border-radius: 10px">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
               @endif
         <form  method="post" action="/admin/update-upcoming-event/{{$upcomingEventImage->id}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Choose an upcoming event</label>
            <select class="form-control form-control-sm" name="event">
              <option value="{{$upcomingEventImage->id}}" selected>{{$upcomingEventImage->event->event_name}}</option>
              @foreach($events as $i => $event)
                @if($upcomingEventImage->event_id != $event->id)
                  <option value="{{$event->id}}">{{$event->event_name}}</option>
                  
                @endif
              @endforeach
            </select>
          </div>
          
          <div class="form-group">
            <label>Event Image</label>								
            <input type="file" name="image" class="form-control mb-3">
          </div>

          <div class="form-group">
            <label>Current Upcoming Event Image
             <small class="form-text text-muted">Required Dimension: 1200px X 500px</small>
            </label>								
            <img class="" src="{{asset('/images/'. $upcomingEventImage->event_image) }} "width="100%" height="500"/>
          </div> 

          <div class="form-group">
            <h3 class="h6">UPCOMING EVENT SLIDER</h3>
            <p>To make an event an upcoming event, open Events, click manage, go to the actions of the event and make it an upcoming event</p>
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
    