<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Anyam Ayu</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
  <div class="container">
        <div class="wrapper">
            <div class="title"><span>Registration</span></div>
            <form action="{{ url('registration') }}" method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="" placeholder="Email" required>
                </div>
                
                <div class="pass" style="margin-top: 10px;"><a href="{{ url('login')}}">Login</a></div>
                <div class="row button">
                    <input type="submit" value="Forgot Password">
                </div>

                <div class="signup-link">Join Now? <a href="{{ url('registration')}}">Registration</a></div>
                
                <div class="signup-link">Welcome Page? <a href="{{ url('/')}}">Welcome Page</a></div>

            </form>
        </div>
   </div>
</body>
</html>