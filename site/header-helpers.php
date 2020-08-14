<?php

function get_header() {
    require_once __DIR__.'/theme/header.php';
}

function site_head() {
    $root_path = ROOT_OF_THEME;

    ob_start();
    ?>
    <link rel="stylesheet" href="<?= $root_path ?>/css/styles.css">
    <?php
    $header_html = ob_get_clean();
    return $header_html;
}
