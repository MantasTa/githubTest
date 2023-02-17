<?php
require 'f3/vendor/autoload.php';
$f3 = \Base::instance();
$f3->route('GET /',
    function() {
        echo 'Hello, worldsss!';
    }
);
$f3->run();
