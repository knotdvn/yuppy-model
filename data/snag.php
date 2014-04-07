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
    ->setAccessKey(AWS_API_KEY)
    ->setSecretKey(AWS_API_SECRET_KEY)
    ->setAssociateTag(AWS_ASSOCIATE_TAG);

$search = new Search();
$search->setCategory('Electronics');
$search->setSort('salesrank');
$search->setBrowseNode(172282);
$search->setResponseGroup(array('Large'));
$search->setResponseTransformer('\ApaiIO\ResponseTransformer\XmlToDomDocument');


$apaiIo = new ApaiIO($conf);
$response = simplexml_load_string($apaiIo->runOperation($search));

print_r($response);

