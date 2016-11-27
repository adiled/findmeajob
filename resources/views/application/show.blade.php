@extends('layouts.app')

@section('content')

<?php
  $work_hours = date('g A', strtotime($data->work_hour_start)).' - '.date('g A', strtotime($data->work_hour_end));
?>

<section class="single-application">

  <div class="header blue">
  Job Application # {{$application->id}}
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