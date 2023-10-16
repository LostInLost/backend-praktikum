@extends('layouts.app')

@section('title', 'News')

@section('content')

<div class="container">
    <h1>Ini Halaman News {{ ($news ?? false) ? 'Dengan Judul ' . $news : '' }}</h1>
</div>
@endsection
