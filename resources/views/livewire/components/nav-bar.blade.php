<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="\resources\css\landingPage.css">
  <title>Barangay Patubig</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-brand img {
        height: 50px;
    }
    .navbar {
        background-color: #004d00;
    }
    .navbar-nav .nav-link {
        color: white;
    }
    .navbar-nav .nav-link:hover {
        color: #ffd700;
    }
</style>
</head>
<body>
  <div>
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="" alt="Logo">
        <span class="ms-2 fw-bold text-white mt-3">Barangay Patubig</span>
      </a>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mt-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('home')}}" wire:navigate>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" wire:navigate>About</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> --}}
            </ul>
          </div>
          <section class="text-light">
            <livewire:etc.clock />
          </section>
          
        </div>
      </nav>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

