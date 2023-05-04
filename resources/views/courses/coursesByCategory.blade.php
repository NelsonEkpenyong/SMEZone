@extends('layouts.app')
  @section('content')
    <main>
      <div class="search-course">
        <div class="container-fluid">
          <div class="row">
            <div class="col search">
              <input
                type="text"
                style="width: 100%; background: inherit"
                placeholder="Search for courses..."
              />

              <button>
                <img src="./asset/icons/search.svg" alt="" />
              </button>
            </div>
            <div class="col-12">
              <h4 class="text-center">
                Let&#39;s get your business to the top
              </h4>
              <p class="text-center">
                With our courses your are on the right track!
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-nav-wrapper">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light py-0">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Courses Categories:</a>
              {{-- mobile nav --}}
              <div class="d-block d-lg-none dropdown px-0">
                <a style="height: 100%; color: #000000"class="nav-link dropdown-toggle active d-flex align-items-center justify-content-between" href="/courses" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  All Courses
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 100%">
                  @forelse ($categories as $category)
                    <li>
                      <a class="dropdown-item" href="/category-courses/{{$category->id}}">{{$category->title}}</a>
                    </li>
                  @empty
                    <li>
                      <a class="dropdown-item" href="#">No Course Categories Yet</a>
                    </li>
                  @endforelse
                </ul>
              </div>
              {{-- regular nav --}}
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/courses">All Courses</a>
                  </li>
                 
                  @forelse ($categories as $category)
                    <li class="nav-item">
                      <a class="nav-link" href="/category-courses/{{$category->id}}">{{$category->title}}</a>
                    </li>
                  @empty
                    <li class="nav-item">
                      <a class="nav-link" href="#">No Course Categories Yet</a>
                    </li>
                  @endforelse
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

      {{-- content --}}
      <div class="container">
        <div class="row mt-5">
          <div class="col-12 course-p">
            <p>showing courses in {{$coursesByCategory[0]->courseCategory->title}}</p>
          </div>
        </div>
        <div class="row courses-list py-4">
          @forelse($coursesByCategory as $course)
            <div class="col-auto">
              <div class="card" style="max-width: 282px">
                <img class="card-img-top" src="{{ asset('images/'. $course->image)}}" alt="course pics" style="width: 100%"/>
                <div class="card-body">
                  <a href="#" class="btn">{{$course->cost->name}}</a>
                  <a href="/acourse/{{$course->id}}" style="background: white !important"> 
                  <h5 class="card-title">Course Title</h5>
                  <h6 class="card-text">{{$course->name}}</h6>
                  </a>
                </div>
              </div>
           
            </div>
            
          @empty
            <div class="col-auto">
              <div class="card" style="max-width: 282px">
                <img
                  class="card-img-top"
                  src="../img/course_pics.png"
                  alt="course pics"
                  style="width: 100%"
                />
                <div class="card-body">
                  <a href="#" class="btn">Free</a>
                  <h5 class="card-title">Course Title</h5>
                  <h6 class="card-text">No Courses Found</h6>
                </div>
              </div>
            </div>
          @endempty
          
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-auto mb-0 mb-sm-3">
            <a href="/financial-management-2.html">
              <span class="inline-block pagination-p me-2">Next Page</span>
              <img src="..icons/next.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </main>
  @endsection
  