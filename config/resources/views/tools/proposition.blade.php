@extends('layouts.app')
  @section('content')
    <section class="container proposition py-5">
      <div class="row mt-0 justify-content-between">
        <h2 class="col-auto">All Available Propositions</h2>
        <div class="d-flex apply-here col-auto">
          <p>Need a Debit Card?</p>
          <a href="#">Apply Here</a>
        </div>
      </div>

      <div class="row mt-0 justify-content-md-start justify-content-center">
        <div
          class="col-auto proposition-details flex-column justify-content-between d-flex"
        >
          <div>
            <img src="{{asset('img/proposition1.png')}}" alt="image" />
            <h4>Access Kit/ SME Plus</h4>
            <ul>
              <li>Discount on logistics & courier services</li>
              <li>Enjoy up to N5000 worth of free google ads</li>
              <li>Website development service with as low as 15k</li>
              <li>A chance to be featured in our EB monthly newsletter</li>
              <li>Google small business advisory services</li>
            </ul>
          </div>

          <div>
            <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> Apply Now </button>
          </div>
        </div>

        <div
          class="col-auto proposition-details flex-column justify-content-between d-flex"
        >
          <div>
            <img src="{{asset('img/proposition1.png')}}" alt="image" />
            <h4>Access Kit/ SME Plus</h4>
            <ul>
              <li>Discount on logistics & courier services</li>
              <li>Enjoy up to N5000 worth of free google ads</li>
              <li>
                Access to wider market of up to 30 million users on the access
                digital marketplace
              </li>
              <li>Access to capacity building courses on SMEzone</li>
            </ul>
          </div>

          <div>
            <button
              class="btn"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              Apply Now
            </button>
          </div>
        </div>

        <div
          class="col-auto proposition-details flex-column justify-content-between d-flex"
        >
          <div>
            <img src="{{asset('img/proposition1.png')}}" alt="image" />
            <h4>Associate Access Kit/ SME Advantage</h4>
            <ul>
              <li>Discount on logistics & courier services</li>
              <li>Enjoy up to N5000 worth of free google ads</li>
              <li>
                Access to wider market of up to 30 million users on the access
                digital marketplace
              </li>
              <li>Access to capacity building courses on SMEzone</li>
            </ul>
          </div>

          <div>
            <button class="btn">Apply Now</button>
          </div>
        </div>

        <div
          class="col-auto proposition-details flex-column justify-content-between d-flex"
        >
          <div>
            <img src="{{asset('img/proposition1.png')}}" alt="image" />
            <h4>Advanced Kit/ SME Premier</h4>
            <ul>
              <li>Discount on logistics & courier services</li>
              <li>Enjoy up to N5000 worth of free google ads</li>
              <li>
                Access to wider market of up to 30 million users on the access
                digital marketplace
              </li>
              <li>Access to capacity building courses on SMEzone</li>
            </ul>
          </div>

          <div>
            <button
              class="btn"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              Apply Now
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- modal  -->
    <div
      class="modal fade"
      id="exampleModal"
      style="display: none"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Registration Form
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  id="firstname"
                  placeholder="Fullname"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Email Address"
                />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  class="form-control"
                  id="Phone"
                  placeholder="Phone Number"
                />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  class="form-control"
                  id="Account"
                  placeholder="Account Number"
                />
              </div>
              <div class="form-group">
                <select class="form-select" id="exampleSelect">
                  <option value="" selected>
                    Do you have an access business card?
                  </option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                  <option value="">5</option>
                </select>
              </div>

              <button class="btn submit-reg">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  <!-- end of modal  -->
  @endsection