<?php

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Instagram
{
    private $client;

    public function __construct(HttpClientInterface $client){
        $this->client = $client;
    }

    public function fetchInstagramPost(): void {
        $response = $this->client->request(
            'GET',
            'https://graph.facebook.com/v9.0/instagram_oembed?url=https://www.instagram.com/p/fA9uwTtkSN/&access_token=778480993021145|84f056df7717f76c74e4506e1b059979'
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

        return $content;

}