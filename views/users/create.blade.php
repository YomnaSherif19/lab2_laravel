@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
<title> </title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading"></h1>
    <div class="login-form">
    <div class="main-div">
        <div class="panel">
            <h1>Register</h1>
        </div>
        <form id="register" method="POST" action="{{route('users.store')}}">
            @csrf
            <div class="form-group">
                <input type="text" value="" name="username" class="form-control" id="inputEmail" placeholder="Email Address">
            </div>
            <div class="form-group">
                <input type="password" value="" name="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <div class="form-group" style="text-align:left;">
                <label><input type="checkbox" name="remember" > Remember me </label>
            </div>
            <div class="forgot">
                <a href="#">Forgot password?</a>
            </div>
          <a href="">  <input type="submit" class="btn btn-primary" value="Login" name="login"></a>
            
             </form>
        </div>
       
    </div>
</div>
<style>
body#LoginForm{ background-image:url("img/bgblur.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}
 
.form-heading { color:#fff; font-size:23px;text-align:center;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #FAEBD7 none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}
 
.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #DC143C;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #DC143C none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ffff none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}
</style>
</body>
</html>