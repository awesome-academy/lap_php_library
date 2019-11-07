<!DOCTYPE html>
<html>
<head>
    <title>{{ trans('client/login-page.login') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/template-client/css/login-page.css') }}">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <img src=""/>
            </div>
            @if ($errors->has('login_fail'))
                <div class="error text-danger">{{ $errors->first('login_fail') }}</div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <input type="text" id="login" class="fadeIn first" name="email" placeholder="{{ trans('client/login-page.email_input') }}">
                @if ($errors->has('email'))
                    <div class="error text-danger">{{ $errors->first('email') }}</div>
                @endif

                <input type="text" id="password" class="fadeIn second" name="password" placeholder="{{ trans('client/login-page.password_input') }}">
                @if ($errors->has('password'))
                    <div class="error text-danger">{{ $errors->first('password') }}</div>
                @endif
                <input type="submit" class="fadeIn fourth" value="{{ trans('client/login-page.login') }}">
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="#">{{ trans('client/login-page.forgot') }}</a>
            </div>

        </div>
    </div>
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
</body>
</html>
