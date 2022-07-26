<x-auth-layout>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-6">
                <div class="card">
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
