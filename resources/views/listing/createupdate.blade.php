<?php
  use Illuminate\Support\Facades\Input;
  //use App\Models\Listing;
?>

@extends('layouts.app')

@section('content')

<?php
  $work_hours = date('g A', strtotime($listing->work_hour_start)).' - '.date('g A', strtotime($listing->work_hour_end))
?>

<section class="single-listing ">

  @if(Route::currentRouteName() === 'listing.edit')
      {{ Form::model($listing, ['route' => ['listing.update', $listing->id], 'method' => 'patch', 'class' => 'ui form'])}}
  @else
      {{ Form::open(['route' => 'listing.store']) }}
  @endif

  @include('errors.form')
    
    @if(Session::exists('success'))
    <p class="ui positive message">
        {{ Session::get('success') }}
    </p>
    @endif

  <div class="header blue">
    <div class="left">
      <h3>
        {{Form::text('job_title', Input::old('job_title'))}}
      </h3>
      
      <p class="title">Salary</p>
      <span class="salary">
        {{Form::number('salary', Input::old('salary'))}}
      </span>
    </div>

    <div class="right">
      @if(Route::currentRouteName() === 'listing.show')
        {{Form::submit('', ['name' => 'submit', 'class'=>'ui primary button'])}}
      @endif    
    </div>
    
    <div class="clr"></div>
  </div>

  <p class="title">About</p>
  <p class="description">
    {{Form::textarea('description', Input::old('description') )}}
  </p>
  <br>
  <p class="title">Work Hours</p>
  <p>
    {{Form::time('work_hour_start', Input::old('salary'))}} To {{Form::time('work_hour_end', Input::old('salary'))}}
  </p>

  @if(Route::currentRouteName() === 'listing.edit')
    {{Form::submit('Save', ['name' => 'submit', 'class'=>'ui primary button'])}}
  @endif

{{ Form::close() }}

</section>

@endsection