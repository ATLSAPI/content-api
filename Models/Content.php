<?php
/**
 * Created by PhpStorm.
 * User: ISRAEL
 * Date: 28/03/2016
 * Time: 11:40
 */
namespace ContentApi;

class Content
{
    public function getRendered()
    {
        return $this->rendered;
    }

    public function setRendered($rendered)
    {
        $this->rendered = $rendered;
    }

    public $rendered; //String

}