<?php

namespace UScreen;

class UScreen {
    public static function getApiService(String $endpoint, String $token, $timeout = 15, $debug = false, $verify_host_ssl = true) {

        $config = new \UScreen\Client\Configuration();

        $config->setHost($endpoint);

        $class = "\\UScreen\\Client\\Api\\DefaultApi";
        
        $instance = new $class(
            new \GuzzleHttp\Client(
                [
                    'base_uri'=>$endpoint,
                    'headers'=> [
                        'Authorization'=>$token
                    ],
                    'verify'=>$verify_host_ssl, 
                    'connect_timeout'=>$timeout,
                    'debug'=>$debug
                ]
            ),
            $config
        );

        return $instance;
    }

}