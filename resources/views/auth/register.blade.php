
<section>

  <form class="ui form" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <div class="ui radio checkbox">
      <input type="radio" name="type" value="employer">
      <label>Employer</label>

      <input type="radio" name="type" value="individual">
      <label>Individual</label>
    </div><br>

    <label for="name" class="col-md-4 control-label">Name</label>
    <input id="name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required autofocus>

    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>


    <label for="password" class="col-md-4 control-label">Password</label>
    <input id="password" type="password" class="form-control" name="password" required>

    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

    <button type="submit" class="ui button primary">Register</button>

  </form>

</section>
