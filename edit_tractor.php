<?php
// Include the function file
include_once('function.php');

// Object creation
$userdata = new DB_con();

// Handle form submission
if (isset($_POST['submit'])) {
    // Posted values
    $sn = $_POST['sn'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $function = $_POST['function'];
    $cost = $_POST['cost'];
    $desc = $_POST['desc'];

    // Function calling
    $sql = $userdata->updateRegistration($sn, $name, $type, $location, $function, $cost, $desc);

    if ($sql) {
        // Success message
        echo "<script>alert('Saved successfully'); window.location.href='add-tractor.php';</script>";
    } else {
        // Error message
        echo "<script>alert('Something went wrong. Please try again'); window.location.href='add-tractor.php';</script>";
    }
}
?>

<?php
include('naviba.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin-dashboard.html">Home</a></li>
                <li class="breadcrumb-item active">Update</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section id="update" class="appointment section-bg">
        <div class="container" data-aos="fade-up">
            <!-- <div class="section-title text-center">
                <h2>Update Vehicle</h2>
            </div> -->
            <!-- <br> -->

            <?php
            include_once('DBConnection.php');

            // Object creation
            $conn = new DBConnection();

            if (!empty($_GET['sn'])) {
                $id = $_GET['sn'];
                $edit = $conn->getOne("SELECT * FROM tractor WHERE id='$id'");

                if ($edit) {
            ?>
                    <div class="card col-sm-8">
                        <div class="card-body ">
                            <h5 class="card-title">Update Vehicle Information</h5>
                            <form action="" method="POST">
                                <input type="hidden" name="sn" value="<?= htmlspecialchars($edit['id']) ?>">
                                
                                <div class="form-group">
                                    <label for="sn">S/N</label>
                                    <input type="text" class="form-control" name="sn" value="<?= htmlspecialchars($edit['sn']) ?>" placeholder="S/N" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="name">Tractor Name</label>
                                    <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($edit['tname']) ?>" placeholder="Tractor Name" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="type">Tractor Type</label>
                                    <input type="text" class="form-control" name="type" value="<?= htmlspecialchars($edit['t_type']) ?>" placeholder="Tractor Type" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" name="location" value="<?= htmlspecialchars($edit['location']) ?>" placeholder="Location" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="function">Functionality</label>
                                    <input type="text" class="form-control" name="function" value="<?= htmlspecialchars($edit['functionality']) ?>" placeholder="Functionality" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cost">Cost</label>
                                    <input type="text" class="form-control" name="cost" value="<?= htmlspecialchars($edit['cost']) ?>" placeholder="Cost" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <textarea class="form-control" name="desc" rows="4" placeholder="Description"><?= htmlspecialchars($edit['description']) ?></textarea>
                                </div>
                                
                                <br>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
            <?php
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Record not found.</div>";
                }
            }
            ?>
            <br>
        </div>
    </section><!-- End Update Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Seth</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">KUBWUMUKIZA Seth</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>