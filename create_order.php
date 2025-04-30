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
                                    <h3>
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
                                    <li class="breadcrumb-item active">Create Order</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row product-adding">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Create Order</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">

                                        <div class="form-group">
                                            <label for="client" class="col-form-label"><span></span> Client</label>
                                            <input class="form-control" id="client" type="text" required="">
                                        </div>
                                        
                                        <div class="form-group">
                                        <label for="client_phone" class="col-form-label"><span></span> Client Phone Number</label>
                                        <input class="form-control" id="client_phone" type="text" required="">
                                    </div>


                                        <div class="form-group">
                                            <label class="col-form-label categories-basic"> Product</label>
                                            <select class="custom-select form-control" id="product" required="">
                                                <!-- <option value="">--Select--</option> -->
                                                <option value="Ready Mix Concrete">Ready Mix Concrete</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label categories-basic"><span></span> Class</label>
                                            <select class="custom-select form-control" id="class" required="">
                                                <option value="">Select Class</option>
                                                <?php
                                                $sql1 = "SELECT id, class FROM ratios";
                                                $orderquery = mysqli_query($dbconn, $sql1);
                                                if (mysqli_num_rows($orderquery) > 0) {
                                                    while ($oderrrow = mysqli_fetch_array($orderquery)) {
                                                        $id = $oderrrow['id'];
                                                        $class = $oderrrow['class'];
                                                ?>
                                                        <option value="<?php echo $class ?>"> <?php echo $class ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="quantityInput" class="col-form-label"><span></span> Capacity (CBM)</label>
                                            <!-- <span id="unit">(Cubic Metres)</span> -->
                                            <input class="form-control" id="quantityInput" type="text" required="">
                                        </div>

                                        <div class="form-group">
                                            <label for="priceInput" class="col-form-label"><span></span> Product Price (per CBM)</label>
                                            <input class="form-control" id="priceInput" type="text" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="priceInput" class="col-form-label"><span></span>Site Location</label>
                                            <input class="form-control" id="location" type="text" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="transportation" class="col-form-label"><span></span>Delivery Fee</label>
                                            <input class="form-control" id="delivery_fee" type="text" required="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Description</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group">
                                            <label for="priceInput" class="col-form-label"><span></span>Delivery Date</label>
                                            <input class="form-control" id="delivery_date" type="date" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="priceInput" class="col-form-label"><span></span>Pump Services</label>
                                            <select class="custom-select form-control" id="pump" required="">
                                                <option value="">--Select--</option>
                                                <option value="Boom Pump">Boom Pump </option>
                                                <option value="Fixed Pump">Fixed Pump </option>
                                                <option value="No Pump">No Pump </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="transportation" class="col-form-label"><span></span>Pumping Fee (per CBM)</label>
                                            <input class="form-control" id="pumping_fee" type="text" required="">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label categories-basic"><span></span> Description (optional)</label>
                                            <div class="description-sm">
                                                <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- <label class="col-form-label"><span>*</span></label> -->
                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                <label class="d-block" for="hardener">
                                                    <input type="checkbox" id="hardener" name="hardener" value="Hardener">
                                                    Hardener
                                                </label>
                                                <label class="d-block" for="water_proof">
                                                    <input type="checkbox" id="water_proof" name="water_proof" value="water_proof"> Water Proof
                                                </label>
                                            </div>
                                            
                                                                                                                            <div class="form-group">
                                        <label class="col-form-label categories-basic"><span></span> Payment Method</label>
                                        <select class="custom-select form-control" id="payment_method" required="">
                                        <option value="">--Select--</option>
                                        <option value="Bank">Bank</option>
                                        <option value="M-pesa">Mpesa</option>
                                            <option value="Cash">Cash</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-form-label categories-basic"><span></span> Payment Status</label>
                                        <select class="custom-select form-control" id="payment_status" required="">
                                            <option value="">--Select--</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Not_Paid">Not Paid</option>
                                        </select>
                                    </div>




                                        </div>

                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" id="create_orderbtn">Create Order</button>
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
                            <p class="mb-0">Copyright 2024 © Flamingo All rights reserved.</p>
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
            // Initialize CKEditor
            if (typeof CKEDITOR !== 'undefined') {
                CKEDITOR.replace('editor1'); // Initialize CKEditor for the textarea
            } else {
                console.error('CKEditor library not found!');
            }

            // Validate and handle form submission
            $('#create_orderbtn').click(function() {
                let isValid = true;

                // Clear previous error messages
                $('.form-group').removeClass('has-error');
                $('.form-group .error-message').remove();

                // Synchronize CKEditor content with the textarea
                if (typeof CKEDITOR !== 'undefined' && CKEDITOR.instances.editor1) {
                    CKEDITOR.instances.editor1.updateElement();
                } else {
                    console.error('CKEditor instance not found for editor1');
                }

                // Validate each required field
                $('.needs-validation .form-control, .needs-validation .radio_animated').each(function() {
                    if ($(this).prop('required')) {
                        if ($(this).is(':radio')) {
                            let name = $(this).attr('name');
                            if (!$(`input[name="${name}"]:checked`).val()) {
                                isValid = false;
                                $(this).closest('.form-group').addClass('has-error').append('<span class="error-message text-danger">This field is required.</span>');
                            }
                        } else if (!$(this).val()) {
                            isValid = false;
                            $(this).closest('.form-group').addClass('has-error').append('<span class="error-message text-danger">This field is required.</span>');
                        }
                    }
                });

                // If validation passes, send AJAX request
                if (isValid) {
                    // Gather form data
                    let formData = {
                        client: $('#client').val(),
                        client_phone: $('#client_phone').val(),
                        product: $('#product').val(),
                        product_class: $('#class').val(),
                        capacity: $('#quantityInput').val(),
                        product_price: $('#priceInput').val(),
                        site_location: $('#location').val(),
                        delivery_fee: $('#delivery_fee').val(),
                        delivery_date: $('#delivery_date').val(),
                        pump: $('#pump').val(),
                        pumping_fee: $('#pumping_fee').val(),
                        description: $('#editor1').val(),
                        hardener: $('input#hardener').prop('checked'),
                        water_proof: $('input#water_proof').prop('checked'),
                        payment_method: $('#payment_method').val(),
                        payment_status: $('#payment_status').val(),
                        company_id: '1'
                    };

                    console.log('Form Data:', formData);

                    $.ajax({
                        url: "controllers/orders/create_orders.php",
                        type: "POST",
                        data: formData,
                        dataType: "json",
                        success: function(response) {
                            if (response.status === 'success') {
                                alert('Order created successfully!');
                                location.reload(); // Refresh the page or redirect
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

        document.getElementById('itemSelect').addEventListener('change', function() {
            const selectedItem = this.options[this.selectedIndex];
            const unit = selectedItem.getAttribute('data-unit');
            document.getElementById('unit').textContent = `(${unit})`;
        });
    </script>
</body>

</html>