<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        #header {
            background-color: #3c3628;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        .content {
            text-align: center;
            margin-top: 20px;
        }

        #balance {
            font-size: 18px;
            margin-bottom: 20px;
        }

        #earnings-form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        #earnings-form label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            text-align: left;
        }

        #earnings-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #earnings-form button {
            background-color: #3c3628;
            color: #fff;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        #earnings-form button:hover {
            background-color: #745833;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Financial Tracker</h1>
    </div>

    <div class="content">
        <?php
        // Start or resume the session
        session_start();

        // Initialize current balance variable
        $currentBalance = isset($_SESSION['currentBalance']) ? $_SESSION['currentBalance'] : 1000;

        // Check if form is submitted
        if(isset($_POST['submit'])) {
            // Get user input
            $earnings = $_POST['earnings'];

            // Update current balance
            $currentBalance += $earnings;

            // Save current balance in the session
            $_SESSION['currentBalance'] = $currentBalance;

            // Display updated balance
            echo "<p id='balance'>Current Balance: $currentBalance</p>";
        }
        ?>

        <div id="earnings-form">
            <form action="" method="post">
                <label for="earnings">Enter Your Earnings:</label>
                <input type="number" id="earnings" name="earnings" required>

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

        <p><a href="javascript:history.go(-1)">Go Back</a></p>
    </div>
    <!-- Add this script to the Financial Tracker front end -->
<script>
    const balanceElement = document.getElementById('balance');

    // Update savings balance after expenses are added
    fetch('http://localhost:3000/getSavings')
    .then(response => response.json())
    .then(data => {
        balanceElement.textContent = Current Balance: $${data.savings};
    })
    .catch(error => {
        console.error('Error:', error);
    });
</script>
</body>
</html>
