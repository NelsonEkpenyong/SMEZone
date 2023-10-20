@extends('layouts.dashboard.app')
  @section('content')
  <main class="dashboard">
    @include('layouts.dashboard.topNav')
   <div>
     <div class="upper-glow"></div>
   </div>
   <div class="container-fluid px-lg-4">
    <div class="container">
      <div class="card mt-1">
        <div class="card-header">
          {{$course->name}}
        </div>
        <div class="card-body">
          <p class="card-text">{{$course->description}}</p>
          @if($course->embed_link)
            <a class="btn btn-primary mt-5" href="{{  $course->embed_link}}"  target="_blank">Watch course</a>
          @endif
        </div>
      </div>
      

      @if ($course->pdf)
          <iframe width="100%" height="1000" src="{{asset('pdf/'. $course->pdf .'?page=hsn#toolbar=0')}}" frameborder="0" download="disabled" id="pdf"></iframe>
      @endif
      
    </div>
   
    
   </div>

   
 </main>
 <script>

 </script>

<style type="text/css" media="print">* { display: none; }</style>
  @endsection

