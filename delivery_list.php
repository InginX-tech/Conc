<!DOCTYPE html>
<html lang="en">
<?php include 'common/header_links.php'; ?>

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
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Delivery List</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            
<!-- PDF Download Button -->
    <div class="d-flex justify-content-end mb-3">
        <a href="generate_report.php" class="btn btn-success">
            <i class="fa fa-file-pdf"></i> Download PDF
        </a>
    </div>                            
                            <!-- Filter Section -->
<div class="row mb-3 align-items-end">
    <div class="col-md-2">
        <label for="filter_from_date">From:</label>
        <input type="date" id="filter_from_date" class="form-control">
    </div>

    <div class="col-md-2">
        <label for="filter_to_date">To:</label>
        <input type="date" id="filter_to_date" class="form-control">
    </div>

    <div class="col-md-2">
        <label for="filter_client">Client:</label>
        <select id="filter_client" class="form-control">
            <option value="">All Clients</option>
        </select>
    </div>

    <div class="col-md-2">
        <label for="filter_class">Class:</label>
        <select id="filter_class" class="form-control">
            <option value="">All Classes</option>
        </select>
    </div>

    <div class="col-md-4 d-flex gap-2">
        <button class="btn btn-primary w-100" id="filterBtn">Apply Filters</button>
        <button class="btn btn-secondary w-100" id="resetBtn">Reset</button>
    </div>
</div>


                            <!-- Delivery Table -->
                            <table class="table table-striped" id="deliveryTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date Added</th>
                                        <th>Truck</th>
                                        <th>Rel. No</th>
                                        <th>TMO</th>
                                        <th>Sr. No</th>
                                        <th>Class</th>
                                        <th>CBMs</th>
                                        <th>Client</th>
                                        <th>Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data will be populated here via AJAX -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7"><strong>Total:</strong></td>
                                        <td id="totalCBMs"><strong>0</strong></td>
                                        <td colspan="2"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'common/footer.php'; ?>
        </div>
    </div>

    <!-- Latest jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Datatable js-->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatables/custom-basic.js"></script>

    <!-- Admin script -->
    <script src="assets/js/admin-script.js"></script>

    <script>
        $(document).ready(function () {
            // Function to populate filter dropdowns
            function populateFilters() {
                $.ajax({
                    url: "controllers/deliveries/get_filter_options.php",
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        const clientSelect = $("#filter_client");
                        response.clients.forEach(client => {
                            clientSelect.append(new Option(client, client));
                        });

                        const classSelect = $("#filter_class");
                        response.classes.forEach(classValue => {
                            classSelect.append(new Option(classValue, classValue));
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("Error populating filters:", error);
                    }
                });
            }

            // Function to fetch deliveries with filters and calculate totals
            function fetchDeliveries(filters = {}) {
                $.ajax({
                    url: "controllers/deliveries/get_delivery.php",
                    type: "GET",
                    data: filters,
                    dataType: "json",
                    beforeSend: function() {
                        $("#deliveryTable tbody").html('<tr><td colspan="10">Loading...</td></tr>');
                    },
                    success: function(response) {
                        let tbody = "";
                        let totalCBMs = 0; // Initialize total

                        response.forEach(delivery => {
                            let capacity = parseFloat(delivery.capacity) || 0; // Convert capacity to number
                            totalCBMs += capacity; // Add to total

                            tbody += `
                                <tr>
                                    <td>${delivery.id}</td>
                                    <td>${delivery.created_at || 'N/A'}</td>
                                    <td>${delivery.truck}</td>
                                    <td>${delivery.release_no}</td>
                                    <td>${delivery.driver_name}</td>
                                    <td>${delivery.delivery_serial_no}</td>
                                    <td>${delivery.class || 'N/A'}</td>
                                    <td>${capacity}</td>
                                    <td>${delivery.client_name || 'N/A'}</td>
                                    <td>${delivery.site_location}</td>
                                </tr>
                            `;
                        });

                        $("#deliveryTable tbody").html(tbody);
                        $("#totalCBMs").html(`<strong>${totalCBMs.toFixed(2)}</strong>`); // Update total CBMs
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching deliveries:", error);
                        $("#deliveryTable tbody").html('<tr><td colspan="10">Error loading data</td></tr>');
                    }
                });
            }

            // Initialize filters and load initial data
            populateFilters();
            fetchDeliveries();

            // Handle filter application
$("#filterBtn").click(function() {
    const filters = {
        from_date: $("#filter_from_date").val(),
        to_date: $("#filter_to_date").val(),
        client: $("#filter_client").val(),
        class: $("#filter_class").val()
    };
    fetchDeliveries(filters);
});

// Ensure default values for "From" and "To" dates (today's date)
$(document).ready(function() {
    const today = new Date().toISOString().split('T')[0];
    $("#filter_from_date").val(today);
    $("#filter_to_date").val(today);
    fetchDeliveries({ from_date: today, to_date: today });
});

        

            // Handle filter reset
            $("#resetBtn").click(function() {
                $("#filter_date").val('');
                $("#filter_client").val('');
                $("#filter_class").val('');
                fetchDeliveries();
            });
        });
        // Add this to your existing JavaScript code
function generateReport() {
    const filters = {
        date: $("#filter_date").val(),
        client: $("#filter_client").val(),
        class: $("#filter_class").val()
    };

    // Create URL with filters
    const url = 'generate_report.php?' + $.param(filters);
    
    // Open report in new tab
    window.open(url, '_blank');
}

// Add click handler for PDF button
$(".btn-success").click(function(e) {
    e.preventDefault();
    generateReport();
});
    </script>
</body>
</html>
