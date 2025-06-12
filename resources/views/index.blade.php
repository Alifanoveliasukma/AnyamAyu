<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anyam Ayu</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Welcome Page</span></div>
            <form>
                <div class="signup-link">Sign In? <a href="{{ url('login')}}">Login</a></div>
                <div class="signup-link">Join Now? <a href="{{ url('registration')}}">Registration</a></div>
            </form>
        </div>
    </div>
</body>
</html>