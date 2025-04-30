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
                                    <h3>LPO
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
                                    <li class="breadcrumb-item">Digital</li>
                                    <li class="breadcrumb-item active">Add Product</li>
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
                                    <h5>LPO</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">

                                        <div class="form-group">
                                            <label class="col-form-label categories-basic"><span>*</span> Item</label>
                                            <select class="custom-select form-control" id="itemSelect" required="">
                                                <option value="">--Select--</option>
                                                <option value="Cement_32.5" data-unit="Tonnes">Cement 32.5</option>
                                                <option value="Cement_42.5" data-unit="Tonnes">Cement 42.5</option>
                                                <option value="Ballast_520" data-unit="Tonnes">Ballast 520</option>
                                                <option value="Ballast_2030" data-unit="Tonnes">Ballast 2030</option>
                                                <option value="Dust" data-unit="Tonnes">Dust</option>
                                                <option value="Washed" data-unit="Tonnes">Washed</option>
                                                <option value="Additive" data-unit="Litres">Additive</option>
                                                <option value="Hardener" data-unit="Litres">Hardener</option>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="col-form-label categories-basic"><span></span> Class (Optional)</label>
                                            <input class="form-control" id="item_class" type="text" required="">

                                        </div> -->

                                        <div class="form-group">
                                            <label class="col-form-label categories-basic"><span>*</span> Supplier</label>
                                            <select class="custom-select form-control" id="supplierSelect" required="">
                                                <option value="">--Select--</option>
                                                <option value="MSA_C">Mombasa Cement</option>
                                                <option value="Allen_B">Allen Bridge</option>
                                                <option value="Aristo">Aristocrats</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="quantityInput" class="col-form-label"><span>*</span> Quantity</label>
                                            <span id="unit">(Tonnes/Litres)</span>
                                            <input class="form-control" id="quantityInput" type="text" required="">
                                        </div>

                                        <div class="form-group">
                                            <label for="priceInput" class="col-form-label"><span>*</span> Product Price</label>
                                            <input class="form-control" id="priceInput" type="text" required="">
                                        </div>



                                        <div class="form-group">
                                            <label class="col-form-label"><span>*</span>Paid Status</label>
                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                <label class="d-block" for="paidRadio">
                                                    <input class="radio_animated" id="paidRadio" type="radio" name="paidStatus" value="Paid"> Paid
                                                </label>
                                                <label class="d-block" for="notPaidRadio">
                                                    <input class="radio_animated" id="notPaidRadio" type="radio" name="paidStatus" value="Not_Paid"> Not Paid
                                                </label>
                                            </div>
                                        </div>
                                        
                                        
                            <div class="form-group">
                                            <label class="col-form-label"><span>*</span>Payment Method</label>
                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                <label class="d-block" for="bankRadio">
                                                    <input class="radio_animated" id="bankRadio" type="radio" name="paymentMethod" value="Bank"> Bank
                                                </label>
                                                <label class="d-block" for="mpesaRadio">
                                                    <input class="radio_animated" id="mpesaRadio" type="radio" name="paymentMethod" value="M-pesa"> M-pesa
                                                </label>
                                                <label class="d-block" for="cashRadio">
                                                    <input class="radio_animated" id="cashRadio" type="radio" name="paymentMethod" value="Cash"> Cash
                                                </label>
                                            </div>
                                </div>
                                
                                <div class="form-group">
                                            <label class="col-form-label"><span>*</span>Purchase Status</label>
                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                <label class="d-block" for="paidRadio">
                                                    <input class="radio_animated" id="paidRadio" type="radio" name="purchaseStatus" value="Approved"> Approved
                                                </label>
                                                <label class="d-block" for="notPaidRadio">
                                                    <input class="radio_animated" id="notPaidRadio" type="radio" name="purchaseStatus" value="Not_Approved"> Not Approved
                                                </label>
                                            </div>
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
                                        <div class="form-group mb-4">
                                            <div class="description-sm">
                                                <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <label class="col-form-label pt-0"> Product Upload (optional)</label>
                                        <form class="dropzone digits" id="singleFileUpload" action="/upload.php" style="padding: 30px 50px;">
                                            <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                                <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" id="addProductBtn">Add</button>
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

    <!--ckeditor js-->
    <script src="assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="assets/js/editor/ckeditor/ckeditor.custom.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

    <script>
        document.getElementById('itemSelect').addEventListener('change', function() {
            const selectedItem = this.options[this.selectedIndex];
            const unit = selectedItem.getAttribute('data-unit');
            document.getElementById('unit').textContent = `(${unit})`;
        });


        document.getElementById('addProductBtn').addEventListener('click', function() {
    const item = document.getElementById('itemSelect').value;
    const supplier = document.getElementById('supplierSelect').value;
    const quantity = document.getElementById('quantityInput').value;
    const price = document.getElementById('priceInput').value;
    const description = document.getElementById('editor1').value;
    const paidStatus = document.querySelector('input[name="paidStatus"]:checked');
    const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
    const purchaseStatus = document.querySelector('input[name="purchaseStatus"]:checked');

    // Validate required fields
    if (!paidStatus || !paymentMethod) {
        alert('Please select both Paid Status and Payment Method');
        return;
    }

    // Prepare data to send
    const formData = new FormData();
    formData.append('item', item);
    formData.append('supplier', supplier);
    formData.append('quantity', quantity);
    formData.append('price', price);
    formData.append('description', description);
    formData.append('paid_status', paidStatus.value);
    formData.append('payment_method', paymentMethod.value);
    formData.append('purchase_status', purchaseStatus.value);

    // Submit data using AJAX
    $.ajax({
        url: "controllers/products/create_purchase.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            alert('Material Purchase added successfully!');

            // Clear input fields after successful submission
            document.getElementById('itemSelect').value = '';
            document.getElementById('supplierSelect').value = '';
            document.getElementById('quantityInput').value = '';
            document.getElementById('priceInput').value = '';
            
            // Reset radio buttons
            document.querySelectorAll('input[name="paidStatus"]').forEach(radio => radio.checked = false);
            document.querySelectorAll('input[name="paymentMethod"]').forEach(radio => radio.checked = false);
            document.querySelectorAll('input[name="purchaseStatus"]').forEach(radio => radio.checked = false);
        },
        error: function(error) {
            console.log(error);
            alert('Error adding product.');
        }
    });
});
</script>
    </script>
</body>

</html>