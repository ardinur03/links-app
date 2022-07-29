<x-app-layout>
    <div class="row">
        <div class="col-12">
            <h2 class="content-title">Users</h2>
            <h5 class="content-desc mb-4">All User Data</h5>
        </div>
    </div>

    <div class="row card shadow-md">
        <div class="col-12">
            <table class="table">
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
                                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-success"><i
                                            class="bi bi-plus-lg"></i></a>
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
    </div>
</x-app-layout>
