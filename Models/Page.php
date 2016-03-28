<?php
/**
 * Created by PhpStorm.
 * User: ISRAEL
 * Date: 28/03/2016
 * Time: 11:23
 */

namespace ContentApi;

class Page
{
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public $id; //int

    public function getDate() {
        return $this->date ;
    }
    public function setDate($date) {
        $this->date = $date ;
    }
    public $date; //Date

    public function getDate_gmt() {
        return $this->date_gmt ;
    }
    public function setDate_gmt($date_gmt) {
        $this->date_gmt = $date_gmt;
    }
    public $date_gmt; //Date

    public function getGuid() {
        return $this->guid ;
    }
    public function setGuid($guid) {
        $this->guid = $guid ;
    }
    public $guid; //Guid

    public function getModified() {
        return $this->modified ;
    }
    public function setModified($modified) {
        $this->modified = $modified ;
    }
    public $modified; //Date

    public function getModified_gmt() {
        return $this->modified_gmt ;
    }
    public function setModified_gmt($modified_gmt) {
        $this->modified_gmt = $modified_gmt ;
    }
    public $modified_gmt; //Date

    public function getSlug() {
        return $this->slug ;
    }
    public function setSlug($slug) {
        $this->slug = $slug ;
    }
    public $slug; //String

    public function getType() {
        return $this->type ;
    }
    public function setType($type) {
        $this->type = $type ;
    }
    public $type; //String

    public function getLink() {
        return $this->link ;
    }
    public function setLink($link) {
        $this->link = $link ;
    }
    public $link; //String

    public function getTitle() {
        return $this->title ;
    }
    public function setTitle($title) {
        $this->title = $title ;
    }
    public $title; //Title

    public function getContent() {
        return $this->content ;
    }
    public function setContent($content) {
        $this->content = $content ;
    }
    public $content; //Content

    public function getExcerpt() {
        return $this->excerpt ;
    }
    public function setExcerpt($excerpt) {
        $this->excerpt = $excerpt ;
    }
    public $excerpt; //Excerpt

    public function getAuthor() {
        return $this->author ;
    }
    public function setAuthor($author) {
        $this->author = $author ;
    }
    public $author; //int

    public function getFeatured_media() {
        return $this->featured_media ;
    }
    public function setFeatured_media($featured_media) {
        $this->featured_media = $featured_media ;
    }
    public $featured_media; //int

    public function getParent() {
        return $this->parent ;
    }
    public function setParent($parent) {
        $this->parent = $parent ;
    }
    public $parent; //int

    public function getMenu_order() {
        return $this->menu_order;
    }
    public function setMenu_order($menu_order) {
        $this->menu_order = $menu_order;
    }
    public $menu_order; //int

    public function getComment_status() {
        return $this->comment_status;
    }
    public function setComment_status($comment_status) {
        $this->comment_status = $comment_status;
    }
    public $comment_status; //String

    public function getPing_status() {
        return $this->ping_status ;
    }
    public function setPing_status($ping_status) {
        $this->ping_status = $ping_status ;
    }
    public $ping_status; //String

    public function getTemplate() {
        return $this->template ;
    }
    public function setTemplate($template) {
        $this->template = $template ;
    }
    public $template; //String

    public function get_links() {
        return $this->_links ;
    }
    public function set_links($_links) {
        $this->_links = $_links ;
    }
    public $_links; //Links

}