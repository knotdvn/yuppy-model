<?php

print_r(require_once 'auth.php');


$AWSAccessKeyId = Access_Key_ID;
$SecretAccessKey = Access_Key_Secret;
 
$ItemId = "0679722769"; // ASIN
$Timestamp = gmdate("Y-m-d\TH:i:s\Z");
$Timestamp = str_replace(":", "%3A", $Timestamp);
$ResponseGroup = "ItemAttributes,Offers,Images,Reviews";
$ResponseGroup = str_replace(",", "%2C", $ResponseGroup);
 
$String = "AWSAccessKeyId=$AWSAccessKeyId&
ItemId=$ItemId&
AssociateTag=dvn&
Operation=ItemLookup&
ResponseGroup=$ResponseGroup&
Service=AWSECommerceService&
Timestamp=$Timestamp&
Version=2009-01-06";
 
$String = str_replace("\n", "", $String);
 
$Prepend = "GET\nwebservices.amazon.com\n/onca/xml\n";
$PrependString = $Prepend . $String;
 
$Signature = base64_encode(hash_hmac("sha256", $PrependString, $SecretAccessKey, True));  
$Signature = str_replace("+", "%2B", $Signature);
$Signature = str_replace("=", "%3D", $Signature);
 
$BaseUrl = "http://webservices.amazon.com/onca/xml?";
$SignedRequest = $BaseUrl . $String . "&Signature=" . $Signature;
 
$XML = simplexml_load_file($SignedRequest);
 
echo '<a href="'.$SignedRequest.'">XML</a><p>';
print_r ($XML);



 
 