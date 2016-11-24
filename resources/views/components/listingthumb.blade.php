@if(isset($listing))

  <?php $employer = false ?>
  @if (Auth::check() && Auth::user()->id == $listing->user_id )
    <?php $employer = true ?>
  @endif

<div class="column">
  <div class="item {{$employer ? 'has-toolbar':''}}" data-id="{{$listing->id}}">

    @if($employer)
      <div class="toolbar">
        <span class="date-activated"><i class="checked calendar icon"></i>{{date('M d', strtotime($listing->last_activated_at))}}</span>
        <a href="" class="delete"><i class="delete icon"></i></a>
        <a href="" class="edit"><i class="pencil icon"></i></a>
        <div class="clr"></div>
      </div>
    @endif

    <p>{{$listing->job_title}}</p>
    @if(!$employer)
      <p class="employer"><i class="user icon"></i>{{$listing->user->full_name}}</p>
    @else
      <p class="employer"><i class="delete calendar icon"></i><b>Expires </b>{{ date('M d', strtotime($listing->last_activated_at. " +1 week")) }}</p>
    @endif
  </div>
</div>

@endif