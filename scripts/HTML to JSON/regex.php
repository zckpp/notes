<?php
/**
 * Created by PhpStorm.
 * User: qzhang
 * Date: 9/20/2018
 * Time: 10:17 AM
 */

function extractBody($url) {
    // only process html files
    if (strpos($url, '.html') !== false) {
        $file = file_get_contents($url, true);
        $matches = [];
        preg_match('/<\s*div.id=.inside-content2.*>.*.<\s*\/\s*div>/', $file, $matches);
        if (!empty($matches[0])) {
            echo $url."is being processed \r";
            file_put_contents($url, $matches[0]);
        }
    }
}

// get directory
$dir = "../html-mini/";
$a = scandir($dir);
foreach ($a as $html) {
    extractBody($html);
}