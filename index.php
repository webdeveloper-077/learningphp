<!-- Note: Kindly un-comment the code before using it -->

<!-- Print a Hello world Statement -->
<!-- <?php
    echo"Hello World <br>"; // <br> is used for a line break
    echo"This is a Hello World Statement";
?> -->

<!-- Variables in PHP -->
<!-- <?php
    $name = 'George'; // String variable
    $email = 'apple@gmail.com'; // String variable
    $youtuber = "MrBeast"; // String variable
    $food = "Hamburger"; // String variable

    $age = 28; // Integer variable
    $balance = 58568; // Integer variable
    $chessrating = 3540; // Integer variable
    $quantity = 8; // Integer variable

    $gpa = 3.5; // Float variable
    $price = 14.99; // Float variable
    $tax_rate = 5.1; // Float variable

    $employed = true; // Boolean variable
    $isOnline = false; // Boolean variable
    $for_sale = false; // Boolean variable

    echo "Welcome, {$name}<br>";
    echo "Your email address is {$email}<br>";
    echo "Your Favorite YouTuber is {$youtuber}<br><br>";

    echo "Your Age is {$age}<br>";
    echo "Your Chess rating is {$chessrating}<br>";
    echo "Your Balance is {$balance}<br><br>";
    
    echo "Your GPA is {$gpa}<br>";
    echo "Price of a SSD is  \${$price}<br>"; // We have added \$ because it is not allowed to use a $ in front of a variable. So we use back-slash before the variable in PHP. It is known as Escape Sequence.
    echo "Your tax rate is {$tax_rate}% <br><br>";

    $total = null;

    $total = $quantity * $price;
    echo "You have ordered {$quantity} {$food}s<br>";
    echo "Your total is: \${$total}<br><br>"
?> -->

<!-- Arithmetic Operators in PHP -->

<!-- <?php
    // + = Addition
    // - = Subtraction
    // * = Multiplication
    // / = Division
    // ** = Power of 
    // % = Modulo (To get a remainder of the division)

    $x = 10;
    $y = 12;
    $z = null;

    $z = $x + $y;
    $z = $x * $y;
    $z = $x / $y;
    $z = $x ** $y;
    $z = $x % $y;
    echo $z;
?> -->

<!-- Increment/Decrement Operators -->

<!-- <?php
    $counter = 0;

    $counter+=3; // Increment Operator 
    echo $counter;

    $counter-=3; // Decrement Operator 
    echo $counter;
?> -->

<!-- Operator Precedence in PHP -->

<!-- <?php
    // () = Expressing Grouping
    // ** = Exponent
    // * / % = Multiplication, Division, Modulo.
    // + - = Addition, Subtraction.

    $total = 3 + 2 - 3 * 4 / 5 ** 7;
    echo $total;
?> -->

<!-- $_GET, $POST Variable -->

 <!-- These are special variables used to collect data from an HTML form data is sent to the file in the action attribute of <form action = "some_file.php" method = "get"> -->

<?php
    // $_GET = Dat is appended to the URL.
    // NOT SECURE
    // Char limit
    // Bookmark is possible w/ values
    // GET requests can be cached
    // Better for a search page

    // $_POST = Dat is pachaged inside the body of the HTTP request
    // MORE SECURE
    // No data limit
    // Cannot bookmark
    // Get requests are not cached
    // Better for submitting credentials
?>

<!-- Get Post Practice -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $item = "Hamburger";
    $price = 8.99;
    $quantity = $_POST['quantity'];
    $total = null;

    $total = $quantity * $price;

    echo"You have ordered {$quantity} x {$item}/s <br>";
    echo"Your total is \${$total}";
?> -->

<!-- Arrays in PHP -->

<!-- <?php
    $cars = array("Rolls Royce", "BMW", "Audi", "Volvo", "Bugatti");
    $cars[1] = "Tesla";
    echo count($cars);
?> -->

<!-- Using Checkboxes in PHP -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br> 
        Oranges: <input type="checkbox" name="fruits[]" value="Oranges"><br> 
        Grapes: <input type="checkbox" name="fruits[]" value="Grapes"><br> 
        None: <input type="checkbox" name="fruits[]" value="None"><br> 
        <input type="submit"> -->
    </form>
    <!-- <?php
        $fruits = $_POST['fruits'];
        echo $fruits[1];
    ?> -->
</body>
</html> 

<!-- Key Value Pairs in PHP -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <input type = "text" name = "student">
        <input type = "submit">
    </form>
    <?php
        $grades = array("Hari"=>500000, "Dhyanesh"=>480000, "Jim"=>"2400", "Karthik"=>"118");
        echo $grades[$_POST['student']];
    ?>
</body>
</html> -->

<!-- Functions in PHP -->

<!-- <?php
    function sayHello($name, $country) {
        echo "I am $name from $country<br><br>";
    }
    sayHello('Donald Trump', "USA");
    sayHello('Mussolini', 'Italy');
    sayHello('Vlamidir Putin', 'Russia');
    sayHello('Adolf Hitler', 'Germany');
?> -->

<!-- Basic Programs -->
<!-- <?php 
    function cube($number) {
        return $number * $number * $number;
    }
    echo cube(24);
?> -->

<!-- If else Statement in PHP -->

<!-- <?php
    $isKing = true;
    if ($isKing) {
        echo "You are a King";
    } else {
        echo "You are not a King";
    }
?> -->

<!-- <?php
    function getMax($num1, $num2, $num3) {
        if($num1 >= $num2 && $num1 >= $num3) {
            return "$num1 is the Greatest among $num2 and $num3";
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return "$num2 is the Greatest among $num1 and $num3";
        } else {
            return "$num3 is the Greatest among $num1 and $num2";
        }
    }
    echo getMax(30.0001,30,30.00001);
?> -->

<!-- Switch Statements -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = 'post'>
    What was your grade?
    <input type="text" name="grade">
    <input type = "submit">
</form>
<!-- <?php
$grade = $_POST['grade'];
switch($grade) {
    case "A":
        echo "You did Amazing";
        break;
    case "B":
        echo "You did pretty Good!";
        break;
    case "C":
        echo "Better luck next time";
        break;
    default:
        echo "Invalid Grade";
}
?> -->
</body>
</html>

<!-- While Loop -->

<?php
    $index = 1;
    while($index <= 50) {
        echo "$index <br>";
        $index++;
    }
?>