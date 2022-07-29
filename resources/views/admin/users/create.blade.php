<x-app-layout>
    <div class="row">
        <div class="col-12">
            <h2 class="content-title">User</h2>
            <h5 class="content-desc mb-3">User Create</h5>
        </div>
    </div>
    <div class="row shadow-md justify-content-center">
        <div class="col-6 card p-4">
            <livewire:auth.form-register :isCrud="true" />
        </div>
    </div>


    @push('scripts')
        <script>
            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
        </script>
    @endpush
</x-app-layout>
