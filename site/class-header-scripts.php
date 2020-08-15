<?php

/*
 * @since 0.0.1
 *
 * Set and get header scripts. Link/HTML tags are handled by user and just put in a string here
 *
 * @param string $scripts     The string of scripts
 * @return $scripts
 */
class HeaderScripts {
    private $scripts;

    public function set_header_scripts( $scripts = [] ) {
        if( ! is_array( $scripts ) && empty( $scripts ) ) return false;

        $string = '';
        foreach( $scripts as $script ) {
            foreach( $script as $path ) {
                $string .= $path;
            }
        }

        if( $string === '' ) return false;

        $this->scripts = $string;
    }

    public function get_header_scripts( $scripts = [] ) {
        return $this->scripts !== '' ? $this->scripts : false;
    }
}
