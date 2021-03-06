<?php

namespace Phpwpcc;

class File
{

    const WRITEABLE_MODE = 0777;

    /**
     * This function write a given content to a specific file
     *
     * @param string  $filename
     * @param string  $content
     * @param boolean $writeable
     */
    public static function writeToFile($filename, $content, $writeable = false)
    {
        try {
            file_put_contents($filename, $content);
	    if (true === $writeable) {	       
	       chmod($filename, static::WRITEABLE_MODE);
	    }
        } catch (\Exception $e) {
            $error = new Error($e);
            $error->sendRedirection();
        }
    }

    /**
     * This function get the content of the file from a given url
     *
     * @param string  $url
     *
     * @return string $content
     */
    public static function getContentFromFile($url)
    {
        try {
                return file_get_contents($url);

        } catch (\Exception $e) {
            $error = new Error($e);
            $error->sendRedirection();
        }
    }
}
