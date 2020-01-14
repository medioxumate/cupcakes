<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/10/2020
 * @version 2.0
 * index.php
 * https://github.com/medioxumate/cupcakes.git
 * GreenRiverDev
 */

require('functions.php');

$errors = FALSE; // Initialize an errors.

?>

<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cupcakes</title>
    </head>
    <body>

    <!--header-->
    <h1>Cupcake Fundraiser</h1>

    <!--Form begins:-->
    <form action = "http://bkiehn.greenriverdev.com/it328/cupcakes/order.php" method = "post">

    <!--Enter name-->
    <p>Your name:</p>
        <label>
            <input type="text" name = "name" value = "<?php
            if (isset($_POST['name'])) echo $_POST['name']; ?>"/>
        </label><br>
            <p>Cupcake flavors:</p><ul style="list-style:none;">
            <?php
                options($cupcakes);
            ?>
        </ul>

    <!--Submit option and end of form-->
    <input type="submit" value="Order"/>
    <input type="reset" value="Reset"/>
    </form>

    <!--end of html-->
    </body>
</html>