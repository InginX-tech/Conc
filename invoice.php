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
                                    <h3>Invoice
                                        <small>Flamingo Admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Invoice</li>
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
                                <div class="card-header">
                                    <form class="form-inline search-form search-box">
                                        <div class="form-group">
                                            <input class="form-control-plaintext" type="search" placeholder="Search..">
                                        </div>
                                    </form>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive table-desi">
                                        <table class="table all-package table-category current-table "
                                            id="editableTable">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Invoice</th>
                                                    <th>Date</th>
                                                    <th>Shipping</th>
                                                    <th>Amount</th>
                                                    <th>Tax</th>
                                                    <th>Total</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td data-field="number">01</td>

                                                    <td data-field="number">50765</td>

                                                    <td data-field="Date">15-03-2021</td>

                                                    <td data-field="number">8.4</td>

                                                    <td data-field="number">146</td>

                                                    <td data-field="number">70</td>

                                                    <td data-field="number">225.4</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">02</td>

                                                    <td data-field="number">50764</td>

                                                    <td data-field="Date">01-01-2021</td>

                                                    <td data-field="number">3.62</td>

                                                    <td data-field="number">816</td>

                                                    <td data-field="number">65.28</td>

                                                    <td data-field="number">884.16</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">03</td>

                                                    <td data-field="number">50766</td>

                                                    <td data-field="Date">28-04-2021</td>

                                                    <td data-field="number">7.3</td>

                                                    <td data-field="number">47</td>

                                                    <td data-field="number">724</td>

                                                    <td data-field="number">789</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">04</td>

                                                    <td data-field="number">50767</td>

                                                    <td data-field="Date">31-04-2021</td>

                                                    <td data-field="number">2.00</td>

                                                    <td data-field="number">478</td>

                                                    <td data-field="number">35</td>

                                                    <td data-field="number">512</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">05</td>

                                                    <td data-field="number">50768</td>

                                                    <td data-field="Date">02-05-2021</td>

                                                    <td data-field="number">1.5</td>

                                                    <td data-field="number">1460</td>

                                                    <td data-field="number">45.32</td>

                                                    <td data-field="number">1515</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">06</td>

                                                    <td data-field="number">50769</td>

                                                    <td data-field="Date">03-05-2021</td>

                                                    <td data-field="number">8.45</td>

                                                    <td data-field="number">768</td>

                                                    <td data-field="number">17</td>

                                                    <td data-field="number">780</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">07</td>

                                                    <td data-field="number">50770</td>

                                                    <td data-field="Date">04-05-2021</td>

                                                    <td data-field="number">25.8</td>

                                                    <td data-field="number">874</td>

                                                    <td data-field="number">27.2</td>

                                                    <td data-field="number">945.10</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">08</td>

                                                    <td data-field="number">50771</td>

                                                    <td data-field="Date">08-05-2021</td>

                                                    <td data-field="number">17.2</td>

                                                    <td data-field="number">671</td>

                                                    <td data-field="number">83.7</td>

                                                    <td data-field="number">775.9</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">09</td>

                                                    <td data-field="number">50772</td>

                                                    <td data-field="Date">12-05-2021</td>

                                                    <td data-field="number">87.5</td>

                                                    <td data-field="number">572</td>

                                                    <td data-field="number">8.70</td>

                                                    <td data-field="number">615</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">10</td>

                                                    <td data-field="number">50773</td>

                                                    <td data-field="Date">16-05-2021</td>

                                                    <td data-field="number">78.12</td>

                                                    <td data-field="number">489</td>

                                                    <td data-field="number">10.57</td>

                                                    <td data-field="number">884.16</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">11</td>

                                                    <td data-field="number">50774</td>

                                                    <td data-field="Date">20-05-2021</td>

                                                    <td data-field="number">57.56</td>

                                                    <td data-field="number">800</td>

                                                    <td data-field="number">78.2</td>

                                                    <td data-field="number">975</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">12</td>

                                                    <td data-field="number">50775</td>

                                                    <td data-field="Date">22-05-2021</td>

                                                    <td data-field="number">40.17</td>

                                                    <td data-field="number">867</td>

                                                    <td data-field="number">57.2</td>

                                                    <td data-field="number">945</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">13</td>

                                                    <td data-field="number">50776</td>

                                                    <td data-field="Date">25-05-2021</td>

                                                    <td data-field="number">80.04</td>

                                                    <td data-field="number">4782</td>

                                                    <td data-field="number">47.5</td>

                                                    <td data-field="number">5354</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">14</td>

                                                    <td data-field="number">50777</td>

                                                    <td data-field="Date">27-05-2021</td>

                                                    <td data-field="number">6.15</td>

                                                    <td data-field="number">576</td>

                                                    <td data-field="number">4.488</td>

                                                    <td data-field="number">884</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">15</td>

                                                    <td data-field="number">50778</td>

                                                    <td data-field="Date">29-05-2021</td>

                                                    <td data-field="number">8.67</td>

                                                    <td data-field="number">875</td>

                                                    <td data-field="number">56.78</td>

                                                    <td data-field="number">987.16</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">16</td>

                                                    <td data-field="number">50779</td>

                                                    <td data-field="Date">05-06-2021</td>

                                                    <td data-field="number">7.88</td>

                                                    <td data-field="number">547</td>

                                                    <td data-field="number">5.72</td>

                                                    <td data-field="number">600.16</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">17</td>

                                                    <td data-field="number">50780</td>

                                                    <td data-field="Date">08-06-2021</td>

                                                    <td data-field="number">3.62</td>

                                                    <td data-field="number">781</td>

                                                    <td data-field="number">23.47</td>

                                                    <td data-field="number">817</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">18</td>

                                                    <td data-field="number">50781</td>

                                                    <td data-field="Date">14-06-2021</td>

                                                    <td data-field="number">7.3</td>

                                                    <td data-field="number">47</td>

                                                    <td data-field="number">36.28</td>

                                                    <td data-field="number">153.16</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">19</td>

                                                    <td data-field="number">50782</td>

                                                    <td data-field="Date">18-06-2021</td>

                                                    <td data-field="number">2.00</td>

                                                    <td data-field="number">478</td>

                                                    <td data-field="number">35</td>

                                                    <td data-field="number">512</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-field="number">20</td>

                                                    <td data-field="number">50783</td>

                                                    <td data-field="Date">21-06-2021</td>

                                                    <td data-field="number">1.5</td>

                                                    <td data-field="number">1460</td>

                                                    <td data-field="number">45.32</td>

                                                    <td data-field="number">1515</td>

                                                    <td>
                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-edit" title="Edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)">
                                                            <i class="fa fa-trash" title="Delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
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
            $('#purchase_tbl').DataTable({
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
                            return `<span class="badge badge-${badgeClass}" data-id="${row.id}">${badgeText}</span>`;
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>