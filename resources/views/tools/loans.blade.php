@extends('layouts.app')
  @section('content')
  <section class="container debit-card py-5">
    <div class="row mt-0 justify-content-between proposition mt-3 mt-sm-0">
      <h2 class="col-auto" style="line-height: 35px">All Available Offers</h2>
      <div class="d-flex apply-here col-auto">
        <p>Need a Debit Card?</p>
        <a href="#">Apply Here</a>
      </div>
    </div>

    <div class="row mt-0 loans">
      <div class="col-auto">
        <div class="">
          <div class="text-center">
            <img src="{{asset('img/loan1.png')}}" alt="" />
          </div>
          <div class="">
            <h3>CashFlow Loans</h3>
            <p><span class="sub-heading">Interest:</span>3% per month</p>
            <p>
              <span class="sub-heading">Sector: </span>Trade, Manufacturing,
              Distributors, Services, Hospitality
            </p>
            <p><span class="sub-heading">Loan Amount:</span> ₦1-5m</p>
            <p>
              <span class="sub-heading">Collateral:</span> ₦1-2.5m (collateral
              free)
            </p>
            <p>
              <span class="sub-heading">Mode of Application: </span> Click on
              the link below to apply
            </p>
          </div>
          <div class="text-center">
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
      <div class="col-auto">
        <div class="">
          <div class="text-center">
            <img src="{{asset('img/loan2.png')}}" alt="" />
          </div>
          <h3>Instant Business Loans</h3>

          <div class="loan-details">
            <p>
              <span class="sub-heading">Interest:</span> 27% per annum for
              male owned businesses & 15% per annum for female owned
              businesses
            </p>
            <p><span class="sub-heading">Minimum tenor: </span> 3 months</p>
            <p>
              <span class="sub-heading">Maximum tenor: </span>12 month for
              working capital & 24 months for asset purchase
            </p>
            <p>
              <span class="sub-heading">Sector:</span> Traders, Distributors
              and Dealers, Hospitality, Importers Exporters, Travel Agency,
              Legal Firms, Accounting Firms, Entertainment, Healthcare Sector,
              It Services, Manufacturing, Agriculture, Professional Firms &
              Associations, NGO&#39;s, Supermarkets, Clearing Agents, Quick
              Service Restaurants
            </p>
          </div>
          <div class="text-center">
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
    </div>
  </section>

  <!-- modal  -->
  <div
    class="modal fade"
    style="display: none"
    id="exampleModal"
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