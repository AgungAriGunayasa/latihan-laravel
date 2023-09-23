@extends('layouts.main')

@section('container')
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <h1>Tentang Saya</h1>
    <hr>
    <h5>Nama : {{ $name; }}</h5>
    <h5>Kampus : {{ $college; }}</h5>
    <h5>Mentor : {{ $mentor; }}</h5>
</div>
@endsection