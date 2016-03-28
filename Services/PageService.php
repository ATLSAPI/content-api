<?php
namespace ContentApi\Services;

use JMS\Serializer\SerializerBuilder;

/**
 * Created by PhpStorm.
 * User: ISRAEL
 * Date: 28/03/2016
 * Time: 11:46
 */
interface IService
{
    function getPages();

    function getPageById($id);

    function getPageBySlug($slug);
}

class PageService implements IService
{
    /**
     * PageService constructor.
     */
    public $base;

    public function __construct()
    {
        $base = 'http://localhost:82/wordpress/wp-json/wp/v2/pages';
    }

    function getPages()
    {
        // make request for all pages;
    }

    function getPageById($id)
    {
        $baseUrl = 'http://localhost:82/wordpress/wp-json/wp/v2/pages';
        $url = $baseUrl . '/' . $id;
        $jsonData = $this->getJsonData($url); // makes request to above url..
        return $jsonData->content->rendered;
    }

    function getPageBySlug($slug)
    {
        $baseUrl = 'http://localhost:82/wordpress/wp-json/wp/v2/pages';
        $url = $baseUrl . '?filter[name]=' . $slug;
        $jsonData = $this->getJsonData($url); // makes request to above url..
        return $jsonData[0]->content->rendered;
    }

    /**
     * @param $url
     * @return mixed
     */
    public function getJsonData($url)
    {
        return json_decode(file_get_contents($url));
    }
}