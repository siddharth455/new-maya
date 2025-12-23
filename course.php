<?php require "common/header.php"?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>Courses</h2>
            <p>Explore a wide range of courses designed to enhance your knowledge, sharpen your skills, and help you achieve your personal and professional goals.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Courses</span></li>
            </ul>
        </div>
    </div>
</div>
<!-- ====== Academic Programs Section ====== -->
<section class="programs-section">
  <div class="programs-container">
    <h2 class="programs-title">Academic Programs</h2>
    <p class="programs-subtitle">Explore our wide range of academic offerings designed to prepare you for success in your chosen field.</p>

    <div class="programs-grid">

      <!-- Undergraduate -->
      <div class="program-card">
        <div class="program-icon" style="background-color:#e3f0ff;">🎓</div>
        <h3>Undergraduate Programs</h3>
        <p>Comprehensive bachelor’s degree programs offering a strong academic foundation and skill development.</p>
        <a href="undergraduate-course.php" class="program-link">View Undergraduate Courses →</a>
      </div>

      <!-- Postgraduate -->
      <div class="program-card">
        <div class="program-icon" style="background-color:#e7f8ee;">📘</div>
        <h3>Postgraduate Programs</h3>
        <p>Advanced master’s programs designed to deepen knowledge and foster research and innovation.</p>
        <a href="post-graduate.php" class="program-link">View Postgraduate Courses →</a>
      </div>

      <!-- Diploma -->
      <div class="program-card">
        <div class="program-icon" style="background-color:#fff3e3;">💼</div>
        <h3>Diploma Programs</h3>
        <p>Career-focused diploma courses offering specialized training and practical expertise.</p>
        <a href="Diploma-course.php" class="program-link">View Diploma Courses →</a>
      </div>

    </div>
  </div>
</section>

<!-- ====== CSS ====== -->
<style>
.programs-section {
  padding: 80px 20px;
  background-color: #f8f9f8;
}

.programs-container {
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

.programs-title {
  font-size: 2rem;
  color: #0f3b2f;
  margin-bottom: 10px;
}

.programs-subtitle {
  color: #555;
  max-width: 700px;
  margin: 0 auto 50px;
  font-size: 1rem;
}

.programs-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}

@media (max-width: 900px) {
  .programs-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .programs-grid {
    grid-template-columns: 1fr;
  }
}

.program-card {
  background: #fff;
  border-radius: 14px;
  padding: 35px 25px;
  text-align: center;
  box-shadow: 0 2px 12px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.program-card:hover {
  transform: translateY(-5px);
}

.program-icon {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 26px;
  margin: 0 auto 20px;
}

.program-card h3 {
  color: #0f3b2f;
  font-size: 1.2rem;
  margin-bottom: 10px;
}

.program-card p {
  color: #555;
  font-size: 0.95rem;
  margin-bottom: 20px;
}

.program-link {
  color: #0f3b2f;
  font-weight: 600;
  font-size: 0.95rem;
  transition: color 0.3s ease;
}

.program-link:hover {
  color: #135c47;
}
</style>

<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/5.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/6.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
<?php require "common/footer.php"?>