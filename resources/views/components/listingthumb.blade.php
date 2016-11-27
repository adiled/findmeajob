@if(isset($listing))

  <?php $employer = false ?>
  @if (Auth::check() && $user->id == $listing->user_id )
    <?php $employer = true ?>
  @endif

  <?php
    
    $last_activated_at = $listing->last_activated_at;

    if(!$last_activated_at)
      $last_activated_at = $listing->created_at;
  ?>

<div class="column">
  <div class="item {{$employer ? 'has-toolbar':''}}" data-id="{{$listing->id}}">

    @if($employer)
      <div class="toolbar">
        <span class="date-activated"><i class="checked calendar icon"></i>{{date('M d', strtotime($last_activated_at))}}</span>
        <a class="delete"><i class="delete icon"></i></a>
        <a class="edit"><i class="pencil icon"></i></a>
        <div class="clr"></div>
      </div>
    @endif

    <p>{{$listing->job_title}}</p>
    @if(!$employer)
      <p class="employer"><i class="user icon"></i>{{$listing->user->full_name}}</p>
    @else
      <p><i class="delete calendar icon"></i><b>Expires </b>{{ date('M d', strtotime($last_activated_at. " +1 week")) }}</p>
    @endif
  </div>
</div>

@endif