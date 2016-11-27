@extends('layouts.app')

@section('content')

<section class="single-application">

@include('errors.form')

  <div class="header">
    <h3 class="blue">Application for {{$listing->job_title}}</h3><br>
    <p class="name">
      <span class="title"><i class="user icon"></i> Name</span>&emsp; {{ $user->full_name }}
    </p>
    <p class="email">
      <span class="title"><i class="mail icon"></i> Email</span>&emsp; {{ $user->email }}
    </p>
    <p class="phone">
    <span class="title"><i class="phone icon"></i> Phone</span>&emsp; {{ $user->phone }}
    </p>
  </div>


  {{ Form::open(['route' => 'application.store', 'files' => true, 'class' => 'ui form dropzone']) }}

  {{ Form::hidden('user_id', $user->id) }}
  {{ Form::hidden('listing_id', $listing->id) }}

  <p class="title">Cover Letter</p>
  {{ Form::textarea('cover_letter') }}

  {{--  {{ Form::file('attachment') }} --}}


  {{ Form::submit('Submit', ['name'=>'submit', 'class'=>'ui button primary']) }}

  {{Form::close()}}

</section>

@endsection