<!-- Stored in resources/views/layouts/master.blade.php -->
@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="css/login.css">
@endpush

@section('content')
    <x-login-form />
@endsection