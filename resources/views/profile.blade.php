@extends('layouts.app')

@section('content')

<section>

  <h5 class="heading center upper">My Account | <a href="profile/edit">Edit</a></h5>
  <h2 class="blue">{{Auth::user()->full_name}}</h2><br>
  <p><b class="blue">Account Type:</b> {{Auth::user()->userRole->display_name}}</p>
  <p><b class="blue">Email Address:</b> {{Auth::user()->email}}</p>

  

</section>

@endsection
