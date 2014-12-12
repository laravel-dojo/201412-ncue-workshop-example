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
      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">請登入</h2>
        <label for="inputEmail" class="sr-only">帳號</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="請輸入您的帳號" required="" autofocus="">
        <label for="inputPassword" class="sr-only">密碼</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="請輸入您的密碼" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 記住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
      </form>
    </div><!-- /container -->
</body>
</html>