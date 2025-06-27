@extends('layouts.app')
@section('content')


<div class="container">
        <span style="color: red;">{{ $errors->first('password') }}<br></span>
        <span style="color: red;">{{ $errors->first('confirm_password') }}<br></span>
    @include('layouts._message')

    <div class="wrapper">
        <div class="title"><span>Reset Password Page</span></div>
        <form action="{{ url('reset_post/'.$token) }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required name="password">
            </div>

            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm Password" required name="confirm_password">
            </div>

            <div class="row button">
                <input type="submit" value="Reset Password">
            </div>
        </form>
    </div>

</div>
@endsection