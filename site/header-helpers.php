<?php

require ROOT_OF_SITE.'/class-header-scripts.php';

global $page_scripts;
$page_scripts = new HeaderScripts;

function get_header() {
    require_once ROOT_OF_SITE.'/theme/header.php';
}

function set_header_scripts( $scripts = [] ) {
    global $page_scripts;
    $page_scripts->set_header_scripts( $scripts );
}


function site_head() {
    global $page_scripts;
    $scripts = $page_scripts->get_header_scripts();

    ob_start();
    echo $scripts;
    $header_html = ob_get_clean();
    return $header_html;
}
