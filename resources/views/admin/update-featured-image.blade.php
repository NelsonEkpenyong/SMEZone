@extends('layouts.admin.app')
    @section('content')

     <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
       <div class="card offset-md-3">
        <div class="card-body">
         <h4 class="card-title">Update Featured Image</h4>
         @if ($errors->any())
          <div class="alert alert-danger" style="border-radius: 10px">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
               @endif
         <form  method="post" action="/update-featured-image/{{$id}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
           <label for="exampleInputUsername1">Person's Name</label>
           <input type="text" name="name" class="form-control"  value="{{$featuredImage->name}}" required>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="exampleInputUsername1">Company</label>
                <input type="text" name="company" class="form-control"  value="{{$featuredImage->company}}" required>
               </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputUsername1">Role</label>
                <input type="text" name="role" class="form-control"  value="{{$featuredImage->role}}" required>
               </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Testimonial</label>
            <textarea name="testimonial" class="form-control"   required>{{$featuredImage->testimonial}}</textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Company Description</label>
            <textarea name="description" class="form-control"  required>{{$featuredImage->description}}</textarea>
          </div>
          
          <div class="form-group">
           <label>Featured Image
            <small class="form-text text-muted">Required Dimension: 352px X 352px</small>
           </label>								

           <input type="file" name="photo" class="form-control">
           <img class="" src="{{asset('/images/'. $featuredImage->featured_image) }} "width="200" height="130" style="margin-top: 1rem"/>
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
    