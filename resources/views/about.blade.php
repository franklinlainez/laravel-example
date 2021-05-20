@if(5 > 10)
@elseif(5===10)
    <p>5 is lower than 10</p>
@else
    <p>Wrong!</p>
@endif

@unless(empty($name))
    <h2>Name is not empty</h2>
@endunless

@empty($name)
    <h2>Name is empty</h2>
@endempty
