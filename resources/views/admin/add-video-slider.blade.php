@extends('layouts.admin.app')
    @section('content')

     <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
       <div class="card offset-md-3">
        <div class="card-body">
         <h4 class="card-title">Add Video Slider</h4>
         @if ($errors->any())
          <div class="alert alert-danger" style="border-radius: 10px">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
               @endif
         <form  method="post" action="" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
           <label for="exampleInputUsername1">Event Name</label>
           <input type="text" name="event_name" class="form-control"  placeholder="e.g Growing Your Business" required>
          </div>
          <div class="row">
          
          
          <div class="form-group">
           <label>Event Image
            <small class="form-text text-muted">Required Dimension: 1200px X 500px</small>
           </label>								

           <input type="file" name="event_image" class="form-control">
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
    