@extends('layouts.dashboard.app')
  @section('content')
  <main class="dashboard">
    @include('layouts.dashboard.topNav')
   <div>
     <div class="upper-glow"></div>
   </div>
   <div class="container-fluid px-lg-4">
    <div class="container">
     @if ($course->pdf)
         <div class="pdf-title">
          <h1 class="title mb-2">{{$course->name}}</h1>
         </div>
         <iframe width="100%" height="1000" src="{{asset('pdf/'. $course->pdf .'?page=hsn#toolbar=0')}}" frameborder="0" download="disabled" id="pdf"></iframe>
     @else
     <div class="event-info">
      <h1 class="title mb-2">{{$course->name}}</h1>
      <p>{{strip_tags($course->content)}}</p>
     </div>
     
     @endif
     
    </div>
   
    
   </div>

   
 </main>
 <script>

 </script>

<style type="text/css" media="print">* { display: none; }</style>
  @endsection

