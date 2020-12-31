<div class="profile-block">
    <div class="profile-summary">
        <div class="profile-summary-inner-box">
            <h1>{{ Auth::user()->name }}</h1>
            <p>{{ Auth::user()->subtitle }}</p>
            <p>{{ Auth::user()->introduction }}</p>
        </div>
    </div>
    <div class="language-image">
        <div class="language-image-box">
            <img src="{{ asset('storage/profile.png') }}" style="width:100%;height:auto;">
        </div>
    </div>
</div>