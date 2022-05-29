<!DOCTYPE html>

<?php
//Setting a cookie that lasts an hour when the page loads.
setcookie("WB", "Recurring User", time() + (3600));
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
//If The cookie is set, the user will get a "Welcome Back" message.
//If not, then its just a standard "Hi".

if (isset($_COOKIE["WB"])) 
{  
    echo "Welcome Back!";
}

else
{
echo "Hi! This is your first visit!";
}

    ?>
</body>
</html>