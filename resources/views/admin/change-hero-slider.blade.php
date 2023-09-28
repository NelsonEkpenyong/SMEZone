@extends('layouts.admin.app')
    @section('content')

     <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
       <div class="card offset-md-3">
        <div class="card-body">
         <h4 class="card-title">Add/change Hero Slider</h4>

         <div class="dropdown-divider"></div>
          @php $sliders = json_decode($slider->slider); @endphp

          @foreach ($sliders as $item)
            <img src="{{asset('/images/'. $item)}}" alt="" style="margin-bottom: 5px; width: 100%; height: 200px; border-radius: 0px"> <br>
          @endforeach
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
         <form  method="post" action="/admin/slider/{{$id}}" enctype="multipart/form-data">
          @csrf
          
            <div class="form-group">
              <label>Slider Image(s)
                <small class="form-text text-muted">Required Dimension: 1440px X 455px</small>
              </label>								
              <input type="file" name="photo[]" multiple class="form-control">
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
    