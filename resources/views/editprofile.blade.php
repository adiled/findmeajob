@extends('layouts.app')

@section('content')

<section class="edit-profile">

    <a class="view-profile" href="../profile"><i class="angle left icon"></i> View Profile</a>

    <h5 class="heading center upper">Edit Profile</h5>

    {{ Form::model(Auth::user(), ['class' => 'ui form', 'route' => ['user.update', Auth::user()->id], 'method' => 'put']) }}    

    @include('errors.form')
    
    @if(Session::exists('success'))
    <p class="ui positive message">
        {{ Session::get('success') }}
    </p>
    @endif

    <!-- name -->
    {{ Form::label('full_name', 'Name') }}
    {{ Form::text('full_name') }}

    <!-- email -->
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email') }}      

    <div class="center">
        {{ Form::submit('Update Profile', ['class' => 'ui button primary']) }}
    </div>

    {{ Form::close() }}

{{--     <form class="ui form" method="PUT" action="/user">
        
        <input type="submit" value="Edit Profile">

    </form> --}}

</section>

@endsection
