@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="css/profilepage.css">
@endpush

@section('content')
    <div class="mainpage">
        <div class="center-content">
            <x-profile-form />
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ mix("js/profilepage.js") }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush