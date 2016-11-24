@if(isset($listings))

<div class="listing ui four column stackable relaxed grid">

  @foreach ($listings as $listing)
    @include('components.listingthumb')
  @endforeach
</div>

@endif