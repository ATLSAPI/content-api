<?php
/**
 * Created by PhpStorm.
 * User: ISRAEL
 * Date: 28/03/2016
 * Time: 11:47
 */

require 'Models/Page.php';
require 'Services/PageService.php';
require 'vendor/autoload.php';

$pageService = new \ContentApi\Services\PageService();
$testPage = $pageService->getPageBySlug('test-page');
$samplePage = $pageService->getPageBySlug('sample-page');
$homePage = $pageService->getPageBySlug('home-page');
echo $testPage;
echo $homePage;
echo $samplePage;