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
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="ti-home" style="text-decoration: none; color: inherit; "> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Event Management</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11">
                            <h4 class="card-title">Manage Events</h4>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-bar-chart-alt text-white"></i>                                                    
                                Download Excel
                            </button>
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-1">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">Filter By Type</label>
                                <select class="form-control form-control-sm" id="filter" name="filter">
                                <option value="" selected disabled>Choose Type</option>
                                <option>Offline</option>
                                <option>Webinar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Featured</th>
                                <th>Upcoming</th>
                                <th>Type</th>
                                <th>Exp. pcpts</th>
                                <th>Join Link</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($events as $key => $event)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$event->event_name}}</td>
                                    <td>{{$event->start_date->toFormattedDateString()}} - {{$event->end_date->toFormattedDateString()}}</td>
                                    <td>{{$event->is_featured == 0 ? 'Not Featured' : 'Featured'}}</td>
                                    <td>{{$event->is_upcoming == 0 ? 'Not Upcoming' : 'Upcoming'}}</td>
                                    <td>{{$event->eventType->name}}</td>
                                    <td>{{$event->expected_participants}}</td>
                                    <td class="text-primary"> 
                                        <a href="{{$event->event_link}}">{{ substr($event->event_link, 0, 10)}}...</a>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-danger dropdown-toggle dropbtn" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-content" aria-labelledby="dropdownMenuIconButton6">
                                            <a class="dropdown-item" href="/admin/edit-event/{{$event->id}}">Edit</a>
                                            <a class="dropdown-item" href="/analyse-event/{{$event->id}}">Analytics</a>
                                            <a class="dropdown-item" href="/upcome-event/{{$event->id}}" onclick="return confirm('Are you sure?');">
                                                {{$event->is_upcoming == 0 ? 'Make upcoming' : 'Upcoming Event'}}
                                            </a>
                                            <a class="dropdown-item" href="/feature-event/{{$event->id}}" onclick="return confirm('Are you sure?');">
                                                {{$event->is_featured == 0 ? 'Feature Event' : 'Unfeature Event'}}
                                            </a>
                                            <a class="dropdown-item" href="#">Cancel Event</a>
                                            <a class="dropdown-item" href="/postpone-event/{{$event->id}}">Postpone Event</a>
                                            <a class="dropdown-item" href="#">Registered</a>
                                            <a class="dropdown-item" href="#">Upload Registered Users</a>
                                            <a class="dropdown-item" href="#">Attendance</a>
                                            <a class="dropdown-item" href="#">Speakers</a>
                                            <a class="dropdown-item" href="#">Albums</a>
                                            <a class="dropdown-item" href="#">Periods</a>
                                            <a class="dropdown-item" href="#">Venues</a>
                                            <a class="dropdown-item" href="#">Invites</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="/delete-event/{{$event->id}}">Delete Event</a>
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
                            {{$events->links()}}
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
    