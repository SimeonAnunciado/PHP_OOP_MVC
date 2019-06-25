<?php
    // config files
    require_once 'config/config.php';
    // load helper
    require_once 'helpers/url_helper.php';
    // load session helper
    require_once 'helpers/session_helper.php';


    // autoload core libraries
    spl_autoload_register(function($className){
        require_once 'libraries/'.$className.'.php';
    });


?>

