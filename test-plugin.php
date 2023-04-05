<?php

/*
 * Plugin Name:       Test Plugin
 * Plugin URI:        https://getstartedwp.com
 * Description:       This is my basic plugin
 */



 // Let's add extra content after the article content

 add_filter( 'the_content', 'test_add_extra_content_after_article', 10, 1 );

 function test_add_extra_content_after_article( $the_content ) {
    $text = '<p>Thank you for reading my article</p>';

    return $the_content . $text;
 }

// Let's add extra content before the article content

 add_filter( 'the_content', 'text_add_extra_content_before_article', 10, 1 );

 function text_add_extra_content_before_article( $the_content ) {

    $text = '<p>Please donate!</p>';

    return $text . $the_content;

 }


 add_filter( 'the_content', function( $the_content ) {

    // Check if user is logged in

    if ( is_user_logged_in() ) {
        return $the_content;
    } else {

        return '<p>Pleasse subscribe</p>';
    }


 } );
 