<?php
/**
 * Created by PhpStorm.
 * User: qzhang
 * Date: 9/20/2018
 * Time: 11:37 AM
 */

function toJson($url) {
    if (strpos($url, '.html') !== false) {
        $arr = [];
        $filename = pathinfo($url, PATHINFO_FILENAME);
        echo "processing file: " . $filename . "\n";
        $arr['title'] = $filename;
        $body = file_get_contents($url, true);
        $arr['body'] = $body;
        // return null for article without body content
        if (strlen($body) > 0) {
            return $arr;
        }
    }
}
$array = [];
$dir = "../html-mini/";
$a = scandir($dir);
foreach ($a as $html) {
    $temp = toJson($html);
    // ignore article without body content
    if ($temp !== null) {
        $array[] = $temp;
    }
}
$fp = fopen('summery.json', 'w');
fwrite($fp, json_encode($array));
fclose($fp);