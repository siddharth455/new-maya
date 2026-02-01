<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/se.jpg') center/cover no-repeat; height:70vh;">
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
      The School of Engineering at Maya Devi University is committed to driving technological progress by combining academic rigor with innovation and societal responsibility. Guided by a vision to be a hub of excellence and discovery, the School nurtures future engineers who are not only skilled professionals but also ethical leaders—capable of designing solutions that benefit humanity.
      </p>
      <p>
      Our programs are crafted to provide a dynamic and immersive learning experience, blending strong fundamentals with exposure to emerging technologies. With state-of-the-art infrastructure, research-driven teaching, and industry collaboration, students gain the technical expertise, creativity, and problem-solving mindset required to excel in a rapidly evolving world.
      </p>
      <p>Through global perspectives, hands-on projects, industrial visits, and a focus on sustainability and inclusivity, the School equips students to tackle real-world challenges with confidence. By fostering innovation, critical thinking, and holistic development, we prepare engineers who are ready to shape a better, future-ready world through technology.</p>
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
  }, { threshold: 0.5 });

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
            <p>We offer diverse, industry-focused courses that combine knowledge and<br>
            practical skills to prepare students for future success.</p>
        </div>
        <div class="course-slider-active-3">
        <div class="single-course">
                                <div class="course-img">
                                    <a href="b.tech-civil-engineering.php"><img class="animated" src="assets/uploads/civil.webp" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="b.tech-civil-engineering.php">B.tech Civil Engineering</a></h4>
                                <p>The B.Tech Civil Engineering program is a four-year course training students in civil engineering, structural design, and professional engineering skills.</p>
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
                                        <a class="default-btn" href="b.tech-civil-engineering.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="b-tech-civil-structural-engineering.php"><img class="animated" src="assets/uploads/b.tech-civil.jpg" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="b-tech-civil-structural-engineering.php">B.tech Civil Engineering (Structural Engineering)</a></h4>
                                <p>The B.Tech Civil Engineering (Structural Engineering) is a four-year program focusing on structural design, analysis, and construction skills.</p>
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
                                        <a class="default-btn" href="b-tech-civil-structural-engineering.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="b.tech-civil-engineering-le.php"><img class="animated" src="assets/uploads/civil-le.webp" alt=""></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="b.tech-civil-engineering-le.php">B.tech Civil Engineering (Lateral Entry)</a></h4>
                                    <p>The B.Tech Civil Engineering (Lateral Entry) is a four-year program focusing on structural design, analysis, and construction skills.</p>
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
                                        <a class="default-btn" href="b.tech-civil-engineering-le.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="b.tech-mechanical-engineering.php"><img class="animated" src="assets/uploads/b.tech-mechanical.webp" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="b.tech-mechanical-engineering.php">B.Tech Mechanical Engineering
                                </a></h4>
                                <p>The B.Tech Mechanical Engineering program is a four-year course designed to train students in mechanical systems, electronics, and professional engineering skills.</p>
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
                                        <a class="default-btn" href="b.tech-mechanical-engineering.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="b.tech-mechatronics-and-robotics.php"><img class="animated" src="assets/uploads/robots.jpeg" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="b.tech-mechatronics-and-robotics.php">B.Tech Mechanical Engineering (Mechatronics)
                                </a></h4>
                                <p>The B.Tech Mechanical Engineering (Mechatronics) program is a four-year course designed to train students in mechanical systems, electronics, and professional engineering skills.</p>
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
                                        <a class="default-btn" href="b.tech-mechatronics-and-robotics.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="mechanical-engineering-le.php"><img class="animated" src="assets/uploads/mechanical-le.webp" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="mechanical-engineering-le.php">B.tech Mechanical Engineering (Lateral Entry)</a></h4>
                                <p>The B.Tech Mechanical Engineering (Lateral Entry) program is a three-year course focusing on mechanical systems, design, and advanced engineering skills.</p>
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
                                        <a class="default-btn" href="mechanical-engineering-le.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="b.tech-electronics-and-communication-engineering.php"><img class="animated" src="assets/uploads/b.tech-electric-2.webp" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="b.tech-electronics-and-communication-engineering.php">B.Tech in electronic and communication Engineering</a></h4>
                                <p>The B.Tech Electronics and Communication Engineering is a four-year program focusing on communication systems, electronics, and embedded engineering skills.</p>
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
                                        <a class="default-btn" href="b.tech-electronics-and-communication-engineering.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="b.tech-electronics-and-communication-engineering-vlsi-embedded.php"><img class="animated" src="assets/uploads/b.tech-electric.webp" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="b.tech-electronics-and-communication-engineering-vlsi-embedded.php">B.Tech in EC Engineering (VLSI and Embedded System)</a></h4>
                                <p>The B.Tech Electronics and Communication Engineering (VLSI and Embedded Systems) is a four-year program focusing on VLSI design, embedded systems, and electronics engineering skills.</p>
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
                                        <a class="default-btn" href="b.tech-electronics-and-communication-engineering-vlsi-embedded.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="b.tech-electronics-and-communication-engineering-robotics-ai.php"><img class="animated" src="assets/uploads/b.tech-electric-3.webp" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="b.tech-electronics-and-communication-engineering-robotics-ai.php">B.tech CE Engineering (Robotics & AI)</a></h4>
                                <p>The B.Tech Electronics and Communication Engineering (Robotics and AI) is a four-year program focused on robotics, AI, and engineering skills.</p>
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
                                        <a class="default-btn" href="b.tech-electronics-and-communication-engineering-robotics-ai.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="b.tech-aerospace-engineering.php"><img class="animated" src="assets/uploads/aero.jpg" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="b.tech-aerospace-engineering.php">B.Tech in Aerospace Engineering</a></h4>
                                <p>The B.Tech Aerospace Engineering is a four-year program focusing on aerodynamics, propulsion, aircraft structures, and space technology.</p>
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
                                        <a class="default-btn" href="b.tech-aerospace-engineering.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="single-course">
                                <div class="course-img">
                                    <a href="b.tech-electronics-and-communication-engineering-le.php"><img class="animated" src="assets/uploads/b.tech-electric-2.webp" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="b.tech-electronics-and-communication-engineering-le.php">B.Tech in Electronics and Communication Engineering (Lateral Entry)</a></h4>
                                <p>Electronics and Communication Engineering combines electronics and networking systems to create efficient communication channels.</p>
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
                                        <a class="default-btn" href="b.tech-electronics-and-communication-engineering-le.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="m.tech-structural-engineering.php"><img class="animated" src="assets/uploads/b.tech-civil.jpg" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="m.tech-mechanical-engineering.php">M.Tech in Structural Engineering</a></h4>
                                <p>The M.Tech Structural Engineering is a two-year program focusing on advanced structural design, analysis, and construction technologies.</p>
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
                                        <a class="default-btn" href="m.tech-mechanical-engineering.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="m.tech-mechanical-engineering.php"><img class="animated" src="assets/uploads/mtech-mechanical.webp" alt=""></a>
                                </div>
                                <div class="course-content">
                                <h4><a href="m.tech-mechanical-engineering.php">M.Tech in Mechanical Engineering</a></h4>
                                <p>Mechanical Engineering is one of the major streams in the engineering profession and its principles are involved in the design, study, development and construction of nearly all of the physical devices and systems.</p>
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
                                        <a class="default-btn" href="m.tech-mechanical-engineering.php">APPLY NOW</a>
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
      <h2>Opportunities <span>& Pathways 🎓</span></h2>
    </div>
    <div class="row g-4">
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">📚</div>
          <h5 class="club-title">Higher Studies</h5>
          <p class="club-desc">Students can pursue M. Tech, M.S and PhD Programs in India and Abroad.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">💡</div>
          <h5 class="club-title">Innovation & Incubation</h5>
          <p class="club-desc">Innovation incubators and accelerators to support creative ideas and projects.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🏢</div>
          <h5 class="club-title">Jobs in PSUs</h5>
          <p class="club-desc">Opportunities in PSUs such as BHEL, NTPC, ISRO, and DRDO.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">📊</div>
          <h5 class="club-title">Management Careers</h5>
          <p class="club-desc">Pursue an MBA for leadership and managerial roles across industries.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🔬</div>
          <h5 class="club-title">Research Scientist</h5>
          <p class="club-desc">Work as a research scientist in reputed R&D centers.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🚀</div>
          <h5 class="club-title">Entrepreneurship</h5>
          <p class="club-desc">Launching technology ventures and startups to drive innovation.</p>
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