<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petcare";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and get form data
    $furbaby_name = mysqli_real_escape_string($conn, $_POST['furbaby_name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $dop = mysqli_real_escape_string($conn, $_POST['dop']);
    $breed = mysqli_real_escape_string($conn, $_POST['breed']);
    $parent_name = mysqli_real_escape_string($conn, $_POST['parent_name']);
    $parent_email = mysqli_real_escape_string($conn, $_POST['parent_email']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $memories = mysqli_real_escape_string($conn, $_POST['memories']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $season = mysqli_real_escape_string($conn, $_POST['season']);
    $stone = mysqli_real_escape_string($conn, $_POST['stone']);
    $toys = isset($_POST['toys']) ? implode(', ', $_POST['toys']) : '';
    $shrubs = isset($_POST['shrubs']) ? implode(', ', $_POST['shrubs']) : '';
    $total = mysqli_real_escape_string($conn, $_POST['total_amount']);

    // Insert into the database (before payment for demonstration purposes)
    $sql = "INSERT INTO furbaby_details (furbaby_name, dob, dop, breed, parent_name, parent_email,description,memories, location, season, stone, toys, shrubs, total_amount)
            VALUES ('$furbaby_name', '$dob', '$dop', '$breed', '$parent_name', '$parent_email','$description','$memories', '$location', '$season', '$stone', '$toys', '$shrubs', '$total')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id; // Get the inserted record ID
        // Proceed to PayPal payment
        $paypal_url = "https://sandbox.paypal.com"; // PayPal sandbox URL for testing, use the live URL for production
        $business_email = "sb-76pou417206@personal.example.com"; // Replace with your PayPal business email
        $return_url = "success.php"; // URL to handle successful payment
        $cancel_url = "cancel.php"; // URL to handle canceled payment
        $notify_url = "ipn.php"; // PayPal IPN listener for payment notifications

        echo "
        <form action='$paypal_url' method='post' name='paypalForm'>
            <input type='hidden' name='business' value='$business_email'>
            <input type='hidden' name='cmd' value='_xclick'>
            <input type='hidden' name='item_name' value='Fur Baby Residency Package'>
            <input type='hidden' name='amount' value='$total'>
            <input type='hidden' name='currency_code' value='USD'>
            <input type='hidden' name='custom' value='$last_id'> <!-- Store the record ID to track payment -->
            <input type='hidden' name='return' value='$return_url'>
            <input type='hidden' name='cancel_return' value='$cancel_url'>
            <input type='hidden' name='notify_url' value='$notify_url'>
        </form>
        <script>
            document.paypalForm.submit();
        </script>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>