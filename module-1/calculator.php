<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required>

        <input type="submit" value="Add" name="add">
        <input type="submit" value="Subtract" name="subtract">
        <input type="submit" value="Multiply" name="multiply">
        <input type="submit" value="Divide" name="divide">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        if (isset($_POST["add"])) {
            $result = $num1 + $num2;
            echo "Result: $result";
        } elseif (isset($_POST["subtract"])) {
            $result = $num1 - $num2;
            echo "Result: $result";
        } elseif (isset($_POST["multiply"])) {
            $result = $num1 * $num2;
            echo "Result: $result";
        } elseif (isset($_POST["divide"])) {
            if ($num2 == 0) {
                echo "Cannot divide by zero!";
            } else {
                $result = $num1 / $num2;
                echo "Result: $result";
            }
        }
    }
    ?>
</body>
</html>
