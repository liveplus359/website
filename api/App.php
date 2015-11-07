<?php

/**
 * App class
 */
class App {

    /** Function that gets nearby venues
     * @param $city
     * @return string
     */
    public static function getNearVenue($city) {
        require('config.php');
        $url = $fsURL . "/explore" . "?client_id=" . $foursquareId . "&client_secret=" . $foursquareSecret . "&near=" . $city . "&query=" . "healthy" . "&v=20151107" . "&m=foursquare";

        $venuesList = self::doGet($url);
        $venueData = array();
        foreach ($venuesList['response']['groups'][0]['items'] as $venueObj) {

            $tmpVenueData = array(
                "id" => $venueObj['venue']['id'],
                "name" => $venueObj['venue']['name'],
                "address" => $venueObj['venue']['location']['address'],
                "lat" => $venueObj['venue']['location']['lat'],
                "lng" => $venueObj['venue']['location']['lng'],
                "city" => $venueObj['venue']['location']['city'],
                "country" => $venueObj['venue']['location']['country'],
                "rating" => $venueObj['venue']['rating'],
                "isOpen" => $venueObj['venue']['hours']['isOpen'],
                "photourl" => $venueObj['tips'][0]['photourl']
            );

            array_push($venueData, $tmpVenueData);
        }

        return json_encode($venueData);
    }

    /**
     * Function that post to APIs and get data
     * @param $url
     * @return mixed
     */
    public static function doGet($url) {
        $obj = json_decode(file_get_contents($url), true);
        return $obj;
    }

}

if ($_GET['city'] && $_GET['city'] != "") {
    $city = $_GET['city'];
    $venuesList = App::getNearVenue($city);
    echo $venuesList;
}