@extends('layouts.dashboard.app')
  @section('content')
  <main class="dashboard">
    @include('layouts.dashboard.topNav')
        <div>
            <div class="upper-glow"></div>
        </div>
        <div class="container-fluid px-lg-4">
        <div class="row">
        <h4 class="greeting">
            @if(date("H") < "12") Good Morning
            @elseif(date("H") >= "12" && date("H") < "17")Good Afternoon
            @elseif(date("H") >= "17" && date("H") < "19") Good Evening
            @elseif(date("H") >= "19") Good Night
            @endif 
            {{Auth::user()->first_name}}!
        </h4>
        </div>
        <h4>Enrolled Courses</h4>
            <div class="this-course">
                <div class="d-flex mx-0">
                    <div class="d-flex courses-list pt-4 dash">
                        @foreach($enrollments as $enrollment)
                            <div class="col-auto">
                                <div class="card" onclick="showCourse(`{{$enrollment->course->id}}`)" data-id="{{$enrollment->course->id}}">
                                    <img class="card-img-top" src="{{asset('images/'.$enrollment->course->image)}}" alt="course pics" style="width: 100%"/>
                                    <div class="card-body">
                                        <a href="#" class="btn" style="width: 12rem">{{$enrollment->course->courseCategory->title}}</a>
                                        <h5 class="card-title">Course Title</h5>
                                        <h6 class="card-text">{{$enrollment->course->name}}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
 </main>
 <script>

  const showCourse = (courseId) => {
    window.location.href = `/explore-course/${courseId}`;
  }
 </script>
  @endsection

