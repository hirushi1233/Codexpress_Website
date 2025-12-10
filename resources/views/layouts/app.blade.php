<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'CodeXpress - Digital Solutions')</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-onix-digital.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">

</head>


<body>


<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->
@include('partials.header')

@yield('content')

@include('partials.footer')

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/owl-carousel.js') }}"></script>
<script src="{{ asset('js/animation.js') }}"></script>
<script src="{{ asset('js/imagesloaded.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const aboutSection = document.querySelector(".about-us");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    aboutSection.classList.add("active");
                }
            });
        }, { threshold: 0.4 });

        observer.observe(aboutSection);
    });


    let currentIndex = 0;
    const track = document.getElementById('portfolioTrack');
    const cards = document.querySelectorAll('.portfolio-card');
    const totalCards = cards.length;

    function getCardsPerView() {
        if (window.innerWidth > 1200) return 3;
        if (window.innerWidth > 768) return 2;
        return 1;
    }

    function updateSlider() {
        const cardsPerView = getCardsPerView();
        const cardWidth = cards[0].offsetWidth;
        const gap = window.innerWidth > 768 ? 40 : 20;
        const offset = currentIndex * (cardWidth + gap);

        track.style.transform = `translateX(-${offset}px)`;

        // Update button states
        const prevBtn = document.querySelector('.slider-btn.prev');
        const nextBtn = document.querySelector('.slider-btn.next');

        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= totalCards - cardsPerView;
    }

    function slideProjects(direction) {
        const cardsPerView = getCardsPerView();
        const maxIndex = totalCards - cardsPerView;

        currentIndex += direction;

        if (currentIndex < 0) {
            currentIndex = 0;
        } else if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }

        updateSlider();
    }

    // Initialize
    window.addEventListener('load', updateSlider);

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            currentIndex = 0;
            updateSlider();
        }, 100);
    });
</script>

</body>
</html>
