@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbroton-fluide">
        <div class="container">
            <h1 class="display-4">Home Page</h1>
            <p class="lead">This is the Home Page</P>
        </div>
        <p>Nama : {{ $nama }}</P>
        <p>Mata Pelajaran</p>
        <ul>
            @foreach($pelajaran as $p)
            <li>{{ $p }}</li>
            @endforeach
    </div>
@endsection