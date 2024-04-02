<?php
require_once('D:\xampp\htdocs\TP-codes\config.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $pn = $_POST['pn'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $unit = $_POST['unit'];

    // Update query
    $query = "UPDATE registration SET FN='$fn', LN='$ln', email='$email', PN='$pn', Address='$address', username='$username', UnitNo='$unit' WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        // Redirect to accounts.php after successful update
        header("Location: accounts.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Fetch the record to be updated
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM registration WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
} else {
    echo "ID not provided.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your meta tags, title, and CSS links -->
</head>
<body>
    <!-- Your HTML form -->
    <form action="update_account.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label for="fn">First Name</label>
            <input type="text" class="form-control" id="fn" name="fn" value="<?php echo $row['FN']; ?>">
        </div>
        <div class="form-group">
            <label for="ln">Last Name</label>
            <input type="text" class="form-control" id="ln" name="ln" value="<?php echo $row['LN']; ?>">
        </div>
        <!-- Repeat similar form fields for other columns -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>
