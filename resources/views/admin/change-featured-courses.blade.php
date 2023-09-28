@extends('layouts.admin.app')
    @section('content')

     <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
       <div class="card offset-md-3">
        <div class="card-body">
         <h4 class="card-title">change Featured Course Image</h4>

         <div class="dropdown-divider"></div>
            <img src="{{asset('/images/' . $featuredCourse->image)}}" alt="" style="margin-bottom: 5px; width: 100%; height: 200px; border-radius: 0px"> <br>
         <div class="dropdown-divider"></div>
         
         @if ($errors->any())
            <div class="alert alert-danger" style="border-radius: 10px">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
         @endif
         <form  method="post" action="/admin/update-featured-courses/{{$featuredCourse->id}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label>Featured Course Image
                <small class="form-text text-muted">Required Dimension: 396px X 245px</small>
              </label>								
              <input type="file" name="photo" multiple class="form-control">
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
  
@endsection
    