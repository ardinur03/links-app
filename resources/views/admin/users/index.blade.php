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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($users as $user)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="" class="btn btn-sm btn-secondary">Show</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
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
