<?php

// création de la session
try {
    session_set_cookie_params([
        'lifetime' => 3600,
        'path' => '/',
        'domain' => 'localhost',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'lax'
    ]);
    session_start();

}catch(Exception $e){
    echo $e->getMessage();
}

?>