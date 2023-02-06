
@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <div class="homeHeroSection">
        <div
          id="carouselExampleIndicatorsHero"
          class="carousel slide"
          data-bs-ride="true"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicatorsHero"
              data-bs-slide-to="0"
              class=  "active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicatorsHero"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicatorsHero"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
          @php $sliders = json_decode($heroSlider->slider);@endphp
            @forelse ($sliders as $i => $heroSlider)
              <div class="carousel-item {{ $i == 0 ? 'active': ''}}">
                <div class="homeHero{{$i+1}}">
                  <img src="{{asset('/images/'. $heroSlider)}}" alt="">
                  <div class="container">
                    <div class="contents">
                      <h1>Small & Medium-Sized <span>Enterprise</span></h1>
                      <p>
                        Giving you all the tools to ensure your business
                        flourishes
                      </p>
                      <button class="btn">Get Started</button>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <div class="carousel-item active">
                <div class="homeHero">
                  <img src="{{asset('/images/'. $heroSlider->hero_slider1)}}" alt="">
                  <div class="container">
                    <div class="contents">
                      <h1>Small & Medium-Sized <span>Enterprise</span></h1>
                      <p>
                        Giving you all the tools to ensure your business
                        flourishes
                      </p>
                      <button class="btn">Get Started</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforelse


            {{-- <div class="carousel-item active">
              <div class="homeHero">
                <img src="{{asset('/images/'. $heroSlider->hero_slider1)}}" alt="">
                <div class="container">
                  <div class="contents">
                    <h1>Small & Medium-Sized <span>Enterprise</span></h1>
                    <p>
                      Giving you all the tools to ensure your business
                      flourishes
                    </p>
                    <button class="btn">Get Started</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="homeHero2">
                <div class="container">
                  <div class="contents">
                    <h1>Small & Medium-Sized <span>Enterprise</span></h1>
                    <p>
                      Giving you all the tools to ensure your business
                      flourishes
                    </p>
                    <button class="btn">Get Started</button>
                  </div>
                </div>
              </div>
            </div> --}}

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsHero" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsHero" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- #Hero Section -->

      <!-- Section 1 -->
      <div class="home-section1">
        <!-- Elevate your Business -->
        <div class="container text-center">
          <div class="">
            <h6 class="title">Elevate Your Business</h6>
            <h4 class="zone">You Should Be In The Zone</h4>
          </div>
          <div class="row align-items-end">
            <div class="col-md-3 insights">
              <img
                src="../icons/insight-webinars.svg"
                alt=""
                class="img-fluid"
              />
              <h6>Insightful Webinars</h6>
              <p>
                With our periodical webinars, you get first hand tips for your
                business advancement.
              </p>
              <button class="btn">Get Insights &gt;</button>
            </div>
            <div class="col-md-3 insights">
              <img
                src="../icons/Business-clinic.svg"
                alt=""
                class="img-fluid"
              />
              <h6>Insightful Webinars</h6>
              <p>
                With our periodical webinars, you get first hand tips for your
                business advancement.
              </p>
              <button class="btn">Get Insights &gt;</button>
            </div>
            <div class="col-md-3 insights">
              <img
                src="../icons/great-community.svg"
                alt=""
                class="img-fluid"
              />
              <h6>Insightful Webinars</h6>
              <p>
                With our periodical webinars, you get first hand tips for your
                business advancement.
              </p>
              <button class="btn">Get Insights &gt;</button>
            </div>
            <div class="col-md-3 insights">
              <img
                src="../icons/discount-offers.svg"
                alt=""
                class="img-fluid"
              />
              <h6>Insightful Webinars</h6>
              <p>
                With our periodical webinars, you get first hand tips for your
                business advancement.
              </p>
              <button class="btn">Get Insights &gt;</button>
            </div>
          </div>
        </div>
        <!-- #Elevate your Business -->

        <!-- Learn from the best -->
        <div class="our-courses">
          <div class="container">
          <div class="row align-items-center">
              <div class="col-md-6">
              <h6 class="title">Learn from the best</h6>
              <h1>With our courses, monthly live webinars & virtual clinics</h1>
              <div class="d-flex">
                  <div class="counter">
                      <h4 data-target="162142" class="count">0</h4>
                      <p class="detail">
                          Top<br />
                          SMEs
                      </p>
                  </div>
                  <div class="mx-5 counter">
                      <h4 data-target="87" class="count">0</h4>
                      <p class="detail">
                          Standard<br />
                          Courses
                      </p>
                  </div>
                  <div class="counter">
                      <h4 data-target="40" class="count">0</h4>
                      <p class="detail">
                          Monthly<br />
                          webinar
                      </p>
                  </div>
              </div>
              </div>
              <div class="col-md-6 mt-5 mt-md-0">
              <!-- Carousel -->
              <div
                  id="carouselExampleIndicators"
                  class="carousel slide"
                  data-bs-ride="true"
              >
                  <div class="carousel-indicators">
                  <button
                      type="button"
                      data-bs-target="#carouselExampleIndicators"
                      data-bs-slide-to="0"
                      class="active"
                      aria-current="true"
                      aria-label="Slide 1"
                  ></button>
                  <button
                      type="button"
                      data-bs-target="#carouselExampleIndicators"
                      data-bs-slide-to="1"
                      aria-label="Slide 2"
                  ></button>
                  <button
                      type="button"
                      data-bs-target="#carouselExampleIndicators"
                      data-bs-slide-to="2"
                      aria-label="Slide 3"
                  ></button>
                  </div>
                  <div class="carousel-inner">
                  <div class="carousel-item active">
                      <!-- Carousel content -->
                      <div>
                      <p class="ps-4 mb-3">
                          Watch Video <i class="bi bi-chevron-down"></i>
                      </p>
                      <div class="video-container">
                          <img
                          src="../img/Access-bank.png"
                          alt=""
                          class="img-fluid"
                          />
                          <button class="btn play-btn">
                          <i class="bi bi-play fs-2 text-white"></i>
                          </button>
                      </div>
                      </div>
                      <!-- #Carousel content -->
                  </div>
                  <div class="carousel-item">
                      <!-- Carousel content -->
                      <div>
                      <p class="ps-4 mb-3">
                          Watch Video <i class="bi bi-chevron-down"></i>
                      </p>
                      <div class="video-container">
                          <img
                          src="../img/Access-bank.png"
                          alt=""
                          class="img-fluid"
                          />
                          <button class="btn play-btn">
                          <i class="bi bi-play fs-2 text-white"></i>
                          </button>
                      </div>
                      </div>
                      <!-- #Carousel content -->
                  </div>
                  <div class="carousel-item">
                      <!-- Carousel content -->
                      <div>
                      <p class="ps-4 mb-3">
                          Watch Video <i class="bi bi-chevron-down"></i>
                      </p>
                      <div class="video-container">
                          <img
                          src="../img/Access-bank.png"
                          alt=""
                          class="img-fluid"
                          />
                          <button class="btn play-btn">
                          <i class="bi bi-play fs-2 text-white"></i>
                          </button>
                      </div>
                      </div>
                      <!-- #Carousel content -->
                  </div>
                  </div>
                  <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide="prev"
                  >
                  <span class="" aria-hidden="true">&lt;</span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide="next"
                  >
                  <span class="" aria-hidden="true">&gt;</span>
                  <span class="visually-hidden">Next</span>
                  </button>
              </div>
              <!-- #Carousel -->
              </div>
          </div>
          </div>
        </div>

        <!-- #Learn from the best -->
      </div>
      <!-- #Section 1 -->

      <!-- Setion 2 -->
      <div class="container home-section2 py-5">
        <h4 class="featured text-lg-start text-center mb-3">
          Featured SME of the Month
        </h4>
        <div class="d-flex flex-column flex-lg-row align-items-center pb-5">
          <div class="featured-img-container">
            @if($featuredImage)
                <img
                src="{{asset('/images/'. $featuredImage->featured_image)}}"
                width="332"
                alt=""
                class="img-fluid position-relative"
              />
            @else
                <img
                src="{{ asset('img/Yasmin-Belo-Osagie.png')}}"
                width="332"
                alt=""
                class="img-fluid position-relative"
              />
                
            @endif
           
            <div class="bg-img-color"></div>
          </div>

          <div class="featured-contents-outline px-1">
            <div class="featured-contents">
              <div class="row align-items-center pt-md-4 pt-3 pb-3">
                <div class="col-md-5 px-md-5">
                  @if($featuredImage)
                    <h2 class="mb-3">
                      “{{$featuredImage->testimonial}}”
                    </h2>
                  @else
                    <h2 class="mb-3">“SMEZone brought the change for small businesses...”</h2>
                  @endif

                  @if($featuredImage)
                    <p class="name">{{$featuredImage->name}}</p>
                  @else
                    <p class="name">Yasmin Belo-Osagie</p>
                  @endif

                 

                  @if($featuredImage)
                    <p class="name">
                      {{$featuredImage->role}},
                      <span style="font-family: nunito-bold">
                        {{$featuredImage->company}}
                      </span>
                    </p>
                  @else
                    <p class="name">Co-founder,
                      <span style="font-family: nunito-bold">She.Leads.Africa</span>
                    </p>
                  @endif


                </div>
                <div class="col-md-7 mt-md-0 mt-4">

                  @if($featuredImage)
                    <p class="content mb-4">
                      {{$featuredImage->description}}
                    </p>
                  @else
                    <p class="content mb-4">
                      She Leads Africa is a platform that gives women the
                      community, information and inspiration they need to live the
                      lives of their dreams.
                    </p>
                  @endif


                  <div class="d-flex">
                    <button class="btn ps-0">
                      <img
                        src="../icons/About-us.svg"
                        alt=""
                        class="img-fluid me-2"
                      />
                      About us
                    </button>
                    <button class="btn mx-5">
                      <img
                        src="../icons/Sector.svg"
                        alt=""
                        class="img-fluid me-2"
                      />
                      Sector
                    </button>
                    <button class="btn">
                      <img
                        src="../icons/Website.svg"
                        alt=""
                        class="img-fluid me-2"
                      />
                      Website
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- #Section 2 -->

      <!-- Section 3 -->
      <div class="container home-section3 pb-5 pt-md-4">
        <div class="row align-items-center">
          <div class="col-md-5">
            <h2>
              free courses suitable for your kind of <span>business</span>
            </h2>
            <p class="texts">
              With our periodical webinars, you get first hand tips for your
              business advancement, webinars, you get first hand tips for your
              business advancement.
            </p>
            <button class="btn explore-btn ps-0">
              Explore courses &nbsp; &gt;
            </button>
          </div>
          <div class="col-md-7 mt-md-0 mt-5">
            <p class="featured ps-md-4 text-md-start text-center">
              Featured Courses
            </p>
            <div class="row">
             @foreach ($featured_courses  as $course)
              <div class="col-md-6 position-relative">
                <img
                  src="{{asset('/images/'. $course->image)}}"
                  alt=""
                  class="img-fluid"
                />
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
      <!-- #Section 3 -->

      <!-- section 4 -->
      <div class="home-section4">
        <div class="container py-5">
          <div class="row">
            <div class="col-md-7">
              <h1>The <span>Business</span> Guru of the century</h1>
            </div>
            <div class="col-md-5 mt-5 mt-md-0 pt-5 pt-md-0 upcoming-event-landing">
              <!-- Carousel -->
              <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <!-- Carousel contents -->
                    <div>
                      <div class="d-flex justify-content-between mb-4">
                        <div class="upcome">
                          <img src="../icons/calendar.svg" alt="" class="img-fluid me-2"/>
                          Upcoming Events
                        </div>
                        <div>
                          <a href="/event.html">View all</a>
                        </div>
                      </div>
                      <h5 class="business-guru">
                        The Business Guru of the Century
                      </h5>
                      <p class="live-zoom mb-4">Live on zoom UTC 19:00hrs</p>
                      <div class="row">
                        <div class="col-4">
                          <h4 class="dlt">28 JAN</h4>
                          <p class="dlt-sub">Date</p>
                        </div>
                        <div
                          class="col-4 d-flex justify-content-center"
                          style="
                            border-left: 0.5px solid #000000;
                            border-right: 0.5px solid #000000;
                          "
                        >
                          <div>
                            <h4 class="dlt">Lagos</h4>
                            <p class="dlt-sub">Location</p>
                          </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                          <div>
                            <h4 class="dlt">19:00</h4>
                            <p class="dlt-sub">Time</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- #Carouse contents -->
                  </div>
                  <div class="carousel-item">
                    <!-- Carousel contents -->
                    <div>
                      <div class="d-flex justify-content-between mb-4">
                        <div class="upcome">
                          <img
                            src="../icons/calendar.svg"
                            alt=""
                            class="img-fluid me-2"
                          />
                          Upcoming Events
                        </div>
                        <div>
                          <a href="/event.html">View all</a>
                        </div>
                      </div>
                      <h5 class="business-guru">
                        The Business Guru of the Century
                      </h5>
                      <p class="live-zoom mb-4">Live on zoom UTC 19:00hrs</p>
                      <div class="row">
                        <div class="col-4">
                          <h4 class="dlt">28 JAN</h4>
                          <p class="dlt-sub">Date</p>
                        </div>
                        <div
                          class="col-4 d-flex justify-content-center"
                          style="
                            border-left: 0.5px solid #000000;
                            border-right: 0.5px solid #000000;
                          "
                        >
                          <div>
                            <h4 class="dlt">Lagos</h4>
                            <p class="dlt-sub">Location</p>
                          </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                          <div>
                            <h4 class="dlt">19:00</h4>
                            <p class="dlt-sub">Time</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- #Carouse contents -->
                  </div>
                  <div class="carousel-item">
                    <!-- Carousel contents -->
                    <div>
                      <div class="d-flex justify-content-between mb-4">
                        <div class="upcome">
                          <img
                            src="../icons/calendar.svg"
                            alt=""
                            class="img-fluid me-2"
                          />
                          Upcoming Events
                        </div>
                        <div>
                          <a href="/event.html">View all</a>
                        </div>
                      </div>
                      <h5 class="business-guru">
                        The Business Guru of the Century
                      </h5>
                      <p class="live-zoom mb-4">Live on zoom UTC 19:00hrs</p>
                      <div class="row">
                        <div class="col-4">
                          <h4 class="dlt">28 JAN</h4>
                          <p class="dlt-sub">Date</p>
                        </div>
                        <div
                          class="col-4 d-flex justify-content-center"
                          style="
                            border-left: 0.5px solid #000000;
                            border-right: 0.5px solid #000000;
                          "
                        >
                          <div>
                            <h4 class="dlt">Lagos</h4>
                            <p class="dlt-sub">Location</p>
                          </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                          <div>
                            <h4 class="dlt">19:00</h4>
                            <p class="dlt-sub">Time</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- #Carouse contents -->
                  </div>
                </div>
                <button class="carousel-control-prev index" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next index" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                  <span class="carousel-control-next-icon"aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <!-- #Carousel -->
            </div>
          </div>
        </div>
      </div>
      <!-- #section 4 -->
    <script>

    const counters = document.querySelectorAll('.count');
    const speed = 30;
        counters.forEach((counter) => {
            console.log(counters)
            const updateCount   = () => {
                const target    = parseInt(counter.getAttribute('data-target'));
                const count     = parseInt(counter.innerText);
                const increment = Math.trunc(target / speed);

                if (count < target) {
                    counter.innerText = count + increment + "+";
                    setTimeout(updateCount, 50);
                } else {
                    counter.innerText = target + "+";
                }
            };
            updateCount();
        });
    </script>

@endsection

