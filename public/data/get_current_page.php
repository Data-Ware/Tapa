<?php

/**
 * @author Stan Bordeaux
 * @copyright 2011
 */


/**
 * get_current_page
 * Function to get the current page: Edit this function to add or change pages
 * @return string
 * 
 */
function get_current_page()
{
    $current_page = basename($_SERVER['SCRIPT_NAME']);
    if ($current_page == 'index.php')
    {
        $current_page = 'home';
    }
    elseif ($current_page == 'about.php')
    {
        $current_page = 'about us';
    }
    elseif ($current_page == 'catering.php')
    {
        $current_page = 'catering';
    }
    elseif ($current_page == 'cafe.php')
    {
        $current_page = 'cafe';
    }
    elseif ($current_page == 'contact.php')
    {
        $current_page = 'contact';
    }
    
   return $current_page;
}

?>