<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}" />
    <title>SME</title>
  </head>
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
                        <img src="../img/signin.png" alt="" class="d-sm-block d-none"/>
                        <img src="../img/signin-small.png" alt="" class="d-block d-sm-none"/>
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
                    <h4>Forgotten password</h4>
                    <p>Don&#39;t worry we would help you retrieve your account</p>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input placeholder="Type in the registered email address" type="email" name="email" :value="old('email')" required autofocus/>
                                </div>
                            </div>
        
                            <div class="row">
                                {{-- <div class="col-lg-12">
                                    <input
                                    type="text"
                                    placeholder="Input the reset code sent"
                                    />
                                </div> --}}
                            </div>
        
                            <div class="mt-md-4 mt-3">
                                <button type="submit" class="btn">Proceed</button>
                            </div>
                            <h6> Still remember password?
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
  
