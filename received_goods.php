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
                                    <h3>Receive Materials
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
                                    <li class="breadcrumb-item">Receive</li>
                                    <li class="breadcrumb-item active">Materials</li>
                                </ol>
                                
                            </div>
                            <div id="successAlert" class="alert alert-success" style="display: none;" role="alert">
                                      Materials received successfully!
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
                                    <h5>Received Materials</h5>
                                    <button type="button" class="btn btn-primary mt-md-0 mt-2" data-bs-toggle="modal"
                                        data-original-title="test" data-bs-target="#exampleModal">Receive Materials</button>
                                </div>

                                <div class="card-body order-datatable">
                                    <div class="table-responsive table-desi">
                                        <table class="display" id="purchase_tbl">
                                            <thead>
                                                <tr>
                                                    <th>Entry ID</th>
                                                    <th>Date</th>
                                                    <th>Truck</th>
                                                    <th>Item</th>
                                                    <th>Source</th>
                                                    <th>Quantity</th>
                                                    <th>Total Ksh</th>
                                                    <th>Action</th>
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

            <!-- modal -->
            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Receive Material</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addProductForm" class="needs-validation">
                                <div class="digital-add needs-validation">
                                    <div class="form-group">
                                        <label for="truckSelect" class="col-form-label pt-0">Truck</label>
                                        <input class="form-control" id="truckSelect" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="itemSelect" class="col-form-label pt-0">Item</label>
                                        <select class="custom-select form-control" id="itemSelect" required>
                                            <option value="">--Select--</option>
                                            <option value="Cement_Silo_1" data-unit="Bags">Cement_Silo_1</option>
                                            <option value="Cement_Silo_2" data-unit="Bags">Cement_Silo_2</option>
                                            <option value="Ballast_520" data-unit="Tonnes">Ballast_520</option>
                                            <option value="Ballast_2030" data-unit="Tonnes">Ballast_2030</option>
                                            <option value="Washed" data-unit="Tonnes">Washed</option>
                                            <option value="Dust" data-unit="Tonnes">Dust</option>
                                            <option value="Additive" data-unit="Litres">Additive</option>
                                            <option value="Hardener" data-unit="Tonnes">Hardener</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="netTonnes" class="col-form-label pt-0">Net Tonnes</label>
                                        <input class="form-control" id="netTonnes" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="supplierSelect" class="col-form-label">Source</label>
                                        <select class="custom-select form-control" id="supplierSelect" required>
                                            <option value="">--Select--</option>
                                            <option value="Mombasa Cement">Mombasa Cement</option>ARISTOCRATS
                                            <option value="Allen Bridge">Allen Bridge</option>
                                            <option value="Aristocrats">Aristocrats </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="productPrice" class="col-form-label">Product Price</label>
                                        <input class="form-control" id="productPrice" type="text" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button id="saveProductBtn" class="btn btn-primary" type="button">Save</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
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
            const dataTable = $('#purchase_tbl').DataTable({
                "ajax": {
                    "url": "controllers/products/received_goods.php",
                    "type": "GET",
                    "dataSrc": ""
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "date"
                    },
                    {
                        "data": "truck"
                    },
                    {
                        "data": "item"
                    },
                    {
                        "data": "source"
                    },
                    {
                        "data": "quantity"
                    },
                    {
                        "data": "total"
                    },
                
                    {
                "data": "Action",
                "render": function(data) {
                    return `<button class="btn btn-sm btn-primary edit-btn" data-id="${data}">
                                <i class="fa fa-edit"></i>
                            </button>`;
                }
                        }
                    
                ]
            });
            
            $('#saveProductBtn').on('click', function() {
    // AJAX Call
    $.ajax({
        url: 'controllers/products/add_received_goods.php',
        type: 'POST',
        data: $('#addProductForm').serialize(),
        success: function(response) {
            $('#exampleModal').modal('hide');
            $('#successAlert').fadeIn().delay(3000).fadeOut(); // Show success notification
            $('#purchase_tbl').DataTable().ajax.reload(); // Reload DataTable
        },
        error: function() {
            alert('Error receiving materials!');
        }
    });
});

            $('#saveProductBtn').on('click', function() {
                const truck = $('#truckSelect').val();
                const item = $('#itemSelect').val();
                const netTonnes = $('#netTonnes').val();
                const supplier = $('#supplierSelect').val();
                const productPrice = $('#productPrice').val();

                $.ajax({
                    url: 'controllers/products/add_received_goods.php', // Update with the actual path
                    type: 'POST',
                    data: {
                        truck: truck,
                        item: item,
                        netTonnes: netTonnes,
                        supplier: supplier,
                        productPrice: productPrice
                    },
                    success: function(response) {
                        $('#exampleModal').modal('hide'); // Close the modal
                        dataTable.ajax.reload(); // Reload the DataTable to show new data

                        // Clear input fields
                        $('#exampleModal input[type="text"]').val('');
                        $('#exampleModal input[type="number"]').val('');
                        $('#exampleModal textarea').val('');

                        // Clear select options
                        $('#exampleModal select').val(null).trigger('change');
                    },
                    error: function(xhr, status, error) {
                        alert('Error: ' + error);
                    }
                });
            });
        });
    </script>

</body>

</html>