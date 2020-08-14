<?php

class SiteLoader {

    // The root of the site
    private $root_path;

    private $current_page;

    private $hierarchy;

    function __construct() {
        $this->root_path = __DIR__;
        $this->current_page = $_SERVER[ 'REQUEST_URI' ];

        $this->initialize();
    }

    // Organizer to make constructor more organized
    private function initialize() {
        $this->get_necessary_files();
        $this->init();
    }

    private function site_hierarchy( $page_name ) {
        $hierarchy = $this->hierarchy = [
            '/about' => 'about',
            '404' => '404',
            '/' => 'index'
        ];

        $current_page = 'index';

        if( array_key_exists( $page_name, $hierarchy ) ) {
            $current_page = $hierarchy[ $page_name ];
        } elseif( ! array_key_exists( $page_name, $hierarchy ) ) {
            $current_page = $hierarchy[ '404' ];
        }

        return $current_page;
    }

    private function get_correct_page() {
        $page_template = $this->site_hierarchy( $this->current_page );
        return $page_template;
    }

    private function get_necessary_files() {
        $the_page = $this->get_correct_page();
        require "$this->root_path/site-helpers.php";
        require "$this->root_path/theme/functions.php";
        require "$this->root_path/theme/$the_page.php";
    }

    public function init() {}
}

new SiteLoader;
