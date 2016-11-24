@extends('layouts.app')

@section('content')

<?php
  $work_hours = date('g A', strtotime($data->work_hour_start)).' - '.date('g A', strtotime($data->work_hour_end))
?>

<section class="single-listing">

  <div class="header blue">
    <div class="left">
      <h3>{{$data->job_title}}</h3>
      <span class="salary"><i class="user icon"></i> {{$data->user->full_name}}</span>&emsp;
      <span class="salary"><i class="dollar icon"></i> 105,000 USD</span>
    </div>
    <div class="right">
      <a class="apply ui button primary" {{-- href="/listing/{{$data->id}}/apply" --}}>Apply</a>
      <p>{{ $data->created_at->diffForHumans() }}</p>
    </div>
    
    <div class="clr"></div>
  </div>

  <p class="title">About</p>
  <p class="description">
    {!! nl2br($data->description) !!}
  </p>
  <br>
  <p class="title">Work Hours</p>
  <p>{{ $work_hours }}</p>

</section>

@endsection