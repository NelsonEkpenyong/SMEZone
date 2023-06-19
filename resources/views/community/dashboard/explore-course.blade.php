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
          <p>Title</p>
          <h1 class="title">{{$course->name}}</h1>
         </div>
         <iframe width="100%" height="1000" src="{{asset('pdf/'. $course->pdf .'?page=hsn#toolbar=0')}}" frameborder="0" download="disabled" id="pdf"></iframe>
     @else
     <div class="event-info">
      <p>Title</p>
      <h1 class="title">{{$course->name}}</h1>
     </div>
     
     @endif
     
    </div>
   
    
   </div>

   
 </main>
 <script>

 </script>

<style type="text/css" media="print">* { display: none; }</style>
  @endsection

