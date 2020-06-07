@extends('layouts.app')

@section('title', __('Create a new site'))

@section('content')
    @include('user.sites.form')
@endsection

