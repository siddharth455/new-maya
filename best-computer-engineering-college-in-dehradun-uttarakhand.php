<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/sca.jpg') center/contain no-repeat; ">
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
      The School of Computer Applications at Maya Devi University is dedicated to shaping the future of technology by blending academic excellence with ethical responsibility. Anchored in a vision to be a leading center of innovation and knowledge, the School empowers students to become globally responsible digital leaders—equipped with technical expertise, creative problem-solving skills, and a strong moral compass.
      </p>
      <p>
      Our programs are designed to foster a dynamic learning environment that promotes innovation, critical thinking, and lifelong learning. We seamlessly integrate emerging technologies with core human values to ensure our graduates are not only proficient in cutting-edge tools but also driven by integrity, compassion, and a commitment to social good.
      </p>
      <p>Through a global perspective, hands-on experiences, and a focus on sustainability and inclusivity, the School prepares students to address real-world challenges and shape a better, tech-enabled future for all.</p>
    </div>
  <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
  <div class="img-container">
    <img src="assets/uploads/engineering.webp" 
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
          <span class="counter" data-target="8">0</span>+
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
            <p>We offer diverse, industry-focused courses that combine knowledge and<br> practical skills to prepare students for future success. </p>
        </div>
        <div class="course-slider-active-3">
            <div class="single-course">
                <div class="course-img">
                    <a href="bachelor-of-computer-application.php"><img class="animated" src="assets/uploads/bca.webp" alt=""></a>
                    
                </div>
                <div class="course-content">
                    <h4><a href="bachelor-of-computer-application.php">Bachelor of Computer Application</a></h4>
                    <p>Empowering future innovators with technology, coding skills, and digital excellence.</p>
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
                        <a class="default-btn" href="bachelor-of-computer-application.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
              <a href="bachelor-of-computer-application-AI-&-ML.php"><img class="animated" src="assets/uploads/ai.jpeg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="bachelor-of-computer-application-AI-&-ML.php">Bachelor of Computer Application in AI & ML</a></h4>
                    <p>Shaping tech leaders with expertise in Artificial Intelligence and Machine Learning.</p>
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
                        <a class="default-btn" href="bachelor-of-computer-application-AI-&-ML.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="bachelor-of-computer-application-Data-Science.php"><img class="animated" src="assets/uploads/data-science.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="bachelor-of-computer-application-Data-Science.php">Bachelor of Computer Application in Data Science</a></h4>
                    <p>Shaping future tech & data leaders with expertise in Analytics and Data Science for future world.</p>
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
                        <a class="default-btn" href="bachelor-of-computer-application-Data-Science.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="bachelor-of-computer-application-cyber-security.php"><img class="animated" src="assets/uploads/cyber-security.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="bachelor-of-computer-application-cyber-security.php">Bachelor of Computer Application in Cyber Security</a></h4>
                    <p>An undergraduate program focused on computer applications and digital security.</p>
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
                        <a class="default-btn" href="bachelor-of-computer-application-cyber-security.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="bachelor-of-science-in-information-technology.php"><img class="animated" src="assets/uploads/it.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="bachelor-of-science-in-information-technology.php">B.Sc IT </a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="bachelor-of-science-in-information-technology.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="bachelor-of-science-in-computer-science.php"><img class="animated" src="assets/uploads/cs.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="bachelor-of-science-in-computer-science.php">B.Sc Computer Science</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="bachelor-of-science-in-computer-science.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="b.tech-LE.php"><img class="animated" src="assets/uploads/b-tech-le.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-LE.php">B.Tech (LE)  </a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="b.tech-LE.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="b.tech-CSE.php"><img class="animated" src="assets/uploads/computer.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-CSE.php">B.Tech (CSE)  </a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                <a href="b.tech-AI-ML.php"><img class="animated" src="assets/uploads/ai.jpeg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-AI-ML.php">B.Tech AI & ML  </a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                <a href="b.tech-data_science.php"><img class="animated" src="assets/uploads/data-science.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-data_science.php">B.Tech Data Science</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
            <div class="single-course">
                <div class="course-img">
                <a href="b.tech-cyber_security.php"><img class="animated" src="assets/uploads/cyber-security.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-cyber_security.php">B.Tech Cyber Security</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                <a href="b.tech-CS_IBM.php"><img class="animated" src="assets/uploads/ibm.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-CS_IBM.php">B.Tech, Cs with IBM Associated Program</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="b.tech-CS_IBM.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="b.tech-EVT.php"><img class="animated" src="assets/uploads/evt.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="b.tech-EVT.php">B.Tech. in Electric Vehicle Technology (EVT)</a></h4>
                    <p>An undergraduate program focused on Electric and battery vehicle technology.</p>
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
                        <a class="default-btn" href="b.tech-EVT.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="B.Tech-HFCT.php"><img class="animated" src="assets/uploads/hvct.webp" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="B.Tech-HFCT.php">B.Tech. in Hydrogen Fuel Cell Technology (HFCT)</a></h4>
                    <p>An undergraduate program focused on Hydrogen Fuel Cell Technology.</p>
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
                        <a class="default-btn" href="B.Tech-HFCT.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="mca-aiml.php"><img class="animated" src="assets/uploads/aiml-2.webp" alt=""></a>
                    <span>Postgraduate Programs</span>
                </div>
                <div class="course-content">  
                    <h4><a href="mca-aiml.php">MCA AIML</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="mca-aiml.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="mca-data-science.php"><img class="animated" src="assets/uploads/mca-data.webp" alt=""></a>
                    <span>Postgraduate Programs</span>
                </div>
                <div class="course-content">
                    <h4><a href="mca-data-science.php">MCA Data Science</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="mca-data-science.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="mca-cyber-security.php"><img class="animated" src="assets/uploads/mca-cyber.webp" alt=""></a>
                    <span>Postgraduate Programs</span>
                </div>
                <div class="course-content">
                    <h4><a href="mca-cyber-security.php">MCA Cyber Security</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="mca-cyber-security.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="mtech-cse.php"><img class="animated" src="assets/uploads/computer.jpg" alt=""></a>
                    <span>Postgraduate Programs</span>
                </div>
                <div class="course-content">
                    <h4><a href="mtech-cse.php">M.Tech CSE</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="mtech-cse.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="mtech-specializations-cse-AI-ML.php"><img class="animated" src="assets/uploads/mtech-cse.webp" alt=""></a>
                    <span>Postgraduate Programs</span>
                </div>
                <div class="course-content">
                    <h4><a href="mtech-specializations-cse-AI-ML.php">M.Tech CSE(AIML/Data Science/Cyber Security)</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="mtech-specializations-cse-AI-ML.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="msc-computer-science.php"><img class="animated" src="assets/uploads/computer.webp" alt=""></a>
                    <span>Postgraduate Programs</span>
                </div>
                <div class="course-content">
                    <h4><a href="msc-computer-science.php">M.Sc Computer Science</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="msc-computer-science.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                <a href="mca.php"><img class="animated" src="assets/uploads/mca.webp" alt=""></a>
                    <span>Postgraduate Programs</span>
                </div>
                <div class="course-content">
                    <h4><a href="mca.php">MCA</a></h4>
                    <p>An undergraduate program focused on information technology and its applications.</p>
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
                        <a class="default-btn" href="mca.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- clubs section -->
<section class="clubs-section py-5">
  <div class="container">
  <div class="section-title  pb-50">
    <h2>Clubs <span>& Societies 🎓 </span></h2>
  </div>
    <div class="row g-4">
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🤖</div>
          <h5 class="club-title">AI & Robotics Society</h5>
          <p class="club-desc">Innovating with artificial intelligence and robotics through projects and workshops.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🛡️</div>
          <h5 class="club-title">CyberSec Club</h5>
          <p class="club-desc">Learn, practice, and explore ethical hacking & cybersecurity challenges.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">💻</div>
          <h5 class="club-title">Web & App Developers Hub</h5>
          <p class="club-desc">A community for passionate coders building modern apps & web solutions.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">Tech4Good Society</h5>
          <p class="club-desc">Using technology to solve social issues & create meaningful change.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🎤</div>
          <h5 class="club-title">TechTalks & Toastmasters</h5>
          <p class="club-desc">Sharpen your speaking, debating, and presentation skills with peers.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🎮</div>
          <h5 class="club-title">Game Dev & AR/VR Club</h5>
          <p class="club-desc">Explore immersive worlds with AR/VR projects and gaming innovations.</p>
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