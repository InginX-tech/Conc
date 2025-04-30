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
                                    <h3>Orders
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
                                    <!-- <li class="breadcrumb-item">Sales</li> -->
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h5>Manage Order</h5>
                                </div> -->
                                <div class="card-body order-datatable">
                                    <div class="table-responsive table-desi">
                                        <table class="display" id="orders_tbl">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Order No</th>
                                                    <th>Delivery Date</th>
                                                    <th>Client</th>
                                                    <th>Class</th>
                                                    <th>Volume</th>
                                                    <th>Price</th>
                                                    <th>Transport</th>
                                                    <th>Pump</th>
                                                    <th>Pumping Fee</th>
                                                    <th>Gross Amount</th>
                                            
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
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
            $('#orders_tbl').DataTable({
                "ajax": {
                    "url": "controllers/orders/get_orders.php", // Update with the actual path to get_purchase.php
                    "type": "GET",
                    "dataSrc": ""
                },
                "columns": [{
                        "data": "date_added"
                    },
                    {
                        "data": "order_no"
                    },
                    {
                        "data": "delivery_date"
                    }, 
                    {
                        "data": "client"
                    },
                      {
                        "data": "class"
                    },  
                    {
                        "data": "capacity"
                    },  
                    {
                        "data": "product_price"
                    },  
                    {
                        "data": "delivery_fee"
                    },
                    {
                        "data": "pump"
                    },  
                    {
                        "data": "pumping_fee"
                    },
            
                    /*
{
    "data": "payment_status",
    "render": function(data, type, row) {
        return `<span class="badge badge-${data === 'Paid' ? 'success' : 'warning'}">${data}</span>`;
    }
},
{
    "data": "payment_method",
    "render": function(data, type, row) {
        return `<span class="badge badge-${data === 'Bank' ? 'success' : 'success'}">${data}</span>`;
    }
},
{
    "data": "purchase_status",
    "render": function(data, type, row) {
        return `<span class="badge badge-${data === 'Approved' ? 'success' : 'warning'}">${data}</span>`;
    }
}
*/

                    
                    {
                    "data": "gross_amount"
                    }
                ]
                
                
            });
        });
    </script>

</body>

</html>