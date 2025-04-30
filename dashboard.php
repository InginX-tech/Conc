<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/header_links.php' ?>
</head>

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
                                    <h3>Dashboard
                                        <small>Flamingo Admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="seller_dashboard.php">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div id="product-cards" class="row"></div>

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sales Status</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 xl-50">
                                            <div class="order-graph">
                                                <h6>Orders By Location</h6>
                                                <div class="chart-block chart-vertical-center">
                                                    <canvas id="myDoughnutGraph"></canvas>
                                                </div>
                                                <div class="order-graph-bottom">
                                                    <div class="media">
                                                        <div class="order-color-primary"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Saint Lucia <span class="pull-right">$157</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-color-secondary"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Kenya <span class="pull-right">$347</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-color-danger"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Liberia<span class="pull-right">$468</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-color-warning"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Christmas Island<span class="pull-right">$742</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-color-success"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Saint Helena <span class="pull-right">$647</span></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 xl-50">
                                            <div class="order-graph sm-order-space">
                                                <h6>Sales By Location</h6>
                                                <div class="peity-chart-dashboard text-center">
                                                    <span class="pie-colours-1">4,7,6,5</span>
                                                </div>
                                                <div class="order-graph-bottom sales-location">
                                                    <div class="media">
                                                        <div class="order-shape-primary"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">Germany <span class="pull-right">25%</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-shape-secondary"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">Brasil <span class="pull-right">10%</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-shape-danger"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">United Kingdom<span class="pull-right">34%</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-shape-warning"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">Australia<span class="pull-right">5%</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-shape-success"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">Canada <span class="pull-right">25%</span></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100">
                                            <div class="order-graph xl-space">
                                                <h6>Revenue for last month</h6>
                                                <div class="ct-4 flot-chart-container"></div>
                                            </div>
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
            <?php include 'common/footer.php' ?>
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

    <!--chartist js-->
    <script src="assets/js/chart/chartist/chartist.js"></script>

    <!--chartjs js-->
    <script src="assets/js/chart/chartjs/chart.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--copycode js-->
    <script src="assets/js/prism/prism.min.js"></script>
    <script src="assets/js/clipboard/clipboard.min.js"></script>
    <script src="assets/js/custom-card/custom-card.js"></script>

    <!--counter js-->
    <script src="assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/js/counter/jquery.counterup.min.js"></script>
    <script src="assets/js/counter/counter-custom.js"></script>

    <!--peity chart js-->
    <script src="assets/js/chart/peity-chart/peity.jquery.js"></script>

    <!-- Apex Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!--sparkline chart js-->
    <script src="assets/js/chart/sparkline/sparkline.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!--dashboard custom js-->
    <script src="assets/js/dashboard/default.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--height equal js-->
    <script src="assets/js/height-equal.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

    <script>
        // Fetch data from the API
        fetch('controllers/dashboard/products.php')
            .then(response => response.json())
            .then(data => {
                const productContainer = document.getElementById('product-cards');
                productContainer.innerHTML = ''; // Clear existing content if any

                data.forEach(product => {
                    const {
                        boxClass,
                        fontClass
                    } = getStyling(product.name, product.qty);
                    const card = `
                    <div class="col-xxl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="${boxClass} card-body">
                                <div class="media static-top-widget align-items-center">
                                    <div class="icons-widgets">
                                        <div class="align-self-center text-center">
                                            <i data-feather="${getIcon(product.name)}" class="${fontClass}"></i>
                                        </div>
                                    </div>
                                    <div class="media-body media-doller">
                                        <span class="m-0">${product.name}</span>
                                        <h3 class="mb-0">
                                            <span class="counter">${product.qty}</span>
                                            <small> ${product.unit}</small>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    productContainer.innerHTML += card;
                });

                // Reinitialize feather icons (if using Feather icons)
                feather.replace();
            })
            .catch(error => console.error('Error fetching product data:', error));

        // Helper function to get styling classes
        function getStyling(name, qty) {
            const styles = {
                CEMENT_SILO_1: {
                    boxClass: 'warning-box',
                    fontClass: 'font-warning'
                },
                CEMENT_SILO_2: {
                    boxClass: 'warning-box',
                    fontClass: 'font-warning'
                },
                BALLAST_520: {
                    boxClass: 'secondary-box',
                    fontClass: 'font-secondary'
                },
                WASHED: {
                    boxClass: 'primary-box',
                    fontClass: 'font-primary'
                },
                DUST: {
                    boxClass: 'danger-box',
                    fontClass: 'font-danger'
                },
                BALLAST_2030: {
                    boxClass: 'secondary-box',
                    fontClass: 'font-primary'
                },
                ADDITIVE: {
                    boxClass: 'danger-box',
                    fontClass: 'font-danger'
                },
                HARDENER: {
                    boxClass: 'danger-box',
                    fontClass: 'font-danger'
                }
            };

            // Default styling if no match is found
            return styles[name.toUpperCase()] || {
                boxClass: 'default-box',
                fontClass: 'font-default'
            };
        }

        // Helper function to get the icon class
        function getIcon(name) {
            const icons = {
                CEMENT_SILO_1: 'triangle',
                CEMENT_SILO_2: 'triangle',
                BALLAST_520: 'box',
                WASHED: 'aperture',
                DUST: 'wind',
                BALLAST_2030: 'truck',
                ADDITIVE: 'droplet',
                HARDENER: 'droplet'
            };
            return icons[name.toUpperCase()] || 'box';
        }
    </script>
</body>

</html>