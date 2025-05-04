<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Barangay Patubig</title>
</head>
<body>
    <!-- header/navbar-->
    
    @include('partials.header')

    <main>
        <!-- hero-section -->
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Barangay Patubig</h2>
                    <h3 class="subtitle">Barangay na maasahan sa anumang oras</h3>
                    <p class="description">Welcome in our barangay Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, blanditiis.</p>
                    <div class="buttons">
                        <a href="" class="button come-now">Come now</a>
                        <a href="" class="button contact-us">Contact Us</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src={{asset('images/patubig-logo.jpg')}} alt="hero-image">
                </div>
            </div>
        </section>
    </main>

    <script src={{asset('/js/script.js')}}></script>
</body>
</html>