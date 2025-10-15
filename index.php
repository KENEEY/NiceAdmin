<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

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
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
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
    </nav>
  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i><span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li><a href="add_subjects.php"><i class="bi bi-circle"></i><span>Add Subjects</span></a></li>
          <li><a href="create_student.php"><i class="bi bi-circle"></i><span>Create Students</span></a></li>
          <li><a href="create_grade.php"><i class="bi bi-circle"></i><span>Create Grades</span></a></li>
          <li><a href="manage_students.php" class="active"><i class="bi bi-circle"></i><span>Manage Students</span></a></li>
        </ul>
      </li>
    </ul>
  </aside>

  <!-- ======= Main ======= -->
  <?php include('assets/connections.php'); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section-dashboard">
      <div class="row g-3">

        <!-- ======= Stat Cards ======= -->
        <div class="col-lg-3 col-md-6">
          <div class="card text-center bg-info text-white shadow">
            <div class="card-body">
              <h6>Total Students</h6>
              <h2 class="fw-bold">
                <?php
                $students = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM students"));
                echo $students['total'] ?: 0;
                ?>
              </h2>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card text-center bg-warning text-dark shadow">
            <div class="card-body">
              <h6>Total Subjects</h6>
              <h2 class="fw-bold">
                <?php
                $subjects = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM subjects"));
                echo $subjects['total'] ?: 0;
                ?>
              </h2>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card text-center bg-light text-dark shadow">
            <div class="card-body">
              <h6>Grades Recorded</h6>
              <h2 class="fw-bold">
                <?php
                $grades = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM grades"));
                echo $grades['total'] ?: 0;
                ?>
              </h2>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card text-center bg-primary text-white shadow">
            <div class="card-body">
              <h6>Average Grade</h6>
              <h2 class="fw-bold">
                <?php
                $avg = mysqli_fetch_assoc(mysqli_query($conn, "SELECT ROUND(AVG(grade),2) AS average FROM grades"));
                echo $avg['average'] ?: 0;
                ?>
              </h2>
            </div>
          </div>
        </div>

        <!-- ======= Charts Section ======= -->
        <div class="col-lg-6">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title">Grade Distribution (Bar)</h5>
              <canvas id="barChart" height="200"></canvas>
            </div>
          </div>
        </div>



        <div class="col-lg-6">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title">Average Grade Trend (Line)</h5>
              <canvas id="lineChart" height="200"></canvas>
            </div>
          </div>
        </div>



      </div>
    </section>

    <!-- ======= Chart.js Configuration ======= -->
    <script>
      const lightBlue = "#6EC1E4";
      const yellow = "#FFD95A";
      const darkBlue = "#2E8BC0";
      const paleYellow = "#FFF3B0";

      // Bar Chart
      new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
          labels: ["90-100", "80-89", "70-79", "Below 70"],
          datasets: [{
            label: "No. of Students",
            data: [12, 20, 10, 3],
            backgroundColor: [lightBlue, yellow, darkBlue, paleYellow],
            borderRadius: 6,
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: { display: false },
            title: { display: true, text: 'Grade Distribution', color: darkBlue }
          },
          scales: {
            x: { ticks: { color: darkBlue } },
            y: { ticks: { color: darkBlue } }
          }
        }
      });


      // Line Chart
      new Chart(document.getElementById('lineChart'), {
        type: 'line',
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
          datasets: [{
            label: "Average Grade",
            data: [85, 87, 84, 89, 90, 92],
            borderColor: lightBlue,
            backgroundColor: "rgba(110,193,228,0.3)",
            fill: true,
            tension: 0.4,
            pointBackgroundColor: yellow,
            pointRadius: 5,
          }]
        },
        options: {
          plugins: {
            legend: { labels: { color: darkBlue } },
            title: { display: true, text: 'Average Grade Trend', color: darkBlue }
          },
          scales: {
            x: { ticks: { color: darkBlue } },
            y: { ticks: { color: darkBlue } }
          }
        }
      });

    </script>

  </main>

  <footer id="footer" class="footer text-center">
    <div class="copyright">
      &copy; Copyright <strong><span>OTERO NiceAdmin</span></strong>. All Rights Reserved
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

  <style>
    body {
      background-color: #f5f9fc;
    }

    .card {
      border: none !important;
      border-radius: 16px;
      background: #ffffff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .card-title {
      color: #2E8BC0;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .pagetitle h1 {
      color: #2E8BC0;
      font-weight: 700;
    }

    .breadcrumb-item.active {
      color: #FFD95A;
    }
  </style>

</body>
</html>
