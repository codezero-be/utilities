<?php namespace CodeZero\Utilities;

class UrlHelper {

    /**
     * Join URL parts without double slashes
     *
     * @param array $urlParts
     *
     * @return string
     */
    public function joinSlugs(array $urlParts)
    {
        $urlParts = array_map(function($urlPart){
            return trim($urlPart, '/');
        }, $urlParts);

        return implode('/', $urlParts);
    }

}