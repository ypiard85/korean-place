<?php

namespace Services\InstagramApi;

use Instagram\Instagram;

require 'vendor/autoload.php';




class InstagramApi{

    public function getPost(){


        $auth_config = array(
            "client_id" => '778480993021145',
            "client_secret" => '0a7269b3f35dfa90603898752570b620',
            "redirect_uri" => 'http://127.0.0.1:8000/'
        );

        $auth = new Instagram\Auth( $auth_config );
    }
}