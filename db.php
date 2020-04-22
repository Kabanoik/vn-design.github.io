<?php

$dbhost = "localhost";
$dbname = "gblock_pages";
$username = "root";
$password = "";

$db = new PDO ("mysql:host=$dbhost; dbname=$dbname", $username, $password);


function get_firstblocks_all($limit){
	global $db;
	$firstblocks = $db->query("SELECT * FROM descriptions LIMIT $limit");
	return $firstblocks;
}

function get_gblocks_all(){
	global $db;
	$gblocks = $db->query("SELECT * FROM galleryphotos ");
	return $gblocks;
}

function get_count_gblock(){
	global $db;
	$results = $db->query("SELECT COUNT(*) FROM descriptions");
	$results->setFetchMode(PDO::FETCH_ASSOC);
	return $results;
}


?>