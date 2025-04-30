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
                                    <h3>Create User
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
                                    <li class="breadcrumb-item">Users </li>
                                    <li class="breadcrumb-item active">Create User </li>
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
                                        <li class="nav-item"><a class="nav-link" id="permission-tabs"
                                                data-bs-toggle="tab" href="#permission" role="tab"
                                                aria-controls="permission" aria-selected="false" data-original-title=""
                                                title="">Permission</a></li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="account" role="tabpanel"
                                            aria-labelledby="account-tab">
                                            <form class="needs-validation user-add" novalidate="">
                                                <h4>Account Details</h4>
                                                <div class="form-group row">
                                                    <label for="validationCustom0"
                                                        class="col-xl-3 col-md-4"><span>*</span> First Name</label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="validationCustom0" type="text"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="validationCustom1"
                                                        class="col-xl-3 col-md-4"><span>*</span> Last Name</label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="validationCustom1" type="text"
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
                                                        class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="validationCustom2" type="text"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="validationCustom1"
                                                        class="col-xl-3 col-md-4"><span>*</span> Role </label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <select class="form-control" id="role" 
                                                            required="">
                                                            <option value="1">Super Admin</option>
                                                            <option value="2"> Admin</option>
                                                            <option value="3"> User</option>
                                                            <option value="4"> Seller</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="validationCustom3"
                                                        class="col-xl-3 col-md-4"><span>*</span> Password</label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="validationCustom3"
                                                            type="password" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="validationCustom4"
                                                        class="col-xl-3 col-md-4"><span>*</span> Confirm
                                                        Password</label>
                                                    <div class="col-xl-8 col-md-7">
                                                        <input class="form-control" id="validationCustom4"
                                                            type="password" required="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="permission" role="tabpanel"
                                            aria-labelledby="permission-tabs">
                                            <form class="needs-validation user-add" novalidate="">
                                                <div class="permission-block">
                                                    <div class="attribute-blocks">
                                                        <h5 class="f-w-600 mb-3">Product Related permition </h5>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Add Product</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div
                                                                    class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani1">
                                                                        <input class="radio_animated" id="edo-ani1"
                                                                            type="radio" name="rdo-ani">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani2">
                                                                        <input class="radio_animated" id="edo-ani2"
                                                                            type="radio" name="rdo-ani" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Update Product</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div
                                                                    class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani3">
                                                                        <input class="radio_animated" id="edo-ani3"
                                                                            type="radio" name="rdo-ani1">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani4">
                                                                        <input class="radio_animated" id="edo-ani4"
                                                                            type="radio" name="rdo-ani1" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Delete Product</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div
                                                                    class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani5">
                                                                        <input class="radio_animated" id="edo-ani5"
                                                                            type="radio" name="rdo-ani2">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani6">
                                                                        <input class="radio_animated" id="edo-ani6"
                                                                            type="radio" name="rdo-ani2" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label class="mb-0 sm-label-radio">Apply
                                                                    discount</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div
                                                                    class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated pb-0">
                                                                    <label class="d-block mb-0" for="edo-ani7">
                                                                        <input class="radio_animated" id="edo-ani7"
                                                                            type="radio" name="rdo-ani3">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block mb-0" for="edo-ani8">
                                                                        <input class="radio_animated" id="edo-ani8"
                                                                            type="radio" name="rdo-ani3" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="attribute-blocks">
                                                        <h5 class="f-w-600 mb-3">Category Related permition </h5>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Add Category</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div
                                                                    class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani9">
                                                                        <input class="radio_animated" id="edo-ani9"
                                                                            type="radio" name="rdo-ani4">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani10">
                                                                        <input class="radio_animated" id="edo-ani10"
                                                                            type="radio" name="rdo-ani4" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Update Category</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div
                                                                    class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani11">
                                                                        <input class="radio_animated" id="edo-ani11"
                                                                            type="radio" name="rdo-ani5">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani12">
                                                                        <input class="radio_animated" id="edo-ani12"
                                                                            type="radio" name="rdo-ani5" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Delete Category</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div
                                                                    class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani13">
                                                                        <input class="radio_animated" id="edo-ani13"
                                                                            type="radio" name="rdo-ani6">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani14">
                                                                        <input class="radio_animated" id="edo-ani14"
                                                                            type="radio" name="rdo-ani6" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label class="mb-0 sm-label-radio">Apply
                                                                    discount</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div
                                                                    class="form-group m-checkbox-inline custom-radio-ml d-flex radio-animated pb-0">
                                                                    <label class="d-block mb-0" for="edo-ani15">
                                                                        <input class="radio_animated" id="edo-ani15"
                                                                            type="radio" name="rdo-ani7">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block mb-0" for="edo-ani16">
                                                                        <input class="radio_animated" id="edo-ani16"
                                                                            type="radio" name="rdo-ani7" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-primary save_user">Save</button>
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
    <?php include 'scripts/users/users.php'; ?>
    // In your HTML file, add this script before closing the body tag
<!-- In your HTML file, add this script before closing the body tag -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const saveButton = document.querySelector('.save_user');
    const form = document.querySelector('.user-add');
    
    saveButton.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Collect permissions
        const permissions = [];
        const permissionRadios = document.querySelectorAll('.radio_animated:checked');
        permissionRadios.forEach(radio => {
            if (radio.id.includes('edo-ani')) {
                const permissionName = radio.name.replace('rdo-ani', '');
                const permissionValue = radio.checked ? 'Allow' : 'Deny';
                permissions.push({ name: permissionName, value: permissionValue });
            }
        });
        
        // Create FormData object
        const formData = new FormData(form);
        formData.append('permissions', JSON.stringify(permissions));
        
        // Send AJAX request
        fetch('process_user.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('User created successfully');
                window.location.href = 'users.php';
            } else {
                alert(data.message);
            }
        })
       
    });
});
</script>

</body>

</html>