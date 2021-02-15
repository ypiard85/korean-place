<?php

namespace Services\InstagramApi;

use Instagram\Instagram;

require 'vendor/autoload.php';




class InstagramApi{

    public function getPost(){


        $auth = new Instagram\Auth([
            "client_id" => '778480993021145',
            "client_secret" => '0a7269b3f35dfa90603898752570b620',

        ]);

        var_dump($auth);
    }
}