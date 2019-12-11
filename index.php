<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form method="POST">
    <fieldset title="Calculator">
        First operand<input type="number" name="valu1"/>
        Operator
        <select name="operator">
            <option value="+">addition(+)</option>
            <option value="-" >subtraction(-)</option>
            <option value="*" >multiplication(*)</option>
            <option value="/" >division(/)</option>
        </select>
        Second operand<input type="number" name="valu2"/>
        <input type="submit" name="Calculate" value="Calculate"/>

    </fieldset>

</form>
<?php
if(isset($_POST['Calculate'])) {
    $num1 = $_POST["valu1"];
    $num2 = $_POST["valu2"];
    $name = $_POST["operator"];

switch ($name){
    case "+":
        echo "RESULT:".($num1+$num2);

        break;
    case "-":
        echo "RESULT: ";
        echo $num1 - $num2;
        break;
    case "*":
        echo "RESULT:";
        echo $num1 * $num2;
        break;
    case "/":
        if ($num2==0){
            try {
//                $num1 / $num2;
                throw new Exception("Opps, something went wrong: "."indivisible by 0");
            }
            catch (Exception $e){
                echo "Message: " . $e->getMessage();
                echo "";
                break;
            }
        }
        else if ($num2<0){
            try {
//
                throw new Exception("Opps, something went wrong: "."Cannot be divided by negative numbers");
            }
            catch (Exception $e){
                echo "Message: " . $e->getMessage();
                echo "";
                break;
            }
        }
        else {
            echo "RESULT:";
            echo $num1 / $num2;
            break;
        }

}
}
?>
</body>
</html>