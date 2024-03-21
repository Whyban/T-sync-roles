<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
            <!-- Vendor CSS Files -->
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/css/variables.css" rel="stylesheet">
   <link href="assets/css/main.css" rel="stylesheet">
    <title>T-Sync</title>
  </head>
  <style>

  </style>
  <body>
  <nav>
  <header class= "header d-flex fixed-top " style="background-color:#fff; height: 55px; box-shadow: 0 8px 6px -6px #d1d9f7;"  >
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between" style="margin-top:10px;">
    <div class = "nav_logo">
<img src = "{{('logo.png')}}" class  =" ">
 </div>
      <ul class="nav__links">
        <li class="link"><a href="#"></a></li>
        <li class="link"><a id="LoginButton" class="nav__btn">Log In</a></li>
      </ul>
    </nav>
</header>
    <div class="_container">
      <div class="content__container" >
        <h1>
        Streamline Workflows,<br />
          <span class="heading__1">Enhance Communication,</span><br />
          <span class="heading__2">Achieve Success</span>
        </h1>
        <p>
        Experience the power of T-Sync,
         a robust Project Management System designed<br> to meet the demands of efficient task management,<br>
         seamless communication, and collaborative teamwork.
        </p>
</div>

<div style="display:flex; ">
        <div class="container_image "  style="width: 600px; height:500px; background: url('background.png'); background-repeat:no-repeat;  background-size: contain;">
        <div style="margin-top:10%">
        <div class="row" style="gap: -2px;" >
        <div class="image__container image1" style="width:fit-content;height:fit-content;margin-right: -10px;">
        <a href ="Objective" >
        <img src="Handshake.png" class = "image__container"    alt="header"   class = "image"/>
        </a>
        <img src="objectives.png" id="objectives">
        </div>
        <div class="image__container image2" style="width:fit-content;height:fit-content;margin-left: -10px;">
        <img src="search.png" class = "image__container"   alt="header"   class = "image"/>
        <input type="text" placeholder=" Search Here" value="">
        </div>
        </div>
        <H5 style="margin-left: 12%; margin-top:-10px;margin-bottom:10%">TEAMWORK</H5>
        <div class="row" style="gap: -2px;">

        <div class="image__container image3" style="width:fit-content;height:fit-content;margin-top:-10%;margin-right: -10px;">
        <a href ="Project Management" >
        <img src="bulb.png" class = "image__container"   alt="header"   class = "image"/>
        </a>
        <img src="Project Manager .png" id="projectmanager">
        </div>

        <div class="image__container image4" style="width:fit-content;height:fit-content;margin-top:-10%; margin-left: -10px;">
        <a href ="Settings" >
        <img src="settings.png" class = "image__container"   alt="header"   class = "image"/>
        </a>
        <img src="P_Settings.png" id="Settings">
        </div>
        </div>
        </div>

        </div>
</div>

        </div>
        <div class="modal fade bd-example-modal-xl"  id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true" style="max-height: 100vh; overflow-y: hidden;">
              <main style="background:none;">
                <div class="modal-dialog modal-xl modal-dialog-centered" style="width:950px;">
                    <div class="modal-content">
                    <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form method="POST" action="{{ route('login') }}" autocomplete="off" class="sign-in-form">
                @csrf
              <div class="logo">
                <img src="./img/logo.png" />
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                    <input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    minlength="4"
                    class="input-field"
                    autocomplete="username"
                    required
                  />
                  <label>Email</label>
                  <x-input-error :messages="$errors->get('email')" style="font-size:12px; position:absolute; color:red; top: 40px;" />
                </div>

                <div class="input-wrap">
                    <input
                    id="password"
                    name="password"
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="current-password"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Log In" class="sign-btn" />

                <p class="text">
                  Forgot your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form method="POST" action="{{ route('register') }}" autocomplete="off" class="sign-up-form">
                @csrf
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Log in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                    <input
                    id="name"
                    name="name"
                    type="text"
                    minlength="4"
                    class="input-field"
                    :value="old('name')"
                    autocomplete="name"
                    required
                  />
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                    <input
                    id="name"
                    type="email"
                    name="email"
                    :value="old('email')"
                    class="input-field"
                    autocomplete="username"
                    required
                  />
                  <label>Email</label>
                  <x-input-error :messages="$errors->get('email')" style="font-size:12px; position:absolute; color:red; top: 40px;px"  />
                </div>

                <div class="input-wrap">
                    <input
                    type="password"
                    name="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="password"
                    required
                  />
                  <x-input-error :messages="$errors->get('password')"  style="font-size:11px; position:absolute; color:red; top: 40px;px" />
                  <label>Password</label>
                </div>

                <div class="input-wrap">
                    <input
                      id="password_confirmation"
                      type="password"
                      name="password_confirmation"
                      minlength="4"
                      class="input-field"
                      autocomplete="new-password"
                      required
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')"  style="font-size:11px; position:absolute; color:red; top: 40px;px"  />
                    <label>Confirm Password</label>
                  </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>
          

         <!-- carousel slide interval and disables the automatic pause ng carousel -->
         <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"
            data-bs-pause="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row featurette">
                        <div class="col-md-12 text-center">

                            <img src="{{ asset('Cimage1.png') }}" alt="first-img"  style="  margin-top: 10%;
  height: 450px;width:500px;"
                                class="">
                                <p style="font-weight: 800; font-size:large;">Choose your own adventure</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row featurette">
                        <div class="col-md-12 text-center">
                            <img src="{{ asset('Cimage2.png') }}" alt="third-img" style="  margin-top: 10%;
  height: 450px;width:500px;;"
                                class="d-block ">
                                <p style="font-weight: 800; font-size:large;">Customize as you like</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row featurette">
                        <div class="col-md-12 text-center">
                            <img src="{{ asset('Cimage3.png') }}" alt="third-img"style="  margin-top: 10%;
  height: 450px;
  width:500px;"
                                class="d-block">
                                <p style="font-weight: 800; font-size:large;">This goal is on track.</p>
                        </div>
                    </div>
                </div>
            </div>
</div>


        </div>
      </div>
      </div>
                </div>
</div>
   <!-- Javascript file -->

   <script src="app.js"></script>

</div>
</div>
</div>
</section>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="background:#9c9a9a;">

<div class="footer-legal">
<div class="container">

<div class="row justify-content-between">
<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
<footer class="container">
<p style="color: #3e556f;">&copy; 2024 T-Sync. &middot; <a href="#" style="color: #3e556f;">Privacy</a> &middot; <a href="#" style="color: #3e556f;">Terms</a></p>
</footer>

<div class="credits">
<!-- All the links in the footer should remain intact. -->
<!-- You can delete the links only if you purchased the pro version. -->
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
</div>

</div>

<div class="col-md-6">
<div class="social-links mb-3 mb-lg-0 text-center text-md-end">
<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
<a href="#" class="github"><i class="bi bi-github"></i></a>
</div>

</div>

</div>

</div>
</div>



    <!-- Javascript file -->

    <script src="app.js"></script>
        <script>
            document.getElementById('LoginButton').addEventListener('click', function() {
                $('#login-modal').modal('show');
            });
        </script>
        <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    </section>
  </body>
</html>
