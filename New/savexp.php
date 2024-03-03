<?php
// Your PHP logic for redirection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];
        if ($action === "savings") {
            header("Location: savings.php");
            exit();
        } elseif ($action === "expenses") {
            header("Location: expense.html");
            exit();
        }
    }
}
?>

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
            min-height: 100vh;
        }

        #header {
            background-color: #3c3628;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .button-container {
            text-align: center;
        }

        .button-container button {
            background-color: #3c3628;
            color: #fff;
            padding: 25px 50px;
            font-size: 20px;
            margin: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .button-container button:hover {
            background-color: #3c3628;
        }

        #footer {
            background-color: #3c3628;
            color: #fff;
            padding: 10px;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Here is your earnings and expenditure</h1>
    </div>

    <div class="content">
        <div class="button-container">
            <form method="post">
                <button type="submit" name="action" value="savings">Savings</button>
                <button type="submit" name="action" value="expenses">Expenses</button>
            </form>
        </div>
    </div>

    <div id="footer">
        &copy; 2024 Your Company Name
    </div>
</body>
</html>