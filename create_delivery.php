<!DOCTYPE html>
<html lang="en">
<?php
include 'config/connection.php';
include 'common/header_links.php' ?>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <?php include 'common/main_header.php' ?>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <?php include 'common/sidebar.php' ?>
            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->
            <?php include 'common/right_sidebar.php' ?>
            <!-- Right sidebar Ends-->

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3><small>Flamingo Admin Panel</small></h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Create Delivery</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delivery Form Start -->
                <div class="container-fluid">
                    <div class="row product-adding">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Create Delivery</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group">
                                            <label for="truck">Truck Number</label>
                                            <input class="form-control" id="truck" name="truck" type="text" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="release_no">Release No.</label>
                                            <input class="form-control" id="release_no" name="release_no" type="text" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="driver_name">Driver Name</label>
                                            <input class="form-control" id="driver_name" name="driver_name" type="text" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="delivery_serial_no">Delivery S/N</label>
                                            <input class="form-control" id="delivery_serial_no" name="delivery_serial_no" type="text" required>
                                        </div>

                                        

                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side Form -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        
                                        <div class="form-group">
                                            <label for="class">Class</label>
                                            <select class="custom-select form-control" id="class" name="class" required>
                                                <option value="">Select Class</option>
                                                <?php
                                                $sql1 = "SELECT id, class FROM ratios";
                                                $orderquery = mysqli_query($dbconn, $sql1);
                                                if (!$orderquery) {
                                                    die("Database query failed: " . mysqli_error($dbconn));
                                                }
                                                while ($oderrrow = mysqli_fetch_assoc($orderquery)) {
                                                    echo "<option value='{$oderrrow['class']}'>{$oderrrow['class']}</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="capacity">Capacity (CBM)</label>
                                            <input class="form-control" id="capacity" name="capacity" type="text" required>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label for="added_date">Delivery Date</label>
                                            <input class="form-control" id="delivery_date" name="delivery_date" type="date" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="client_name">Client</label>
                                            <input class="form-control" id="client_name" name="client_name" type="text" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="site_location">Site Location</label>
                                            <input class="form-control" id="site_location" name="site_location" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" id="create_orderbtn">Add Delivery</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Delivery Form End -->
            </div>

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright text-start">
                            <p class="mb-0">Copyright 2024 © Flamingo All rights reserved.</p>
                        </div>
                        <div class="col-md-6 text-end">
                            <p class="mb-0">Handcrafted & made with <i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
    </div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
   <!--ckeditor js-->
   <script src="assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="assets/js/editor/ckeditor/ckeditor.custom.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!--dropzone js-->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

    <script>
        $(document).ready(function() {
            $('#create_orderbtn').click(function() {
                let isValid = true;
                $('.form-group').removeClass('has-error');
                $('.error-message').remove();

                $('.needs-validation .form-control').each(function() {
                    if ($(this).prop('required') && !$(this).val()) {
                        isValid = false;
                        $(this).closest('.form-group').addClass('has-error')
                            .append('<span class="error-message text-danger">This field is required.</span>');
                    }
                });

                if (isValid) {
                    let formData = {
                        truck: $('#truck').val(),
                        release_no: $('#release_no').val(),
                        driver_name: $('#driver_name').val(),
                        delivery_serial_no: $('#delivery_serial_no').val(),
                        class: $('#class').val(),
                        capacity: $('#capacity').val(),
                        client_name: $('#client_name').val(),
                        site_location: $('#site_location').val(),
                        delivery_date: $('#delivery_date').val()
                    };

                    $.ajax({
                        url: "controllers/deliveries/create_delivery.php",
                        type: "POST",
                        data: formData,
                        dataType: "json",
                        success: function(response) {
                            if (response.status === 'success') {
                                alert('Delivery created successfully!');
                                location.reload();
                            } else {
                                alert('Error: ' + response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            alert('An error occurred. Please try again.');
                        }
                    });
                } else {
                    alert('Please fill out all required fields.');
                }
            });
        });
    </script>
</body>
</html>








