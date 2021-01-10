@push('login-css')
    <link rel="stylesheet" href="css/login.css">
@endpush

<div class="login-section">
    <form method="GET" action="auth/login">
        @csrf
        <div class="email">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" class="@error('title') is-invalid @enderror">
        </div>
        <div class="password">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" class="@error('title') is-invalid @enderror">
        </div>
        <hr>
        <div class="login">
            <button type="submit" id="login-button">Login</button>
        </div>
        <div class="signup">        
            <button id="signup-button" onclick="location.href='127.0.0.1/signup'">SignUp</button>
        </div>
    </form>
</div>