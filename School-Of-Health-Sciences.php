<?php require "common/header.php" ?>
<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/uploads/shs.jpg') center/cover no-repeat; height:70vh;">
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
        The School of Health Sciences at Maya Devi University is dedicated to nurturing future healthcare professionals through rigorous academic programs and hands-on training. Established with a mission to advance health education and research, the department focuses on clinical excellence, innovation, and community service.
      </p>
      <p>
        Our programs are designed to meet the evolving needs of the healthcare industry, ensuring students are well-prepared for impactful careers.With a strong emphasis on practical learning, interdisciplinary collaboration, and community engagement, the department offers a nurturing environment where students can thrive both academically and professionally.
      </p>
      <p>Our faculty comprises experienced clinicians and researchers who mentor students to become compassionate, competent, and globally competitive healthcare providers.</p>
    </div>
    <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
      <div class="img-container">
        <img src="assets/uploads/health.webp"
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
          <span class="counter" data-target="10">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="500">0</span>+
        </h3>
        <p class="mb-0">Students Placed</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f9f8ff;">
        <i class="fa fa-briefcase fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="16">0</span>+
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
          <a href="b.sc-dialysis-technology.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="b.sc-dialysis-technology.php">B.Sc. in Dialysis Technology</a></h4>
          <p>The Diploma in Dialysis program is a three-year course focusing on human anatomy, dialysis technology, patient care, and clinical procedures.</p>
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
            <a class="default-btn" href="b.sc-dialysis-technology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="operation-theatre-technology.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="operation-theatre-technology.php">B.Sc. in Operation Theatre Technology</a></h4>
          <p>The B.Sc. in Operation Theatre Technology program focuses on surgical procedures, operation theatre management, anesthesia techniques, and patient care.</p>
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
            <a class="default-btn" href="operation-theatre-technology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="medical-lab-technology.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="medical-lab-technology.php">B.Sc. in Medical Laboratory Technology
            </a></h4>
          <p>The B.Sc. MLT program is a three-year course designed to train students in laboratory techniques, diagnostic testing, and clinical healthcare skills.</p>
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
            <a class="default-btn" href="medical-lab-technology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="cardiac-care-technology.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="cardiac-care-technology.php">B.Sc. in Cardiac Care Technology</a></h4>
          <p>The B.Sc. in Cardiac Care Technology program trains students in cardiac diagnostics, monitoring, and patient care during heart procedures.</p>
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
            <a class="default-btn" href="cardiac-care-technology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="radio-imaging-technology.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="radio-imaging-technology.php">B.Sc in Radio Imaging Technology</a></h4>
          <p>This program is designed to equip students with the technical and clinical skills required to operate advanced imaging equipment and support diagnostic procedures.</p>
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
            <a class="default-btn" href="radio-imaging-technology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="anaesthesia-technology.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="anaesthesia-technology.php">B.Sc. in Anaesthesia Technology</a></h4>
          <p>The B.Sc. in Anaesthesia Technology program focuses on anaesthesia techniques, patient monitoring, and operation theatre assistance during surgeries.</p>
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
            <a class="default-btn" href="anaesthesia-technology.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="hospital-administration.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="hospital-administration.php">BHA - Bachelor of Hospital Administration</a></h4>
          <p>The BHA program focuses on healthcare management, hospital operations, and administrative leadership, preparing students for managerial roles in hospitals and healthcare institutions.</p>
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
            <a class="default-btn" href="hospital-administration.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
        <div class="course-img">
          <a href="public-health.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
        </div>
        <div class="course-content">
          <h4><a href="public-health.php">BPH - Bachelor of Public Health</a></h4>
          <p>The BPH program focuses on public health, community health management, and healthcare program administration, preparing students for roles in hospitals, NGOs, and public health organizations.</p>
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
            <a class="default-btn" href="public-health.php">APPLY NOW</a>
          </div>
        </div>
      </div>
      <div class="single-course">
    <div class="course-img">
        <a href="master-in-public-health.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
    </div>
    <div class="course-content">
        <h4><a href="master-in-public-health.php">MPH - Master of Public Health</a></h4>
        <p>The MPH program focuses on public health leadership, health promotion, epidemiology, and healthcare program management, preparing graduates for roles in government, NGOs, and international health organizations.</p>
    </div>
    <div class="course-position-content">
        <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
                <i class="fa fa-diamond"></i>
                <span>Credits : 60</span>
            </div>
            <div class="sin-credit-duration">
                <i class="fa fa-clock-o"></i>
                <span>Duration : 2yrs</span>
            </div>
        </div>
        <div class="course-btn">
            <a class="default-btn" href="master-in-public-health.php">APPLY NOW</a>
        </div>
    </div>
</div>
<div class="single-course">
    <div class="course-img">
        <a href="master-in-hospital-administration.php"><img class="animated" src="assets/uploads/paramedical.webp" alt=""></a>
    </div>
    <div class="course-content">
        <h4><a href="master-in-hospital-administration.php">MHA - Master of Hospital Administration</a></h4>
        <p>The MHA program focuses on advanced healthcare management, hospital operations, and leadership skills, preparing graduates for senior managerial roles in hospitals and healthcare organizations.</p>
    </div>
    <div class="course-position-content">
        <div class="credit-duration-wrap">
            <div class="sin-credit-duration">
                <i class="fa fa-diamond"></i>
                <span>Credits : 60</span>
            </div>
            <div class="sin-credit-duration">
                <i class="fa fa-clock-o"></i>
                <span>Duration : 2yrs</span>
            </div>
        </div>
        <div class="course-btn">
            <a class="default-btn" href="master-in-hospital-administration.php">APPLY NOW</a>
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
      <h2>Student <span>& Clubs 🎓</span></h2>
    </div>

    <!-- Student Clubs -->
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💻</div>
          <h5 class="club-title">HealthTech Club</h5>
          <p class="club-desc">Explores the integration of technology and healthcare to improve patient care and innovation.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">Public Health Society</h5>
          <p class="club-desc">Works on awareness, prevention, and community health initiatives for societal well-being.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🩺</div>
          <h5 class="club-title">Clinical Skills Club</h5>
          <p class="club-desc">Provides hands-on training sessions to strengthen core clinical and patient care skills.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🥗</div>
          <h5 class="club-title">Wellness & Nutrition Club</h5>
          <p class="club-desc">Promotes healthy living through balanced nutrition, fitness, and overall wellness programs.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- clubs section ends -->
<section class="clubs-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Career <span>Options 💼</span></h2>
    </div>

    <!-- Career Options -->
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🧪</div>
          <h5 class="club-title">Medical Laboratory Technician</h5>
          <p class="club-desc">Conducts lab tests to help diagnose and treat diseases.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💉</div>
          <h5 class="club-title">Anaesthesia Technician</h5>
          <p class="club-desc">Assists anesthesiologists in patient care before and after surgery.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🩻</div>
          <h5 class="club-title">Radiology Technician</h5>
          <p class="club-desc">Operates imaging equipment to diagnose medical conditions.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💧</div>
          <h5 class="club-title">Dialysis Technician</h5>
          <p class="club-desc">Provides care for patients undergoing kidney dialysis treatment.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🛠️</div>
          <h5 class="club-title">Operation Theatre Technician</h5>
          <p class="club-desc">Supports surgical teams by managing OT instruments and setup.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">❤️</div>
          <h5 class="club-title">Cardiac Care Technician</h5>
          <p class="club-desc">Assists in diagnosing and treating heart-related conditions.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🏥</div>
          <h5 class="club-title">Hospital Administrator</h5>
          <p class="club-desc">Manages hospital operations, staff, and healthcare services.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">Public Health Specialist</h5>
          <p class="club-desc">Works on disease prevention and health promotion programs.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🤝</div>
          <h5 class="club-title">Healthcare Consultant</h5>
          <p class="club-desc">Advises hospitals and organizations to improve healthcare systems.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🔬</div>
          <h5 class="club-title">Research Scientist</h5>
          <p class="club-desc">Conducts medical and scientific research for innovation.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">✅</div>
          <h5 class="club-title">Quality Control Specialist</h5>
          <p class="club-desc">Ensures healthcare services meet quality and safety standards.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📊</div>
          <h5 class="club-title">Clinical Research Associate</h5>
          <p class="club-desc">Monitors clinical trials to ensure accuracy and compliance.</p>
        </div>
      </div>
    </div>
  </div>
</section>

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