<?php
/*
Plugin Name: Bad  word remover
Description: This is a plugin to remoce any bad words in the website with ***
Author: Huda
*/

add_filter('the_title','remove_bad_word', $priority10 );
add_filter('the_body','remove_bad_word', $priority10 );

function remove_bad_word($text){
    $words=[];

    if('the_title'=== current_filter()){
        $words=[
            'fuck',
            'bitch',
            'slut'
        ];
    } elseif ('the_body'===current_filter()){
        $words=[
            'fuck',
            'bitch',
            'slut'
        ];
    }
    if($words){
        $text=str_replace($words,'****',$text);
    }
    return $text;

}