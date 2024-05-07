<?php

include './header.php';
include 'navigation.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offering System</title>
    <style>
        /* Body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
            text-align: center;
            padding: 20px;
        }

        .heading {
            color: #4CAF50;
            margin-bottom: 30px;
        }

        .feature {
            background-color: #ffffff;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: inline-block;
            width: 30%;
            cursor: pointer;
        }

        .feature h2 {
            margin-top: 0;
            color: #333333;
        }

        .feature p {
            color: #666666;
            margin-bottom: 10px;
        }

        .customization {
            display: none;
            margin-top: 10px;
            color: #333333;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1 class="heading">Welcome to the Offering System</h1>
        
        <div class="feature" onclick="toggleCustomization('feature1')">
            <h2>Save Money</h2>
            <p>Start saving and managing your finances efficiently.</p>
            <div class="customization" id="feature1">
                The Offering System helps you save money securely and conveniently. Take control of your finances and achieve your financial goals.
            </div>
        </div>

        <div class="feature" onclick="toggleCustomization('feature2')">
            <h2>Get Loans</h2>
            <p>Access quick and hassle-free loans based on your savings.</p>
            <div class="customization" id="feature2">
                With the Offering System, you can easily apply for loans based on your savings. Enjoy competitive interest rates and flexible repayment options.
            </div>
        </div>

        <div class="feature" onclick="toggleCustomization('feature3')">
            <h2>Penalty Management</h2>
            <p>Stay on track with penalty management and timely payments.</p>
            <div class="customization" id="feature3">
                Our system helps you manage penalties efficiently, ensuring timely payments and avoiding unnecessary fees. Stay organized and in control of your financial responsibilities.
            </div>
        </div>
    </div>

    <script>
        function toggleCustomization(id) {
            var customization = document.getElementById(id);
            if (customization.style.display === "none") {
                customization.style.display = "block";
            } else {
                customization.style.display = "none";
            }
        }
    </script>
</body>
<?php include 'footer.php'; ?>
</html>
