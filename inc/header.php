<?php 
define('ROOT', dirname(realpath(__FILE__)).'/');
if($_SERVER['HTTP_HOST'] == 'localhost') {
define('BASEURL', 'http://localhost/solr-vs-elasticsearch.com/');

} else {
define('BASEURL', 'http://www.solr-vs-elasticsearch.com/');
}
$solr_version = "Solr 4.0";
$es_version = "ElasticSearch 0.19.10";
$title_suffix = " - Solr vs ElasticSearch.com";
//ob_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?=$page_title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tipsy.css">

    <!--[if lt IE 9]>
        <script src="js/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
    
</head>
<body>

    
