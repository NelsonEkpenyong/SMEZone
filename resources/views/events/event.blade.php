@extends('layouts.app')
  @section('content')
      <section class="container-fluid" style="height: 310px; background: rgba(235, 142, 2, 0.16); background-size: cover; background-repeat: no-repeat; background-image: url('{{asset('images/'.$event->event_image)}}');">
        <div class="container">
          @php 
            $name = explode(' ', $event->event_name,3); 
          @endphp
          <h2 style="max-width: 438px; font-weight: 400; font-size: 45px; line-height: 60px; text-transform: capitalize; padding-top: 53px; margin-left: 10px; font-family: 'KronaOne'; color: var(--white);">
            @if ( count($name) == 1)
                {{$name[0]}}
            @elseif(count($name) == 2)
              {{$name[0]}} <span class="our-orange">{{$name[1]}}</span>
            @else
              {{$name[0]}} <span class="our-orange">{{$name[1]}}</span> {{$name[2]}}
            @endif
          </h2>
        </div>
      </section>

      <div class="event-back">
        <div class="container">
          <a href="/events" class="d-flex align-items-center">
            <img src="{{asset('icons/back-icon.svg')}}" alt="back" />Back
          </a>
        </div>
      </div>

      <section class="event-info my-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <h5 class="title">Event Title</h5>
              <h2>{{$event->event_name}}</h2>
              <div class="row calender">
                <div class="col-md-auto">
                  <img src="{{asset('icons/past-date.svg')}}" alt="calender" />
                  {{$event->start_date->format('j F')}}, {{$event->start_date->format('Y')}}
                </div>
                <div class="col-md-auto">
                  <img src="{{asset('icons/event-location.svg')}}" alt="location" />
                  {{$event->eventType->name}}
                </div>
                <div class="col-md-auto" style="display: flex">
                  <img src="{{asset('icons/event-time.svg')}}" alt="time" />
                  {{-- {{\Carbon\Carbon::createFromFormat('H:i:s',$event->start_time)->format('h:i')}}  - {{\Carbon\Carbon::createFromFormat('H:i:s',$event->end_time)->format('h:i')}} --}}
                  <div>
                    @php 
                      $start_times = json_decode($event->start_time);
                      $end_times   = json_decode($event->end_time);
                      // dd($event->start_time,$event->end_time );
                      if(is_array($start_times) && !is_null($start_times)){
                        $dates = array_combine($start_times, $end_times);
                      }
                    @endphp
                    
                    @forelse ($dates as $start => $end)
                        {{$start}} - {{$end}} <br>
                    @empty

                    @endforelse
                  </div>
                </div>
              </div>
              <div class="event-description">
                <h4>Description</h4>
                <p>
                  {{ trim($event->description, '<p></p>')}}
                </p>
                <h6>Limited seats Available: <span>{{number_format($event->expected_participants)}}</span></h6>
              </div>
              <div class="row count-down align-items-center justify-content-evenly ps-lg-4 mx-0">
                <div class="col-auto">
                  <h3>00</h3>
                  <p>Days</p>
                </div>

                <div class="col-auto">
                  <h3>08</h3>
                  <p>Hours</p>
                </div>

                <div class="col-auto">
                  <h3>35</h3>
                  <p>Minutes</p>
                </div>

                <div class="col-auto">
                  <h3>02</h3>
                  <p>Seconds</p>
                </div>

                <div class="col-auto d-none d-sm-block">
                  <p class="greening">Left for Registration</p>
                </div>
                <div class="col-12 d-block d-sm-none">
                  <p class="greening">Left for Registration</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 event-form">
              <h4>Register for Event</h4>
              <form action="/fe-storeEvent" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" value="{{$user->first_name}}" id="FirstName" name="first_name" placeholder="First Name"/>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="{{$user->last_name}}" id="LastName" name="last_name" placeholder="Last Name"/>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" value="{{$user->email}}" id="EmailAddress" name="email" placeholder="Email address"/>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" value="{{$user->phone}}" id="PhoneNumber" placeholder="Phone Number"/>
                </div>

                <input type="hidden" name="role_id"   value="4">
                <input type="hidden" name="event_id"  value="{{$event->id}}">
                <input type="hidden" name="gender_id" value="1">
                <input type="hidden" name="password"  value="admin">
                @php 
                  $venues = json_decode($event->venue_address);
                  if(is_array($venues) == false) $venues = [$venues];
                @endphp
                <div class="form-group">
                  <select class="form-select" id="exampleSelect" name="venue_name" required>
                    @forelse ($venues as $item)
                        @if( count($venues) == 1)
                            <option value="{{$item}}" selected >{{$item}}</option>
                        @else
                            <option value="{{$item}}" readonly>{{$item}}</option>
                        @endif
                    @empty
                      This event has no venue
                    @endforelse
                  </select>
                </div>

                <button type="submit" class="btn">Register</button>
              </form>
            </div>
          </div>
        </div>
      </section>
  @endsection