<?php

global $db;
include_once 'app/Models/functions.php';
include_once 'app/php/array.php';


?>


<main>
    <h1>Pasirinkite klubą:</h1>
    <?php make_offer($db); ?>
</main>