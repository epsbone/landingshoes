<?php

include "../config/class.email.php";

$email = $_POST["email"];

$obj = new Email();

$message = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim quasi hic fugiat doloribus mollitia, non in! Magni aliquid nostrum odio delectus unde, sint quo, molestias quae incidunt dolorem animi. Possimus!";
$obj->sendEmail($email, "Hi!", "ADITIONAL INFORMATION!", $message);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending email</title>
    <link rel="stylesheet" href=".../public/css/styles.css">
    <style>
        .main{
            width: 500px;
        }
    </style>
</head>
<body>
<article>
    <div class=" main container p-5 bg-light shadow rounded-3 mt-5">
            <form action="index.php" method="POST" class="container">
                <h2>THE INFORMATION WAS SENT TO YOUR EMAIL!</h2>
                <div class="form-group">
                    <label for="">You can go back to the main page.</label>
                </div>
                <br>
                <div>
                    <input type="submit" name="goback" class="btn btn-success" value="OK">
                </div>
            </form>
        </div>
    </div>
    </article>
</body>
</html>