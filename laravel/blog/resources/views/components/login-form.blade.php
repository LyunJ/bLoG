<div class="login-section">
    <form method="POST" action="">
        @csrf
        <div class="email">
            <label for="email">Email: </label>
            <input type="email" id="email" class="@error('title') is-invalid @enderror">
        </div>
        <div class="password">
            <label for="password">Password: </label>
            <input type="password" id="password" class="@error('title') is-invalid @enderror">
        </div>
        <hr>
        <div class="login">
            <button type="submit" id="login-button">Login</button>
        </div>
        <div class="signin">
            <button id="signin-button">SignIn</button>
        </div>
    </form>
</div>