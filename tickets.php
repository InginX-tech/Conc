<!DOCTYPE html>
<html lang="en">

<?php include 'common/header_links.php' ?>

<body>

    <div class="page-wrapper">

        <?php include 'common/main_header.php' ?>
        <div class="page-body-wrapper">

            <?php include 'common/sidebar.php' ?>
            <?php include 'common/right_sidebar.php' ?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>TICKETS
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
                                    <li class="breadcrumb-item">Tickets</li>
                                    <li class="breadcrumb-item active">Add Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header"><h5>Create Ticket</h5></div>
                                <div class="card-body">
                                    <form id="ticketForm" class="needs-validation">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Support Ticket</label>
                                                    <select class="form-control" name="support_ticket" required>
                                                        <option value="">--Select--</option>
                                                        <option value="Repairs">Repairs</option>
                                                        <option value="Maintenance">Maintenance</option>
                                                        <option value="Technical">Technical</option>
                                                        <option value="General">General</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <select class="form-control" name="department" required>
                                                        <option value="">--Select--</option>
                                                        <option value="Logistics">Logistics</option>
                                                        <option value="IT">IT</option>
                                                        <option value="HR">HR</option>
                                                        <option value="Finance">Finance</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <input type="text" class="form-control" name="subject" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" name="description" rows="4" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Priority</label>
                                                    <select class="form-control" name="priority" required>
                                                        <option value="">--Select--</option>
                                                        <option value="High">High</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Low">Low</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Urgency</label>
                                                    <select class="form-control" name="urgency" required>
                                                        <option value="">--Select--</option>
                                                        <option value="Very Urgent">Very Urgent</option>
                                                        <option value="Urgent">Urgent</option>
                                                        <option value="Not Urgent">Not Urgent</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Working Status</label>
                                                    <select class="form-control" name="working_status" required>
                                                        <option value="">--Select--</option>
                                                        <option value="Working">Working</option>
                                                        <option value="Not Working">Not Working</option>
                                                    </select>
                                                </div>
                                                <br >
                                                <br >
                                                <button type="button" class="btn btn-primary" id="createTicketBtn">Create Ticket</button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright text-start">
                        <p class="mb-0">Copyright 2024 Flamingo All rights reserved.</p>
                    </div>
                    <div class="col-md-6 pull-right text-end">
                        <p class="mb-0">Hand crafted & made with <i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        </div>
    </div>
    


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>
    <script src="assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="assets/js/editor/ckeditor/ckeditor.custom.js"></script>
    <script src="assets/js/admin-customizer.js"></script>
    <script src="assets/js/lazysizes.min.js"></script>
    <script src="assets/js/chat-menu.js"></script>
    <script src="assets/js/admin-script.js"></script>


    <script>
        $(document).ready(function() {

            $('#createTicketBtn').click(function() {
                var formData = new FormData($('#ticketForm')[0]);
                $.ajax({
                    url: 'controllers/tickets/create_ticket.php',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function(response) {
                        alert(response.message);
                        if (response.status === "success") {
                            $('#ticketForm')[0].reset();
                        }
                    },
                    error: function(xhr) {
                        alert("An error occurred.");
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>