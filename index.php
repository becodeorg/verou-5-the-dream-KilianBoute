<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    
    $amount = $currency = $result = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST["amount"])) {
            echo "Please enter an amount.";
        } else {
            $amount = $_POST["amount"];
            $currency = $_POST["targetCurrency"];

            $conversionRates = [
                'USD' => 1.10,
                'GBP' => 0.87,
                'Yen' => 155.7,
                'Kyrgyzstanian Som' => 97.87
            ];

            $result = $amount / $conversionRates[$currency];
          
        }
    }
    ?>
    <h1>CURRENCY CONVERTER</h1>
    <form method="POST">
        <label for="amount"> Amount: </label>
        <input type="text" name="amount">
        <select name="targetCurrency" id="currencySelect">
            <option value="USD">USD</option>
            <option value="GBP">GBP</option>
            <option value="Yen">Yen</option>
            <option value="Kyrgyzstanian Som">Kyrgyzstanian Som</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php 
    echo "Amount: " . $amount . " " . $currency . "<br>";
    echo "Result: €" . $result;
    ?>
</body>
</html>
