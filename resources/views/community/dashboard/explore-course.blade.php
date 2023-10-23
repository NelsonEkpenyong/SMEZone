@extends('layouts.dashboard.app')
  @section('content')
  <main class="dashboard">
    @include('layouts.dashboard.topNav')
   <div>
     <div class="upper-glow"></div>
   </div>
   <div class="container-fluid px-lg-4">
    <div class="accordion mt-2" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <strong> Course </strong>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="mb-3">
              <strong>Course Title</strong> : <strong> {{ $course->name}}</strong>
            </div>
            
             <p> {{$course->description}} </p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <strong> Course Video</strong>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body" style="display: flex; justify-content: center; align-items: center; height: 100%;">
            <iframe width="1000" height="600" src="{{$course->embed_link}}" title="{{$course->description}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
       
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong> Course Document</strong> 
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                @if ($course->pdf)
                  <iframe width="100%" height="1000" src="{{asset('pdf/'. $course->pdf .'?page=hsn#toolbar=0')}}" frameborder="0" download="disabled" id="pdf"></iframe>
                @else
                  No Course Document
                @endif
              </div>
            </div>
          </div>
        
    </div>
   </div>
 </main>
 <script>

 </script>

<style type="text/css" media="print">* { display: none; }</style>
  @endsection

