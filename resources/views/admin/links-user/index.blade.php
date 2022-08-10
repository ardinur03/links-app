<x-app-layout title="Links User">
    <div class="row">
        <div class="col-12">
            <h2 class="content-title">Link User</h2>
            <h5 class="content-desc mb-3">All Link User Data</h5>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ route('link-user.create') }}" class="btn btn-sm btn-success"><i class="bi bi-plus-lg"></i><i
                    class="bi bi-person-fill"></i><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>

    <div class="row card shadow-md p-3">
        <div class="col-12">
            <table class="table table-sm table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title Link</th>
                        <th scope="col">Name</th>
                        <th scope="col">created</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($linksUser as $linkUser)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $linkUser->title }}</td>
                            <td>{{ $linkUser->user->name }}</td>
                            <td>{{ date('d M Y', strtotime($linkUser->created_at)) }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('link-user.show', $linkUser->id) }}"
                                        class="btn btn-sm btn-secondary"><i class="bi bi-eye"></i></a>
                                    <a href="" class="btn btn-sm btn-info"><i class="bi bi-pencil-fill"></i></a>
                                    {{-- create delete form --}}
                                    <form action="{{ route('link-user.destroy', $linkUser->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Data Not Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
