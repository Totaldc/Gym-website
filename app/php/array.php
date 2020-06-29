<?php


// $db = [

// 'menu' => [
//     'Home' => '1',
//     'Staff' => '2',
//     'Workouts' => '3',
//     'Offers' => '4',
//     'Gallery' => '5',
//     'Contacts' => '6',
// ],

$db = [
    'menu' => [
        [
            'slug' => 'main',
            'name' => 'Main',
        ],
        [
            'slug' => 'staff',
            'name' => 'Staff',
        ],
        [
            'slug' => 'shedule',
            'name' => 'Shedule',
        ],
        [
            'slug' => 'offers',
            'name' => 'Offers',
        ],
        [
            'slug' => 'gallery',
            'name' => 'Gallery',
        ],
        [
            'slug' => 'contacts',
            'name' => 'Contacts',
        ],
    ],


    'staff' => [

        'coach_id' => 1,
        'coach_name' => 'Karolis',
        'coach_lastname' => 'Karoliauskas',
        'coatch_birthday' => '',

    ],
    [

        'coach_id' => 2,
        'coach_name' => 'Edvinas',
        'coach_lastname' => 'Edvinauskas',
        'coatch_birthday' => '',

    ],
    [

        'coach_id' => 3,
        'coach_name' => 'Mantas',
        'coach_lastname' => 'Mantauskas',
        'coatch_birthday' => '',

    ],


    'schedule' => [

        'program_id' => 1,
        'program_title' => 'programa1',
        'program_about' => 'savaites',


    ],
    [

        'program_id' => 2,
        'program_title' => 'programa1',
        'program_about' => 'menesio',


    ],
    [

        'program_id' => 3,
        'program_title' => 'programa1',
        'program_about' => 'metu',


    ],

    'gallery' => [
        
    ],

    'contacts' => [
        'club_name' => '',
        'club_address' => '',
        'work_hours' => '',
    ],


    'offers' => [
        'offer_title' => '',
        'offer_price' => '',
        'offer_summary' => '',
    ],
    [
        'offer_title' => '',
        'offer_price' => '',
        'offer_summary' => '',
    ],
    [
        'offer_title' => '',
        'offer_price' => '',
        'offer_summary' => '',
    ],




];
