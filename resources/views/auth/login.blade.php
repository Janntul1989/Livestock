<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('asset/assets/img/logo.jpg') }}">
    <link rel="icon" href="{{ asset('asset/assets/img/logo.jpg') }}">

    <link rel="stylesheet" href="{{ asset('asset/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/assets/css/fontawesome_all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/assets/css/ma5-menu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/assets/css/responsive.css') }}">
</head>

<body>
    {{-- {{ dd(Auth::id())}} --}}
  <section class="body_wrapper">
    <div class="container">
       <div class="login_form">
        <div class="login-container log">
            <h1>Login</h1>
            @if (Auth::id())
                <div class="alert alert-success" role="alert">
                    You've logged in, Back to <a href="/">Home</a>, or <a href="/logout">Logout</a>
                </div>
            @endif
            @if (Session::get('message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <form method="post" action="" class="{{ Auth::id() ? 'd-none' : '' }}">
                @csrf
                {{-- <label class="control-label" for="full_name">পুরো নাম</label>
          <input id="full_name" name="full_name" placeholder="আপনার নাম লিখুন"
              class="form-control" type="text" required>
            <br> --}}
                <label class="control-label" for="number">ফোন
                    নাম্বার</label>
                <input id="number" name="number" class="form-control" placeholder="আপনার ফোন নাম্বার" type="number"
                    required>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
       </div>
    </div>
  </section>
</body>

</html>
