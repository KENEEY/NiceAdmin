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
            <a href="create_grade.php" >
              <i class="bi bi-circle"></i><span>Create Grades</span>
            </a>
          </li>
          <li>
            <a href="manage_students.php" class="active">
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
            <a href="view_students.php" class="active">
              <i class="bi bi-circle"></i><span>View Students Grades</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
  </aside>

<?php include('assets/connections.php'); ?>

    <main id="main" class="main">
    <div class="pagetitle">
        <h1>Manage Students</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Students</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
        <div class="col-lg-12">

            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Student List</h5>

                <?php
                // Handle delete request
                if (isset($_GET['delete'])) {
                $id = $_GET['delete'];
                $delete_query = mysqli_query($conn, "DELETE FROM students WHERE student_id='$id'");
                if ($delete_query) {
                    echo '<div class="alert alert-success">✅ Student deleted successfully!</div>';
                    echo '<meta http-equiv="refresh" content="1; url=manage_students.php">';
                } else {
                    echo '<div class="alert alert-danger">❌ Error deleting student: ' . mysqli_error($conn) . '</div>';
                }
                }

                // Handle edit request (form submission)
                if (isset($_POST['update_student'])) {
                $id = $_POST['student_id'];
                $fname = $_POST['first_name'];
                $mname = $_POST['middle_name'];
                $lname = $_POST['last_name'];
                $section = $_POST['section'];
                $age = $_POST['age'];

                $update = mysqli_query($conn, "UPDATE students 
                    SET first_name='$fname', middle_name='$mname', last_name='$lname', section='$section', age='$age' 
                    WHERE student_id='$id'");
                
                if ($update) {
                    echo '<div class="alert alert-success">✅ Student updated successfully!</div>';
                    echo '<meta http-equiv="refresh" content="1; url=manage_students.php">';
                } else {
                    echo '<div class="alert alert-danger">❌ Error updating student: ' . mysqli_error($conn) . '</div>';
                }
                }
                ?>

                <!-- Student Table -->
                <table class="table datatable">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Section</th>
                    <th>Age</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM students ORDER BY last_name ASC");
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    $fullname = $row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name'];
                    echo "
                        <tr>
                        <td>{$i}</td>
                        <td>{$fullname}</td>
                        <td>{$row['section']}</td>
                        <td>{$row['age']}</td>
                        <td>
                            <button class='btn btn-sm btn-warning' 
                            data-bs-toggle='modal' 
                            data-bs-target='#editStudentModal'
                            data-id='{$row['student_id']}'
                            data-fname='{$row['first_name']}'
                            data-mname='{$row['middle_name']}'
                            data-lname='{$row['last_name']}'
                            data-section='{$row['section']}'
                            data-age='{$row['age']}'>Edit</button>

                            <a href='manage_students.php?delete={$row['student_id']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Are you sure you want to delete this student?');\">Delete</a>
                        </td>
                        </tr>
                    ";
                    $i++;
                    }
                    ?>
                </tbody>
                </table>
                <!-- End Student Table -->

            </div>
            </div>

        </div>
        </div>
    </section>
    </main>

<!-- 🧾 Edit Student Modal -->
<div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="editStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="editStudentModalLabel" >Edit Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <input type="hidden" name="student_id" id="edit_student_id">

          <div class="mb-3">
            <label>First Name</label>
            <input type="text" name="first_name" id="edit_first_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Middle Name</label>
            <input type="text" name="middle_name" id="edit_middle_name" class="form-control">
          </div>
          <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="last_name" id="edit_last_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Section</label>
            <input type="text" name="section" id="edit_section" class="form-control">
          </div>
          <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" id="edit_age" class="form-control">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" name="update_student" class="btn btn-primary">Update Student</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- 🧠 Modal Script to Load Student Data -->
<script>
  var editModal = document.getElementById('editStudentModal');
  editModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    document.getElementById('edit_student_id').value = button.getAttribute('data-id');
    document.getElementById('edit_first_name').value = button.getAttribute('data-fname');
    document.getElementById('edit_middle_name').value = button.getAttribute('data-mname');
    document.getElementById('edit_last_name').value = button.getAttribute('data-lname');
    document.getElementById('edit_section').value = button.getAttribute('data-section');
    document.getElementById('edit_age').value = button.getAttribute('data-age');
  });
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