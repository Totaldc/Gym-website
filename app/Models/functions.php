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
    include_once 'app/Views/layout/footer.php';
}

function make_menu($array) //makes nav bar from db
{
    print '<div class="container d-flex justify-content-around bg-dark">';
    print '<div class="">';
    print '<img src="https://www.impuls.lt/images/logo_white.png" alt="logo">';
    print '</div>';
    print '<div>';
    print '<form method="get">';
    foreach ($array['menu'] as $nav_button) {
        print '<a href="?section=' . $nav_button['slug'] . '">' . $nav_button['name'] . '</a>';
    }
    print '</form>';
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
    print '<img src="https://www.lemongym.lt/file/2017/11/10/Kardio1_2_3.jpg" class="d-block w-100" height="700px" alt="...">';
    print '</div>';
    print '<div class="carousel-item">';
    print '<img src="https://www.lemongym.lt/file/2017/11/10/Kardio1_2_3.jpg" class="d-block w-100" height="700px" alt="...">';
    print '</div>';
    print '<div class="carousel-item">';
    print '<img src="https://www.lemongym.lt/file/2017/11/10/Kardio1_2_3.jpg" class="d-block w-100" height="700px" alt="...">';
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
    print '<div class="card-group">';
    print '<div class="card">';
    print '<img src="assets\images\icons/add-user-3-24.png" class="card-img-top" width="100px" height="100px" alt="...">';
    print '<div class="card-body">';
    print '<h5 class="card-title">Card title</h5>';
    print '<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>';
    print '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
    print '</div>';
    print '</div>';
    print '<div class="card">';
    print '<img src="assets\images\icons/medal-3-24.png" class="card-img-top" width="100px" height="100px" alt="...">';
    print '<div class="card-body">';
    print '<h5 class="card-title">Card title</h5>';
    print '<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>';
    print  '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
    print '</div>';
    print '</div>';
    print '<div class="card">';
    print '<img src="..." class="card-img-top" alt="...">';
    print '<div class="card-body">';
    print '<h5 class="card-title">Card title</h5>';
    print '<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>';
    print '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
    print '</div>';
    print  '</div>';
    print '</div>';
}
