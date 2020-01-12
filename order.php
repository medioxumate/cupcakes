<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/11/2020
 * @version 1.0
 * order.php
 * GreenRiverDev
 */

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

//thank the user
echo 'Thank you, '.$name.', for your order!';

//print ordered cupcakes
echo '<br><p>Order Summary:</p>
      <ul>';
foreach ($order as $item) {
    echo '<li>' . $item . '</li>';
}
echo '</ul>';
?>
    <p><small>This site is for educational purposes only. <em>The cake is a lie.</em></small></p>
    </body>
</html>