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
                                       <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="ti-settings"></i>
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                       <a class="dropdown-item" href="/upcoming-event/{{$event->id}}">change event image</a>
                                       <div class="dropdown-divider"></div>
                                       {{-- <a class="dropdown-item" href="#">Delete Event</a> --}}
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
    @endsection
    