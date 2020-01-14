<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/13/2020
 * @version 1.0
 * functions.php
 * https://github.com/medioxumate/cupcakes.git
 * GreenRiverDev
 */

//array for flavor display and selection
$cupcakes = array(
    'grasshopper' => 'The Grasshopper',
    'maple' => 'Whiskey Maple Bacon',
    'carrot' => 'Carrot Walnut',
    'velvet' => 'Red Velvet',
    'lemon' => 'Lemon Drop',
    'tiramisu' => 'Tiramisu',
);

function options($array){
    $count = 0;

    //print checkboxes for the flavor options
    foreach ($array as $flavor) {
        echo '<li><input type="checkbox" name="flavor[]" id="'
            . $count . '" value="' . $flavor;
        if(isset($_POST['flavor'])){echo '"checked">';}
        echo '<label for="' . $count . '">' . $flavor . '</label></li>';
        $count++;
    }
}

//print ordered cupcakes in a list
function order($array){
    global $cupcake;
    echo '<br><p>Order Summary:</p>
          <ul>';
    foreach ($array as $item) {
        if(array_search($item, $cupcake)){
            echo '<li>' . $item . '</li>';
        }
        else{
            echo 'bad. no spoofing!';
        }
    }
    echo '</ul>';
}

function nameValidation(){
    if (!ctype_alpha($_POST['name']) || empty($_POST['name'])) {
        return TRUE;
    }

    return FALSE;
}

function checkboxValidation(){
    if(empty($_POST['flavor'])){
        return TRUE;
    }

    return FALSE;
}
