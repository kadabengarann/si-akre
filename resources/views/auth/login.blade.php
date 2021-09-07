<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SI - Akre | Login</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('template') }}/css/styles.css" rel="stylesheet" />

    <link href="{{ asset('css') }}/login.css" rel="stylesheet" />

</head>
  <body class="bg-login">
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
            <div id="layoutAuthentication">
              <div id="layoutAuthentication_content">
                <main>
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                          <div class="card-header login-header">
                            <h3 class="text-center font-weight-light">
                              <img src="https://www.ulm.ac.id/id/wp-content/uploads/2015/05/Logo-Unlam.png" width="150" height="150">  
                            </h3>
                            
                              <h4 class="text-center">Halaman Login</h4>

                          </div>
                          <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                              @csrf
                              <div class="form-group">
                                <div class="form-group">
                                <label class="small mb-1" for="username">Username</label>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Enter NIP" required autocomplete="email" autofocus>
    
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="password"
                                    >Password</label
                                  >
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
            
                              <div
                                class="
                                  form-group
                                  d-flex
                                  align-items-center
                                  justify-content-between
                                  mt-4
                                  mb-0
                                "
                              >
                                <a class="small" href="#"
                                  >Forgot Password?</a
                                >
                                <button type="submit" class="btn btn-primary">
                                  Login
                                </button>
                              </div>
                            </form>
                          </div>
                          {{-- <div class="card-footer text-center">
                            <div class="small">
                              <a href="{{ route('register') }}"
                                >Need an account? Register now!</a
                              >
                            </div>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </main>
              </div>
              <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                  <div class="container-fluid">
                    <div
                      class="
                        d-flex
                        align-items-center
                        justify-content-between
                        small
                      "
                    >
                      <div class="text-muted">
                        Copyright &copy; SI - Akre 2021
                      </div>
                      <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                      </div>
                    </div>
                  </div>
                </footer>
              </div>
            </div>
        </main>
      </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
