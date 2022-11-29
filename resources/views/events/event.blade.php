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
              <img src="./asset/icons/arrow-left.svg" alt="back" />
            </a>
          </div>
          <div class="col-auto">
            <a href="#">
              <img src="./asset/icons/arrow-right.svg" alt="back" />
            </a>
          </div>
        </div>
      </div>
      
      <div class="card-wrapper">
        <div class="card-holder row"> 
          <div class="event-card active">
            <a href="/events.html">
              <h4>08</h4>
              <h6>February</h6>
              <h5>The Business Guru of the Century</h5>
              <p>11:30am - 1:30pm</p>
              <p>Live on Zoom meeting (Online)</p>
            </a>
          </div>

          <div class="event-card">
            <a href="/events.html">
              <h4>18</h4>
              <h6>February</h6>
              <h5>TechCrunch- Masterclass</h5>
              <p>11:30am - 1:30pm</p>
              <p>Live on Zoom meeting (Online)</p>
            </a>
          </div>

          <div class="event-card">
            <a href="/events.html">
              <h4>01</h4>
              <h6>March</h6>
              <h5>Monthly Overview</h5>
              <p>11:30am - 1:30pm</p>
              <p>Live on Zoom meeting (Online)</p>
            </a>
          </div>

          <div class="event-card">
            <a href="/events.html">
              <h4>23</h4>
              <h6>April</h6>
              <h5>Interview with paystack Cofounder</h5>
              <p>11:30am - 1:30pm</p>
              <p>Live on Zoom meeting (Online)</p>
            </a>
          </div>

          <div class="event-card">
            <h4>08</h4>
            <h6>February</h6>
            <h5>The Business Guru of the Century</h5>
            <p>11:30am - 1:30pm</p>
            <p>Live on Zoom meeting (Online)</p>
          </div>

          <div class="event-card">
            <a href="/events.html">
              <h4>08</h4>
              <h6>February</h6>
              <h5>The Business Guru of the Century</h5>
              <p>11:30am - 1:30pm</p>
              <p>Live on Zoom meeting (Online)</p>
            </a>
          </div>
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
                <img src="./asset/img/past-event-image.png" alt="past-event" class="d-none d-sm-block">
                <img src="./asset/img/past-event-mobile.png" alt="past-event" class="d-sm-none d-block">
              </div>
              <div class="text-holder">
                <h6>An inspiring session for aspiring youth entrepreneurs</h6>
                <p><img src="./asset/icons/past-date.svg" alt="date"> 28th January, 2021</p>
              </div>
            </div>

            <div class="past-event col-auto" onclick="linking('past-event.html')">
              <div class="image-holder">
                <img src="./asset/img/past-event-image.png" alt="past-event" class="d-none d-sm-block">
                <img src="./asset/img/past-event-mobile.png" alt="past-event" class="d-sm-none d-block">
              </div>
              <div class="text-holder">
                <h6>An inspiring session for aspiring youth entrepreneurs</h6>
                <p><img src="./asset/icons/past-date.svg" alt="date"> 28th January, 2021</p>
              </div>
            </div>

            <div class="past-event col-auto" onclick="linking('past-event.html')">
              <div class="image-holder">
                <img src="./asset/img/past-event-image.png" alt="past-event" class="d-none d-sm-block">
                <img src="./asset/img/past-event-mobile.png" alt="past-event" class="d-sm-none d-block">
              </div>
              <div class="text-holder">
                <h6>An inspiring session for aspiring youth entrepreneurs</h6>
                <p><img src="./asset/icons/past-date.svg" alt="date"> 28th January, 2021</p>
              </div>
            </div>

            <div class="past-event col-auto" onclick="linking('past-event.html')">
              <div class="image-holder">
                <img src="./asset/img/past-event-image.png" alt="past-event" class="d-none d-sm-block">
                <img src="./asset/img/past-event-mobile.png" alt="past-event" class="d-sm-none d-block">
              </div>
              <div class="text-holder">
                <h6>An inspiring session for aspiring youth entrepreneurs</h6>
                <p><img src="./asset/icons/past-date.svg" alt="date"> 28th January, 2021</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
            <nav aria-label="Page navigation example ">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" tabindex="-1"><img src="./asset/icons/previous.svg" alt="prev"></a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><img src="./asset/icons/next.svg" alt="next"></a>
                </li>
              </ul>
            </nav>
      
        </div>
      </div>
    </section>
  </main>
  @endsection