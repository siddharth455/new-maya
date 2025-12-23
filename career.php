 <?php require "common/header.php" ?>
 <section class="career-form-section">
  <div class="career-form-container">

    <h2 class="form-title">Career Application Form</h2>

    <form>

      <!-- Personal Information -->
      <div class="form-card">
        <h3>Personal Information</h3>

        <div class="form-grid">
          <div class="form-group">
            <label>Full Name *</label>
            <input type="text" required>
          </div>

          <div class="form-group">
            <label>Current Occupation</label>
            <input type="text">
          </div>

          <div class="form-group">
            <label>Highest Degree *</label>
            <input type="text" required>
          </div>

          <div class="form-group">
            <label>Passing Year *</label>
            <input type="number" required>
          </div>

          <div class="form-group">
            <label>Nationality *</label>
            <input type="text" required>
          </div>

          <div class="form-group">
            <label>Date of Birth *</label>
            <input type="date" required>
          </div>
        </div>
      </div>

      <!-- Contact Information -->
      <div class="form-card">
        <h3>Contact Information</h3>

        <div class="form-grid">
          <div class="form-group">
            <label>Email Address *</label>
            <input type="email" required>
          </div>

          <div class="form-group">
            <label>Phone Number *</label>
            <input type="tel" required>
          </div>
        </div>
      </div>

      <!-- Professional Information -->
      <div class="form-card">
        <h3>Professional Information</h3>

        <div class="form-grid">
          <div class="form-group">
            <label>Years of Experience *</label>
            <input type="number" required>
          </div>

          <div class="form-group">
            <label>Position Applying For *</label>
            <input type="text" required>
          </div>
        </div>

        <div class="form-group full-width">
          <label>Experience in Relevant Field *</label>
          <textarea rows="4" required></textarea>
        </div>

        <div class="form-group full-width">
          <label>Upload Resume/CV (PDF only) *</label>
          <input type="file" accept="application/pdf" required>
        </div>
      </div>

      <div class="form-submit">
        <button type="submit">Submit Application</button>
      </div>

    </form>

  </div>
</section>
<style>
    .career-form-section {
  background: #f4f6f9;
  padding: 50px 20px;
}

.career-form-container {
  max-width: 900px;
  margin: auto;
  background: #ffffff;
  border-radius: 10px;
  padding: 30px;
}

.form-title {
  text-align: center;
  background: #1f2937;
  color: #fff;
  padding: 15px;
  border-radius: 8px;
  margin-bottom: 30px;
}

.form-card {
  background: #fafafa;
  padding: 20px;
  border-radius: 8px;
  margin-bottom: 25px;
}

.form-card h3 {
  margin-bottom: 15px;
  color: #1f2937;
  font-size: 18px;
}

.form-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 15px;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group label {
  font-size: 14px;
  margin-bottom: 5px;
  color: #374151;
}

.form-group input,
.form-group textarea {
  padding: 10px;
  border: 1px solid #cbd5e1;
  border-radius: 6px;
  font-size: 14px;
}

.form-group input:focus,
.form-group textarea:focus {
  outline: none;
  border-color: #2563eb;
}

.full-width {
  grid-column: span 2;
}

.form-submit {
  text-align: center;
  margin-top: 20px;
}

.form-submit button {
  background: #2563eb;
  color: #fff;
  border: none;
  padding: 12px 25px;
  font-size: 15px;
  border-radius: 6px;
  cursor: pointer;
}

.form-submit button:hover {
  background: #1e40af;
}

/* Responsive */
@media (max-width: 768px) {
  .form-grid {
    grid-template-columns: 1fr;
  }

  .full-width {
    grid-column: span 1;
  }
}

    </style>
  <?php require "common/footer.php" ?>