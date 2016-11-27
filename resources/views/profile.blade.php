@extends('layouts.app')

@section('content')

<section class="user-profile">

  <h5 class="heading center upper">My Profile</h5>
  
  <div class="header">
    <h1 class="name blue">{{$user->full_name}}
    <a href="profile/edit"><i class="large edit icon"></i></a></h1>
    <p class="type">{{$user->userRole->display_name}}</p>
  </div>

  <div class="details">
    <p><span class="blue">Email Address</span>&emsp;{{$user->email}}</p>
    <p><span class="blue">Reward Points</span>&emsp;{{$user->reward_points}}</p>
  </div>
  

</section>

@endsection
