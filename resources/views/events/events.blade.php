@extends('layouts.app')
  @section('content')
  <main class="event">
    <section class="upcoming-event">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-auto">
            <p>Upcoming</p>
            <p class="clip">Events</p>
          </div>
          <div class="col d-none d-md-block">
            <hr class="upcoming-hr" />
          </div>
        </div>
      </div>
    </section>
    <section class="section-two">
      <div class="container">
        <div class="row justify-content-end mb-4">
          <div class="col-auto">
            <a href="#">
              <img src="{{asset('icons/arrow-left.svg')}}" alt="back" />
            </a>
          </div>
          <div class="col-auto">
            <a href="#">
              <img src="{{asset('icons/arrow-right.svg')}}" alt="back" />
            </a>
          </div>
        </div>
      </div>
      
      <div class="card-wrapper">
        <div class="card-holder row"> 
          @forelse ($events as $i => $event)
              <div class="event-card {{ $i == 0 ? 'active': ''}}">
                <a href="/an-event/{{$event->id}}">
                  <h4>{{$event->start_date->format('j')}}</h4>
                  <h6>{{$event->start_date->format('F')}}</h6>
                  <h5 class="mb-1">{{$event->event_name}}</h5>
                  @php 
                     $address = [$event->venue_address];
                     $one = json_encode($event->venue_address);

                     $start_times = json_decode($event->start_time);
                     $end_times = json_decode($event->end_time);
                     if(is_array($start_times) && !is_null($start_times)){
                      $dates = array_combine($start_times, $end_times);
                    }
                  @endphp
                  
                  @foreach ($dates as $start => $end)
                      <p style="margin-bottom: 0.2rem">{{$start}} - {{$end}}</p>
                  @endforeach

                  @if (strpos($event->venue_address, ","))
                      <p>Multiple Locations</p>
                  @else
                      <p>{{ trim($event->venue_address, '[]""')}}</p>
                  @endif
                  
                </a>
              </div>
          @empty
            <div class="event-card active">
              <a href="#">
                <h4>00</h4>
                <h6>No Events Just Yet</h6>
                <h5>There isn't any event at the moment</h5>
                <p>00:00am - 0:00pm</p>
                <p>Not happening anywhere</p>
              </a>
            </div>
          @endforelse
        </div>
      </div>
      
    </section>
    <section class="section-three">
      <div class="container">
        <div class="row">
          <h4>Past Events</h4>
        </div>

        <div class="row">
          <div class="past-event-wrapper row">
            
            <div class="past-event col-auto" onclick="linking('past-event.html')">
              <div class="image-holder">
                <img src="{{asset('img/past-event-image.png')}}" alt="past-event" class="d-none d-sm-block">
                <img src="{{asset('img/past-event-mobile.png')}}" alt="past-event" class="d-sm-none d-block">
              </div>
              <div class="text-holder">
                <h6>An inspiring session for aspiring youth entrepreneurs</h6>
                <p><img src="{{asset('icons/past-date.svg')}}" alt="date"> 28th January, 2021</p>
              </div>
            </div>

            <div class="past-event col-auto" onclick="linking('past-event.html')">
              <div class="image-holder">
                <img src="{{asset('img/past-event-image.png')}}" alt="past-event" class="d-none d-sm-block">
                <img src="{{asset('img/past-event-mobile.png')}}" alt="past-event" class="d-sm-none d-block">
              </div>
              <div class="text-holder">
                <h6>An inspiring session for aspiring youth entrepreneurs</h6>
                <p><img src="{{asset('icons/past-date.svg')}}" alt="date"> 28th January, 2021</p>
              </div>
            </div>

            <div class="past-event col-auto" onclick="linking('past-event.html')">
              <div class="image-holder">
                <img src="{{asset('img/past-event-image.png')}}" alt="past-event" class="d-none d-sm-block">
                <img src="{{asset('img/past-event-mobile.png')}}" alt="past-event" class="d-sm-none d-block">
              </div>
              <div class="text-holder">
                <h6>An inspiring session for aspiring youth entrepreneurs</h6>
                <p><img src="{{asset('icons/past-date.svg')}}" alt="date"> 28th January, 2021</p>
              </div>
            </div>

            <div class="past-event col-auto" onclick="linking('past-event.html')">
              <div class="image-holder">
                <img src="{{asset('img/past-event-image.png')}}" alt="past-event" class="d-none d-sm-block">
                <img src="{{asset('img/past-event-mobile.png')}}" alt="past-event" class="d-sm-none d-block">
              </div>
              <div class="text-holder">
                <h6>An inspiring session for aspiring youth entrepreneurs</h6>
                <p><img src="{{asset('icons/past-date.svg')}}" alt="date"> 28th January, 2021</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
            <nav aria-label="Page navigation example ">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" tabindex="-1"><img src="{{asset('icons/previous.svg')}}" alt="prev"></a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><img src="{{asset('icons/next.svg')}}" alt="next"></a>
                </li>
              </ul>
            </nav>
        </div>
      </div>
    </section>
  </main>
  @endsection