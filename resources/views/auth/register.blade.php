<x-auth-layout>
    <div class="container">
        <div class="row  vh-100 justify-content-center">
            <div class="col-5 align-self-center">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3">Register
                        </h5>
                        <hr>

                        {{-- include livewaire component --}}
                        <livewire:auth.form-register />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
