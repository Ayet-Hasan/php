<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        enter first number: <input type="number" name="number ">
        <br>
        enter second number: <input type="number" name="num">
        <br><input type="submit"  value="addition">
        <input type="submit" value="multipication">
    </form>
    <?php 
    if ($_SERVER["REQEEST_METHOD"]=="post"){
        $num1=$_POST['number'];
        $num2=$_POST['num'];
    }
    function addition($num1,$num2){
        return $num1+$num2;
    }

    function multition($num1,$num2){
        return $num1*$num2;
    }
    function subition($num1,$num2){
        return $num1-$num2;
    }
    

    ?>
    
</body>
</html>