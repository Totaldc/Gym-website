<?php


function make_return()
{
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
}


function make_page()
{
    global $db; //converts to global variable
    include_once 'app/Views/layout/header.php';
    make_menu($db);
    make_return();
    make_main($db);
    include_once 'app/Views/layout/footer.php';
}

function make_menu($array) //makes nav bar from db
{
    print '<form method="get">';
    foreach ($array['menu'] as $nav_button) {
        print '<a href="?section=' . $nav_button['slug'] . '">' . $nav_button['name'] . '</a>';
    }
    print '</form>';
}


function make_main($array)
{
    print '<section>';
    print 'VALIO';
    print '</section>';
}
