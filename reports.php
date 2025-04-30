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
                                    <h3>Reports
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
                                    <li class="breadcrumb-item active">Reports</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid-2-start-->
<!-- Container-fluid-2-start -->



<div class="container-fluid">
    <div class="row">
        <!-- Overview Cards Section -->
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon">
                            <i
                        data-feather="bar-chart"></i>
                        </div>
                        <div class="text-white">
                    <h3 class="mb-0 text-white">Purchases</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        

        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon">
                            <i
                        data-feather="bar-chart"></i>
                        </div>
                        <div class="text-white">
                           
                    <h3 class="mb-0 text-white">Materials</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card bg-secondary">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon">
                            <i
                        data-feather="bar-chart"></i>
                        </div>
                        <div class="text-white">
                           
                    <h3 class="mb-0 text-white">Orders</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card bg-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon">
                            <i
                        data-feather="bar-chart"></i>
                        </div>
                        <div class="text-white">
                          
                    <h3 class="mb-0 text-white">Sales</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon">
                            <i
                        data-feather="bar-chart"></i>
                        </div>
                        <div class="text-white">
                           
                    <h3 class="mb-0 text-white">Deliveries</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        
     
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card bg-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon">
                            <i
                        data-feather="bar-chart"></i>
                        </div>
                        <div class="text-white">
                            
                    <h3 class="mb-0 text-white">Users</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card bg-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon">
                            <i
                        data-feather="bar-chart"></i>
                        </div>
                        <div class="text-white">
                           
                    <h3 class="mb-0 text-white">Production</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-xl-3 col-lg-6 col-md-6">
    <div class="card bg-dark text-white">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <div class="icon text-white">
                    <i data-feather="bar-chart"></i>
                </div>
                <div>
                    <h3 class="mb-0 text-white">Tickets</h3>
                </div>
            </div>
        </div>
    </div>
</div>

        
    </div>

    <!-- Reports Section -->
    <div class="row">
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5>Purchase Trends</h5>
                </div>
                <div class="card-body">
                    <canvas id="purchaseChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5>Material Usage</h5>
                </div>
                <div class="card-body">
                    <canvas id="materialChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- User/Clients Section -->
    <div class="row">
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5>Recent Users Activity</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Last Login</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Just Now</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Jane Smith</td>
                                    <td>30 min ago</td>
                                    <td><span class="badge badge-primary">Online</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5>Client Overview</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Total Orders</th>
                                    <th>Spendings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ABC Corporation</td>
                                    <td>150</td>
                                    <td>$45,678</td>
                                </tr>
                                <tr>
                                    <td>XYZ Inc.</td>
                                    <td>120</td>
                                    <td>$34,567</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid-2-Ends -->
               
                <!-- Container-fluid-2- Ends-->
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
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Chartist js-->
    <script src="assets/js/chart/chartist/chartist.js"></script>

    <!-- Chartjs -->
    <script src="assets/js/chart/chartjs/chart.min.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Google chart js-->
    <script src="assets/js/chart/google/google-chart-loader.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

    <!--Report chart-->
    <script src="assets/js/admin-reports.js"></script>

<script>
// Initialize Charts
document.addEventListener('DOMContentLoaded', function () {
    // Purchase Trends Chart
    const ctxPurchase = document.getElementById('purchaseChart').getContext('2d');
    new Chart(ctxPurchase, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Purchases',
                data: [12000, 15000, 18000, 14000, 16000],
                borderColor: '#FF6384',
                backgroundColor: 'rgba(255,99,109,0.2)',
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Material Usage Chart
    const ctxMaterial = document.getElementById('materialChart').getContext('2d');
    new Chart(ctxMaterial, {
        type: 'bar',
        data: {
            labels: ['Raw Materials', 'Finished Goods', 'Packaging', 'Other'],
            datasets: [{
                label: 'Quantity',
                data: [65, 59, 80, 81],
                backgroundColor: [
                    '#FF6384',
                    '#36A2EB',
                    '#FFCE56',
                    '#4BC0C0'
                ]
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});


</script>

</body>

</html>