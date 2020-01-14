<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/11/2020
 * @version 1.0
 * order.php
 * https://github.com/medioxumate/cupcakes.git
 * GreenRiverDev
 */

require('functions.php');
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Cupcake fundraiser</title>
    </head>
    <body>

<?php
//Values from the form
$order = $_POST['flavor'];
$name = $_POST['name'];

//cupcake count
$count = 0;

//thank the user
echo 'Thank you, '.$name.', for your order!';
?>
<!--print ordered cupcakes-->
<br><p>Order Summary:</p>
      <ul>
<?php
foreach ($order as $item) {
    echo '<li>' . $item . '</li>';
    $count++;
}
?>
      </ul>
<br><p>Order total:
<?php
    echo'$'.number_format((float)$count*3.50, 2, '.', '');
?>
    </p>
    <p><small>This site is for educational purposes only. <em>The cake is a lie.</em></small></p>
    </body>
</html>