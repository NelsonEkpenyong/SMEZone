<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
<main class="sigin">
    <div>
      <div class="container-fluid py-md-5 py-4">
        <div class="row">
          <div class="col-lg-6 pt-3">
            <div class="logo d-lg-none mb-4">
              <img src="../icons/sme-logo.svg" alt="sme" />
            </div>
            <div class="signin-bg">
              <img src="../img/signin.png" alt="" class="d-sm-block d-none" />
              <img src="../img/signin-small.png" alt="" class="d-block d-sm-none" />
            </div>
            <div>
              <h3 class="">#SMEZOne</h3>
            </div>
          </div>
          <div class="col-lg right">
            <div class="logo d-lg-block d-none">
              <img src="../icons/sme-logo.svg" alt="sme" />
            </div>
            <div>
              <h4>Welcome Onboard!</h4>
              <p>
                We are excited to have you back, let&#39;s scale your business
                even higher
              </p>
            </div>
            <div>
             <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <input placeholder="First Name" id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus />
                  </div>
                  @error('first_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                  <div class="col-lg-6">
                    <input placeholder="Last Name" id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" />
                  </div>
                  @error('last_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <input placeholder="Phone No." id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" />
                  </div>
                  @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                  <div class="col-lg-6">
                    <input placeholder="Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                  </div>
                  @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  </div>
                  @error('password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                  <div class="col-lg-6">
                    <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                  @error('password_confirmation') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                </div>

                <div>
                  <button class="btn">Sign up</button>
                </div>
                <h6> Have an account?
                  <a href="{{ route('login') }}" style="color: #eb8e02; font-family: mulish"> Sign in </a>
                </h6>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 left">
          <div class="footer-logo">
            <img src="../icons/footer-logo.svg" alt="sme" />
          </div>
          <div>
            <ul class="my-0">
              <li>
                <a href="#"
                  ><img src="../icons/facebook.svg" alt="facebook"
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img src="../icons/twitter.svg" alt="twitter"
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img src="../icons/instagram.svg" alt="instagram"
                /></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 right justify-content-end">
          <ul class="my-0 px-0">
            <li><a href="#"> Call us on: 0707300000 </a></li>
            <li><a href="#"> Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
    <hr class="my-0" />
    <div class="container">
      <p>Copyright © 2022 - All rights reserved. SMEZONE</p>
    </div>
  </footer>
  <!-- #Footer -->

  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    crossorigin="anonymous"
  ></script>
</body>
</html>
