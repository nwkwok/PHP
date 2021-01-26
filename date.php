<?php
echo date('d'); // Day
echo '<br>';

echo date('m'); // Month
echo '<br>';

echo date('Y'); // Year
echo '<br>';

echo date('l'); // Day of the week
echo '<br>';

echo date('m/d/Y');
echo '<br>';

echo date('m-d-Y');
echo '<br>';

echo date('h'); // Hour
echo '<br>';

echo date('i'); // Min
echo '<br>';

echo date('s'); // Seconds
echo '<br>';

echo date('a'); // AM or PM
echo '<br>';

// Set Time Zone
date_default_timezone_set('US/Pacific');
echo '<br>';

echo date('h:i:sa');
echo '<br>';

$timestamp = mktime(10, 14, 54, 9, 10, 1981);
// (hours minutes seconds month date year)
echo $timestamp;
echo '<br>';

// returns a timestamp of the seconds that have passed since January 1st 1970 and the specified time.

echo date('m/d/Y h:i:sa', $timestamp);
echo '<br>';

$timestamp2 = strtotime('7:00 PM March 22 2016');
echo $timestamp2;
echo '<br>';

echo date('m/d/Y h:i:sa', $timestamp2);
echo '<br>';

$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+2 Days');

echo date('m/d/Y h:i:sa', $timestamp3);
echo '<br>';

echo date('m/d/Y h:i:sa', $timestamp4);
echo '<br>';

echo date('m/d/Y h:i:sa', $timestamp5);
echo '<br>';
