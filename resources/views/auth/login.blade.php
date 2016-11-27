@extends('layouts.app')

@section('content')

<section class="login">
 <form class="ui form" role="form" method="POST" action="{{ url('/login') }}">
  
  <p class="ui message"></p>

  {{ csrf_field() }}

  <label for="email" class="col-md-4 control-label">E-Mail Address</label>
  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

  <label for="password" class="col-md-4 control-label">Password</label>
  <input id="password" type="password" class="form-control" name="password" required>

  <div class="ui checkbox">
    <input type="checkbox" name="remember">
    <label> Remember Me</label>
  </div>

  <button type="submit" class="ui button primary">Login</button>

  <a class="btn btn-link" href="{{ url('/password/reset') }}">
    Forgot Your Password?
  </a>
</form>   

</section>

@endsection