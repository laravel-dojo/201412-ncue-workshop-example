<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>登入 | 偽 Blog</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/login.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
</head>
    <div class="container">
        {{ Form::open(['route' => 'auth.process', 'method' => 'POST', 'class' => 'form-signin', 'role' => 'form']) }}
            <h2 class="form-signin-heading">請登入</h2>
            {{ Form::label('email', '帳號', ['class' => 'sr-only']) }}
            {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => '請輸入您的帳號', 'required', 'autofocus']) }}

            {{ Form::label('password', '密碼', ['class' => 'sr-only']) }}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => '請輸入您的密碼', 'required']) }}

            <div class="checkbox">
              <label>
                  {{ Form::checkbox('remember-me', 1, false) }} 記住我
              </label>
            </div>
            
            @include('partials.notifications')
            
            {{ Form::submit('登入', ['class' => 'btn btn-lg btn-primary btn-block']) }}
        {{ Form::close() }}
    </div><!-- /container -->
</body>
</html>