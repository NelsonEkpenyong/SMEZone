@extends('layouts.admin.app')
    @section('content')
    <div class="row">
        <div class="col-lg-12 col-md -12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="ti-home" style="text-decoration: none; color: inherit; "> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Landing page Featured Courses</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11 mb-2">
                            <h4 class="card-title">Featured Courses</h4>
                            <a href="/create-featured-courses" class="btn btn-success btn-icon-text">
                                Create Featured Courses
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Featured Course Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                              <tbody>
                               @forelse($featuredCourses as $i => $course)
                               <tr>
                                  <td>{{ $i + 1}}</td>
                                  <td>
                                   <a href="#">
                                    <img src="{{asset('/images/'. $course->image)}}" alt="" style="margin-bottom: 5px; width: 100px; height: 50px; border-radius: 0px"> <br>
                                   </a>
                                  </td>
                                  <td>
                                   <div class="dropdown">
                                       <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="ti-settings"></i>
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                       <a class="dropdown-item" href="#">change Featured Course</a>
                                       <div class="dropdown-divider"></div>
                                       {{-- <a class="dropdown-item" href="#">Delete Event</a> --}}
                                       </div>
                                   </div>
                                  </td>
                                 </tr>
                                 @empty
                                   <tr>
                                      <td>No Featured Course and record found</td>
                                      <td></td>
                                      <td></td>
                                   </tr>
                                 @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="mb-4 mt-3 col-lg-6">
                            {{-- {{$events->links()}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    