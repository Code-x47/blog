<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Page</title>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="Blog/assets/css/login.css">
</head>
<body style="background: lemonchiffon;">


<div class="login">
   
  <h2 class="active" style="cursor: pointer;"> Back </h2>

  <h2 class="active" style="cursor: pointer;"> sign in </h2>

  <h2 class="active" style="cursor: pointer; border-bottom:none;"><a href="/register"> sign up </a></h2>
  <form action="/login" method="POST">
   
    @csrf

    <input type="text" class="text" name="userEmail" placeholder="Enter your Email Here">
     <span>username</span>

    <br>
    
    <br>

    <input type="password" class="text" name="userPassword">
    <span>password</span>
    <br>

    <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
    <label for="checkbox-1-1">Keep me Signed in</label>
    
    <button class="signin">
      Sign In
    </button>


    <hr>

   
  </form>

</div>


</body>
</html>
