<?php
// edit.php
require_once '../controllers/TicketController.php';
$controller = new TicketController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $controller->updateTicket(
        $_POST['id'],
        $_POST['support_ticket'],
        $_POST['department'],
        $_POST['subject'],
        $_POST['description'],
        $_POST['priority'],
        $_POST['urgency'],
        $_POST['working_status']
    );

    if ($result) {
        header("Location: tickets.php?success=Ticket updated successfully");
        exit();
    } else {
        header("Location: tickets.php?error=Failed to update ticket");
        exit();
    }
}

// Get ticket details
$id = isset($_GET['id']) ? $_GET['id'] : '';
$ticket = $controller->getTicket($id);

if (!$ticket) {
    header("Location: tickets.php?error=Ticket not found");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ticket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($ticket['id']); ?>">
            
            <!-- Form fields similar to tickets.php -->
            
            <button type="submit" class="btn-primary">Update Ticket</button>
            <a href="tickets.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>