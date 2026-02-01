<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/scm.jpg') center/cover no-repeat; height:70vh;">
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
      The School of Commerce and Management at Maya Devi University is dedicated to shaping future leaders by blending academic excellence with innovation, ethics, and social responsibility. With a vision to be a center of excellence in business education, the School prepares students to become competent professionals and visionary leaders—capable of making impactful decisions that drive economic growth and societal progress.
      </p>
      <p>
      Our programs are designed to deliver a dynamic and practical learning experience, integrating strong theoretical foundations with real-world business exposure. Supported by modern infrastructure, industry collaborations, and research-driven teaching, students develop critical management skills, entrepreneurial thinking, and strategic problem-solving abilities.
      </p>
      <p>Through case studies, internships, global perspectives, industrial visits, and an emphasis on sustainability and inclusivity, the School empowers students to address real-world business challenges with confidence.</p>
    </div>
  <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
  <div class="img-container">
    <img src="assets/uploads/e-school.webp" 
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
          <span class="counter" data-target="20">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="600">0</span>+
        </h3>
        <p class="mb-0">Students Placed</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f9f8ff;">
        <i class="fa fa-briefcase fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="22">0</span>+
        </h3>
        <p class="mb-0">Highest Package (LPA)</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#fff8f2;">
        <i class="fa fa-globe fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="75">0</span>+
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
  }, { threshold: 0.5 });

  counters.forEach(counter => {
    observer.observe(counter);
  });
});
</script>

<!-- Courses Section -->
<div class="course-area bg-light pt-60 pb-60">
  <div class="container">

    <!-- ================= UNDERGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50">
      <h2>Undergraduate <span>Programs</span></h2>
      <p>Industry-focused undergraduate programs in business, management, and commerce.</p>
    </div>

    <div class="row">

      <!-- BBA HR -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-of-business-administration.php">
              <img src="assets/uploads/bba.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>BBA Human Resource Management</h4>
            <p>BBA in Human Resource Management trains students in recruitment, employee relations, training, and leadership skills.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-of-business-administration.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BBA Finance -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-of-business-administration.php">
              <img src="assets/uploads/bba-1.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>BBA Finance Management</h4>
            <p>Focuses on financial planning, investment analysis, budgeting, and corporate decision-making.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-of-business-administration.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BBA Marketing -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-of-business-administration.php">
              <img src="assets/uploads/bba-2.jpeg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>BBA Marketing Management</h4>
            <p>Develops expertise in market research, branding, sales strategies, and digital marketing.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-of-business-administration.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BBA Digital -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-of-business-administration.php">
              <img src="assets/uploads/bba-3.jpeg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>BBA Digital Management</h4>
            <p>Trains students in SEO, social media marketing, content creation, and digital branding.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-of-business-administration.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BBA Retail -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-of-business-administration.php">
              <img src="assets/uploads/bba-4.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>BBA Retail Management</h4>
            <p>Builds skills in retail operations, customer experience, sales, and supply chain management.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-of-business-administration.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BBA Aviation -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-of-business-administration.php">
              <img src="assets/uploads/aviation.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>BBA Aviation Management</h4>
            <p>Prepares students for airline operations, airport management, and aviation business roles.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-of-business-administration.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Com Finance -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-of-commerce.php">
              <img src="assets/uploads/bcom.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Com (Hons) – Finance</h4>
            <p>Develops expertise in financial analysis, investments, accounting, and corporate finance.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-of-commerce.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Com Tax -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-of-commerce.php">
              <img src="assets/uploads/tax.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Com (Hons) – Taxation</h4>
            <p>Focuses on tax planning, compliance, auditing, and financial reporting.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-of-commerce.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Com Accounting -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-of-commerce.php">
              <img src="assets/uploads/accounting.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Com (Hons) – Accounting</h4>
            <p>Builds skills in bookkeeping, auditing, financial reporting, and corporate accounting.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-of-commerce.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= DOCTORAL PROGRAM ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Doctoral <span>Program</span></h2>
      <p>Advanced doctoral research programs focused on academic and professional excellence.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="best-university-for-phd-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/phd.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Ph.D Program</h4>
            <p>Full-time doctoral research program focused on advanced study and original research.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="best-university-for-phd-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
<style>
  .course-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    height: 100%;
}

.course-card:hover {
    transform: translateY(-6px);
}

.course-img img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.course-body {
    padding: 20px;
}

.course-body h4 {
    font-size: 18px;
    margin-bottom: 10px;
}

.course-meta {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    margin: 15px 0;
    color: #666;
}

.badge-pg {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #ff5a5f;
    color: #fff;
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 20px;
}

  </style>
<!-- clubs section -->
<section class="clubs-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Career <span>Prospects 🚀</span></h2>
    </div>
    <div class="row g-4">
      
      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">📊</div>
          <h5 class="club-title">Business Analyst</h5>
          <p class="club-desc flex-grow-1">Analyze data and trends to provide insights for strategic decision-making.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">📈</div>
          <h5 class="club-title">Marketing Manager</h5>
          <p class="club-desc flex-grow-1">Design and implement marketing campaigns to promote products and services.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">💼</div>
          <h5 class="club-title">Financial Consultant</h5>
          <p class="club-desc flex-grow-1">Guide clients on investments, savings, and financial planning.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🤝</div>
          <h5 class="club-title">HR Manager</h5>
          <p class="club-desc flex-grow-1">Manage recruitment, training, and employee relations in organizations.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🏦</div>
          <h5 class="club-title">Investment Banker</h5>
          <p class="club-desc flex-grow-1">Assist businesses with raising capital and managing mergers & acquisitions.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🧩</div>
          <h5 class="club-title">Management Consultant</h5>
          <p class="club-desc flex-grow-1">Advise companies on improving efficiency and solving business challenges.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🌐</div>
          <h5 class="club-title">Digital Marketing Specialist</h5>
          <p class="club-desc flex-grow-1">Drive online presence through SEO, social media, and digital campaigns.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">📢</div>
          <h5 class="club-title">Business Development Manager</h5>
          <p class="club-desc flex-grow-1">Identify new opportunities and build partnerships to expand business growth.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🎯</div>
          <h5 class="club-title">Corporate Strategist</h5>
          <p class="club-desc flex-grow-1">Formulate strategies to help companies achieve long-term goals.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🚀</div>
          <h5 class="club-title">Entrepreneur</h5>
          <p class="club-desc flex-grow-1">Launch and manage innovative ventures to create business value.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">⚙️</div>
          <h5 class="club-title">Operations Manager</h5>
          <p class="club-desc flex-grow-1">Oversee daily operations ensuring efficiency and productivity.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">📂</div>
          <h5 class="club-title">Project Manager</h5>
          <p class="club-desc flex-grow-1">Plan, execute, and deliver projects while managing resources and timelines.</p>
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
        <a href="https://admissions.maya.edu.in" class="btn btn-success btn-lg mt-3">Apply Now →</a>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

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
    delay: 4000,   // 4 seconds per slide
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: { slidesPerView: 2 }, // Tablet
    1024: { slidesPerView: 3 } // Desktop
  }
});

</script>
<?php require "common/footer.php"?>