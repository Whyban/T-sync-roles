<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>

  </head>
  <body>
    <main>
      <div class="box">

        <div class="inner-box">
          <div class="forms-wrap">
            <form method="POST" action={{ route('login') }} autocomplete="off" class="sign-in-form">
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
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  <label>Email</label>
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
                </div>
                  <label>Password</label>
                </div>
        </div>
    </form>

                <input type="submit" value="Log In" class="sign-btn" />

                <p class="text">
                  Forgot your password or your login details?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>
            {{-- REGISTER --}}
            <form method="POST" action={{ route('register') }} autocomplete="off" class="sign-up-form">
                @csrf
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" id="#sign_up"class="toggle">Log in</a>
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
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  <label>Email</label>
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
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
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
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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

          <div class="carousel">
            <div class="images-wrapper">
              <img src="Cimage1.png" style="width: 550px; height:450px; "class="image img-1 show" alt="" />
              <img src="Cimage2.png" style="width: 550px; height:450px; margin: -40px; margin-left:20px"class="image img-2" alt="" />
              <img src="Cimage3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Choose your own adventure</h2>
                  <h2>Customize as you like</h2>
                  <h2>This goal is on track.</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
  </body>
</html>
