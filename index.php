<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $amount = $targetCurrency = $result = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST["amount"])) {
            echo "Please enter an amount.";
        } else {
            $amount = $_POST["amount"];
            $targetCurrency = $_POST["targetCurrency"];

            $conversionRates = [
                'USD' => 1.10,
                'GBP' => 0.87,
                'Yen' => 155.7,
                'Kyrgyzstanian Som' => 97.87
            ];

            $result = $amount * $conversionRates[$targetCurrency];
          
        }
    }
    ?>
    <form method="POST">
        <label for="amount"> Euro amount: </label>
        <input type="text" name="amount">
        <label for="targetCurrency"> To:</label> 
        <select name="targetCurrency" id="currencySelect">
            <option value="USD">USD</option>
            <option value="GBP">GBP</option>
            <option value="Yen">Yen</option>
            <option value="Kyrgyzstanian Som">Kyrgyzstanian Som</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php 
    echo "Amount: €" . $amount . "<br>";
    echo "To: " . $targetCurrency . "<br>";
    echo "Result: " . $result;
    ?>
</body>
</html>
