<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Barangay Patubig</title>
</head>

<body>
    <!-- header/navbar-->
    @include('partials.header')

    <main class="min-h-screen flex flex-col items-center justify-start py-10 px-4" style="background-color: #326020;">
        <div class="text-center mb-8">
            <h1 class="text-white text-4xl font-bold" style=" margin-top: 100px">
                <i class="fas fa-bullhorn mr-2"></i>Announcement Board
            </h1>
            <p class="text-white text-sm mt-2">Stay updated with the latest announcements</p>
            </d>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-6xl" style="margin-top: 40px">
                @forelse ($announcements as $announcement)
               
                @if ($announcement->set_status)
                <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="flex items-start gap-4">
                        <div>
                            @if ($announcement->image)
                            <img src="{{ asset('uploads/'.$announcement->image) }}"
                                class="w-full h-40 object-cover rounded-xl mb-4">
                            @else
                                <p>No Image</p>
                            @endif

                            <h2 class="text-xl font-bold text-gray-800 mb-1">{{ $announcement->header }}</h2>
                            <p class="text-gray-600 text-sm">{{ $announcement->body }}</p>
                        </div>
                    </div>
                </div>
                @endif
            @empty
                <div class="col-span-full bg-white text-center text-gray-700 rounded-xl p-6 shadow">
                    <i class="fas fa-info-circle text-gray-400 text-2xl mb-2"></i>
                    <p>No announcements at the moment.</p>
                </div>
                @endforelse
            </div>

    </main>



    <script src={{asset('/js/script.js')}}></script>
</body>

</html>