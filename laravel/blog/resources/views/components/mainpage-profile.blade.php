<div class="profile-block">
    <div class="profile-summary">
        <h1>{{ Auth::user()->name }}</h1>
        <p>Backend 개발자</p>
        <p>안녕하세요</p>
    </div>
    <div class="language-image">
        <img src="{{ asset('storage/profile.png') }}">
    </div>
</div>