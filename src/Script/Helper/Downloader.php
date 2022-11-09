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
		$contents = file_get_contents($url);
		if ($contents === false) {
			throw new \Exception("Could not download $url");
		}
		return $contents;
    }
}
