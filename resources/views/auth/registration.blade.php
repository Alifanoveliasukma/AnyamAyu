<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Anyam Ayu</title>
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
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="Confirm Password" name="password" placeholder="Password" required>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <select class="selectbox" required>
                        <option value="">Select Role</option>
                        <option value="2">Super Admin</option>
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                    </select>
                </div>

                <div class="pass" style="margin-top: 10px;"><a href="{{ url('forgot')}}">Forgot Password</a></div>
                <div class="row button">
                    <input type="submit" value="Registration">
                </div>
                <div class="signup-link">Sign In? <a href="{{ url('login')}}">Login</a></div>
                <div class="signup-link">Welcome Page? <a href="{{ url('/')}}">Welcome Page</a></div>

            </form>
        </div>
   </div>
</body>
</html>