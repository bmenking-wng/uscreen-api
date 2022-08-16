<?php

namespace GuzzleHttp\Psr7;

if( !function_exists("GuzzleHttp\Psr7\build_query") ) {
    function build_query($data, $encoding_type = PHP_QUERY_RFC3986) {
        return http_build_query($data, "", null, $encoding_type);
    }
}
