@extends('layouts.app')

@section('title', auth()->user()->name)

@section('content')
    <section>
        Email: {{ auth()->user()->email }}
    </section>
@endsection
