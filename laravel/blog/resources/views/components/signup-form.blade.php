<div class="signup-section">
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="name">
            <label for="name">Name: </label>
            <input type="name" name="name" id="name" class="@error('title') is-invalid @enderror">
        </div>
        <div class="email">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" class="@error('title') is-invalid @enderror">
        </div>
        <div class="password">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" class="@error('title') is-invalid @enderror">
        </div>
        <hr>
        <div class="signup">
            <button type="submit" id="signup-button">SignUp</button>
        </div>
    </form>
</div>