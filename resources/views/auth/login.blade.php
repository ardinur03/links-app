<x-auth-layout>
    <div class="container">
        <div class="row vh-100 justify-content-center">
            <div class="col-5 align-self-center">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3">Login</h5>
                        <hr>
                        <form action="{{ route('login') }}" class="row g-1 needs-validation" method="POST" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="input-email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="input-email"
                                    aria-describedby="emailHelp" required>
                                <div class="invalid-feedback">
                                    @error('email')
                                        {{ $message }}
                                    @else
                                        Please enter your email
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="input-password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="input-password"
                                    required>
                                <div class="invalid-feedback">
                                    @error('password')
                                        {{ $message }}
                                    @else
                                        Please enter your password
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <div class="mt-3 text-right">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
