@if(10 > 6)
    <p>10 is biggre than 6</p>

@endif

@empty($record)
    <h1>record is empty</h1>
@endempty

@empty(!$data)
    <h1>data is not empty</h1>
@endempty

@switch($data)
    @case("Mohamed")
        <p>Name is Mohamed</p>
        @break
    @case("Maskoul")
        <p>Name is Maskoul</p>
        @break
    @default
        <p>Name is annonymous</p>
@endswitch