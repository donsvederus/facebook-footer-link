<?php

//  Adds a function that adds content at the end of the post
//  Using add_filter because we are changing what's already there, it's a hook
function ffl_add_footer($content){

    $footer_output = '<hr>';
    $footer_output .= '<div class=footer_content">';
    $footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a target="_blank" href="https://www.facebook.com"> Facebook</a>';
    $footer_output .='</div>';

    return $content . $footer_output;
}

add_filter('the_content', 'ffl_add_footer');