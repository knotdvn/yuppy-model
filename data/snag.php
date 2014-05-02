<?php
//dev error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'on');

//grab our library
require_once 'auth.php';
require_once "vendor/autoload.php";
use ApaiIO\Configuration\GenericConfiguration;
use ApaiIO\Operations\Search;
use ApaiIO\ApaiIO;

//set up global api request data
$conf = new GenericConfiguration();
$conf
    ->setCountry('com')
    ->setAccessKey(AWS_API_KEY)
    ->setSecretKey(AWS_API_SECRET_KEY)
    ->setAssociateTag(AWS_ASSOCIATE_TAG);
//global requester object
$apaiIo = new ApaiIO($conf);

//an array of cat name and the browse node ID
$cats = array(
	"Electronics"=>172282,
    "MP3Downloads"=>195211011,
    "Video"=>130,
    "VideoGames"=>468642,
    "Grocery"=>16310101,
    "Industrial"=>228239
); 
    




//for each category lets query the best selling products and
// save the useful data into json files  

foreach ($cats as $catName => $catID) {

	//a search for each category
	$search = new Search();
	$search->setCategory($catName);
	$search->setSort('salesrank');
	$search->setBrowseNode($catID);
	$search->setResponseGroup(array('Large'));
	

	//now we have the xml
	$response = $apaiIo->runOperation($search);


	//convert to parasable object
	$data = simplexml_load_string($response); 

	//array of all product data for all cats
	$items = array();

	//grab 10 items worth of data
	for( $i = 0; $i <=9; $i++){
		$item  = array(
		'name' => (string)$data->Items->Item[$i]->ItemAttributes->Title[0],
		'price' => (string)$data->Items->Item[$i]->OfferSummary->LowestNewPrice->Amount[0],
		'image' => (string)$data->Items->Item[$i]->MediumImage->URL[0],
		);
		//push data to big array
		$items[] = $item;
		
	}//end for 10 items
	//jsonify
	$jsonData = "var " . $catName . " = " . json_encode($items);

	//display data
	echo "<br><br>" . $catName . "<br><br>";
	echo($jsonData);

	//write to files
	$file = 'catdata2/'. $catName. '.js';
	file_put_contents($file, $jsonData);

}//end for each category

