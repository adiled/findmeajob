@extends('layouts.app')

@section('content')

<section>

  <h3 class="heading center">Today's Listings</h3>

  @include('components.listings')

  <div class="login ui inverted dimmer">
    <section class="login">
      @include('auth.login')
    </section>
  </div>

</section>

@endsection