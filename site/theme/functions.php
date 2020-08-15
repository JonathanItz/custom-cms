<?php

$scripts = [
    'css' => [
        '<link rel="stylesheet" defer async href="'. ROOT_OF_THEME .'/css/styles.css">'
    ],
    'js' => [
        '<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>'
    ]
];
set_header_scripts( $scripts );

$scripts = [
    'js' => [
        '<script src="'. ROOT_OF_THEME .'/js/main.js"></script>'
    ]
];
set_footer_scripts( $scripts );
