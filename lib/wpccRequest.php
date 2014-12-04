<?php
use Guzzle\Tests\GuzzleTestCase,
    Guzzle\Plugin\Mock\MockPlugin,
    Guzzle\Http\Message\Response,
    Guzzle\Http\Client as HttpClient,
    Guzzle\Service\Client as ServiceClient,
    Guzzle\Http\EntityBody;
use Guzzle\Http\Message\Request;

class wpccRequest extends wpcc
{
    /**
     * This function send an Http Request on the given url and return the web page content
     *
     * @param $url
     * @return Response
     */
    public function sendRequest($url)
    {
        $client = new HttpClient($url);
        $request = $client->get($url);
        $response = $request->send();

        return $response;
    }
}
?>