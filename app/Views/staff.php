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
    <section class="container mt-5 mb-5">
        <div class="d-flex justify-content-center">
            <div class="col-6 mr-5">
                <a href="#"><img src="https://www.impuls.lt/images/banners/kauno_treneriu_baneris.png" alt="staff"></a>
            </div>
            <div class="col-6 ml-5">
                <p>
                    Siekdami suteikti Jums galimybę įsigyti asmenines treniruotes dar geresnėmis kainomis pradedame
                    bendradarbiauti su moderniausia platforma trenerių pasirinkimui - Lympo</p>
                <h5>Kas yra Lympo platforma?</h5>
                <p>Tai platforma vienijanti daugybę sporto trenerių ir profesionalių sportininkų. Prisiregistravę šioje
                    platformoje Jūs galėsite patogiai išsirinkti sau tinkamiausią trenerį, atsižvelgdami į pasirinktus
                    sporto tikslus. Pasinaudokite Lympo puslapio teikiamomis papildomis naudomis ir lengvai atraskite
                    įtraukiančius ir sau patinkančius renginius susijusius su sveika gyvensena!</p>
            </div>
        </div>
    </section>
</main>