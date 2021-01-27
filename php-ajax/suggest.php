<?php
$people[] = "Nick";
$people[] = "Josh";
$people[] = "Steve";
$people[] = "John";
$people[] = "Evan";
$people[] = "Kathy";
$people[] = "Hal";
$people[] = "Rhonda";
$people[] = "Evan";
$people[] = "Tom";
$people[] = "Ernie";
$people[] = "Joana";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Rachel";
$people[] = "Amanda";
$people[] = "Katy,";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcolm";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;
