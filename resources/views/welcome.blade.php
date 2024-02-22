@extends('layouts.main')

@section('title', 'Welcome Page')
@push('styles')
    <style>
        h1 {
            margin-top: 20px;
            text-align: center;
        }
        </style>
@endpush

@section('content')
    <h1>Welcome to NiceAdmin</h1>
@endsection

