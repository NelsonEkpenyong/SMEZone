@extends('layouts.app')
  @section('content')

      <section class="events-upper container-fluid">
        <div class="container">
          <h2>
            The <span class="our-orange">Business</span> Guru of the century
          </h2>
        </div>
      </section>

      <div class="event-back">
        <div class="container">
          <a href="/event.html" class="d-flex align-items-center">
            <img src="/asset/icons/back-icon.svg" alt="back" />
            Back
          </a>
        </div>
      </div>

      <section class="event-info my-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <h5 class="title">Event Title</h5>
              <h2>The Business Guru of the century</h2>
              <div class="row calender">
                <div class="col-md-auto">
                  <img src="/asset/icons/past-date.svg" alt="calender" />
                  08 January, 2021
                </div>
                <div class="col-md-auto">
                  <img src="/asset/icons/event-location.svg" alt="location" />
                  Online
                </div>
                <div class="col-md-auto">
                  <img src="/asset/icons/event-time.svg" alt="time" />
                  11am-2pm
                </div>
              </div>
              <div class="event-description">
                <h4>Description</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Elementum amet commodo ultricies lacinia ipsum tempus et. Eu, id
                  pellentesque sit ultricies cras adipiscing. Platea adipiscing
                  tempus dui dui ac venenatis ut odio. Suspendisse nisi viverra
                  senectus amet, eu aliquet a velit faucibus. Sed ultrices neque,
                  eget tincidunt sit.
                </p>
                <h6>Limited seats Available: <span>2450</span></h6>
              </div>
              <div
                class="row count-down align-items-center justify-content-evenly ps-lg-4 mx-0"
              >
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
                  <p class="greening">Left for Registeration</p>
                </div>
                <div class="col-12 d-block d-sm-none">
                  <p class="greening">Left for Registeration</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 event-form">
              <h4>Register for Event</h4>
              <form action="#">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="FirstName"
                    placeholder="First Name"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="LastName"
                    placeholder="Last Name"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="EmailAddress"
                    placeholder="Email address"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="number"
                    class="form-control"
                    id="PhoneNumber"
                    placeholder="Phone Number"
                  />
                </div>

                <div class="form-group">
                  <select class="form-select" id="exampleSelect">
                    <option value="">Select Venue</option>
                    <option value="">Los Angeles</option>
                    <option value="">Lagos</option>
                    <option value="">London</option>
                    <option value="">New York</option>
                  </select>
                </div>

                <button type="submit" class="btn">Register</button>
              </form>
            </div>
          </div>
        </div>
      </section>
  @endsection