<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--
This is a website that just checks the 
existence of the cookie without setting it. 

-->

<?php
echo "If you have not visited the (Cookie_set_and_check.php) page, the message below will be (Hi). 
Otherwise its a (Welcome Back!) <br><br>";

if (isset($_COOKIE["WB"]))
{
    echo "Welcome Back!";
}

else
{
    echo "Hi!";
}

?>
    
</body>
</html>