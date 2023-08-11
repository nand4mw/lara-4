

@extends('components.main')
<link rel="icon" href="/images/{{ $gambar }}">

@section('container')
    <h1>Halaman About</h1>
    <h2>{{ $nama }}</h2>
    <h3>{{ $gmail }}</h3>
    <img src="images/{{ $gambar }}" alt="{{ $nama }}" width="200">
@endsection
