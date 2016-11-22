@extends('layouts.app')

@section('content')

<section>
  <p>Hello {{Auth::user()->full_name}}!</p>

  <p>{{Request::is('dashboard') ? 'Yes' : 'No'}}</p>

  <h3 class="heading center">Today's Listings</h3>

  @include('components.listings')

</section>

@endsection
