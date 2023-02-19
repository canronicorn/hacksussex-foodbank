<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Wire+One|Raleway:300' rel="stylesheet">
    <title>Log In</title>
</head>
<body id="loginpage">
    <div class="loginbox">
        <h1>Login</h1>
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required maxlength="20">
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required maxlength="20">
              
            <button type="submit">Login</button>
          </div>
          <p>Don't have an account? <a href="signup.php">Sign up</a></p>
          <button><a href="index.php">Back</a></button>
    </div>


    
</body>
</html>
