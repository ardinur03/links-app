<div>
    <form class="row g-1 needs-validation" action="{{ route('register') }}" method="POST" novalidate>
        @csrf
        <div class="mb-3 position-relative">
            <label for="iput-fullname" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="iput-fullname"
                required>
            @error('name')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
            @else
                <div class="invalid-feedback">
                    Name is required
                </div>
            @enderror
        </div>
        <div class="mb-3 position-relative">
            <label for="input-username" class="form-label">UserName</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                id="input-username" aria-describedby="validationTooltipUsernamePrepend" required>
            @error('username')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
            @else
                <div class="invalid-feedback">
                    Username is required
                </div>
            @enderror
        </div>
        <div class="mb-3 position-relative">
            <label for="input-email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"
                id="input-email" aria-describedby="emailHelp" required>
            @error('email')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
            @else
                <div class="invalid-feedback">
                    Email is required
                </div>
            @enderror
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 position-relative">
            <label for="input-password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                id="input-password" required>
            @error('password')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
            @else
                <div class="invalid-feedback">
                    Password is required
                </div>
            @enderror
        </div>
        <div class="mb-3 position-relative">
            <label for="confirmpassword" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation"
                class="form-control @error('password') is-invalid @enderror" id="confirmpassword" required>
            @error('password_confirmation')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
            @else
                <div class="invalid-feedback">
                    Password Confirmation is required
                </div>
            @enderror
        </div>

        <div class="mt-3 d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <a href="{{ route('login') }}">Already registred?</a>
        </div>

    </form>
</div>
