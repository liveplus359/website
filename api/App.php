<?php

/**
 * App class
 */
require('config.php');

class App {

    /**
     * Function that post to APIs and get data
     * @param $url
     * @return mixed
     */
    public static function doGet($url) {
        $obj = json_decode(file_get_contents($url), true);
        echo "<pre>";
        print_r($obj);
        echo "</pre>";
        return $obj;
    }

}

$url = $fsURL . "?client_id=" . $foursquareId . "&client_secret=" . $foursquareSecret . "&ll=" . "43.8,25.9" . "&query=" . "sushi" . "&v=20140806" . "&m=foursquare";
echo $url;
//print_r(App::doGet($url));
//echo '</pre>';
