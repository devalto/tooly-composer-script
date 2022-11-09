<?php

namespace Tooly\Script\Helper;

/**
 * @package Tooly\Script\Helper
 */
class Downloader
{
    /**
     * @param string $url
     *
     * @return bool
     */
    public function isAccessible($url)
    {
        return true;
    }

    /**
     * @param string $url
     *
     * @return string
     */
    public function download($url)
    {
        return file_get_contents($url);
    }
}
