<!--
    Comparing multiple possible conditions
    Multiple values that may require the same code
-->

@switch($name)
    @case('Frank')
    <h2>Name is Frank</h2>
        @break
    @case('Lol')
    <h2>Name is lol</h2>
    @break

    @default
    <h2>No name provided</h2>
@endswitch
