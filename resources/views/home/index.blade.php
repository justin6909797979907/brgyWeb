<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Barangay Patubig</title>
</head>
<body>
    <!-- header/navbar-->
    
    @include('partials.header')

    <main>
        {{-- hero section --}}
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Barangay Patubig</h2>
                    <h3 class="subtitle">Barangay na maasahan sa anumang oras</h3>
                    <p class="description">Tulong-tulong, sama-sama para sa maayos, malinis at tahimik na pamayanan.
                    </p>
                    <div class="buttons">
                        <a href="" class="button come-now">Come now</a>
                        <a href="" class="button contact-us">Contact Us</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src={{asset('images/patubig-logo.png')}} alt="hero-image">
                </div>
            </div>
        </section>

        {{-- about-section --}}
        <section class="about-section" id="about">
            <div class="section-content">
                <div class="image-wrapper">
                    <img src={{asset('images/fam-yan.png')}} alt="About" class="about-image">
                </div>
                <div class="about-details">
                    <h2 class="section-title">About Us</h2>
                    <p class="text">Barangay Patubig is a peaceful, progressive, and highly urbanized community in Marilao, Bulacan. While it is home to numerous factories and industrial establishments that drive local economic activity, it remains a clean, green, and safe environment. The barangay consists of cooperative and morally upright residents, ambitious and responsive business owners and corporate managers, and committed, visionary leaders. Together, they work hand in hand to sustain a healthy community and promote the continuous physical and economic growth of Barangay Patubig.</p>
                    <div class="social-link-list">
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>

        {{-- services-section --}}
        <section class="service-section" id="services">
            <h2 class="section-title">Services</h2>
            <div class="section-content">
                <ul class="service-list">
                    <li class="service-item">
                        <img src={{asset('images/img2.jpg')}} alt="img" class="service-image">
                        <h3 class="name">Lorem, ipsum.</h3>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quod!</p>
                    </li>
                    <li class="service-item">
                        <img src={{asset('images/img7.jpg')}} alt="img" class="service-image">
                        <h3 class="name">Lorem, ipsum.</h3>
                        <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, placeat.</p>
                    </li>
                    <li class="service-item">
                        <img src={{asset('images/img14.jpg')}} alt="img" class="service-image">
                        <h3 class="name">Lorem, ipsum.</h3>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, dolore!</p>
                    </li>
                    <li class="service-item">
                        <img src={{asset('images/img11.jpg')}} alt="img" class="service-image">
                        <h3 class="name">Lorem, ipsum.</h3>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, totam.</p>
                    </li>
                    <li class="service-item">
                        <img src={{asset('images/img8.jpg')}} alt="img" class="service-image">
                        <h3 class="name">Lorem, ipsum.</h3>
                        <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, aperiam.</p>
                    </li>
                    <li class="service-item">
                        <img src={{asset('images/img5.jpg')}} alt="img" class="service-image">
                        <h3 class="name">Lorem, ipsum.</h3>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, placeat!</p>
                    </li>
                </ul>
            </div>
        </section>

        {{-- annoncements-section --}}
        <section class="announcement-section" id="announcement">
            <h2 class="section-title">Announcements</h2>
            <div class="section-content">
                <div class="slider-container swiper">
                    <div class="slider-wrapper">
                        <ul class="announcement-list swiper-wrapper">
                            <li class="announcement swiper-slide">
                                <img src={{asset('images/patubig-logo.png')}} alt="img" class="announcement-image">
                                <h3 class="name">Lorem, ipsum.</h3>
                                <i class="feedback">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quidem!</i>
                            </li>
                            <li class="announcement swiper-slide">
                                <img src={{asset('images/patubig-logo.png')}} alt="img" class="announcement-image">
                                <h3 class="name">Lorem, ipsum.</h3>
                                <i class="feedback">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quidem!</i>
                            </li>
                            <li class="announcement swiper-slide">
                                <img src={{asset('images/patubig-logo.png')}} alt="img" class="announcement-image">
                                <h3 class="name">Lorem, ipsum.</h3>
                                <i class="feedback">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quidem!</i>
                            </li>
                            <li class="announcement swiper-slide">
                                <img src={{asset('images/patubig-logo.png')}} alt="img" class="announcement-image">
                                <h3 class="name">Lorem, ipsum.</h3>
                                <i class="feedback">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quidem!</i>
                            </li>
                            <li class="announcement swiper-slide">
                                <img src={{asset('images/patubig-logo.png')}} alt="img" class="announcement-image">
                                <h3 class="name">Lorem, ipsum.</h3>
                                <i class="feedback">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quidem!</i>
                            </li>
                        </ul>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button swiper-button-prev"></div>
                        <div class="swiper-slide-button swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- picture/gallery section --}}
        <section class="gallery-section" id="gallery">
            <h2 class="section-title">Gallery</h2>
            <div class="section-content">
                <ul class="gallery-list">
                    <li class="gallery-item">
                        <img src={{asset('images/img5.jpg')}} alt="img" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src={{asset('images/img2.jpg')}} alt="img" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src={{asset('images/fam-yan1.png')}} alt="img" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src={{asset('images/img7.jpg')}} alt="img" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src={{asset('images/img12.jpg')}} alt="img" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src={{asset('images/img14.jpg')}} alt="img" class="gallery-image">
                    </li>
                </ul>
            </div>
        </section>

        {{-- contact section --}}
        <section class="contact-section" id="contact">
            <h2 class="section-title">Contact Us</h2>
            <div class="section-content">
                <ul class="contact-info-list">
                    <li class="contact-info">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <p>001 Batongbakal Patubig</p>
                    <li class="contact-info">
                        <i class="fa-regular fa-envelope"></i>
                        <p>barangaypatubig@gmail.com</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-phone"></i>
                        <p>(09) 456-789</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Monday-Saturday:8:00 AM-5:00 PM</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Sunday: 8:00 AM-12:00 PM</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-brands fa-facebook"></i>
                        <p>Barangay Patubig</p>
                    </li>
                </ul>

                <form action="#" class="contact-form">
                    <input type="text" placeholder="Name" class="form-input" required>
                    <input type="eamil" placeholder="Email" class="form-input" required>
                    <textarea placeholder="Message" class="form-input" required></textarea>
                    <button class="submit-button">Submit</button>
                </form>
            </div>
        </section>

        {{-- footer --}}
        <footer class="footer-section">
            <div class="section-content">
                <p class="copyright-text">@ 2025 Barangay Patubig</p>

                <div class="social-link-list">
                    <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
            <p class="policy-text">
                <a href="#" class="policy-link">Privacy Policy</a>
                <span class="separator"></span>
                <a href="#" class="policy-link">Barangay Policy</a>
            </p>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src={{asset('/js/script.js')}}></script>
</body>
</html>