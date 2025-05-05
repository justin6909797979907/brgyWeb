<div class="w-full justify-center items-center min-h-screen">

    @include('partials.notif');

    <fieldset class="mt-10 flex">

        <div class="w-[90%] mx-auto flex gap-6 mt-10" style="margin-top: 100px;">
            {{-- Left: Announcement Table --}}
            <div class="w-full max-w-6xl mx-auto bg-white p-6 shadow-lg rounded-lg">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-semibold text-gray-700">Community News Table</h2>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createAnnouncement">Create a Community News</button>
                </div>

                @include('admin.announcement.create-announcement')

                <livewire:admin.edit-announcement></livewire:admin.edit-announcement>

                <table class="min-w-full table-auto border-collapse border border-gray-300 text-sm">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Header</th>
                            <th class="border border-gray-300 px-4 py-2">Body</th>
                            <th class="border border-gray-300 px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                        @forelse($announcements as $announcement)

                        <tr class="hover:bg-gray-50" wire:key='key-{{$announcement->id}}'>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{$announcement->id}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{$announcement->header}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{$announcement->body}}</td>
                            <td class="border border-gray-300 px-4 py-2 space-y-1">

                                <button wire:click="toggle({{ $announcement->id }})"
                                    class="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-3 py-1 rounded">
                                {{ $announcement->set_status ? 'Hide' : 'Show' }}
                                </button>

                                <button class="w-full bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded"
                                    data-bs-toggle="modal" data-bs-target="#edit-modal"
                                    wire:click="$dispatch('edit',{id: {{ $announcement->id }}})">
                                    Edit
                                </button>

                                <button class="w-full bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded"
                                    wire:click="$dispatch('deleteOpt', { id: {{ $announcement->id }}, name: '{{ $announcement->body }}' })">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-gray-500 py-4">No announcements found.</td>
                        </tr>
                        @endforelse

                        {{ $announcements->links() }}
                    </tbody>
                </table>
            </div>
        </div>
    </fieldset>
</div>

@script
<script>
    $wire.on('deleteOpt', (data) => {
                    
        Swal.fire({
            title: "Are you sure you want to delete   '"+ `${data.name}` +"' ?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {

                $wire.dispatch('confDelete',{id:data.id});

                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
            }
            });

        }); 

        $wire.on('success', () => {
            
            Swal.fire({
            title: "Done!",
            text: "Edit Success!",
            icon: "success"
            });

        }); 

</script>
@endscript