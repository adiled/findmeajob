@extends('layouts.app')

@section('content')

<section>
  <p>Hello {{Auth::user()->full_name}}!</p>

  <h3 class="heading center">Today's Listings</h3>

  <div class="listing">
    <div class="item">
      <p>HIRING</p>
      <p>Font End Developer</p>
    </div>
    <div class="item">
      <p>HIRING</p>
      <p>Font End Developer</p>
    </div>
  </div>

</section>

@endsection
