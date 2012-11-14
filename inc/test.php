<?php

//
// Include the GeSHi library
//
include_once 'geshi.php';
 
//
// Define some source to highlight, a language to use
// and the path to the language files
//
 
$source = '<a href="http://www.google.com"><b>car</b></a>';
$language = 'HTML';
 
//
// Create a GeSHi object
//
 
$geshi = new GeSHi($source, $language);
 
//
// And echo the result!
//
echo $geshi->parse_code();
