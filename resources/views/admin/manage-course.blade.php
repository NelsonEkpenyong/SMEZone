@extends('layouts.admin.app')
    @section('content')
    <div class="row">
        <div class="col-lg-12 col-md -12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                {{-- <div class="card-body card-light-blue">
                                    <i class="ti-home"> Home</i>
                                </div> --}}
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="ti-home" style="text-decoration: none; color: inherit;"> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('manage-course')}}" style="text-decoration: none; color: inherit;"> Course Management</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-sm-11 mb-3">
                            <h4 class="card-title">Manage Courses</h4>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-bar-chart-alt text-white"></i>                                                    
                                Download Excel
                            </button>
                        </div>
                        <div class="col-lg-3 col-md-1 col-sm-1">
                         <h4 class="card-title">Search Course</h4>
                            <form action="/admin/manage-course" method="GET">
                                <div class="form-group">
                                    <input type="text" name="search" id="" placeholder="search course by name, author or category" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Enrolled Students</th>
                                <th>Avg Time Spent on Course</th>
                                <th>Avg Feedback Score</th>
                                <th>Featured</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($courses as $key => $course)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->courseType->name}}</td>
                                    <td>{{$course->courseCategory->title}}</td>
                                    <td>{{$course->enrolled}}</td>
                                    <td>{{$course->avg_time_spent_on_course}}</td>
                                    <td>{{$course->avg_feedback_score}}</td>
                                    <td>{{$course->is_featured}}</td>
                                    <td>
                                        <img class="" src="{{asset('/images/'. $course->image) }} "width="60" height="20"/>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-danger dropdown-toggle dropbtn" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-content" aria-labelledby="dropdownMenuIconButton6">
                                            <a class="dropdown-item" href="/admin/edit-course/{{$course->id}}">Edit</a>
                                            <a class="dropdown-item" href="#">Manage Feedback</a>
                                            <a class="dropdown-item" href="#">Comments</a>
                                            <a class="dropdown-item" href="#">Analytics</a>
                                            <a class="dropdown-item" href="/feature-a-course/{{$course->id}}" onclick="return confirm('Are you sure?');">
                                                {{$course->is_featured == 0 ? 'Feature Course' : 'Unfeature Course'}}
                                            </a>
                                            <a class="dropdown-item" href="#">Outlines</a>
                                            <a class="dropdown-item" href="/admin/delete-course/{{$course->id}}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td>No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="mb-4 mt-3 col-lg-6">
                            {{$courses->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .dropdown {
            position:relative;
            display: inline-block;
        }

        .dropbtn {
            background-color: #3498db;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #2980b9;
        }

    </style> 
    @endsection
    