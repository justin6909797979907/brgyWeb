<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>

    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    @include('admin.partials.header')


    <div class="w-full justify-center items-center min-h-screen">
        @include('partials.notif');
        <h1 class="text-center mt-4">Admin Dashboard</h1>
        <fieldset class="mt-10 flex">

            <div class="w-[90%] mx-auto flex gap-6 mt-10">
                {{-- Left: Announcement Table --}}
                <div class="w-1/2 bg-white p-4 shadow rounded">
                    <h2 class="text-xl font-semibold mb-4 text-center">Announcement Table</h2>
                    <table class="table-auto w-full border border-gray-300 text-sm">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-2 py-1">ID</th>
                                <th class="border px-2 py-1">Header</th>
                                <th class="border px-2 py-1">Body</th>
                                <th class="border px-2 py-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $announcements as $announcement )
                            <tr>
                                <td class="border px-2 py-1">{{ $announcement->id }}</td>
                                <td class="border px-2 py-1">{{ $announcement->header }}</td>
                                <td class="border px-2 py-1">{{ $announcement->body }}</td>
                                <td class="border px-2 py-1">
                                    @if($announcement->set_status == false)
                                    <form action="{{ route('announcement-show', $announcement->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="bg-green-500 rounded p-2 mt-1 text-white">Show</button>
                                    </form>
                                    @else
                                    <form action="{{ route('announcement-hide', $announcement->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="bg-green-800 rounded p-2 mt-1 text-white">Hide</button>
                                    </form>
                                    @endif
                                    <button
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editModal"
                                        data-id="{{ $announcement->id }}"
                                        data-header="{{ $announcement->header }}"
                                        data-body="{{ $announcement->body }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('announcement-delete',$announcement->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Right: Form --}}
                <div class="w-1/2 bg-white p-4 shadow rounded">
                    <h2 class="text-xl font-semibold mb-4 text-center">Create Announcement</h2>
                    <form action="{{ route('announcement-create') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="header" class="block font-medium">Header</label>
                            <input type="text" name="header" id="header" placeholder="Input header..." class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="body" class="block font-medium mb-1">Body</label>
                            <textarea
                                name="body"
                                id="body"
                                rows="4"
                                placeholder="Input body..."
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none"></textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
                    </form>
                </div>
            </div>
        </fieldset>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('announcement-update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit-id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Announcement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit-header" class="form-label">Header</label>
                            <input type="text" class="form-control" name="header" id="edit-header" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-body" class="form-label">Body</label>
                            <textarea class="form-control" name="body" id="edit-body" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        const editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const id = button.getAttribute('data-id');
            const header = button.getAttribute('data-header');
            const body = button.getAttribute('data-body');

            document.getElementById('edit-id').value = id;
            document.getElementById('edit-header').value = header;
            document.getElementById('edit-body').value = body;
        });
    </script>

</body>

</html>