<!-- Note: Kindly un-comment the code before using it -->

<!-- Print a Hello world Statement -->
<!-- <?php
    echo"Hello World <br>"; // <br> is used for a line break
    echo"This is a Hello World Statement";
?> -->

<!-- Variables in PHP -->
<?php
    $name = 'George'; // String variable
    $email = 'apple@gmail.com'; // String variable
    $youtuber = "MrBeast"; // String variable

    $age = 28; // Integer variable
    $balance = 58568; // Integer variable
    $chessrating = 3540; // Integer variable

    $gpa = 3.5; // Float variable
    $price = 9.99; // Float variable
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

    echo "Online Status: {$isOnline}<br>" // In PHP, when a state is false PHP does'nt render it as false means 0 and true means 1.
?>