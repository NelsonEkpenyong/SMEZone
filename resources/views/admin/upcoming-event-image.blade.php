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
                                    <li class="breadcrumb-item active" aria-current="page">Landing page Upcoming Event Image</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11 mb-2">
                            <h4 class="card-title">Featured Upcoming Event Image</h4>
                            <a href="#" class="btn btn-success btn-icon-text"> Upcoming event image</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Event</th>
                                <th>Featured Upcoming Event Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                              <tbody>
                               @forelse($events as $i => $event)
                               <tr>
                                  <td>{{ $i + 1}}</td>
                                  <td>{{ $event->event->event_name}}</td>
                                  <td>
                                   <a href="#">
                                    <img src="{{asset('/images/'. $event->event_image)}}" alt="" style="margin-bottom: 5px; width: 100px; height: 50px; border-radius: 0px"> <br>
                                   </a>
                                  </td>
                                  <td>
                                   <div class="dropdown">
                                       <button class="btn btn-danger dropdown-toggle dropbtn" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="ti-settings"></i>
                                       </button>
                                       <div class="dropdown-menu dropdown-content" aria-labelledby="dropdownMenuIconButton6">
                                            <a class="dropdown-item" href="/upcoming-event/{{$event->id}}">change event image</a>
                                       </div>
                                   </div>
                                  </td>
                                 </tr>
                                 @empty
                                   <tr>
                                      <td>No Featured Event Image found</td>
                                      <td></td>
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

    
    <style>
        .dropdown {
            position:absolute;
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
    