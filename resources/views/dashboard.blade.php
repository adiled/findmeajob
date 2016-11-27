@extends('layouts.app')

@section('content')

<section class="dashboard {{ $user_role }}">

  @if($user_role==='employer')
    <div class="post-ad center"><a class="ui primary button" href="{{route('listing.create')}}">Post Ad</a></div>
  @endif

  <h3 class="heading center upper">
    {{ $user_role==="employer" ? 'My' : 'Today\'s' }} Listings
  </h3>

  @include('components.listings')

</section>

@endsection
