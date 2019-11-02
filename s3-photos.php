<?php

$prefix = (!empty($_GET['prefix'])) ? $_GET['prefix'] : 'group1';

// Check if prefix is a valid group
if ($prefix == 'group1' || $prefix == 'group2' || $prefix == 'group3' || $prefix == 'group4' || $prefix == 'group5' || $prefix == 'group6') {
	$directory = $prefix;
} else {
	$directory = 'group1'; // Set default to group1
}

switch ($prefix) {
    case "group1":
        $directory = $prefix;
		$group_name = "Dark Cave";
        break;
    case "group2":
        $directory = $prefix;
		$group_name = "Sparkle Snails";
        break;
    case "group3":
        $directory = $prefix;
		$group_name = "Snail Jail";
        break;
	case "group4":
        $directory = $prefix;
		$group_name = "Rainbow Dinosaur";
        break;
	case "group5":
        $directory = $prefix;
		$group_name = "Chicken World";
        break;
	case "group6":
        $directory = $prefix;
		$group_name = "Misty's";
        break;
    default:
        $directory = 'group1'; // Set default to group1
		$group_name = "Group 1";
}

use Aws\S3\S3Client;  
use Aws\Exception\AwsException;
// snippet-end:[s3.php.list_buckets.import]
// Create a S3Client 
// snippet-start:[s3.php.list_buckets.main]
$s3Client = new S3Client([
    'region' => REGION,
    'version' => AWS_API_VERSION,
    'credentials' => [
        'key'      => AWS_KEY,
        'secret'   => AWS_SECRET_KEY,
    ],
]);

$objects = $s3Client->listObjectsV2([
        "Bucket" => BUCKET,
		"Prefix" => $directory.'/',
]);