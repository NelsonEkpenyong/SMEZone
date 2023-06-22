
@extends('layouts.dashboard.app')
  @section('content')
   <main class="dashboard">
    @include('layouts.dashboard.topNav')
    <div>
      <div class="upper-glow"></div>
    </div>

    <section class="px-lg-3">
      <div class="container-fluid px-lg-4">
        <div class="row">
          <h4 class="greeting">Good Morning {{Auth::user()->first_name}}!</h4>
          <div class="d-md-flex d-none justify-content-between subheader">
            <ul class="">
              <li class="active">
                <a href="#">Profile</a>
              </li>
              <li>
                <a href="/settings">Account Settings</a>
              </li>
            </ul>
          </div>

          <div class="dropdown account d-block d-md-none">
            <button
              class="btn btn-secondary dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Profile
            </button>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="./settings.html">
                  Account Settings</a
                >
              </li>
            </ul>
          </div>
        </div>

        <h4 class="semi-sub-header">Complete your profile</h4>
        <div class="row align-items-center image-upload">
          <div class="col-auto position-relative">
            <input type="file" name="image" id="uploadDP" />
            <img src="{{asset('icons/upload-img.svg')}}" alt="" />
          </div>
          <div class="col-auto">
            <label for="uploadDP" class="d-block"
              >Add a profile Picture</label
            >
          </div>
        </div>

        <form action="/update-profile" method="POST" class="settings-form">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <label for="firstName">First Name</label>
              <input type="hidden" name="id" value="{{Auth::user()->id}}">
              <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}" required/>
            </div>
            <div class="col-sm-6">
              <label for="lastName">Last Name</label>
              <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}" required/>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label for="email">Email Address</label>
              <input type="email" name="email" class="form-control" value="{{$user->email}}" required/>
            </div>
            <div class="col-sm-6">
              <label for="tel">Telephone</label>
              <input type="tel" name="phone" class="form-control" value="{{$user->phone}}" required/>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label for="Gender">Gender</label>
              <select id="gender_id" name="gender_id" class="form-control" required>
                @if($genders->count())
                  @foreach($genders as $gender)
                      <option value="{{ $gender->id }}" {{ $user->gender_id  == $gender->id ?  'selected' : '' }} > {{ $gender->name}}</option>
                  @endforeach
                @endif
              </select>
            </div>
            <div class="col-sm-6">
              <label for="tel">Date of Birth</label>
              <input type="date" name="dob" class="form-control" required/>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label for="businessName"> Do you have a business?</label>
              <select class="form-select" id="have_business" name="have_business" required>
                <option value="1" selected>Yes</option>
                <option value="0">No</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label for="businessName"> How long have you been in business?</label>
              <input type="number" class="form-control" id="no_of_years_in_business" name="no_of_years_in_business"/>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label for="Industry">In what Industry is your business?</label>
              <select class="form-select" id="Industry" name="industry" required>
                <option value="0" selected readonly>Choose Industry</option>
                @forelse ($industries as $industry)
                  <option value="{{$industry->id}}">{{$industry->name}}</option>
                @empty
                  <option value="0">No industries</option>
                @endforelse
              </select>
            </div>
            <div class="col-sm-6">
              <label for="businessName"> Do you have an Access Bank account?</label>
              <select class="form-select" id="have_account" name="have_account">
                <option value="0" selected>No</option>
                <option value="1" >Yes</option>
              </select>
            </div>
          </div>

          <div class="row" id="me">
            <div class="col-sm-6">
              <label for="Access Account Number">Access Account Number</label>
              <input type="text" name="account" class="form-control" id="access_account_number"/>
            </div>
            <div class="col-sm-6">
              <label for="Account Statua">Account Status</label>
              <select class="form-select" id="account_status" name="account_status">
                <option value="1" >Active</option>
                <option value="0" selected>Dormant</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label for="Address">Address</label>
              <input type="text" name="address" class="form-control" id="address" required/>
            </div>
            <div class="col-sm-6">
              <label for="State">State</label>
              <select class="form-select" id="state" name="state" onchange="getLgas()" required>
                 <option value="1">Choose State</option>
                @foreach ($states as $state)
                  <option value="{{$state->id}}">{{$state->name}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <label for="Lga">Lga</label>
              <select class="form-select" id="lga" name="lga" required>
                 <option value="1">Choose Lga</option>
                @foreach ($lgas as $lga)
                  <option value="{{$lga->id}}">{{$lga->name}}</option>
                @endforeach
              </select>
            </div>
          </div>


          <div class="row justify-content-end save">
            <div class="col-sm-auto">
              <button class="btn">Update Profile</button>
            </div>
          </div>
        </form>
      </div>
    </section>
   </main>

   <style>
    .hidden {
      display: none;
    }
  </style>
   
   <script>
    const haveBusiness  = document.getElementById('have_business');
    const businessYears = document.getElementById('no_of_years_in_business');
    const Industry      = document.getElementById('Industry');
    const haveAccount   = document.getElementById('have_account');
    const meRow         = document.getElementById('me');
    const state         = document.getElementById('state');
  
    haveBusiness.addEventListener('change', function() {
      if (haveBusiness.value === '0') {
          businessYears.disabled = true;
          Industry.disabled = true;
          businessYears.value = 0;
      } else {
         businessYears.disabled = false;
         Industry.disabled = false;
      }
    });

    meRow.classList.add('hidden');


    haveAccount.addEventListener('change', function() {
      if (haveAccount.value === '0') {
        meRow.classList.add('hidden'); 
      } else {
        meRow.classList.remove('hidden'); 
      }
    });

  const getLgas = async () => 
  {
      let selectedState = state.value;
      let url = "/api/lga/" + selectedState;
      let response = fetch(url);

      await response.then((res) => res.json()).then((data) => { 
          lga.innerHTML = `<option value='0' selected disabled >Select Lga</option>`;
          for(let i = 0; i < data.length; i++) {
            lga.options[lga.options.length] = new Option(data[i].name, data[i].id);
          }
      });
   }

  </script>
  @endsection