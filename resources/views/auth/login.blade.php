<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="/css/styles.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center" style="margin:20px;">
      <div class="col-lg-6 col-md-8 login-box">
        <div class="col-lg-12 login-title">
          <img class="css-1px3c36" src="http://91.106.63.150/assets/images/logo/image-removebg-preview.png" alt="">
        </div>
        <div class="col-lg-12 login-form">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
              <label class="form-control-label">Email</label>
              <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>

            <div class="form-group">
              <label class="form-control-label">Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>

            <div class="col-12 login-btm login-button justify-content-center d-flex">
              <button type="submit" class="btn btn-outline-primary">Login</button>
            </div>
            
            <div class="col-12 login-btm login-button justify-content-center d-flex">
            <a class="btn btn-outline-primary" href="{{ route('register') }}">Register</a>
          </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>
