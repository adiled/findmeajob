@if(isset($listing))

<div class="item">
    <p>By: {{$listing->user->full_name}}</p>
    <p>{{$listing->job_title}}</p>
    <p>{{$listing->description}}</p>
</div>

@endif