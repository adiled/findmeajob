@extends('layouts.app')

@section('content')

<?php $role = Auth::user()->userRole->name; ?>

<section class="dashboard {{$role}}">

  <h3 class="heading center upper">
    {{ $role==="employer" ? 'My' : 'Today\'s' }} Listings
  </h3>

  @include('components.listings')

</section>

@endsection
