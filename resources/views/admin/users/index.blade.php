<x-app-layout title="{{ $title }}">
    <div class="row">
        <div class="col-12">
            <h2 class="content-title">Users</h2>
            <h5 class="content-desc mb-3">All User Data</h5>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ route('users.create') }}" class="btn btn-sm btn-success"><i class="bi bi-person-plus-fill"></i></a>
        </div>
    </div>

    <div class="row card shadow-md p-3">
        <div class="col-12">
            <table class="table table-sm table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">account created</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ date('d M Y', strtotime($user->created_at)) }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="" class="btn btn-sm btn-secondary"><i class="bi bi-eye"></i></a>
                                    <a href="" class="btn btn-sm btn-info"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Data Not Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <livewire:admin.user.show-user :users="$user->id" />

    </div>
</x-app-layout>
