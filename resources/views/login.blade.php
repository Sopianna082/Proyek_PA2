<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Pelabuhan</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="css/authstyle.css">
  <link rel="stylesheet" href="css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-3">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="img/logo.png" alt="logo" width="40%" >
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{url('proses_login')}}" method="POST" id="logForm"  class="needs-validation" >
                @csrf
                 @error('login_gagal')

                  <div class="alert alert-warning alert-dismissible fade show mb-2" role="alert">
                  <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  @enderror
                  <div class="form-group">
                    <label class="form-control-placeholder" for="username">Username</label>
                    <input type="text" name="username" id="inputEmailAddress" class="form-control" required autofocus/>
                        @if($errors->has('username'))
                        <span class="error">{{ $errors->first('username') }}</span>
                        @endif
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    <label class="form-control-placeholder" for="password">Password</label>
                      <div class="float-right">
                        <a href="" class="text-small">
                          Lupa Password?
                        </a>
                      </div>
                    </div>
                    <input id="password-field" type="password" class="form-control" id="inputPassword" name="password" tabindex="2" required autocomplete="current-password">
                        @if($errors->has('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                        @endif
                  </div>

                  <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                  </div>
                  <!-- <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                      <a href="{{url('register')}}">Register</a>
                    </div>
                  </div> -->
                </form>
                <div class="text-center mt-2 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-secondary rounded submit px-3"><span class="fab fa-google"></span> Masuk dengan Google</button>
                </div>
                </div>
            </div>
            </div>
            </div>
            <div class="mt-2 text-muted text-center">
              Belum punya akun sebelumnya? <a href="{{ route('register') }}">Register</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Pelabuhan Mulia Raja Napitupulu 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="js/auth.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="js/scripts.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
