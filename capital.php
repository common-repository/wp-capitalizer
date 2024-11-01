<?php 
    /*
    Plugin Name: WP-capitalizer
    Description: Plugin for displaying post title in capital letter
    Author: vinu nair
    Version: 1.0
    
    */
    
    
add_filter('the_title','vin_edit_title');
function vin_edit_title($content)
{
return strtoupper($content);
}
?>
