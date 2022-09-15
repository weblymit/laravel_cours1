@extends("layout.app")
@section('title', 'Home')

@section("content")
<div class="container py-12">
    @php
        $toto = "<h1>Hello </h1>";
    @endphp
    <h1>{{ $title }}</h1>
    <h1>{!! $toto !!}</h1>

    <img src='/img/pepa.jpeg' alt="">

</div>

@endsection
