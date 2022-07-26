<x-auth-layout>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3">Login</h5>
                        <hr>
                        <form action="{{ route('login') }}" class="row g-1 needs-validation" method="POST" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    required>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" name="remember" value=""
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
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
