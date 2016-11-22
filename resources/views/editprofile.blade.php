@extends('layouts.app')

@section('content')

<section>

  <h5 class="heading center upper">Edit Profile | <a href="../profile">View</a></h5>

    {{ Form::model(Auth::user(), ['class' => 'ui form']) }}    

        <!-- name -->
        {{ Form::label('name', 'Name') }}
        {{ Form::text('full_name') }}

        <!-- email -->
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email') }}      

        {{ Form::submit('Update Profile', ['class' => 'ui button']) }}

    {{ Form::close() }}

</section>

@endsection
