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
                                    <li class="breadcrumb-item active" aria-current="page">Landing page Featured Image</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11 mb-2">
                            <h4 class="card-title">Featured Image</h4>
                            <a href="/create-featured-image" class="btn btn-success btn-icon-text">
                                Create Featured Image
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Featured Image</th>
                                <th>Person's Name</th>
                                <th>Role</th>
                                <th>Company</th>
                                <th>Testimonial</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                              <tbody>
                               @if($featuredImage)
                                <td>1</td>
                                  <td>
                                   <a href="/update-featuredImage/{{$featuredImage->id}}">
                                    <img src="{{asset('/images/'. $featuredImage->featured_image)}}" alt="" style="margin-bottom: 5px; width: 100px; height: 50px; border-radius: 0px"> <br>
                                   </a>
                                  </td>
                                  <td>{{$featuredImage->name}}</td>
                                  <td>{{$featuredImage->role}}</td>
                                  <td>{{$featuredImage->company}}</td>
                                  <td>{{$featuredImage->testimonial}}</td>
                                  <td>{{$featuredImage->description}}</td>
                                  <td>{{$featuredImage->created_at}}</td>
                                  <td>{{$featuredImage->updated_at}}</td>
                                  <td>
                                   <div class="dropdown">
                                       <button class="btn btn-danger dropdown-toggle dropbtn" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="ti-settings"></i>
                                       </button>
                                       <div class="dropdown-menu dropdown-content" aria-labelledby="dropdownMenuIconButton6">
                                       <a class="dropdown-item" href="/update-featuredImage/{{$featuredImage->id}}">change Featured Image</a>
                                       <div class="dropdown-divider"></div>
                                       {{-- <a class="dropdown-item" href="#">Delete Event</a> --}}
                                       </div>
                                   </div>
                                  </td>
                                 @else
                                   <tr>
                                      <td>No Featured Image and record found</td>
                                      <td></td>
                                      <td></td>
                                   </tr>
                                 @endif
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
    