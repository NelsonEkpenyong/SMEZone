
@extends('layouts.dashboard.app')
  @section('content')
   <main class="dashboard">
    @include('layouts.dashboard.topNav')
    <div>
      <div class="upper-glow"></div>
    </div>
    <div class="container-fluid px-lg-4">
      <div class="row">
        <h4 class="greeting">Good Morning {{Auth::user()->first_name}}!</h4>
      </div>

      <div class="dash-hero row justify-content-evenly align-items-center mx-0 d-none d-md-flex">
        <div class="col-auto">
          <div class="details">
            <div class="d-flex">
              <div class="col-auto">
                <img
                  src="{{asset('icons/enroll-course.svg')}}"
                  alt="enroll course"
                />
              </div>
              <div>
                <p>Enrolled Courses</p>
                <h4>{{$enrollments}}</h4>
                <h6 onclick="exploreCourse()">
                  Explore Courses
                  <img
                    src="{{asset('icons/chevron-right.svg')}}"
                    alt="this way"
                    class="thisway"
                  />
                </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="bars col-auto"></div>

        <div class="col-auto">
          <div class="details">
            <div class="d-flex">
              <div class="col-auto">
                <img
                  src="{{asset('icons/event-registered.svg')}}"
                  alt="enroll course"
                />
              </div>
              <div>
                <p>Event Registered</p>
                <h4>{{$registeredEventCount}}</h4>
                <h6 onclick="linking('./dashboard/explore-events.html')">
                  Explore Events
                  <img
                    src="{{asset('icons/chevron-right.svg')}}"
                    alt="this way"
                    class="thisway"
                  />
                </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="bars col-auto"></div>

        <div class="col-auto">
          <div class="details">
            <div class="d-flex">
              <div class="col-auto">
                <img src="{{asset('icons/e-webinar.svg')}}" alt="enroll course" />
              </div>
              <div>
                <p>Webinar</p>
                <h4>50</h4>
                <h6 onclick="linking('./dashboard/explore-webinars.html')">
                  Explore Webinars
                  <img
                    src="{{asset('icons/chevron-right.svg')}}"
                    alt="this way"
                    class="thisway"
                  />
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="dash-hero dash-hero-mobile row justify-content-evenly align-items-center mx-0 d-flex d-md-none"
      >
        <div class="col-auto">
          <div class="details">
            <div class="d-flex">
              <div class="col-auto">
                <img
                  src="{{asset('icons/enroll-course.svg')}}"
                  alt="enroll course"
                />
              </div>
              <div>
                <p>Enrolled Courses</p>
                <h4>15</h4>
                <h6 onclick="linking('./dashboard/explore-courses.html')">
                  Explore Courses
                  <img
                    src="{{asset('icons/chevron-right.svg')}}"
                    alt="this way"
                    class="thisway"
                  />
                </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="details">
            <div class="d-flex">
              <div class="col-auto">
                <img
                  src="{{asset('icons/event-registered.svg')}}"
                  alt="enroll course"
                />
              </div>
              <div>
                <p>Event Registered</p>
                <h4>3</h4>
                <h6 onclick="linking('./dashboard/explore-events.html')">
                  Explore Events
                  <img
                    src="{{asset('icons/chevron-right.svg')}}"
                    alt="this way"
                    class="thisway"
                  />
                </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="details">
            <div class="d-flex">
              <div class="col-auto">
                <img src="{{asset('icons/e-webinar.svg')}}" alt="enroll course" />
              </div>
              <div>
                <p>Webinar</p>
                <h4>50</h4>
                <h6 onclick="linking('./dashboard/explore-webinars.html')">
                  Explore Webinars
                  <img
                    src="{{asset('icons/chevron-right.svg')}}"
                    alt="this way"
                    class="thisway"
                  />
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h5 class="latest-information mt-5 mb-4">Latest Information</h5>

      <div class="row mx-0 latest-information">
        <div class="col-auto img-base">
          <img src="{{asset('img/latest1.png')}}" alt="" class="base" />
        </div>
        <div class="col-auto img-base">
          <img src="{{asset('img/access-clinic.png')}}" alt="" class="base" />
        </div>
      </div>
    </div>
   </main>
   <script>
    const exploreCourse = () => {
      window.location.href = `/explore-courses` 
    }
   </script>
  @endsection