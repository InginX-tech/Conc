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
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Stock
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
                                    <li class="breadcrumb-item">Available</li>
                                    <li class="breadcrumb-item active">Stock</li>
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

                                    <button type="button" class="btn btn-primary mt-md-0 mt-2" data-bs-toggle="modal"
                                        data-original-title="test" data-bs-target="#exampleModal">Add Stock</button>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive table-desi">
                                        <?php
                                        // Query to fetch products data
                                        $sql = "SELECT `id`, `name`, `qty`, `unit`, `company_id`, `updated_at` FROM `products` WHERE 1";
                                        $result = mysqli_query($dbconn, $sql);
                                        ?>

                                        <table class="table all-package table-category" id="editableTable">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Qty</th>
                                                    <th>Unit</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        // Determine status based on quantity
                                                        $status = 'Low';
                                                        $statusClass = 'order-warning';
                                                        if ($row['qty'] > 500) {
                                                            $status = 'High';
                                                            $statusClass = 'order-success';
                                                        } elseif ($row['qty'] > 200) {
                                                            $status = 'Average';
                                                            $statusClass = 'order-pending';
                                                        }

                                                        // Map product names to images (default image if no match)
                                                        $images = [
                                                            'cement' => 'assets/images/products/cement_silos.png',
                                                            'ballast520' => 'assets/images/products/ballast.jpg',
                                                            'ballast2030' => 'assets/images/products/ballast.jpg',
                                                            'washed' => 'assets/images/products/washed.jpg',
                                                            'dust' => 'assets/images/products/dust.jpeg',
                                                            'additive' => 'assets/images/products/cement_silos.png',
                                                            'hardener' => 'assets/images/products/cement_silos.png',
                                                        ];
                                                        $image = $images[$row['name']] ?? 'assets/images/products/cement_silos.png';
                                                ?>
                                                        <tr>
                                                            <td>
                                                                <img src="<?php echo $image; ?>" alt="">
                                                            </td>
                                                            <td data-field="name"><?php echo htmlspecialchars($row['name']); ?></td>
                                                            <td data-field="qty"><?php echo htmlspecialchars($row['qty']); ?></td>
                                                            <td data-field="unit"><?php echo htmlspecialchars($row['unit']); ?></td>
                                                            <td class="<?php echo $statusClass; ?>" data-field="status">
                                                                <span><?php echo $status; ?></span>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="edit-btn" data-id="<?php echo $row['id']; ?>">
                                                                    <i class="fa fa-edit" title="Edit"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="delete-btn" data-id="<?php echo $row['id']; ?>">
                                                                    <i class="fa fa-trash" title="Delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                    }
                                                } else {
                                                    echo '<tr><td colspan="6">No products found.</td></tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        <?php
                                        // Close the database connection
                                        mysqli_close($dbconn);
                                        ?>

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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add
                        Digital Product</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation">
                        <div class="form">
                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">Category Name :</label>
                                <input class="form-control" id="validationCustom01" type="text">
                            </div>
                            <div class="form-group mb-0">
                                <label for="validationCustom02" class="mb-1">Category Image :</label>
                                <input class="form-control" id="validationCustom02" type="file">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button">Save</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Edit, delete and add new -->
    <script src="assets/js/edit-delete-new-product.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

</body>

</html>