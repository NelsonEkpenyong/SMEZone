@extends('layouts.dashboard.app')
  @section('content')
  <main class="dashboard">
    @include('layouts.dashboard.topNav')
   <div>
     <div class="upper-glow"></div>
   </div>
   <div class="container-fluid px-lg-4">
    <div class="container">
      <h1 class="title mb-2">{{$course->name}}</h1>
      {{$course->description}}

      @if ($course->pdf)
          <iframe width="100%" height="1000" src="{{asset('pdf/'. $course->pdf .'?page=hsn#toolbar=0')}}" frameborder="0" download="disabled" id="pdf"></iframe>
      @endif
      
      @if($course->embed_link)
          <div class="event-info">
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

