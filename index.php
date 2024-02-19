<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online calculator</title>
</head>
<body>
    <form action="" method="POST" >
        <input type="number" name="num1" value="" placeholder="enter Number" required><br>
        <input type="number" name="num2" value="" placeholder="enter Number" required> <br>
        <input type="submit" name="operator" value="+">
        <input type="submit" name="operator" value="-">
        <input type="submit" name="operator" value="*">
        <input type="submit" name="operator" value="/">
        <input type="submit" name="operator" value="%">
    </form>

    <?php

    $x = $_POST['num1'];
    $y = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';

    if(is_numeric($x) && is_numeric($y)){

        switch($operator){

            case '+':
                $result = $x + $y;
                break;

            case '-':
                $result = $x - $y;
                break;

            case '*':
                $result = $x * $y;
                break;

            case '/':
                if($y != 0){
                    $result = $x / $y;
                }

                else{
                    $result = "can not divide by Zero!";
                }
                break;

                case '%':
                        $result = $x % $y;
                        break;
                    

                default:
                $result ="Invalid operator";
        }
        echo " <h3> RESULT: $x $operator $y = $result</h3>";
    }
    ?>
</body>
</html>