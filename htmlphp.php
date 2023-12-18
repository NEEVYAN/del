<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- =====================================================================-->
    <h1>
        Fav color
    </h1>
    <form method="post">
        <h2>Enter your fav Color</h2>
        <input type="text" name="colorName" />
        <!-- <input type="text2" name="colorName2"/> -->
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <p>
        my favourite color is
        <?php
        if (isset($_POST['submit'])) {
            $color = $_POST['colorName'];
            switch ($color) {
                case 'red':
                    echo 'red';
                    break;
                case 'black':
                    echo 'black';
                    break;
                case 'blue':
                    echo 'blue';
                    break;
                case 'green':
                    echo 'green';
                    break;
                default:
                    echo 'no color in data';
                    break;
            }
        }
        ?>
    </p>
    <hr>
    <!-- =======================================================================-->
    <h1>
        Calculator
    </h1>
    <form method="post">

        <h2>Enter first number</h2>
        <input type="number" name="num1" />
        <h2>Enter second number</h2>
        <input type="number" name="num2" />
        <select name="operation">
            <option selected>what operation</option>
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <button type="submit" name="perform">submit</button>

    </form>
    <p>
       
        <?php
        if (isset($_POST['perform'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            switch ($operation) {
                case '+':
                    echo 'result is: '.$num1 + $num2;
                    break;
                case '-':
                    echo 'result is: '.$num1 - $num2;
                    break;
                case '*':
                    echo 'result is: '.$num1 * $num2;
                    break;
                case '/':
                    echo 'result is: '.$num1 / $num2;
                    break;
            }
        }
        ?>
    </p>
    <hr>
    <!-- =======================================================================-->
    <h1>
        Temperature conversion
    </h1>
    <form method="post">

        <h2>Enter number</h2>
        <input type="text" name="temp" required/>
        <label><input type="radio" name="unit" value="celsius" checked> Celsius </label>
        <label><input type="radio" name="unit" value="fahrenheit"> Fahrenheit </label>
        <button type="submit" name="calc">Calculate</button>

        </form>
        <p>

        <?php
        if (isset($_POST['calc'])) {
            $temp = $_POST['temp'];
            $unit = $_POST['unit'];
            if($unit === "celsius")
            {
                $convertedTemperature = ($temp * 9/5) + 32;
                echo "<p>$temp Celsius is $convertedTemperature Fahrenheit</p>"; 
            }
            else if($unit === "fahrenheit")
            {
                $convertedTemperature = ($temp - 32) * 5/9;
                echo "<p>$temp Fahrenheit is $convertedTemperature Celsius</p>";
            }
        }
        ?>
        </p>
<hr>






</body>

</html>