<div class="nav">
    <div class="logo">
        <a href="">logo</a>
    </div>
    <ul class="menu">
        <li><a href="">Profile</a></li>
        <li><a href="">Posts</a></li>
        <li><a href="">Docs</a></li>
    </ul>
    <div class="etc">
        <p>{{ Auth::user()->name }}님 환영합니다</p>
        <button>Logout</button>
    </div>
</div>