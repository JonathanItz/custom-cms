<?php

require ROOT_OF_SITE.'/class-footer-scripts.php';

global $footer_scripts;
$footer_scripts = new FooterScripts;

function get_footer() {
    require_once ROOT_OF_SITE.'/theme/footer.php';
}

function set_footer_scripts( $scripts = [] ) {
    global $footer_scripts;
    $footer_scripts->set_footer_scripts( $scripts );
}


function site_footer() {
    global $footer_scripts;
    $scripts = $footer_scripts->get_footer_scripts();

    ob_start();
    echo $scripts;
    $header_html = ob_get_clean();
    return $header_html;
}
