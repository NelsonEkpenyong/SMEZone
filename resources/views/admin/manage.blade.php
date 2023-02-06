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
                                    <td>{{$event->eventType->name}}</td>
                                    <td>{{$event->expected_participants}}</td>
                                    <td class="text-primary"> 
                                        <a href="{{$event->event_link}}">{{ substr($event->event_link, 0, 10)}}...</a>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                            <a class="dropdown-item" href="/edit-event/{{$event->id}}">Edit</a>
                                            <a class="dropdown-item" href="/analyse-event/{{$event->id}}">Analytics</a>
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
                                            <a class="dropdown-item" href="#">Delete Event</a>
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
    @endsection
    