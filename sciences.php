<?php require "common/header.php" ?>
<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/uploads/sals.jpg') center/cover no-repeat; height:70vh;">
  <div class="hero-content">
    
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
        The School of Life and Applied Sciences at Maya Devi University, Dehradun, is committed to advancing scientific education and research through its well-structured undergraduate, postgraduate, and doctoral programs. It offers B.Sc. and M.Sc. programs.The school also provides opportunities for Ph.D. research in various branches of applied sciences.
      </p>
      <p>
        With a team of highly qualified and experienced faculty, the school emphasizes both theoretical knowledge and practical skills through laboratory-based learning and project work. Students benefit from modern infrastructure, including well-equipped labs, digital resources, and a rich academic environment.
      </p>
      <p>The school encourages innovation, interdisciplinary learning, and career readiness, supported by an active placement cell. Through academic rigor, research initiatives, and industry engagement, the School of Applied Sciences plays a vital role in preparing students for impactful careers in science and technology.</p>
    </div>
    <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
      <div class="img-container">
        <img src="assets/uploads/life-and-allied.webp"
          alt="School of Life and Applied Sciences"
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
          <span class="counter" data-target="29">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="750">0</span>+
        </h3>
        <p class="mb-0">Students Placed</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f9f8ff;">
        <i class="fa fa-briefcase fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="48">0</span>+
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
          <a href="bsc-pcm.php"><img class="animated" src="assets/uploads/bsc-pcm-img1.jpg" alt="logo"></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-pcm.php">B.Sc. PCM</a></h4>
          <p>B.Sc. PCM is an undergraduate science program that focuses on developing a strong foundation in Physics, Chemistry, and Mathematics.</p>
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
            <a class="default-btn" href="bsc-pcm.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-cbz.php"><img class="animated" src="assets/uploads/cbz.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-cbz.php">B.Sc. CBZ</a></h4>
          <p>B.Sc. CBZ is an undergraduate science program that focuses on Chemistry, Botany, and Zoology.</p>
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
            <a class="default-btn" href="bsc-cbz.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-environmental-science.php"><img class="animated" src="assets/uploads/evs.jpg" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-environmental-science.php">B.Sc. Environmental Science</a></h4>
          <p>B.Sc. Environmental Science is an undergraduate program that focuses on the study of the environment, ecology, and sustainable resource management.</p>
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
            <a class="default-btn" href="bsc-environmental-science.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-environmental-science-hons.php"><img class="animated" src="assets/uploads/evs-2.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-environmental-science-hons.php">B.Sc. Environmental Science (Hons.)</a></h4>
          <p>B.Sc. Environmental Science (Hons.) is an advanced undergraduate program that provides an in-depth understanding of environmental systems, ecology, pollution management, and sustainable development.</p>
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
            <a class="default-btn" href="bsc-environmental-science-hons.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-physics.php"><img class="animated" src="assets/uploads/physics.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-physics.php">B.Sc. Physics</a></h4>
          <p>B.Sc. Physics is an undergraduate program that focuses on the fundamental principles of matter, energy, and the laws of nature.</p>
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
            <a class="default-btn" href="bsc-physics.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-physics-hons.php"><img class="animated" src="assets/uploads/physics.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-physics-hons.php">B.Sc. Physics (Hons.)</a></h4>
          <p>B.Sc. Physics (Hons.) is an advanced undergraduate program that offers an in-depth study of theoretical and experimental physics, including areas like quantum mechanics.</p>
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
            <a class="default-btn" href="bsc-physics-hons.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-botany.php"><img class="animated" src="assets/uploads/botany.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-botany.php">B.Sc. Botany</a></h4>
          <p>B.Sc. Botany is an undergraduate program that focuses on the scientific study of plants, including their structure, growth, reproduction.</p>
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
            <a class="default-btn" href="bsc-botany.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-botany-hons.php"><img class="animated" src="assets/uploads/botany-2.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-botany-hons.php">B.Sc. Botany (Hons.)</a></h4>
          <p>B.Sc. Botany (Hons.) is an advanced undergraduate program that provides an in-depth study of plant biology.</p>
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
            <a class="default-btn" href="bsc-botany-hons.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-zoology.php"><img class="animated" src="assets/uploads/zoology.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-zoology.php">B.Sc. Zoology</a></h4>
          <p>B.Sc. Zoology is an undergraduate program that focuses on the study of animal life, including their structure.</p>
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
            <a class="default-btn" href="bsc-zoology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-zoology-hons.php"><img class="animated" src="assets/uploads/zoology.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-zoology-hons.php">B.Sc. Zoology (Hons.)</a></h4>
          <p>B.Sc. Zoology (Hons.) is an advanced undergraduate program that offers an in-depth study of animal biology, physiology, genetics.</p>
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
            <a class="default-btn" href="bsc-zoology-hons.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-chemistry.php"><img class="animated" src="assets/uploads/chemistry.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-chemistry.php">B.Sc. Chemistry</a></h4>
          <p>B.Sc. Chemistry is an undergraduate program that focuses on the study of matter, its composition, properties, and reactions.</p>
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
            <a class="default-btn" href="bsc-chemistry.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-mathematics.php"><img class="animated" src="assets/uploads/physics.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-mathematics.php">B.Sc. Mathematics</a></h4>
          <p>B.Sc. Mathematics is an undergraduate program that focuses on the study of mathematical concepts, theories.</p>
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
            <a class="default-btn" href="bsc-mathematics.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-forensic-science.php"><img class="animated" src="assets/uploads/forensic.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-forensic-science.php">B.Sc. Forensic Science</a></h4>
          <p>B.Sc. Forensic Science is an undergraduate program that focuses on the application of scientific methods to crime investigation and legal processes.</p>
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
            <a class="default-btn" href="bsc-forensic-science.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-microbiology.php"><img class="animated" src="assets/uploads/micro.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-microbiology.php">B.Sc. Microbiology</a></h4>
          <p>B.Sc. Microbiology is an undergraduate program that focuses on the study of microscopic organisms including bacteria, viruses.</p>
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
            <a class="default-btn" href="bsc-microbiology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-biotechnology.php"><img class="animated" src="assets/uploads/biotechnology.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-biotechnology.php">B.Sc. Biotechnology</a></h4>
          <p>B.Sc. Biotechnology is an undergraduate program that focuses on the use of biological processes, organisms, and systems.</p>
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
            <a class="default-btn" href="bsc-biotechnology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-chemistry-hons.php"><img class="animated" src="assets/uploads/chemistry-2.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-chemistry-hons.php">B.Sc. Chemistry (Hons.)</a></h4>
          <p>B.Sc. Chemistry (Hons.) is an advanced undergraduate program that provides an in-depth understanding of chemical principles, reactions, and structures of matter.</p>
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
            <a class="default-btn" href="bsc-chemistry-hons.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-mathematics-hons.php"><img class="animated" src="assets/uploads/physics.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-mathematics-hons.php">B.Sc. Mathematics (Hons.)</a></h4>
          <p>B.Sc. Mathematics (Hons.) is an advanced undergraduate program that focuses on the theoretical and applied aspects of mathematics.</p>
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
            <a class="default-btn" href="bsc-mathematics-hons.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-forensic-hons.php"><img class="animated" src="assets/uploads/forensic-2.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-forensic-hons.php">B.Sc. Forensic Science (Hons.)</a></h4>
          <p>B.Sc. Forensic Science (Hons.) is an advanced undergraduate program that provides an in-depth understanding of scientific techniques.</p>
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
            <a class="default-btn" href="bsc-forensic-hons.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-microbiology-hons.php"><img class="animated" src="assets/uploads/micro.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-microbiology-hons.php">B.Sc. Microbiology (Hons.)</a></h4>
          <p>B.Sc. Microbiology (Hons.) is an advanced undergraduate program that offers an in-depth study of microorganisms such as bacteria, viruses.</p>
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
            <a class="default-btn" href="bsc-microbiology-hons.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="bsc-biotechnology-hons.php"><img class="animated" src="assets/uploads/biotechnology.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="bsc-biotechnology-hons.php">B.Sc. Biotechnology (Hons.)</a></h4>
          <p>B.Sc. Biotechnology (Hons.) is an advanced undergraduate program that focuses on the application of biological sciences and technology.</p>
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
            <a class="default-btn" href="bsc-biotechnology-hons.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="msc-physics.php"><img class="animated" src="assets/uploads/physics.webp" alt=""></a>
          <span>Post Graduation Course</span>
        </div>
        <div class="course-content">
          <h4><a href="msc-physics.php">M.Sc. Physics</a></h4>
          <p>Master of Science (M.Sc.) in Physics is a full time one year/two year programme that typically offers a deep dive into the world of physical sciences.</p>
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
            <a class="default-btn" href="msc-physics.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="msc-chemistry.php"><img class="animated" src="assets/uploads/chemistry.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="msc-chemistry.php">M.Sc. Chemistry</a></h4>
          <p>Master of Science (M.Sc.) in Chemistry is a full time one year/two year programme that typically offers a deep dive into the world of chemical sciences.</p>
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
            <a class="default-btn" href="msc-chemistry.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="msc-mathematics.php"><img class="animated" src="assets/uploads/bsc-pcm-img1.jpg" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="msc-mathematics.php">M.Sc. Mathematics</a></h4>
          <p>Master of Science (M.Sc.) in Mathematics is a full time one year/two year programme that typically offers a deep dive into the world of mathematical sciences.</p>
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
            <a class="default-btn" href="msc-mathematics.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="msc-botany.php"><img class="animated" src="assets/uploads/botany-3.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="msc-botany.php">M.Sc. Botany</a></h4>
          <p>Master of Science (M.Sc.) in Botany is a full time one year/two year programme that typically offers a deep dive into the world of plants, from their anatomy to ecology.</p>
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
            <a class="default-btn" href="msc-botany.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="msc-zoology.php"><img class="animated" src="assets/uploads/zoology.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="msc-zoology.php">M.Sc. Zoology</a></h4>
          <p>Master of Science (M.Sc.) in Zoology is a full time one year/two year programme that gives a deep insight into the study of animals, their behavior, physiology, ecology, evolution, and conservation. </p>
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
            <a class="default-btn" href="msc-zoology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="msc-forensic-science.php"><img class="animated" src="assets/uploads/forensic-3.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="msc-forensic-science.php">M.Sc. Forensic Science</a></h4>
          <p>M.Sc. Forensic Science programme is a full-time, one year/two-year postgraduate program.</p>
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
            <a class="default-btn" href="msc-forensic-science.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="msc-microbiology.php"><img class="animated" src="assets/uploads/micro.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="msc-microbiology.php">M.Sc. Microbiology</a></h4>
          <p>Master of Science in Microbiology is a full time one year/two year programme that typically offers a deep dive into the world of microbes. </p>
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
            <a class="default-btn" href="msc-microbiology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="msc-biotechnology.php"><img class="animated" src="assets/uploads/biotechnology.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="msc-biotechnology.php">M.Sc. Biotechnology</a></h4>
          <p>The program provides hands-on training in modern biotechnological techniques and prepares students for diverse career opportunities.</p>
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
            <a class="default-btn" href="msc-biotechnology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="msc-environmental-science.php"><img class="animated" src="assets/uploads/evs-3.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="msc-environmental-science.php">M.Sc. Environmental Science</a></h4>
          <p>M.Sc. Environmental Science programme is a full-time, one year/two-year postgraduate program dedicated to explore the environment and its diverse elements, encompassing physical, chemical, and biological facets.</p>
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
            <a class="default-btn" href="msc-environmental-science.php">APPLY NOW</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- global opportunities start  -->
<section class="global-opportunities  pt-40">
  <div class="container">
    <div class="section-title text-center">
      <h2>🌍 Global <span>Opportunities</span></h2>
      <p>Expanding horizons with higher studies, international careers, and global collaborations.</p>
    </div>

    <div class="timeline mt-5">

      <div class="timeline-item">
        <div class="timeline-icon">🎓</div>
        <div class="timeline-content">
          <h5>Higher Studies & Research</h5>
          <p>Postgraduate students are mentored for higher studies and research in top-ranking global institutions.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">📘</div>
        <div class="timeline-content">
          <h5>Global Education Pathways</h5>
          <p>The curriculum aligns with international standards, preparing students for GRE, TOEFL, and IELTS.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">⚗️</div>
        <div class="timeline-content">
          <h5>Chemistry Careers</h5>
          <p>Opportunities as Research Chemists, Medicinal Chemists, Food Chemists, QC Chemists, and more worldwide.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">🌱</div>
        <div class="timeline-content">
          <h5>Life Science Careers</h5>
          <p>Graduates in Environmental Science, Botany, Zoology, Microbiology, and Biotechnology find roles globally.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">🐾</div>
        <div class="timeline-content">
          <h5>Global Conservation</h5>
          <p>Zoologists contribute to conservation initiatives with WWF, UNEP, and CITES worldwide.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">🔬</div>
        <div class="timeline-content">
          <h5>International Research</h5>
          <p>Research opportunities with ZSI, WWI, DRDO, UCOST, CSIR, ICAR, and global collaborations.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- global opportunities end  -->
<!-- clubs section -->
<section class="clubs-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Student <span>Clubs & Societies 🌟</span></h2>
    </div>

    <!-- Clubs Section -->
    <h4 class="mb-4 text-primary fw-bold fs-3">Clubs</h4>
    <div class="row g-4 text-center">

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🏅</div>
          <h5 class="club-title">Sports Clubs</h5>
          <p class="club-desc">Promotes health, teamwork, and competitive spirit through various sports activities.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">📘</div>
          <h5 class="club-title">Academic Clubs</h5>
          <p class="club-desc">Focused on knowledge sharing, study groups, and academic competitions.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🎭</div>
          <h5 class="club-title">Cultural Clubs</h5>
          <p class="club-desc">Celebrates arts, traditions, and diverse cultural expressions.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">💼</div>
          <h5 class="club-title">Career Exploration</h5>
          <p class="club-desc">Guides students towards career choices, internships, and industry exposure.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🎨</div>
          <h5 class="club-title">Hobby Clubs</h5>
          <p class="club-desc">Encourages students to pursue hobbies like photography, music, or painting.</p>
        </div>
      </div>
    </div>

    <!-- Societies Section -->
    <h4 class="mt-5 mb-4 text-primary fw-bold fs-3">Societies</h4>
    <div class="row g-4 text-center">

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🧪</div>
          <h5 class="club-title">Indian Chemical Society</h5>
          <p class="club-desc">Dedicated to advancing chemical sciences and fostering collaboration in India.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🔬</div>
          <h5 class="club-title">Institute of Chemistry of Ireland</h5>
          <p class="club-desc">Promotes chemical research, education, and professional growth in Ireland.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🌎</div>
          <h5 class="club-title">American Chemical Society</h5>
          <p class="club-desc">Global leader in chemistry, supporting research and innovation worldwide.</p>
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
          Choosing the right place to pursue your education is a life-changing decision—one that shapes not only your academic journey but also your personal and professional future. At our institution, we go beyond conventional learning by offering an ecosystem of innovation, creativity, and global opportunities.
        </p>
        <p class="text-muted">Our focus is on preparing students to thrive in a fast-evolving world where adaptability, critical thinking, and ethical leadership matter as much as subject expertise. With state-of-the-art infrastructure, hands-on industry exposure, and mentorship from accomplished faculty, we ensure that every learner is equipped to transform ideas into impactful realities.</p>
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
            We provide a future-ready curriculum that balances theory with practical learning,
            ensuring students graduate with strong knowledge and essential skills for success.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">⚖️</span>
          <h5>Ethics Meets Knowledge</h5>
          <p>
            Beyond academics, we emphasize building responsible individuals who act with integrity,
            guided by strong values and social responsibility.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🌍</span>
          <h5>Global Readiness</h5>
          <p>
            Exposure to diverse ideas, collaborations, and real-world experiences prepares
            students to thrive in a connected and dynamic global environment.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🔬</span>
          <h5>Research & Creativity</h5>
          <p>
            We encourage curiosity, exploration, and innovative thinking, nurturing a spirit of
            discovery and creative problem-solving across all disciplines.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🤝</span>
          <h5>Supportive, Inclusive Environment</h5>
          <p>
            A welcoming and inclusive culture where every student is supported, mentored,
            and empowered to grow personally, academically, and professionally.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">📚</span>
          <h5>Commitment to Lifelong Learning</h5>
          <p>
            Education here inspires curiosity, critical thinking, and a passion for continuous
            growth—preparing students for success throughout life.
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