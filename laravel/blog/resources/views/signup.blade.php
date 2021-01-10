@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="css/signup.css">
@endpush

@section('content')
    <x-signup-form />
@endsection