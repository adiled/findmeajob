@if($errors->any())
<div class="ui negative message">
  <div class="header">There are errors in your submission.</div>
  <ul class="list">
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif