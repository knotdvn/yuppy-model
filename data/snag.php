<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once 'auth.php';


require_once "vendor/autoload.php";




use ApaiIO\Configuration\GenericConfiguration;
use ApaiIO\Operations\Search;
use ApaiIO\ApaiIO;

$conf = new GenericConfiguration();
$conf
    ->setCountry('com')
    ->setAccessKey('YOUR ACCESS KEY')
    ->setSecretKey('YOUR SECRET KEY')
    ->setAssociateTag('YOUR ASSOCIATE TAG');

$search = new Search();
$search->setCategory('DVD');
$search->setActor('Bruce Willis');
$search->setKeywords('Die Hard');

$apaiIo = new ApaiIO($conf);
$response = $apaiIo->runOperation($search);

var_dump($response);