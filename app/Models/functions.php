<?php


function make_return()
{
    if (isset($_GET['section'])) {
        switch ($_GET['section']) {
            case 'gallery':
                include_once 'app/Views/gallery.php';
                break;
            case 'offers':
                include_once 'app/Views/offers.php';
                break;
            case 'staff':
                include_once 'app/Views/staff.php';
                break;
            case 'shedule':
                include_once 'app/Views/shedule.php';
                break;
            case 'contacts':
                include_once 'app/Views/contacts.php';
                break;
            default:
                include_once 'app/Views/main.php';
        }
    } else include_once 'app/Views/main.php';
}


function make_page()
{
    global $db; //converts to global variable
    include_once 'app/Views/layout/header.php';
    make_return();
    // make_main($db);
    print '<section class="container">';
    make_cards($db);
    print '</section>';
    include_once 'app/Views/layout/footer.php';
}

function make_menu($array) //makes nav bar from db
{

    print '<div class="container">';
    print '<div class="d-flex justify-content-around align-items-center">';
    print '<div class="">';
    print '<img class="p-2" src="https://www.impuls.lt/images/logo_white.png" alt="logo">';
    print '</div>';
    print '<div>';
    print '<form method="get">';
    print '<nav>';
    foreach ($array['menu'] as $nav_button) {
        print '<a class="linkas text-white p-3 m-3" href="?section=' . $nav_button['slug'] . '">' . $nav_button['name'] . '</a>';
    }
    print '</nav>';
    print '</form>';
    print '</div>';
    print '</div>';
}


function make_main($array)
{
    print '<section>';
    foreach ($array['staff'] as $staff) {
        print $staff['coach_name'];
    }
    print '</section>';
}


function make_galery($gallery_folder)
{
    $images_array = scandir($gallery_folder);
    foreach ($images_array as $image) {
        print '<img class="w-25 h-25" src="' . $gallery_folder . '/' . $image . '" alt="">';
    }
}

function make_carousel()
{
    print '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">';
    print '<ol class="carousel-indicators">';
    print '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
    print '<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>';
    print '<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>';
    print '</ol>';
    print '<div class="carousel-inner">';
    print '<div class="carousel-item active">';
    print '<img src="https://www.impuls.lt//storage/app/uploads/K%C5%BDA%20klubas/Impuls_web_baneris_1920x890_50proc_narystei_20200605.png" class="d-block w-100" height="700px" alt="...">';
    print '</div>';
    print '<div class="carousel-item">';
    print '<img src="https://www.impuls.lt/storage/app/uploads/WEB%20NAUJIENOS/Impuls_web_baneris_1920x890_plaukimas_20200619.png" class="d-block w-100" height="700px" alt="...">';
    print '</div>';
    print '<div class="carousel-item">';
    print '<img src="https://www.impuls.lt/storage/app/uploads/Slideriai/Impuls_web_baneris_1920x890_sveiki_sugrize_20200519.png" class="d-block w-100" height="700px" alt="...">';
    print '</div>';
    print '</div>';
    print '<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">';
    print '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
    print '<span class="sr-only">Previous</span>';
    print '</a>';
    print '<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">';
    print '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
    print '<span class="sr-only">Next</span>';
    print '</a>';
    print '</div>';
}

function make_cards()
{
    print '<div class="card-group d-flex text-center">';
    print '<div class="card m-5 justify-content-center col-5">';
    print '<div>';
    print '<img src="assets\images\icons/add-user-3-24.png" class="" width="80" height="80px" alt="...">';
    print '</div>';
    print '<div class="card-body">';
    print '<h5 class="card-title">ĮSIGYKITE
    NARYSTĘ</h5>';
    print '<p class="card-text">Visada geriausi pasiūlymai,
    pasirinkusiems SMART narystę</p>';
    print '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
    print '</div>';
    print '</div>';
    print '<div class="card m-5 justify-content-center col-5">';
    print '<div>';
    print '<img src="assets\images\icons/add-user-3-24.png" class="" width="80" height="80px" alt="...">';
    print '</div>';
    print '<div class="card-body">';
    print '<h5 class="card-title">ĮSIGYKITE
    NARYSTĘ</h5>';
    print '<p class="card-text">Visada geriausi pasiūlymai,
    pasirinkusiems SMART narystę</p>';
    print '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
    print '</div>';
    print '</div>';
    print '</div>';
}

// function make_cards(){

//     print '<div class="card-group">';
//     for($i=0; $i<=1; $i++){
//         print '<div class="card">';
//     print '<img src="assets\images\icons/add-user-3-24.png" class="card-img-top" width="100px" height="100px" alt="...">';
//     print '<div class="card-body">';
//     print '<h5 class="card-title">ĮSIGYKITE
//     NARYSTĘ</h5>';
//     print '<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>';
//     print '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
//     print '</div>';
//     print '</div>';
//     }
//     print '</div>';


// }