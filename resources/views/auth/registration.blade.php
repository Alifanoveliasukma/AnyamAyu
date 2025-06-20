@extends('layouts.app')

@section('content')
   <div class="container">

        <span style="color: yellow;">{{ $errors->first('email') }}<br></span>
        <span style="color: yellow;">{{ $errors->first('password') }}<br></span>
        <span style="color: yellow;">{{ $errors->first('confirm_password') }}<br></span>

        @include('_message')
        <div class="wrapper">
            <div class="title"><span>Registration</span></div>
            <form action="{{ url('registration_post') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Username" required value="{{ old('name')}}">
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" placeholder="Email" required value="{{ old('email')}}">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="confirm password" required>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <select class="selectbox" required name="is_role">
                        <option value="">Select Role</option>
                        <option {{ old('is_role') == '2' ? 'selected' : '' }} value="2">Super Admin</option>
                        <option {{ old('is_role') == '1' ? 'selected' : '' }} value="1">Admin</option>
                        <option {{ old('is_role') == '0' ? 'selected' : '' }} value="0">User</option>
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
@endsection