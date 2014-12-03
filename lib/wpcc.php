<?php
use Guzzle\Tests\GuzzleTestCase,
    Guzzle\Plugin\Mock\MockPlugin,
    Guzzle\Http\Message\Response,
    Guzzle\Http\Client as HttpClient,
    Guzzle\Service\Client as ServiceClient,
    Guzzle\Http\EntityBody;
use Guzzle\Http\Message\Request;

class wpcc
{
    public static $root_dir = '../';

    /**
     * This function clean a given string and return the cleaned content
     *
     * @param string $string
     * @return string $cleanedString
     */
    public function clean($string)
    {
        $string = str_replace(
            array(' ', 'http://', 'www.'),
            array('-', '', ''),
            $string
        ); // Replaces all spaces with hyphens.
        $cleanedString = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
        return $cleanedString;
    }

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