<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/10/2020
 * @version 2.0
 * index.php
 * GreenRiverDev
 */

//array for flavor display and selection
$cupcake = array(
    'grasshopper' => 'The Grasshopper',
    'maple' => 'Whiskey Maple Bacon',
    'carrot' => 'Carrot Walnut',
    'velvet' => 'Red Velvet',
    'lemon' => 'Lemon Drop',
    'tiramisu' => 'Tiramisu',
);
?>

<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

    <!--header-->
    <h1>Cupcake Fundraiser</h1>

    <!--Form begins:-->
    <form action method = "post">

    <!--Enter name-->
    <p>Your name:</p>
        <label>
            <input type="text" name = "name"/>
        </label><br>

        <?php
            //print checkboxes for the flavor options
            $count = 0;
            echo '<p>Cupcake flavors:</p><ul style="list-style:none;">';
            foreach ($cupcake as $flavor) {
                echo '<li><input type="checkbox" name="flavor[]" id="'
                    . $count . '" value="' . $flavor . '"><label for="' . $count . '">' . $flavor . '</label></li>';
                $count++;
            }
            echo '</ul>';
        ?>

    <!--Submit option and end of form-->
    <input type="submit" value="Order"/>
    <input type="reset" value="Reset"/></form>

    <!--end of html-->
    </body>
</html>