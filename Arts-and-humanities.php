<?php require "common/header.php" ?>
<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/uploads/home-banner.webp') center/cover no-repeat; height:70vh;">
  <div class="hero-content">
    <h3 class="display-5 fw-bold text-white">School of Arts and Humanities</h3>
    <p class="lead text-white">Shaping Tomorrow's Leaders at Maya Devi University</p>
    <a href="https://admission.maya.edu.in/" class="btn btn-primary">Apply Now</a>
  </div>
</section>

<!-- About Section -->
<section class="container py-5">
  <div class="section-title  pb-20">
    <h2>School <span>Overview</h2>
  </div>
  <div class="row">
    <!-- Left Text -->
    <div class="col-md-7">
      <p>
        The Faculty of Arts, Humanities, and Social Sciences at Maya Devi University is a multidisciplinary academic hub offering diverse programs such as B.A. in Humanities, M.Sc. in Clinical Psychology, and M.A. in Fine Arts. The faculty houses key departments including Hindi Literature, English Literature, Psychology, Political Science, Geography and Sociology.
      </p>
      <p>
        Each department is committed to academic excellence, creative exploration and social relevance, preparing students for dynamic careers and meaningful societal contributions. The faculty's mission is to foster intellectual curiosity, critical thinking, cultural appreciation, and ethical leadership through an inclusive and holistic educational approach.
      </p>
      <p>With a strong emphasis on interdisciplinary learning, the programs aim to develop students' analytical abilities, communication skills, and understanding of both human behavior and societal structures.</p>
    </div>
    <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
      <div class="img-container">
        <img src="assets/uploads/arts.webp"
          alt="School of Engineering"
          class="responsive-img">
      </div>
    </div>

</section>

<!-- Achievements Section -->
<section class="container" id="achievements">
  <div class="section-title pb-20">
    <h2>Our <span>Achievements</span></h2>
  </div>
  <div class="row g-4 text-center mt-4">

    <!-- Card 1 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f0f8ff;">
        <i class="fa fa-users fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="27">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="1000">0</span>+
        </h3>
        <p class="mb-0">Students Placed</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f9f8ff;">
        <i class="fa fa-briefcase fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="12">0</span>+
        </h3>
        <p class="mb-0">Highest Package (LPA)</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#fff8f2;">
        <i class="fa fa-globe fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="100">0</span>+
        </h3>
        <p class="mb-0">Industry Partners</p>
      </div>
    </div>

  </div>
</section>

<!-- Counter Script -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    const duration = 1000; // total animation time (ms)

    const animateCounter = (counter) => {
      const target = +counter.getAttribute("data-target");
      const start = 0;
      const startTime = performance.now();

      const updateCount = (currentTime) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        counter.innerText = Math.floor(progress * target);

        if (progress < 1) {
          requestAnimationFrame(updateCount);
        } else {
          counter.innerText = target; // ensure exact number at end
        }
      };

      requestAnimationFrame(updateCount);
    };

    // Animate only when section is visible
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.5
    });

    counters.forEach(counter => {
      observer.observe(counter);
    });
  });
</script>

<!-- Courses Section -->
<div class="course-area bg-img pt-40">
  <div class="container">
    <div class="section-title mb-75 course-mrg-small">
      <h2>Our <span>Programs</span></h2>
      <p>We offer diverse, industry-focused courses that combine knowledge and <br>
        practical skills to prepare students for future success.</p>
    </div>
    <div class="course-slider-active-3">
      <div class="single-course">
        <div class="course-img">
          <a href="ba-psychology.php"><img class="animated" src="assets/uploads/ba-1.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-psychology.php">BA Psychology</a></h4>
          <p>The Psychology program is designed to equip students with practical skills in understanding mental health, assessing psychological issues, and applying therapeutic techniques to support emotional well-being.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-psychology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-clinical-psychology.php"><img class="animated" src="assets/uploads/ba-2.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-clinical-psychology.php">BA Clinical Psychology</a></h4>
          <p>The Clinical Psychology program is designed to equip students with practical skills in understanding mental health, assessing psychological issues, and applying therapeutic techniques to support emotional well-being.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-clinical-psychology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-hindi-literature.php"><img class="animated" src="assets/uploads/ba-3.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-hindi-literature.php">BA Hindi Literature</a></h4>
          <p>The Hindi Literature program prepares students for diverse careers in education, media, writing, and cultural fields.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-hindi-literature.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-sociology.php"><img class="animated" src="assets/uploads/ba-4.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-sociology.php">BA Sociology</a></h4>
          <p>The Sociology program trains students to understand social structures, cultural patterns, and community dynamics, preparing them to address real-world social issues through research and analysis.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-sociology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-english-literature.php"><img class="animated" src="assets/uploads/ba-3.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-english-literature.php">B.A. English Literature</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a three-year full-time B.A. in English Literature, divided into six semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-english-literature.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-economics.php"><img class="animated" src="assets/uploads/ba-6.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-economics.php">B.A. Economics</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a three-year full-time B.A. in Economics, divided into six semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-economics.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-yoga.php"><img class="animated" src="assets/uploads/ba-7.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-yoga.php">B.A. Yoga</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a three-year full-time B.A. in Yoga, divided into six semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-yoga.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-geography.php"><img class="animated" src="assets/uploads/ba-9.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-geography.php">B.A. Geography</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a three-year full-time B.A. in Geography, divided into six semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-geography.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-journalism-and-mass-communication.php"><img class="animated" src="assets/uploads/ba-12.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-journalism-and-mass-communication.php">B.A. Journalism and Mass Communication</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a three-year full-time B.A. in Journalism and Mass Communication, divided into six semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-journalism-and-mass-communication.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-fine-arts.php"><img class="animated" src="assets/uploads/ba-10.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-fine-arts.php">B.A. Fine Arts</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a three-year full-time B.A. in Fine Arts, divided into six semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-fine-arts.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-mathematics.php"><img class="animated" src="assets/uploads/ba-11.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-mathematics.php">B.A. Maths</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a three-year full-time B.A. in Maths, divided into six semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-mathematics.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-political-science.php"><img class="animated" src="assets/uploads/ba-5.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-political-science.php">B.A. Political Science</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a three-year full-time B.A. in Political Science, divided into six semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-political-science.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ba-history.php"><img class="animated" src="assets/uploads/ba-8.jpg" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ba-history.php">B.A. History</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a three-year full-time B.A. in History, divided into six semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 3yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ba-history.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ma-clinical-psychology.php"><img class="animated" src="assets/uploads/ma-3.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ma-clinical-psychology.php">MA Clinical Psychology</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a two Years full-time M.A. in Clinical Psychology, divided into four semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 2yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ma-clinical-psychology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ma-psychology.php"><img class="animated" src="assets/uploads/ma-2.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ma-psychology.php">MA Psychology</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a two-year full-time M.A. in Psychology, divided into four semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 2yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ma-psychology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ma-sociology.php"><img class="animated" src="assets/uploads/ma-6.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ma-sociology.php">MA Sociology</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a two-year full-time M.A. in Sociology, divided into four semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 2yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ma-sociology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="ma-hindi-literature.php"><img class="animated" src="assets/uploads/ma-5.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ma-hindi-literature.php">MA Hindi Literature</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a two-year full-time M.A. in Hindi Literature, divided into four semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 2yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ma-hindi-literature.php">APPLY NOW</a>
          </div>
        </div>
      </div>
       <div class="single-course">
        <div class="course-img">
          <a href="ma-political-science.php"><img class="animated" src="assets/uploads/ma-1.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ma-political-science.php">MA Political Science</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a two-year full-time M.A. in Political Science, divided into four semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 2yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ma-political-science.php">APPLY NOW</a>
          </div>
        </div>
      </div>
       <div class="single-course">
        <div class="course-img">
          <a href="ma-yoga.php"><img class="animated" src="assets/uploads/ba-7.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="ma-yoga.php">MA Yoga</a></h4>
          <p>The School of Arts and Humanities at Maya Devi University offers a two-year full-time M.A. in Yoga, divided into four semesters.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 2yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="ma-yoga.php">APPLY NOW</a>
          </div>
        </div>
      </div>
       <div class="single-course">
        <div class="course-img">
          <a href="best-university-for-phd-in-dehradun-uttarakhand.php"><img class="animated" src="assets/uploads/phd.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="best-university-for-phd-in-dehradun-uttarakhand.php">PHD Program</a></h4>
          <p>Ph.D. Programme is a full-time doctoral research programme focused on advanced study and original research, aimed at developing scholarly expertise and contributing meaningful knowledge to the academic and research community.</p>
        </div>
        <div class="course-position-content">
          <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
              <i class="fa fa-diamond"></i>
              <span>Credits : 125</span>
            </div>
            <div class="sin-credit-duration">
              <i class="fa fa-clock-o"></i>
              <span>Duration : 2yrs</span>
            </div>
          </div>
          <div class="course-btn">
            <a class="default-btn" href="best-university-for-phd-in-dehradun-uttarakhand.php">APPLY NOW</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- clubs section -->
<section class="clubs-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Clubs <span>& Societies 🎓</span></h2>
    </div>

    <!-- Student Clubs -->
    <h3 class="group-title mb-3"><strong>Student Clubs</strong></h3>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">✍️</div>
          <h5 class="club-title">Creative Writing Club / Literary Society</h5>
          <p class="club-desc">Encourages writing, poetry, and literary expression.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🗣️</div>
          <h5 class="club-title">Debating and Oratory Society</h5>
          <p class="club-desc">Promotes debating, public speaking, and critical thinking skills.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📚</div>
          <h5 class="club-title">Book Club</h5>
          <p class="club-desc">A community for book enthusiasts and reading circles.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">Language Clubs</h5>
          <p class="club-desc">Celebrates learning and practicing different languages.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎭</div>
          <h5 class="club-title">Drama and Theatre Club</h5>
          <p class="club-desc">Brings stage performances and creative storytelling to life.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎶</div>
          <h5 class="club-title">Music and Fine Arts Society</h5>
          <p class="club-desc">Encourages music, painting, and artistic expression.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎬</div>
          <h5 class="club-title">Film and Media Club</h5>
          <p class="club-desc">Explores cinema, photography, and digital storytelling.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📰</div>
          <h5 class="club-title">Student Magazine / Newsletter Team</h5>
          <p class="club-desc">Publishes creative and informative student content.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🤝</div>
          <h5 class="club-title">Community Engagement Club</h5>
          <p class="club-desc">Works on social service and community development initiatives.</p>
        </div>
      </div>
    </div>

    <!-- Societies -->
    <h3 class="group-title mt-5 mb-3"><strong>Societies</strong></h3>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎨</div>
          <h5 class="club-title">Cultural Heritage Society</h5>
          <p class="club-desc">Preserves and promotes diverse cultural traditions.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💡</div>
          <h5 class="club-title">Philosophy Forum / Thinkers' Circle</h5>
          <p class="club-desc">Encourages philosophical discussions and critical ideas.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🏛️</div>
          <h5 class="club-title">History and Heritage Club</h5>
          <p class="club-desc">Explores history and promotes heritage awareness.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">⚖️</div>
          <h5 class="club-title">Social Justice / Human Rights Society</h5>
          <p class="club-desc">Advocates equality, justice, and human rights awareness.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎓</div>
          <h5 class="club-title">Alumni and Career Cell</h5>
          <p class="club-desc">Strengthens alumni connections and career support networks.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- clubs section ends -->
<!-- Why Choose Us -->
<section class="why-choose-us py-5">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-7">
        <div class="section-title pb-20">
          <h2>Why <span>Choose Us 🌟 ?</span></h2>
        </div>
        <p class="text-muted">
          Choosing the right place to pursue your education is a life-changing decision—one that shapes not just your academic journey but also your personal and professional future. At the School of Computer Applications, Maya Devi University, we go beyond conventional learning by offering an ecosystem of innovation, creativity, and global opportunities.
        </p>
        <p class="text-muted">Our focus is on preparing students to thrive in a fast-evolving digital world where adaptability, critical thinking, and ethical leadership matter as much as technical expertise. With state-of-the-art infrastructure, hands-on industry exposure, and mentorship from accomplished faculty, we ensure that every learner is equipped to transform ideas into impactful realities.</p>
        <a href="https://admission.maya.edu.in/" class="btn btn-success btn-lg mt-3">Apply Now →</a>
      </div>
      <div class="col-lg-5 text-center">
        <img src="assets/uploads/computer.jpg"
          alt="Why Choose Us"
          class="img-fluid rounded shadow"
          style="max-height:380px; object-fit:cover; width:100%;">
      </div>
    </div>

    <!-- Feature Points -->
    <div class="row gy-4">
      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🚀</span>
          <h5>Excellence in Education & Innovation</h5>
          <p>
            We offer a future-ready curriculum blending theory with hands-on practice in
            AI, cybersecurity, data science, and cloud computing—ensuring students graduate
            with cutting-edge skills.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">⚖️</span>
          <h5>Ethics Meets Technology</h5>
          <p>
            Beyond technical expertise, we emphasize building responsible leaders who
            innovate with integrity, guided by strong ethical values and social responsibility.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🌍</span>
          <h5>Global Readiness</h5>
          <p>
            International collaborations, industry exposure, and real-world projects prepare
            our students for a connected, global workforce and professional agility.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🔬</span>
          <h5>Research & Creativity</h5>
          <p>
            Opportunities for research, innovation, and product development encourage
            exploration, experimentation, and creative problem-solving in every discipline.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🤝</span>
          <h5>Supportive, Inclusive Environment</h5>
          <p>
            A diverse, inclusive learning culture where every student is heard, supported,
            and mentored—personally, academically, and professionally.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">📚</span>
          <h5>Commitment to Lifelong Learning</h5>
          <p>
            Education here goes beyond degrees—it builds a mindset of curiosity,
            critical thinking, and continuous growth for life.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Student Testimonials -->
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section class="container py-5">
  <div class="section-title pb-20">
    <h2>Student <span>Testimonials</span></h2>
  </div>
  <!-- Swiper Slider -->
  <div class="swiper testimonial-slider">
    <div class="swiper-wrapper">

      <!-- Testimonial 1 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-1.jpeg" alt="Riya Sharma" class="testimonial-img mb-3">
          <p>"The School of Engineering provided me with excellent opportunities to learn, explore, and innovate. I secured a placement at Microsoft with 42 LPA package!"</p>
          <h6 class="mt-2">- Riya Sharma (CSE)</h6>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-2.jpeg" alt="Arjun Verma" class="testimonial-img mb-3">
          <p>"State-of-the-art labs and practical exposure gave me an edge in the industry. Truly grateful for the faculty and support at MDU."</p>
          <h6 class="mt-2">- Arjun Verma (Mechanical)</h6>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-3.jpeg" alt="Student" class="testimonial-img mb-3">
          <p>"Amazing mentors and inclusive culture. I gained not only knowledge but also confidence to excel in my career."</p>
          <h6 class="mt-2">- Sneha Gupta (MCA)</h6>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-4.jpeg" alt="Arjun Verma" class="testimonial-img mb-3">
          <p>"State-of-the-art labs and practical exposure gave me an edge in the industry. Truly grateful for the faculty and support at MDU."</p>
          <h6 class="mt-2">- Arjun Verma (Mechanical)</h6>
        </div>
      </div>

    </div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>

  </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".testimonial-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 4000, // 4 seconds per slide
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2
      }, // Tablet
      1024: {
        slidesPerView: 3
      } // Desktop
    }
  });
</script>
<?php require "common/footer.php" ?>