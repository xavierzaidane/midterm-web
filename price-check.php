<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Check</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <div class="navbar">
            <div class="brand">
                <h1>la-Laundry</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="price-check.php">Price Check</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="price-check-section">
        <h2>Input to Check The Price</h2>
        <form id="priceCheckForm">
            <!-- Weight Input -->
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" required min="1">

            <!-- Service Type -->
            <label for="service">Service:</label>
            <select id="service" name="service">
                <option value="wash-dry">Wash Dry</option>
                <option value="wash-ironing">Wash and Ironing</option>
                <option value="ironing-only">Ironing Only</option>
            </select>

            <!-- Laundry Type -->
            <label for="laundryType">Type:</label>
            <select id="laundryType" name="laundryType">
                <option value="regular">Regular</option>
                <option value="express">Express</option>
            </select>

            <!-- Membership -->
            <label for="membership">Discount:</label>
            <select id="membership" name="membership">
                <option value="non-member">Non Member</option>
                <option value="member">Member</option>
            </select>

            <button type="button" onclick="calculatePrice();">CHECK</button>
        </form>

        <!-- Result Section -->
        <div id="result">
            <p>Total price is: <span id="totalPrice">0</span></p>
            <p>Total discount is: <span id="totalDiscount">0</span></p>
            <p class="total-payment">Total payment is: <span id="finalPayment">0</span></p>
        </div>
    </section>

    <script>
    function calculatePrice() {
        // Get input values
        const weight = parseFloat(document.getElementById("weight").value);
        const service = document.getElementById("service").value;
        const laundryType = document.getElementById("laundryType").value;
        const membership = document.getElementById("membership").value;

        // Base prices
        let pricePerKg;
        let discount = 0;

        // Set price per kg based on service type
        switch (service) {
            case "wash-dry":
                pricePerKg = 5; // Example price
                break;
            case "wash-ironing":
                pricePerKg = 7; // Example price
                break;
            case "ironing-only":
                pricePerKg = 4; // Example price
                break;
            default:
                pricePerKg = 0; // Fallback
        }

        // Adjust prices based on laundry type
        if (laundryType === "express") {
            pricePerKg *= 1.5; // Example: express service costs 50% more
        }

        // Calculate total price
        let totalPrice = weight * pricePerKg;

        // Set discount based on membership
        if (membership === "member") {
            discount = totalPrice * 0.1; // Example: 10% discount for members
        }

        // Calculate final payment
        let finalPayment = totalPrice - discount;

        // Display results
        document.getElementById("totalPrice").innerText = totalPrice.toFixed(2);
        document.getElementById("totalDiscount").innerText = discount.toFixed(2);
        document.getElementById("finalPayment").innerText = finalPayment.toFixed(2);
    }
    </script>

</body>
</html>
