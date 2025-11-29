<!DOCTYPE html>
<html>
<head>
    <title>Migs' Shoe Store</title>
    <style>
        body {
            background: black;
            color: white;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 70%;
            margin: auto;
            background: black;
            border-collapse: collapse;
            color: white;
        }
        th, td {
            border: 2px solid red;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #660000; /* dark red for header */
        }
        p, h2 {
            color: white;
        }
    </style>
</head>

<body>

<!-- Header -->
<div style="background:#660000; padding:15px; text-align:center; color:white; margin-bottom:20px; border-radius:8px;">
    <h2>Migs' Shoe Store</h2>
    <p>Step in for the best shoes at great prices!</p>
</div>

<?php
// Store info
$storeName = "Migs' Shoe Store";
$owner = "Migs Ayson";
$discount = 0.10;

echo "<p><b>Store:</b> $storeName</p>";
echo "<p><b>Owner:</b> $owner</p>";
echo "<p>Today's discount: <b>" . ($discount * 100) . "%</b></p>";

// Discount message
if ($discount > 0.20) {
    $note = "Huge discount today!";
} elseif ($discount > 0.10) {
    $note = "Good deals available!";
} else {
    $note = "Small discount only.";
}
echo "<p>$note</p>";

// Store rating
$rate = 4;
switch ($rate) {
    case 5:
        $msg = "Amazing shop!";
        break;
    case 4:
        $msg = "Great shoe store!";
        break;
    case 3:
        $msg = "It’s okay.";
        break;
    default:
        $msg = "Not rated yet.";
}
echo "<p><b>Rating:</b> $msg</p>";

// Day note
$day = "Friday";
$dayNote = match($day) {
    "Friday" => "Friday Sneaker Deals!",
    "Sunday" => "Chill Sunday Shopping",
    default => "Regular day"
};
echo "<p><b>Day Note:</b> $dayNote</p>";

// Shoe list
$shoes = [
    "White Sneakers" => 1500,
    "Running Shoes" => 1800,
    "Canvas Shoes" => 900,
    "Slip-ons" => 750
];

echo "<table>";
echo "<tr><th>Shoe</th><th>Price</th><th>After Discount</th></tr>";

foreach ($shoes as $name => $price) {
    $salePrice = $price - ($price * $discount);
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>₱$price</td>";
    echo "<td>₱$salePrice</td>";
    echo "</tr>";
}

echo "</table>";

// Thank you message
$count = 0;
do {
    echo "<p style='text-align:center; font-size:12px;'>Thanks for checking our shoes!</p>";
    $count++;
} while ($count < 1);
?>

<!-- Footer -->
<div style="text-align:center; margin-top:20px; padding:12px; font-size:13px; color:white; background:#660000; border-radius:5px;">
    © <?php echo date("Y"); ?> Migs' Shoe Store. All rights reserved.
</div>

</body>
</html>
