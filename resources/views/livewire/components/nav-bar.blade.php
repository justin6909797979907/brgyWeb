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

    img {

      border-radius: 100px ;

    }

</style>
</head>
<body>
  <div>
   
    <nav class="navbar navbar-expand-lg">   
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src={{asset('images\patubig-logo.jpg')}} alt="Logo">
        <span class="ms-2 fw-bold text-white">Barangay Patubig</span>
      </a>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('home.index')}}" wire:navigate>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about.index')}}" wire:navigate>About</a>
              </li>
            </ul>
          </div>
          <div class="d-flex align-items-center text-white mt-2">
            <livewire:etc.clock />
          </div>
          
        </div>
      </nav>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

