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


            @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
            @endif


            <div>
              <h4>Hi There!</h4>
              <p>Before proceeding, please check your email for a verification link.</p>
              <p>If you did not receive the email.</p>
            </div>
            <div>
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                <div>
                  <button type="submit" class="btn">click here to request another link</button>
                </div>
                
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