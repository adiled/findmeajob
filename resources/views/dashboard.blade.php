@extends('layouts.app')

@section('content')

<section>
  <p>Hello {{Auth::user()->full_name}}!</p>

  <h3 class="heading center">Today's Listings</h3>

  @include('components.listings')

</section>

@endsection
