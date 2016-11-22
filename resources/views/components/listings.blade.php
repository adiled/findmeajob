@if(isset($listings))

<div class="listing">
  @foreach ($listings as $listing)
    @include('components.listingthumb')
  @endforeach
</div>

@endif