<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Editors - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->
        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a>

        

        </li>

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav>
  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="add_subjects.php">
              <i class="bi bi-circle"></i><span>Add Subjects</span>
            </a>
          </li>
          <li>
            <a href="create_student.php">
              <i class="bi bi-circle"></i><span>Create Students</span>
            </a>
          </li>
          <li>
            <a href="create_grade.php" class="active">
              <i class="bi bi-circle"></i><span>Create Grade</span>
            </a>
          </li>
          <li>
            <a href="manage_students.php">
              <i class="bi bi-circle"></i><span>Manage Students</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="view_students.php">
              <i class="bi bi-circle"></i><span>View Students Grades</span>
            </a>
          </li>

        </ul>
        </ul>
      </li><!-- End Tables Nav -->
  </aside>

<?php include('assets/connections.php'); ?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Add Grade</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Add Grade</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Grade Information</h5>

            <!-- Add Grade Form -->
            <form method="POST" class="needs-validation" novalidate>

              <!-- Student Dropdown -->
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Student</label>
                <div class="col-sm-8">
                  <select name="student_id" class="form-select" required>
                    <option value="" selected disabled>Select Student</option>
                    <?php
                      $student_query = mysqli_query($conn, "SELECT * FROM students");
                      while ($student = mysqli_fetch_assoc($student_query)) {
                        $fullname = $student['first_name'] . ' ' . $student['middle_name'] . ' ' . $student['last_name'];
                        echo "<option value='{$student['student_id']}'>$fullname - {$student['section']}</option>";
                      }
                    ?>
                  </select>
                  <div class="invalid-feedback">Please select a student.</div>
                </div>
              </div>

              <!-- Subject Dropdown -->
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Subject</label>
                <div class="col-sm-8">
                  <select name="subject_id" class="form-select" required>
                    <option value="" selected disabled>Select Subject</option>
                    <?php
                      $subject_query = mysqli_query($conn, "SELECT * FROM subjects");
                      while ($subject = mysqli_fetch_assoc($subject_query)) {
                        echo "<option value='{$subject['subject_id']}'>{$subject['subject_name']} ({$subject['units']} units)</option>";
                      }
                    ?>
                  </select>
                  <div class="invalid-feedback">Please select a subject.</div>
                </div>
              </div>

              <!-- Grade Input -->
              <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Grade</label>
                <div class="col-sm-8">
                  <input type="number" name="grade" step="0.01" class="form-control" placeholder="Enter grade (e.g. 85.5)" required>
                  <div class="invalid-feedback">Please enter the grade.</div>
                </div>
              </div>

              <!-- Submit Button -->
              <div class="row mb-3">
                <div class="col-sm-12 text-center">
                  <button type="submit" name="save" class="btn btn-primary">Save Grade</button>
                </div>
              </div>
            </form>
            <!-- End Add Grade Form -->

            <?php
            if (isset($_POST['save'])) {
              $student_id = $_POST['student_id'];
              $subject_id = $_POST['subject_id'];
              $grade = $_POST['grade'];

              // Insert into database
              $sql = "INSERT INTO grades (student_id, subject_id, grade) VALUES ('$student_id', '$subject_id', '$grade')";
              if (mysqli_query($conn, $sql)) {
                echo '<div class="alert alert-success mt-3">✅ Grade added successfully!</div>';
              } else {
                echo '<div class="alert alert-danger mt-3">❌ Error: ' . mysqli_error($conn) . '</div>';
              }
            }
            ?>

          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<!-- Bootstrap Validation Script -->
<script>
  (() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>



<!-- Bootstrap validation (optional enhancement) -->
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>


  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>OTERO NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>