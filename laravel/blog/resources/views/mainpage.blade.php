@extends('layouts.master');

@push('styles')
    <link rel="stylesheet" href="css/mainpage.css">
@endpush

@section('content')
    <div class="mainpage">
        <div class="center-content">
            <x-mainpage-profile />
            <x-mainpage-portfolio />
            <x-mainpage-contact />
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="js/mainpage-portfolio-image-slide.js"></script>
@endpush