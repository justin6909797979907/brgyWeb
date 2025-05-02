<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Barangay Patubig</title>
</head>

<body>
    <!-- header/navbar-->
    <header>
        <div class="header-bar">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
            </svg>
            <a href="tel:044-248-6208" class="contact-link">09123456789</a>

            <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>
            <a href="mailto:mnsmpc2004@yahoo.com" class="contact-link">barangaypatubig@gmail.com</a>
        </div>

        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <img src={{asset('images/patubig-logo.jpg')}} alt="Logo" class="logo-img">
                <h2 class="logo-text">Barangay Patubig</h2>
            </a>

            <ul class="nav-menu">
                <button id="menu-close-button" class="fas fa-times"></button>
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('about.index')}}" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">News and Announcements</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <button id="menu-open-button" class="fas fa-bars"></button>
        </nav>
    </header>


    <main class="min-h-screen flex flex-col items-center justify-start py-10 px-4" style="background-color: #326020;">
        <div class="text-center mb-8">
            <h1 class="text-white text-4xl font-bold">
                <i class="fas fa-bullhorn mr-2"></i>Announcement Board
            </h1>
            <p class="text-white text-sm mt-2">Stay updated with the latest announcements</p>
        </d>

        <div class="space-y-6 w-full max-w-3xl">
            @forelse ($announcements as $announcement)
            @if ($announcement->set_status)
            <div class="bg-white border-l-8 border-green-700 rounded shadow-md p-6">
                <div class="flex items-start gap-3">
                    <i class="fas fa-circle-exclamation text-green-700 text-2xl mt-1"></i>
                    <div>
                        <h2 class="text-xl font-semibold text-green-800">{{ $announcement->header }}</h2>
                        <p class="text-gray-700 mt-1">{{ $announcement->body }}</p>
                    </div>
                </div>
            </div>
            @endif
            @empty
            <div class="bg-white text-center text-gray-700 rounded p-6 shadow">
                <i class="fas fa-info-circle text-gray-400 text-xl mb-2"></i>
                <p>No announcements at the moment.</p>
            </div>
            @endforelse
        </div>
    </main>





    <script src={{asset('/js/script.js')}}></script>
</body>

</html>