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
                                    <h3>Create Vendor
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
                                    <li class="breadcrumb-item">Vendors</li>
                                    <li class="breadcrumb-item active">Create Vendor</li>
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
                            <div class="card tab2-card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active show" id="account-tab"
                                                data-bs-toggle="tab" href="#account" role="tab" aria-controls="account"
                                                aria-selected="true" data-original-title="" title="">Account</a></li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="account" role="tabpanel"
                                            aria-labelledby="account-tab">
                                            <form class="needs-validation user-add" novalidate="">
                                                <h4> Details</h4>
                                                <div class="form-group row">
                                                    <label for="validationCustom0"
                                                        class="col-xl-3 col-md-4"><span>*</span> Name</label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="company_name" type="text"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="validationCustom1"
                                                        class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="email" type="text"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="phone"
                                                        class="col-xl-3 col-md-4"><span>*</span> Phone </label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="phone" type="text"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="validationCustom2"
                                                        class="col-xl-3 col-md-4"><span>*</span> Location</label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="location" type="text"
                                                            required="">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="validationCustom2"
                                                        class="col-xl-3 col-md-4"><span>*</span> Delers in</label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="product" type="text"
                                                            required="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-primary save_vendor">Save</button>
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
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--form validation js-->
    <script src="assets/js/dashboard/form-validation-custom.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>
    <?php include 'scripts/users/vendors_script.php'; ?>

</body>

</html>