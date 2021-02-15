<?php

namespace Services\InstagramApi;

use Instagram\Instagram;

require 'vendor/autoload.php';




class InstagramApi{

    public function getPost(){


        $auth = new Instagram\Auth([
            "client_id" => '778480993021145',

        ]);

        var_dump($auth);
    }
}