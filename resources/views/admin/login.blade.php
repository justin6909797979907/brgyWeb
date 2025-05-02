<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <livewire:components.nav-bar />
    <div class="flex justify-center items-center min-h-screen">
    @include('partials.notif')
    <form action="{{ route('login.store') }}" method="POST" class="bg-white p-4 rounded shadow w-100" style="max-width: 400px;">
        <h2 class="text-center mb-4">Login</h2>
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="inputPassword6" class="form-label">Password</label>
            <input type="password" id="inputPassword6" class="form-control" name="password" aria-describedby="passwordHelpInline">
            <div id="passwordHelpInline" class="form-text">
                Must be 8–20 characters long.
            </div>
        </div>
        <div class="d-grid flex justify-center">
            <button type="submit" class="btn btn-primary w-40">Submit</button>
        </div>
    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>