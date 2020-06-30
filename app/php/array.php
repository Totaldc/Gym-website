<?php




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

        [
        'coach_id' => 1,
        'coach_img' => 'https://www.impuls.lt/storage/app/images/2019-02-28/768c2a5de52cf6b940c25f6f52fc8ec9.jpg',
        'coach_name' => 'Karolis',
        'coach_lastname' => 'Karoliauskas',
        'coatch_bio' => 'MOBILITY, PILATESAS PAŽENGUSIEMS, PILATESAS BEGINNERS, BALL TRAINING, PILATESAS, BODY TONE',

    ],
    [

        'coach_id' => 2,
        'coach_img' => 'https://www.impuls.lt/storage/app/images/2017-06-16/902ff83a98bbfb3f14f4b8f1e2f9eb6b.jpg',
        'coach_name' => 'Edvinas',
        'coach_lastname' => 'Edvinauskas',
        'coatch_bio' => 'PRESS + BACK, BODY TONE, SLOW & STRONG, X-FIT',

    ],
    [

        'coach_id' => 3,
        'coach_img' => 'https://www.impuls.lt/storage/app/images/2017-06-16/c1469279b29028b814881ae358c42c2d.jpg',
        'coach_name' => 'Mantas',
        'coach_lastname' => 'Mantauskas',
        'coatch_bio' => 'TRX BASIC, JOGA, SLOW & STRONG',

    ],
    
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
        'club_name' => 'Impuls',
        'club_address' => 'Gatve adresas namas',
        'work_hours' => '8-22',
    ],


    'offers' => [
        'title' => 'Smart',
        'price' => '28Eur',
        'summary' => '3.5h/day',
    ],
    [
        'title' => 'Flexi',
        'price' => '49Eur',
        'summary' => 'Unlimited',
    ],
 
    'workouts' =>[

        'workout_title' => 'Zumba',
        'workout_lenght' => 68,
        'people_count' => 15,
        'coach_id' => 1,
        'weekday' => [1, 3, 4],

    ],

];
