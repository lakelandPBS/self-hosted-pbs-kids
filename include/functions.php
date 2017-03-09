<?php
/*
 * To keep from cluttering things up all functions reside here
 */

function print_nav_menu($menuItems) {

    if ( isset($menuItems) ) {
        $output = '<div class="localized-nav">';
        $output .= '<ul>';

        foreach( $menuItems as $key => $value ) {
            $output .= '<li>';
            $output .= '<a href="' . $value . '">' . $key . '</a>';
            $output .= '</li>';
        }

        $output .= '</ul>';
        $output .= '</div>'; // end localized-nav
    } else {
        // no menu items to return so we will not have a top bar
        $output = '';
    }
    
    echo $output;    
}
