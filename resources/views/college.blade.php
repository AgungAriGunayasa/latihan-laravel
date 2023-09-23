@extends('layouts.main')

@section('container')
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <h1>ITB STIKOM BALI</h1>
    <hr>
    <p align="justify">{{ $infoawal }}</p>
    <p align="justify">{{ $infotengah }}</p>
    <p align="justify">{{ $infoakhir }}</p>
</div>
@endsection