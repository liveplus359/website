<?php

/**
 * Created by spont4e on 07/11/2015
 */
class App {


    public static function doPost($url, $postdata) {

        //url-ify the data for the POST
        $fields_string = '';
        foreach ($postdata as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, count($postdata));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

        //execute post
        $result = curl_exec($ch);

        return $result;

        //close connection
        curl_close($ch);
    }

}