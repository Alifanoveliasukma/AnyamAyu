@extends('layouts.app')
@section('content')


  <div class="container">
    @include('layouts._message')
    
        <div class="wrapper">
            <div class="title"><span>Forgot Password</span></div>
            <form action="{{ url('forgot_post') }}" method="POST">
                {{ csrf_field()}}
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" value="{{ old('email')}}" placeholder="Email" required>
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
@endsection