<?php
if (isset($_GET['tx'])) {
    $transaction_id = $_GET['tx'];
    $custom_id = $_GET['cm'];

    // Database connection
    $conn = new mysqli("localhost", "root", "", "petcare");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE furbaby_details SET payment_status = 'Completed' WHERE id = '$custom_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Payment successful!";
    } else {
        echo "Error updating payment status: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Transaction failed!";
}
?>