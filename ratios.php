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
                                    <h3>Ratios
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
                                    <li class="breadcrumb-item active">Ratios</li>
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

                                    <a href="#" class="btn btn-primary mt-md-0 mt-2">Add Ratio</a>

                                </div>

                                <div class="card-body">
                                    <div class="table-responsive table-desi">
                                        <table class="table all-package table-category current-table" id="ediratiosTable">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Ballast</th>
                                                    <th>Cement</th>
                                                    <th>Washed</th>
                                                    <th>Dust</th>
                                                    <th>Additive</th>
                                                    <th>Hardener</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>C15</td>
                                                    <td><input type="text" class="form-control" id="C15-ballast" /></td>
                                                    <td><input type="text" class="form-control" id="C15-cement" /></td>
                                                    <td><input type="text" class="form-control" id="C15-washed" /></td>
                                                    <td><input type="text" class="form-control" id="C15-dust" /></td>
                                                    <td><input type="text" class="form-control" id="C15-additive" /></td>
                                                    <td><input type="text" class="form-control" id="C15-hardener" /></td>
                                                </tr>

                                                <tr>
                                                    <td>C20</td>
                                                    <td><input type="text" class="form-control" id="C20-ballast" /></td>
                                                    <td><input type="text" class="form-control" id="C20-cement" /></td>
                                                    <td><input type="text" class="form-control" id="C20-washed" /></td>
                                                    <td><input type="text" class="form-control" id="C20-dust" /></td>
                                                    <td><input type="text" class="form-control" id="C20-additive" /></td>
                                                    <td><input type="text" class="form-control" id="C20-hardener" /></td>

                                                </tr>
                                                <tr>
                                                    <td>C25</td>
                                                    <td><input type="text" class="form-control" id="C25-ballast" /></td>
                                                    <td><input type="text" class="form-control" id="C25-cement" /></td>
                                                    <td><input type="text" class="form-control" id="C25-washed" /></td>
                                                    <td><input type="text" class="form-control" id="C25-dust" /></td>
                                                    <td><input type="text" class="form-control" id="C25-additive" /></td>
                                                    <td><input type="text" class="form-control" id="C25-hardener" /></td>
                                                </tr>
                                                <tr>
                                                    <td>C30</td>
                                                    <td><input type="text" class="form-control" id="C30-ballast" /></td>
                                                    <td><input type="text" class="form-control" id="C30-cement" /></td>
                                                    <td><input type="text" class="form-control" id="C30-washed" /></td>
                                                    <td><input type="text" class="form-control" id="C30-dust" /></td>
                                                    <td><input type="text" class="form-control" id="C30-additive" /></td>
                                                    <td><input type="text" class="form-control" id="C30-hardener" /></td>
                                                </tr>
                                                <tr>
                                                    <td>C35</td>
                                                    <td><input type="text" class="form-control" id="C35-ballast" /></td>
                                                    <td><input type="text" class="form-control" id="C35-cement" /></td>
                                                    <td><input type="text" class="form-control" id="C35-washed" /></td>
                                                    <td><input type="text" class="form-control" id="C35-dust" /></td>
                                                    <td><input type="text" class="form-control" id="C35-additive" /></td>
                                                    <td><input type="text" class="form-control" id="C35-hardener" /></td>
                                                </tr>
                                                <tr>
                                                    <td>C40</td>
                                                    <td><input type="text" class="form-control" id="C40-ballast" /></td>
                                                    <td><input type="text" class="form-control" id="C40-cement" /></td>
                                                    <td><input type="text" class="form-control" id="C40-washed" /></td>
                                                    <td><input type="text" class="form-control" id="C40-dust" /></td>
                                                    <td><input type="text" class="form-control" id="C40-additive" /></td>
                                                    <td><input type="text" class="form-control" id="C40-hardener" /></td>
                                                </tr>
                                                <tr>
                                                    <td>C45</td>
                                                    <td><input type="text" class="form-control" id="C45-ballast" /></td>
                                                    <td><input type="text" class="form-control" id="C45-cement" /></td>
                                                    <td><input type="text" class="form-control" id="C45-washed" /></td>
                                                    <td><input type="text" class="form-control" id="C45-dust" /></td>
                                                    <td><input type="text" class="form-control" id="C45-additive" /></td>
                                                    <td><input type="text" class="form-control" id="C45-hardener" /></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <div class="form-group mt-4 ml-4 flex">
                                            <!-- <button class="btn btn-primary mt-md-0 mt-2 saving_ratios">Save Ratios</button> -->
                                            <button class="btn btn-secondary mt-md-0 mt-2 updating_ratios">Update Ratios</button>
                                        </div>
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
            // Save ratios functionality
            $('.saving_ratios').on('click', function(e) {
                e.preventDefault();

                let ratios = [];
                $('#ediratiosTable tbody tr').each(function() {
                    let row = {};
                    row['category'] = $(this).find('td:first').text().trim();

                    $(this).find('td input').each(function(index) {
                        let columnHeader = $('#ediratiosTable thead th').eq(index + 1).text().trim();
                        row[columnHeader] = $(this).val();
                    });

                    ratios.push(row);
                });

                $.ajax({
                    url: "controllers/products/add_ratios.php",
                    type: "POST",
                    data: {
                        ratios: ratios
                    },
                    success: function(response) {
                        alert("Ratios saved successfully!");
                        console.log(response);
                        fetchAndPopulateRatios(); // Refresh the table after saving
                    },
                    error: function(xhr, status, error) {
                        console.error("Error saving ratios:", error);
                        alert("Failed to save ratios. Please try again.");
                    }
                });
            });

            // Fetch data from backend
            $.ajax({
                url: "controllers/products/get_ratios.php",
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Loop through the response and populate the table
                    response.forEach(row => {
                        const fields = ['ballast', 'cement', 'washed', 'dust', 'additive', 'hardener'];
                        fields.forEach(field => {
                            const fieldId = `${row.class}-${field}`;
                            $(`#${fieldId}`).val(row[field] || ''); // Fill or clear if undefined
                        });
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            });

            $('.updating_ratios').on('click', function() {
                // Prepare an array to hold updated data
                const updatedData = [];

                // Iterate through each row in the table
                $('#ediratiosTable tbody tr').each(function() {
                    const classType = $(this).find('td:first').text().trim(); // Get the class (C15, C20, etc.)

                    const rowData = {
                        class: classType,
                        ballast: $(`#${classType}-ballast`).val().trim(),
                        cement: $(`#${classType}-cement`).val().trim(),
                        washed: $(`#${classType}-washed`).val().trim(),
                        dust: $(`#${classType}-dust`).val().trim(),
                        additive: $(`#${classType}-additive`).val().trim(),
                        hardener: $(`#${classType}-hardener`).val().trim(),
                    };

                    updatedData.push(rowData); // Add row data to array
                });

                // Send the updated data to the backend via AJAX
                $.ajax({
                    url: "controllers/products/update_ratios.php",
                    method: 'POST',
                    contentType: 'application/json', // Send data as JSON
                    data: JSON.stringify({
                        updatedData
                    }), // Send the array
                    success: function(response) {
                        alert('Ratios updated successfully!');
                        location.reload(); // Reload table to reflect changes
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating ratios:', error);
                        alert('Failed to update ratios. Please try again.');
                    }
                });
            });
        });
    </script>

</body>

</html>