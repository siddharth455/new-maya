<?php require "common/header.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<div class="slider-area">
    <div class="slider-active owl-carousel owl-theme">

        <!-- Slide 1 -->
        <div class="single-slider slider-height-1 bg-img" style="background-image:url('assets/uploads/home-banner.webp');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-7 col-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">Empower. Educate. Excel.</h1>
                            <p class="animated">Maya Devi University offers quality education, expert guidance, and a vibrant campus life to prepare you for a successful future.</p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-white-color" href="contact.php">CONTACT US</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-12">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="assets/uploads/banner-girl.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="single-slider slider-height-1 bg-img" style="background-image:url('assets/uploads/campus-1.webp');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-7 col-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">Shaping Future Leaders.</h1>
                            <p class="animated">Maya Devi University blends innovation, academic excellence, and real-world skills to prepare students for success in every field.</p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-white-color" href="contact.php">CONTACT US</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-12">
                      <!-- <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="assets/uploads/girl-2.png" alt="">
                        </div> -->
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- FIXED Slider JS -->
<script>
$('.slider-active').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    nav: false,
    dots: true,
    smartSpeed: 800,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});
</script>
<div class="choose-us section-padding-1">
    <div class="container-fluid">
        <div class="row no-gutters choose-negative-mrg">
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-1.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <p>Empowering dreams through financial support — turning potential into success. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-green">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-2.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Doctoral Program</h3>
                        <p>Advancing knowledge, shaping futures, and leading the way in research and innovation. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/uploads/p-icon.jpg" style="height: 74px; width:70px" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Career Placement</h3>
                        <p>Connecting talent with the right opportunities for a future-ready career. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-green">
                    <div class="choose-img">
                        <img class="animated" src="assets/uploads/s-icon.webp" style="height: 74px; width:70px" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Bright Futures</h3>
                        <p>Empowering young minds for a lifetime of growth and success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us pb-4">
    <div class="container">

        <!-- Section Title -->
        <div class="section-title-3 section-shape-hm2-1 text-center mb-5 mt-5">
            <h2 style="font-size: 40px; color: green; font-weight: bold;">About Maya Devi University</h2>
            <style>
                .gradient {
                    font-size: 36px;
                    font-weight: 800;
                    background: linear-gradient(90deg, #00B894, #00CFFF, #0077B6);
                    -webkit-background-clip: text;
                    background-clip: text;
                    color: transparent;
                    letter-spacing: 0.2px;
                }
            </style>
            <p style="font-size: 18px;" class="fs-5 text-muted">
                Take a breathtaking aerial tour of our state-of-the-art campus, where innovation meets inspiration amidst lush greenery and modern architecture.
            </p>
        </div>

        <!-- Video & Text -->
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="about-img about-img-2 mr-70"
                    style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%;">
                    <iframe src="https://www.youtube.com/embed/Gm-KE2N_5ws?si=GhYhUb3BJcIAEJJ9"
                        title="YouTube video player"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="about-content-2">
                    <p style="font-size: 17px;" class="fs-5 text-muted">
                        Maya Devi University, Dehradun, is a premier institution dedicated to delivering world-class education and fostering holistic development.
                        Nestled in the scenic foothills of Uttarakhand, the university offers a dynamic learning environment supported by modern infrastructure,
                        experienced faculty, and industry-aligned programs. With a focus on academic excellence, research, and innovation, Maya Devi University
                        prepares students to excel in their chosen fields while nurturing values, leadership skills, and a global perspective. Our commitment
                        is to shape future-ready professionals who can contribute meaningfully to society and thrive in an ever-changing world.
                    </p>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="col-lg-12 mt-5">
            <div class="container py-4">
                <div class="row text-center">

                    <!-- Modern Facilities -->
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow h-100 p-4">
                            <div class="card-body">
                                <h3 class="card-title fw-semibold text-success">Modern Facilities</h3>
                                <p style="font-size: 13px;" class="fs-5 text-muted">
                                    State-of-the-art laboratories, libraries, and learning spaces designed for the future.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Green Campus -->
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow h-100 p-4">
                            <div class="card-body">
                                <h3 class="card-title fw-semibold text-success">Green Campus</h3>
                                <p style="font-size: 13px;" class="fs-5 text-muted">
                                    Sustainability at the core with lush gardens, solar power, and eco-friendly architecture.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Student Life -->
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow h-100 p-4">
                            <div class="card-body">
                                <h3 class="card-title fw-semibold text-success">Student Life</h3>
                                <p style="font-size: 13px;" class="fs-5 text-muted">
                                    Vibrant community spaces that foster collaboration, creativity, and personal growth.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- CAMPUS LIFE – GLASSMORPHISM SECTION -->
<section class="py-5" style="
    background: url('https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
    position: relative;
">

    <!-- Dark overlay -->
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.45);"></div>

    <div class="container position-relative" style="z-index:2;">

        <!-- Title -->
        <div class="text-center text-white mb-5">
            <h2 class="fw-bold text-white" style="font-size:2.5rem;">Welcome to Campus Living</h2>
            <p class="w-75 mx-auto text-white" style="font-size:1.15rem; opacity:0.9;">
                A lively, inclusive, and engaging environment for every student.Explore a vibrant and inspiring campus filled with creativity, sports, culture, and world-class facilities.
            </p>
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div style="
                    backdrop-filter: blur(14px);
                    background: rgba(255,255,255,0.15);
                    border-radius: 18px;
                    padding: 25px;
                    color: white;
                    border: 1px solid rgba(255,255,255,0.3);
                    box-shadow: 0 8px 20px rgba(0,0,0,0.35);
                ">
                    <div style="
                        width:65px;
                        height:65px;
                        background:#00a651;
                        border-radius:12px;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-size:30px;
                        margin-bottom:15px;
                    ">🎭</div>

                    <h5 class="fw-bold text-white">Clubs & Activities</h5>
                    <p class="mb-0 text-white" style="opacity:0.9;">
                        Numerous student clubs foster creativity, leadership, and cultural expression.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div style="
                    backdrop-filter: blur(14px);
                    background: rgba(255,255,255,0.15);
                    border-radius: 18px;
                    padding: 25px;
                    color: white;
                    border: 1px solid rgba(255,255,255,0.3);
                    box-shadow: 0 8px 20px rgba(0,0,0,0.35);
                ">
                    <div style="
                        width:65px;
                        height:65px;
                        background:#00a651;
                        border-radius:12px;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-size:30px;
                        margin-bottom:15px;
                    ">⚽</div>

                    <h5 class="fw-bold text-white">Sports & Fitness</h5>
                    <p class="mb-0 text-white" style="opacity:0.9;">
                        Top-tier sports facilities, tournaments, and a fitness culture that keeps students active.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div style="
                    backdrop-filter: blur(14px);
                    background: rgba(255,255,255,0.15);
                    border-radius: 18px;
                    padding: 25px;
                    color: white;
                    border: 1px solid rgba(255,255,255,0.3);
                    box-shadow: 0 8px 20px rgba(0,0,0,0.35);
                ">
                    <div style="
                        width:65px;
                        height:65px;
                        background:#00a651;
                        border-radius:12px;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-size:30px;
                        margin-bottom:15px;
                    ">🏫</div>

                    <h5 class="fw-bold text-white">Modern Facilities</h5>
                    <p class="mb-0 text-white" style="opacity:0.9;">
                        Advanced labs, digital library, smart classrooms, and collaborative learning spaces.
                    </p>
                </div>
            </div>

        </div>

        <!-- Button -->
        <div class="text-center mt-5">
            <a href="campus-life.php" class="btn btn-lg px-4"
               style="background:#00a651; color:white; border-radius:50px; font-weight:600;">
                Explore More →
            </a>
        </div>

    </div>
</section>

<section class="mdu-facility-immersive">

    <!-- RIGHT IMAGE COLUMN -->
    <div class="mdu-facility-images">
        <div class="fi-img active" style="background-image:url('assets/uploads/computer.webp')"></div>
        <div class="fi-img" style="background-image:url('assets/uploads/library.png')"></div>
        <div class="fi-img" style="background-image:url('assets/uploads/social.webp')"></div>
        <div class="fi-img" style="background-image:url('assets/uploads/auditorium.jpg')"></div>
        <div class="fi-img" style="background-image:url('assets/uploads/hostel.jpg')"></div>
        <div class="fi-img" style="background-image:url('assets/uploads/transport.webp')"></div>
    </div>

    <!-- LEFT FACILITY TEXT -->
    <div class="mdu-facility-content">
        <h2 class="fc-title">
            Modern <span>Facilities</span> That<br> Empower Every Student
        </h2>

        <div class="fc-list">

            <div class="fc-item" data-index="0">
                <h3>Advanced Computer & Technology Labs</h3>
                <p>Well-equipped labs supporting programming, AI, machine learning, analytics, robotics, and digital innovation.</p>
            </div>

            <div class="fc-item" data-index="1">
                <h3>Central Library & E-Resource Hub</h3>
                <p>Access to books, journals, research papers, digital learning platforms, and study areas to assist academic and competitive exam preparation.</p>
            </div>

            <div class="fc-item" data-index="2">
                <h3>Health & Wellness Centre</h3>
                <p>On-campus medical support with tie-ups for emergency care and routine health checkups.</p>
            </div>

            <div class="fc-item" data-index="3">
                <h3>Multi-Functional Auditorium & Seminar Halls</h3>
                <p>Designed for conferences, workshops, cultural programs, and guest lectures.</p>
            </div>

            <div class="fc-item" data-index="4">
                <h3>Secure & Comfortable Hostels</h3>
                <p>Separate hostels for boys and girls with modern amenities, 24x7 security, study spaces, and recreational zones.</p>
            </div>

            <div class="fc-item" data-index="5">
                <h3>Transport Facilities</h3>
                <p>University-managed buses connecting major areas in Dehradun, ensuring safe and convenient travel.</p>
            </div>

        </div>
    </div>

</section>

<style>
    :root {
        --mdu-green: #00a651;
    }

    /* MAIN WRAPPER */
    .mdu-facility-immersive {
        display: flex;
        max-width: 1350px;
        margin: 60px auto;
        padding: 0 20px;
        gap: 40px;
        font-family: "Poppins", sans-serif;
        position: relative;
    }

    /* LEFT CONTENT */
    .mdu-facility-content {
        flex: 0 0 45%;
    }

    .fc-title {
        font-size: 34px;
        font-weight: 800;
        margin-bottom: 32px;
        line-height: 1.25;
    }

    .fc-title span {
        color: var(--mdu-green);
        font-style: italic;
    }

    /* FACILITY LIST */
    .fc-list {
        display: flex;
        flex-direction: column;
        gap: 38px;
    }

    .fc-item {
        padding: 6px 0;
        border-left: 3px solid transparent;
        padding-left: 18px;
        opacity: .45;
        transform: translateY(20px);
        transition: .35s;
        cursor: pointer;
    }

    .fc-item h3 {
        margin: 0 0 6px;
        font-size: 22px;
        font-weight: 700;
    }

    .fc-item p {
        margin: 0;
        color: #333;
        line-height: 1.45;
    }

    /* ACTIVE STATE */
    .fc-item.active {
        opacity: 1;
        border-color: var(--mdu-green);
        transform: translateY(0);
    }

    /* RIGHT IMAGE COLUMN */
    .mdu-facility-images {
        flex: 1;
        position: sticky;
        top: 120px;
        height: 540px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.10);
    }

    .fi-img {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transform: scale(1.05);
        transition: opacity .6s ease, transform .6s ease;
    }

    .fi-img.active {
        opacity: 1;
        transform: scale(1);
    }

    /* RESPONSIVE */
    @media(max-width:900px) {
        .mdu-facility-immersive {
            flex-direction: column;
        }

        .mdu-facility-images {
            position: relative;
            height: 280px;
            top: 0;
        }
    }
</style>
<script>
    const items = document.querySelectorAll(".fc-item");
    const imgs = document.querySelectorAll(".fi-img");

    items.forEach(item => {
        item.addEventListener("mouseenter", () => {
            let idx = item.dataset.index;

            items.forEach(i => i.classList.remove("active"));
            item.classList.add("active");

            imgs.forEach(i => i.classList.remove("active"));
            imgs[idx].classList.add("active");
        });
    });
</script>
<div class="container mb-4">
    <div class="row align-items-center">
        <!-- Left Side - Image -->
        <div class="col-lg-6 text-center">
            <img src="assets/uploads/boys.jpeg" alt="Logo" class="img-fluid rounded-lg shadow-sm p-2 bg-light" style="max-height: 500px;">
        </div>

        <!-- Right Side - Text -->
        <div class="col-lg-6">
            <h1 class="fw-bold text-success mb-3">
                Experience Excellence at the Best University in Dehradun – Maya Devi University
            </h1>
            <p class="fs-5 text-muted">
                At <strong>Maya Devi University</strong>, recognized as the best university in Dehradun,
                we offer a transformative learning experience that goes beyond traditional education.
                Our innovative approach is built around the <strong>8 Abilities</strong> – a comprehensive framework
                designed to develop well-rounded, future-ready individuals equipped with the skills
                to excel in their careers and make a lasting impact in the world.
            </p>
            <a href="campus-life.php" class="btn btn-success btn-lg mt-3">Learn More</a>
        </div>
    </div>
</div>
<!-- Stats Section -->
<!-- ========== MDU TIMELINE WITH RIGHT IMAGE (FULL BLOCK) ========== -->
<!-- ========================================================= -->
<!-- ============= MDU LEGACY TIMELINE (NON-CONFLICT) ======== -->
<!-- ========================================================= -->

<section class="mduLegacy-wrap">
    <div class="mduLegacy-layout">

        <!-- LEFT Timeline -->
        <section class="mduLegacy-timeline" aria-labelledby="mduLegacy-title">
            <div class="mduLegacy-inner">

                <h2 id="mduLegacy-title" class="mduLegacy-heading">
                    An <span>Illustrious</span> Legacy We <strong>Shape</strong>
                </h2>

                <div class="mduLegacy-track">

                    <article class="mduLegacy-item" data-target="120">
                        <div class="mduLegacy-bubble">120+</div>
                        <div class="mduLegacy-card">
                            <div class="mduLegacy-card-head">Programs</div>
                            <p class="mduLegacy-card-desc">
                                Industry-oriented undergraduate & postgraduate programs focused on employability.
                            </p>
                        </div>
                    </article>

                    <article class="mduLegacy-item" data-target="100">
                        <div class="mduLegacy-bubble">100+</div>
                        <div class="mduLegacy-card">
                            <div class="mduLegacy-card-head">Stalwarts</div>
                            <p class="mduLegacy-card-desc">
                                Industry stalwarts and mentors collaborating with students & faculty.
                            </p>
                        </div>
                    </article>

                    <article class="mduLegacy-item" data-target="35">
                        <div class="mduLegacy-bubble">35+</div>
                        <div class="mduLegacy-card">
                            <div class="mduLegacy-card-head">Doctoral Faculty</div>
                            <p class="mduLegacy-card-desc">
                                Research-active doctoral faculty guiding projects & publications.
                            </p>
                        </div>
                    </article>

                    <article class="mduLegacy-item" data-target="8">
                        <div class="mduLegacy-bubble">8+</div>
                        <div class="mduLegacy-card">
                            <div class="mduLegacy-card-head">International Faculty</div>
                            <p class="mduLegacy-card-desc">
                                Visiting scholars and collaborative professors from global institutions.
                            </p>
                        </div>
                    </article>

                    <article class="mduLegacy-item" data-target="1200">
                        <div class="mduLegacy-bubble">1200+</div>
                        <div class="mduLegacy-card">
                            <div class="mduLegacy-card-head">Alumni</div>
                            <p class="mduLegacy-card-desc">
                                A strong alumni network across industries and geographies.
                            </p>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- RIGHT: Image -->
        <div class="mduLegacy-image">
            <img src="assets/uploads/girl-3.jpeg" alt="Campus Image" loading="lazy">
        </div>

    </div>
</section>
<!-- ======================= CSS ============================= -->
<style>
    :root {
        --mduLegacy-green: #00a651;
    }

    /* Wrapper */
    .mduLegacy-wrap {
        background: #fff;
        padding: 40px 20px;
        font-family: "Poppins", Arial, sans-serif;
    }

    /* 2-Column Layout */
    .mduLegacy-layout {
        max-width: 1300px;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 430px;
        gap: 40px;
        align-items: stretch;
    }

    /* Right Image */
    .mduLegacy-image {
        width: 100%;
        height: 100%;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.12);
    }

    .mduLegacy-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Timeline Content */
    .mduLegacy-heading {
        font-size: 30px;
        font-weight: 800;
        margin-bottom: 28px;
        color: #111;
        line-height: 1.2;
    }

    .mduLegacy-heading span {
        color: var(--mduLegacy-green);
        font-style: italic;
    }

    /* Track */
    .mduLegacy-track {
        position: relative;
        display: grid;
        gap: 34px;
        padding: 0 36px;
    }

    /* Vertical Line */
    .mduLegacy-track::before {
        content: "";
        position: absolute;
        left: calc(50% - 1px);
        top: 0;
        bottom: 0;
        width: 2px;
        background: rgba(0, 0, 0, 0.06);
        z-index: 0;
    }

    /* Items */
    .mduLegacy-item {
        display: flex;
        gap: 18px;
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.7s ease-out;
        z-index: 2;
    }

    .mduLegacy-item.inview {
        opacity: 1;
        transform: translateY(0);
    }

    /* Odd/Even Position */
    .mduLegacy-item:nth-child(odd) {
        justify-content: flex-start;
    }

    .mduLegacy-item:nth-child(even) {
        flex-direction: row-reverse;
    }

    /* Bubble */
    .mduLegacy-bubble {
        width: 110px;
        height: 110px;
        background: linear-gradient(160deg, var(--mduLegacy-green), #028a47);
        border-radius: 18px;
        font-size: 28px;
        font-weight: 900;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Card */
    .mduLegacy-card {
        background: #fff;
        padding: 16px 18px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(2, 6, 23, 0.08);
        max-width: 520px;
    }

    .mduLegacy-card-head {
        font-size: 18px;
        font-weight: 800;
        margin-bottom: 6px;
        color: #0b2b2b;
    }

    .mduLegacy-card-desc {
        font-size: 14px;
        color: #3b4a4a;
        line-height: 1.45;
    }

    /* Mobile Responsive */
    @media (max-width: 992px) {
        .mduLegacy-layout {
            grid-template-columns: 1fr;
        }

        .mduLegacy-image {
            height: 330px;
            margin-top: 20px;
        }
    }

    @media (max-width: 600px) {
        .mduLegacy-image {
            height: 240px;
        }

        .mduLegacy-track::before {
            left: 20px;
        }

        .mduLegacy-item,
        .mduLegacy-item:nth-child(even) {
            flex-direction: row;
        }

        .mduLegacy-card {
            max-width: calc(100% - 120px);
        }
    }
</style>
<script>
    (function() {
        const items = document.querySelectorAll('.mduLegacy-item');

        const io = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;

                const el = entry.target;
                el.classList.add('inview');

                const bubble = el.querySelector('.mduLegacy-bubble');
                const target = parseInt(el.getAttribute("data-target")) || 0;

                bubble.textContent = "0";

                let start = 0;
                const duration = 1200;
                const step = Math.max(Math.floor(duration / target), 10);

                const timer = setInterval(() => {
                    start++;
                    bubble.textContent = start + "+";
                    if (start >= target) clearInterval(timer);
                }, step);

                obs.unobserve(el);
            });
        }, {
            threshold: 0.3
        });

        items.forEach(i => io.observe(i));
    })();
</script>
<!-- Include AOS Animation CSS & JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<section class="rankings-section">
    <div class="section-title-3 section-shape-hm2-1 text-center mb-5">
        <h2 style="font-size: 40px; color: green; font-weight: bold;">Rankings & Accreditations</h2>

        <div class="rankings-container">
            <!-- Card 1 -->
            <div class="ranking-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="assets/uploads/icon/rank-1.webp" alt="WURI">
            </div>

            <!-- Card 2 -->
            <div class="ranking-card" data-aos="fade-up" data-aos-duration="1200">
                <img src="assets/uploads/icon/rank-2.png" alt="THE Rankings">
            </div>

            <!-- Card 3 -->
            <div class="ranking-card" data-aos="fade-up" data-aos-duration="1400">
                <img src="assets/uploads/icon/rank-3.png" alt="NIRF">
            </div>

            <!-- Card 4 -->
            <div class="ranking-card" data-aos="fade-up" data-aos-duration="1600">
                <img src="assets/uploads/icon/rank-4.webp" alt="THE Impact Rankings">
            </div>

            <!-- Card 5 -->
            <div class="ranking-card" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/uploads/icon/rank-5.png" alt="Other Ranking">
            </div>
        </div>
    </div>
</section>

<script>
    AOS.init();
</script>

<style>
    .rankings-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: auto;
    }

    .ranking-card {
        border: 1px solid #ddd;
        background: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 150px;
        /* keep height consistent */
    }

    .ranking-card img {
        max-height: 120px;
        max-width: 100%;
        object-fit: contain;
    }

    .ranking-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }
</style>
<div class="course-area bg-img pt-70 pb-10" style="background-image:url(assets/uploads/bg-1.webp);">
    <div class="container">
        <div class="section-title mb-55">
            <h2> <span>UG</span> Courses</h2>
            <p>Our UG programs blend academic depth with real-world exposure, <br>equipping students with strong foundations and skills for lifelong success.</p>
        </div>

        <div class="course-slider-active nav-style-1 owl-carousel">
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-AI-ML.php"><img class="animated" src="assets/uploads/b-tech-AI.jpeg" alt=""></a>

                </div>
                <div class="course-content">
                    <h4><a href="b.tech-AI-ML.php">B.tech With Specialization in AI & ML</a></h4>
                    <p>Focused program in AI and Machine Learning, covering neural networks and intelligent systems.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-AI-ML.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-cyber_security.php"><img class="animated" src="assets/uploads/b.tech-cyber.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-cyber_security.php">B.tech With Specialization in Cyber Security</a></h4>
                    <p>Specialized program in cyber security and digital forensics with IBM, focusing on threat detection and mitigation.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-cyber_security.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-CSE.php"><img class="animated" src="assets/uploads/b.tech-cs.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-CSE.php">B.Tech. Computer Science & Engineering</a></h4>
                    <p>Core program in computer science, covering programming, algorithms, and system design.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-CSE.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-data_science.php"><img class="animated" src="assets/uploads/b.tech-ds.jpg" alt=""></a>

                </div>
                <div class="course-content">
                    <h4><a href="b.tech-data_science.php">B.tech With Specialization in Data Science</a></h4>
                    <p>Focused program on data science with IBM, covering data analysis, visualization, and predictive modeling.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-data_science.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-title mb-55">
            <h2> <span>PG</span> Courses</h2>
            <p>Our PG programs foster advanced expertise and research-driven learning,<br> preparing graduates for leadership roles and specialized career growth.</p>
        </div>
        <div class="course-slider-active nav-style-1 owl-carousel">
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-AI-ML.php"><img class="animated" src="assets/uploads/b-tech-AI.jpeg" alt=""></a>

                </div>
                <div class="course-content">
                    <h4><a href="b.tech-AI-ML.php">B.tech With Specialization in AI & ML</a></h4>
                    <p>Focused program in AI and Machine Learning, covering neural networks and intelligent systems.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-AI-ML.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-cyber_security.php"><img class="animated" src="assets/uploads/b.tech-cyber.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-cyber_security.php">B.tech With Specialization in Cyber Security</a></h4>
                    <p>Specialized program in cyber security and digital forensics with IBM, focusing on threat detection and mitigation.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-cyber_security.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-CSE.php"><img class="animated" src="assets/uploads/b.tech-cs.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-CSE.php">B.Tech. Computer Science & Engineering</a></h4>
                    <p>Core program in computer science, covering programming, algorithms, and system design.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-CSE.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-data_science.php"><img class="animated" src="assets/uploads/b.tech-ds.jpg" alt=""></a>

                </div>
                <div class="course-content">
                    <h4><a href="b.tech-data_science.php">B.tech With Specialization in Data Science</a></h4>
                    <p>Focused program on data science with IBM, covering data analysis, visualization, and predictive modeling.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-data_science.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-title mb-55">
            <h2> <span>Diploma</span> Courses</h2>
            <p>Our Diploma programs emphasize practical training and industry relevance, <br>empowering students with job-ready skills and career opportunities.</p>
        </div>
        <div class="course-slider-active nav-style-1 owl-carousel">
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-AI-ML.php"><img class="animated" src="assets/uploads/b-tech-AI.jpeg" alt=""></a>

                </div>
                <div class="course-content">
                    <h4><a href="b.tech-AI-ML.php">B.tech With Specialization in AI & ML</a></h4>
                    <p>Focused program in AI and Machine Learning, covering neural networks and intelligent systems.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-AI-ML.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-cyber_security.php"><img class="animated" src="assets/uploads/b.tech-cyber.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-cyber_security.php">B.tech With Specialization in Cyber Security</a></h4>
                    <p>Specialized program in cyber security and digital forensics with IBM, focusing on threat detection and mitigation.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-cyber_security.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-CSE.php"><img class="animated" src="assets/uploads/b.tech-cs.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-CSE.php">B.Tech. Computer Science & Engineering</a></h4>
                    <p>Core program in computer science, covering programming, algorithms, and system design.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-CSE.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="b.tech-data_science.php"><img class="animated" src="assets/uploads/b.tech-ds.jpg" alt=""></a>

                </div>
                <div class="course-content">
                    <h4><a href="b.tech-data_science.php">B.tech With Specialization in Data Science</a></h4>
                    <p>Focused program on data science with IBM, covering data analysis, visualization, and predictive modeling.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="b.tech-data_science.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-button">
            <a href="course.php" class="button-link">View More Courses</a>
        </div>
    </div>
</div>
<style>
    .course-button {
        margin: 10px auto;
        text-align: center;
    }

    a.button-link {
        padding: 12px 24px;
        font-size: 16px;
        background-color: #00a651;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        display: inline-block;
    }

    a.button-link:hover {
        background-color: #0056b3;
    }
</style>
<section>
    <div class="container py-2">
        <div class="row align-items-center">

            <!-- Left Side: Content -->
            <div class="col-md-6 mb-4">
                <h1 class="fw-bold" style="color:#00a651;">Best University in Dehradun – Why Maya Devi University Stands Out?</h1>
                <p class="text-muted fs-5">
                    At Maya Devi University, Dehradun, we deliver world-class education
                    through experienced faculty, modern infrastructure, and global exposure.
                    Our focus on academic excellence and holistic development empowers students
                    to thrive in their careers and contribute positively to society.
                </p>
                <p class="text-muted fs-5">Discover a transformative educational journey at Maya Devi University, recognized as the best university in Dehradun for academic excellence and career-focused programs. Nestled in the heart of Dehradun, our university offers world-class faculty, state-of-the-art infrastructure, and industry-aligned courses to shape future leaders. Whether you aspire for a career in engineering, management, science, or the arts, Maya Devi University provides the perfect launchpad for your success. Join us and unlock endless opportunities for a brighter future!</p>
            </div>

            <!-- Right Side: Cards -->
            <div class="col-md-6">
                <div class="row g-3">

                    <div class="col-6">
                        <div class="p-3 text-white rounded text-center h-100" style="background-color:#00a651;">
                            <img src="assets/uploads/world-edu.png" alt="Icon" class="mb-2" style="width: 60px;">
                            <h4 class="fw-bold text-warning">World-Class Education</h4>
                            <p class="text-white">Cutting-edge curriculum designed to meet global academic standards.</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="p-3 text-white rounded text-center h-100" style="background-color:#00a651;">
                            <img src="assets/uploads/e-faculty.jpg" alt="Icon" class="mb-2" style="width: 60px;">
                            <h4 class="fw-bold text-warning">Expert Faculty</h4>
                            <p class="text-white">Learn from experienced professors and industry leaders.</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="p-3 text-white rounded text-center h-100" style="background-color:#00a651;">
                            <img src="assets/uploads/m-infra.png" alt="Icon" class="mb-2" style="width: 60px;">
                            <h4 class="fw-bold text-warning">Modern Infrastructure</h4>
                            <p class="text-white ">State-of-the-art labs, classrooms, and research facilities.</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="p-3 text-white rounded text-center h-100" style="background-color:#00a651;">
                            <img src="assets/uploads/global.png" alt="Icon" class="mb-2" style="width: 60px;">
                            <h4 class="fw-bold text-warning">Global Opportunities</h4>
                            <p class="text-white">Collaborations and internships with international institutions.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="course-button pb-30">
        <a href="https://admission.maya.edu.in/" class="button-link">Apply Now</a>
    </div>
</section>
<?php require "placement.php" ?>
<section class="my-stats-section">
    <div class="my-stats-container">
        <h2 class="my-stats-title text-center mt-5">
            Immerse <span class="my-highlight">yourself</span> <strong>in a Global<br>
                Educational Experience</strong> with peers
            from <strong>65 countries</strong>
        </h2>
        <div class="container-cat">
            <div class="cat-card">
                <img src="assets/uploads/nursing-1.jpg">
                <div class="cat-card__head">Nursing</div>
            </div>
            <div class="cat-card">
                <img src="assets/uploads/b.tech-electric-3.webp">
                <div class="cat-card__head">Mechanical</div>
            </div>
            <div class="cat-card">
                <img src="assets/uploads/nursing.webp">
                <div class="cat-card__head">Pharmacy</div>
            </div>
            <div class="cat-card">
                <img src="assets/uploads/b.tech-electric-2.webp">
                <div class="cat-card__head">Electronics</div>
            </div>
            <div class="cat-card">
                <img src="assets/uploads/b.tech-mechanic-2.webp">
                <div class="cat-card__head">Civil</div>
            </div>
        </div>

        <style>
            .container-cat {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 10vmin;
                overflow: hidden;
                transform: skew(5deg);
            }

            .cat-card {
                flex: 1;
                transition: all 1s ease-in-out;
                height: 75vmin;
                position: relative;
            }

            .cat-card__head {
                color: black;
                background: rgba(255, 30, 173, 0.75);
                padding: 0.5em;
                transform: rotate(-90deg);
                transform-origin: 0% 0%;
                transition: all 0.5s ease-in-out;
                min-width: 100%;
                text-align: center;
                position: absolute;
                bottom: 0;
                left: 0;
                font-size: 1em;
                white-space: nowrap;
            }

            .cat-card:hover {
                flex-grow: 10;
            }

            .cat-card:hover img {
                filter: grayscale(0);
            }

            .cat-card:hover .cat-card__head {
                text-align: center;
                top: calc(100% - 2em);
                color: white;
                background: rgba(0, 0, 0, 0.5);
                font-size: 2em;
                transform: rotate(0deg) skew(-5deg);
            }

            .cat-card img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: all 1s ease-in-out;
                filter: grayscale(100%);
            }

            .cat-card:not(:nth-child(5)) {
                margin-right: 1em;
            }
        </style>
    </div>
</section>
<div class="container py-5">
    <!-- Heading Section -->
    <div class="row mb-5 text-center">
        <div class="col-lg-12">
            <p class="text-uppercase text-muted fw-semibold mb-2">Excellence & Innovation</p>
            <h1 class="fw-bold mb-3" style="
    font-size: 40px; 
    background: linear-gradient(90deg, #00B894, #28a745, #006400); 
    -webkit-background-clip: text; 
    background-clip: text; 
    color: transparent;">
                Why Choose Maya Devi University?
            </h1>

            <p class="fs-5 text-secondary">
                Discover a world of opportunities where excellence meets innovation and tradition meets the future.
            </p>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row g-4 text-center">
        <!-- Feature 1 -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100 p-4 hover-shadow">
                <div class="icon-circle mb-3 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 16 16">
                        <path d="M8 0a5 5 0 0 1 5 5v.5H3V5a5 5 0 0 1 5-5zM1 6h14a1 1 0 0 1 1 1v1.5H0V7a1 1 0 0 1 1-1zm-1 4.5h16V15a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-4.5z" />
                    </svg>
                </div>
                <h4 class="fw-semibold mb-2">Top Placements & Global Opportunities</h4>
                <p class="text-muted fs-6">
                    Our world-class faculty and cutting-edge programs prepare students for successful careers with global exposure.
                </p>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100 p-4 hover-shadow">
                <div class="icon-circle mb-3 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 16 16">
                        <path d="M0 3a1 1 0 0 1 1-1h5.5v1.5H1v10h14v-10h-5.5V2H15a1 1 0 0 1 1 1v12H0V3z" />
                        <path d="M7.5 0h1v5h-1V0z" />
                    </svg>
                </div>
                <h4 class="fw-semibold mb-2">State-of-the-art Infrastructure</h4>
                <p class="text-muted fs-6">
                    Experience modern labs, digital classrooms, and world-class facilities designed to inspire innovation.
                </p>
            </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4">
            <div class="card border-0 shadow h-100 p-4 hover-shadow">
                <div class="icon-circle mb-3 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 8 8A8.009 8.009 0 0 0 8 0zM6.406 12.416a5.5 5.5 0 0 1 0-8.832l.708.708a4.5 4.5 0 0 0 0 7.416l-.708.708zm3.188 0l-.708-.708a4.5 4.5 0 0 0 0-7.416l.708-.708a5.5 5.5 0 0 1 0 8.832z" />
                    </svg>
                </div>
                <h4 class="fw-semibold mb-2">International Collaborations</h4>
                <p class="text-muted fs-6">
                    Collaborate with top global institutions through exchange programs and research initiatives.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Extra Styles -->
<style>
    .icon-circle {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #00B894, #00CFFF);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hover-shadow:hover {
        transform: translateY(-5px);
        transition: 0.3s ease-in-out;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
    }
</style>

<div class="achievement-area pt-40 pb-60">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Our <span>Achievement</span></h2>
            <p>Our achievements reflect our commitment to excellence, showcasing the hard work,<br> innovation, and dedication that define Maya Devi University.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">1
                        <img src="assets/img/icon-img/achieve-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">1890</h2>
                        <span>STUDENTS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">1250</h2>
                        <span>GRADUATE</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-3.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">750</h2>
                        <span>AWARD WINNING</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-4.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">250</h2>
                        <span>FACULTIES</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/uploads/st-1.jpg">
                    </div>
                    <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-12">
                            <div class="testi-content bg-img default-overlay" style="background-image:url(assets/uploads/testi-bg.webp);">
                                <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>Studying at Maya Devi University has been a truly transformative journey. The dedicated faculty, advanced infrastructure, and practical learning approach have shaped my skills and confidence. The university’s focus on both academics and industry exposure has prepared me to face real-world challenges and excel in my chosen career path.</p>
                                <div class="testi-info">
                                    <h5>Arti Sharma</h5>
                                    <span>School of Computer Engineering & Application</span>
                                </div>
                                <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/uploads/st-2.jpg">
                    </div>
                    <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-12">
                            <div class="testi-content bg-img default-overlay" style="background-image:url(assets/uploads/testi-bg.webp);">
                                <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>My experience at Maya Devi University has been nothing short of exceptional. The supportive mentors, innovative teaching methods, and ample opportunities for growth have helped me discover my true potential. From academic excellence to personality development, the university has guided me every step of the way toward a successful future.</p>
                                <div class="testi-info">
                                    <h5>Maya Dechen</h5>
                                    <span>School of Engineering</span>
                                </div>
                                <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/uploads/st-3.jpg">
                    </div>
                    <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-12">
                            <div class="testi-content bg-img default-overlay" style="background-image:url(assets/uploads/testi-bg.webp);">
                                <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>Maya Devi University has provided me with the perfect balance of academic learning and practical exposure. The modern infrastructure, industry-focused curriculum, and guidance from experienced faculty have shaped my skills and boosted my confidence. I am proud to be a part of an institution that truly prepares its students for global opportunities.</p>
                                <div class="testi-info">
                                    <h5>Rohit Pandey</h5>
                                    <span>School of Commerce & Management</span>
                                </div>
                                <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/uploads/st-4.jpg">
                    </div>
                    <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-12">
                            <div class="testi-content bg-img default-overlay" style="background-image:url(assets/uploads/testi-bg.webp);">
                                <div class="quote-style quote-left">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>My journey at Maya Devi University has been nothing short of transformative. The supportive faculty, engaging classes, and ample opportunities for personal growth have helped me discover my true potential. The exposure to real-world projects and industry interactions has made me confident to step into my professional career with strong skills and determination.</p>
                                <div class="testi-info">
                                    <h5>Ruchika Tiwari</h5>
                                    <span>School of Pharmacy</span>
                                </div>
                                <div class="quote-style quote-right">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-image-slider">
                <div class="sin-testi-image">
                    <img src="assets/uploads/st-1.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/uploads/st-2.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/uploads/st-3.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/uploads/st-4.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="testimonial-text-img">
            <img alt="" src="assets/img/icon-img/testi-text.png">
        </div>
    </div>
</div>
<hr>
<?php
// Load blogs dynamically
$dataFile = __DIR__ . "/admin/data/blogs.json";
$blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

// Get latest 3 blogs for homepage carousel
$latestBlogs = array_slice(array_reverse($blogs, true), 0, 3, true);
?>

<div class="event-area bg-img default-overlay pt-10 pb-10">
    <div class="container">
        <div class="row">
            <!-- Blog Section -->
            <div class="col-lg-6">
                <div class="section-title-3 mb-45 mrg-bottom-small">
                    <h2>Our <span>Blog</span></h2>
                    <p>Insights and updates from Maya Devi University.</p>
                </div>
                <div class="blog-active">
                    <?php if (!empty($latestBlogs)): ?>
                        <?php foreach ($latestBlogs as $id => $b):
                            $img = $b['image'] ?? 'assets/img/blog/default.jpg';
                            $title = $b['title'] ?? '';
                            $excerpt = substr(strip_tags($b['content']), 0, 80) . '...';
                            $author = $b['author'] ?? 'Admin';
                            $date = $b['date'] ?? '';
                            $tags = $b['tags'] ?? [];
                        ?>
                            <div class="single-blog">
                                <div class="blog-img" style="height:200px; overflow:hidden;">
                                    <a href="blog-single.php?id=<?= $id ?>"><img src="<?= $img ?>" alt="<?= $title ?>" style="width:100%; height:100%; object-fit:cover;"></a>
                                </div>
                                <div class="blog-content-wrap" style="display:flex; flex-direction:column; height:100%;">
                                    <?php if (!empty($tags)) echo "<span>" . htmlspecialchars($tags[0]) . "</span>"; ?>
                                    <div class="blog-content" style="flex-grow:1;">
                                        <h4><a href="blog-single.php?id=<?= $id ?>"><?= $title ?></a></h4>
                                        <p><?= $excerpt ?></p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-user"></i> <?= $author ?></a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 0</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-date">
                                        <a href="#"><i class="fa fa-calendar-o"></i> <?= $date ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No blogs available</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Upcoming Events Section (unchanged) -->
            <div class="col-lg-6">
                <div class="section-title-3 mb-45 ml-70">
                    <p>Children's Day Celebration 2025</p>
                </div>
                <div class="event-active-2 ml-70">
                    <div class="single-event single-event-2">
                        <div class="event-img">
                            <a href="#"><img src="assets/uploads/children.webp" alt="Logo"></a>
                            <div class="event-date-wrap">
                                <span class="event-date">14</span>
                                <span>November</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="#">Children's Day Celebration 2025</a></h3>
                            <p>Inspiring Young Dreams, Celebrating the Spirit of Childhood.</p>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Maya Devi University</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>11:00 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="single-event single-event-2">
                        <div class="event-img">
                            <a href="#"><img src="assets/img/event/event-4.jpg" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">1st</span>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="#">Social Sciences & Education.</a></h3>
                            <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Shuvastu ,Badda</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10:30 am</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .blog-active .single-blog {
        display: flex;
        flex-direction: column;
        border: 1px solid #eee;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
        margin-bottom: 15px;
        height: 100%;
        /* allows flex-grow to work */
    }

    .blog-active .blog-img {
        flex: 0 0 200px;
        /* fixed height for image */
        overflow: hidden;
    }

    .blog-active .blog-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .blog-active .blog-content-wrap {
        display: flex;
        flex-direction: column;
        flex: 1;
        /* make all content wrappers fill same height */
        padding: 15px;
    }

    .blog-active .blog-content {
        flex: 1;
        /* make content grow to fill remaining space */
    }
</style>

<div class="blog-area pt-50 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Our <span>Events</span></h2>
            <p>Celebrating ideas, culture, and connections at Maya Devi University.</p>
        </div>
        <div class="row">
            <?php
            // Load events from JSON
            $dataFile = __DIR__ . '/admin/data/events.json';
            $events = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

            // Sort by date (latest first) but keep original keys intact
            if (!empty($events)) {
                uasort($events, function ($a, $b) {
                    return strtotime($b['date']) - strtotime($a['date']);
                });
            }

            // Show only latest 4 events (preserve keys)
            $latestEvents = array_slice($events, 0, 4, true);

            foreach ($latestEvents as $eventId => $event):
                $date = strtotime($event['date']);
                $formattedDate = date("M, jS Y", $date);
            ?>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="single-blog mb-30 flex-fill">
                        <div class="blog-img">
                            <!-- link to correct event -->
                            <a href="event-details.php?id=<?php echo urlencode($eventId); ?>">
                                <img src="<?php echo 'admin/' . htmlspecialchars($event['image']); ?>"
                                    alt="<?php echo htmlspecialchars($event['title']); ?>"
                                    style="height:180px; width:100%; object-fit:cover;">
                            </a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4 class="event-title">
                                    <a href="event-details.php?id=<?php echo urlencode($eventId); ?>">
                                        <?php echo htmlspecialchars($event['title']); ?>
                                    </a>
                                </h4>
                                <p class="event-snippet">
                                    <?php
                                    $words = explode(' ', strip_tags($event['content']));
                                    echo implode(' ', array_slice($words, 0, 20)) . '...';
                                    ?>
                                </p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> <?php echo htmlspecialchars($event['author']); ?></a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 0</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar-o"></i> <?php echo $formattedDate; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<style>
    /* Equal height cards */
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .single-blog {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    /* Limit event title (2 lines max) */
    .event-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* max 2 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        min-height: 50px;
    }

    /* Limit event content (3 lines max) */
    .event-snippet {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* max 3 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        min-height: 65px;
    }
</style>

<?php require "common/footer.php" ?>