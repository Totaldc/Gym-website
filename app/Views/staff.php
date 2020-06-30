<?php

global $db;
include_once 'app/Models/functions.php';
include_once 'app/php/array.php';


?>

<main>
    <section class="container">
        <div class="row justify-content-center">
            <div>
                <h1 class="mt-5">Our Staff</h1>
            </div>
            <div>
                <?php make_staff_cards($db); ?>
            </div>
        </div>
    </section>
</main>