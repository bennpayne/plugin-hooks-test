<?php
/**
 * Plugin Name: Hooks Test
 */

//Action Hook - hooks into login_header and runs hello_world function
 add_action( 'login_header', 'hello_world' );

 //Function to display Hello World
 function hello_world() {
     echo 'Hello World';
 }

 //Filter Hook - hooks into login_headerurl and adds change_header_url
 //changes url for logo on login page
 add_filter('login_headerurl', 'change_header_url');

 //Function to create a new URL for $url
 function change_header_url( $url ) {
    $url = 'https://bamws.com';
    return $url;
 }