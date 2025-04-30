<!DOCTYPE html>
<html lang="en">

<?php include 'common/header_links.php' ?>

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
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>User List
                                        <small>Flamingo Admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">Users</li>
                                    <li class="breadcrumb-item active">User List</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <form class="form-inline search-form search-box">
                                <div class="form-group">
                                    <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                                        class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                                </div>
                            </form>

                            <a href="create-user.php" class="btn btn-primary mt-md-0 mt-2">Create User</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="all-package coupon-table table table-striped" id="purchase_tbl">
                                    <thead>

                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>User Type</th>
                                            <th>Status</th>
                                            <!-- <th>Date Added</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright text-start">
                            <p class="mb-0">Copyright <?php
                                                        $currentYear = date('Y');
                                                        echo $currentYear;
                                                        ?> © Flamingo All rights reserved.</p>
                        </div>
                        <div class="col-md-6 pull-right text-end">
                            <p class=" mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>

    <!-- latest jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- <script src="assets/js/datatables/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Datatable js-->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- <script src="assets/js/datatables/jquery.dataTables.min.js"></script> -->
    <script src="assets/js/datatables/custom-basic.js"></script>

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
    const table = $('#purchase_tbl').DataTable({
        "ajax": {
            "url": "controllers/users/get_users.php",
            "type": "GET",
            "dataSrc": ""
        },
        "columns": [{
                "data": "username"
            },
            {
                "data": "email"
            },
            {
                "data": "phone"
            },
            {
                "data": "type"
            },
            {
                "data": "active",
                "render": function(data, type, row) {
                    const badgeClass = data === "1" ? "success" : "danger";
                    const badgeText = data === "1" ? "Active" : "Inactive";
                    return `<span class="badge badge-${badgeClass} toggle-status" data-id="${row.id}" data-status="${data}">${badgeText}</span>`;
                }
            }
        ]
    });

    // Add click event listener for the toggle-status badge
    $('#purchase_tbl').on('click', '.toggle-status', function() {
        const userId = $(this).data('id');
        const currentStatus = $(this).data('status');
        const newStatus = currentStatus === "1" ? "0" : "1";

        // Send AJAX request to update user status
        $.ajax({
            url: 'controllers/users/update_user_status.php',
            type: 'POST',
            data: {
                id: userId,
                status: newStatus
            },
            success: function(response) {
                if (response.success) {
                    // Refresh the DataTable to reflect the changes
                    table.ajax.reload();
                } else {
                    alert('Failed to update user status.');
                }
            },
            error: function() {
                alert('An error occurred while updating user status.');
            }
        });
    });
});
    </script>

</body>

</html>