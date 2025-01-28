<?php
// Include database connection
include('../dbconnect/dbconnect.php');

// Get payment ID from URL
$payment_id = isset($_GET['payment_id']) ? $_GET['payment_id'] : null;

if ($payment_id) {
    // Fetch payment details including payment type
    $sql = "SELECT p.*, ur.User_request_id, ud.User_name 
            FROM payments p 
            JOIN user_request_details ur ON p.User_request_id = ur.User_request_id 
            JOIN user_details ud ON ur.User_id = ud.User_id 
            WHERE p.User_request_id = '$payment_id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $payment = mysqli_fetch_assoc($result);
    } else {
        echo "<p>No payment details found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid payment ID.</p>";
    exit;
}

// Define company name
$company_name = "Fuel Direct";
$company_address = "#36 Raichur, Karnataka, India";
$company_phone = "+91 9900572501";

// Set default payment type
$payment_type = !empty($payment['Payment_type']) ? $payment['Payment_type'] : 'UPI';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .invoice {
            max-width: 800px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .company-info {
            text-align: center;
            margin-bottom: 20px;
        }
        .company-info h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .company-info p {
            margin: 5px 0;
            color: #666;
        }
        .invoice h1 {
            text-align: center;
            color: #007bff;
            margin-top: 0;
        }
        .invoice p {
            margin: 10px 0;
            font-size: 14px;
            color: #444;
        }
        .invoice table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .invoice table, .invoice th, .invoice td {
            border: 1px solid #ccc;
        }
        .invoice th, .invoice td {
            padding: 12px;
            text-align: left;
            font-size: 14px;
        }
        .invoice th {
            background-color: #007bff;
            color: white;
        }
        .print-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .print-button:hover {
            background-color: #218838;
        }

        /* Hide print button when printing */
        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="invoice">
        <div class="company-info">
            <h2><?php echo htmlspecialchars($company_name); ?></h2>
            <p><?php echo htmlspecialchars($company_address); ?></p>
            <p>Phone: <?php echo htmlspecialchars($company_phone); ?></p>
        </div>

        <h1>Invoice</h1>
        <p><strong>Request ID:</strong> <?php echo htmlspecialchars($payment['User_request_id']); ?></p>
        <p><strong>User Name:</strong> <?php echo htmlspecialchars($payment['User_name']); ?></p>
        <p><strong>Transaction No:</strong> <?php echo htmlspecialchars($payment['Payment_transaction_no']); ?></p>
        <p><strong>Payment Date:</strong> <?php echo htmlspecialchars(date("F j, Y", strtotime($payment['Payment_date']))); ?></p>
        <p><strong>Status:</strong> Payment Successful</p>
        <p><strong>Payment Type:</strong> <?php echo htmlspecialchars($payment_type); ?></p>
        
        <h2>Payment Details</h2>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Payment Amount</td>
                    <td><?php echo htmlspecialchars($payment['Payment_amount']); ?></td>
                </tr>
                <tr>
                    <td>Transaction Fee (if applicable)</td>
                    <td><?php echo htmlspecialchars($payment['Transaction_fee'] ?? '0.00'); ?></td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td><?php echo htmlspecialchars($payment['Payment_amount']); ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <button class="print-button" onclick="window.print()">Print Invoice</button>
</body>
</html>
