<?php
session_start();
ob_start(); // Prevent header injection attacks

// Enhanced security checks
if (!isset($_SESSION['user_id']) || !is_numeric($_SESSION['types']) || $_SESSION['types'] !== '4') {
    header('Location: login.php');
    exit();
}

// Add session timeout protection
if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > 1800) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}
$_SESSION['last_activity'] = time();

include 'common/header_links.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Seller Dashboard</title>
</head>
<body>
    <?php 
    include 'common/header.php';
    include 'common/sidebar.php'; 
    ?>
    
    <div class="page-body">
        <h1>Seller Dashboard</h1>
        <ul>
            <li><a href="view_orders.php">View Orders</a></li>
            <li><a href="create_order.php">Create Orders</a></li>
            <li><a href="view_deliveries.php">View Deliveries</li></li>
        </ul>
    </div>

<?php include 'common/footer.php'; ?>
</body>
</html>