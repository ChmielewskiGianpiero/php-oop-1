<?php

class Production
{
    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating)
    {
        $this->setTitle($_title);
        $this->setLanguage($_language);
        $this->setRating($_rating);
    }

    public function getRating()
    {
        return $this-> rating;
    }

    public function setRating($rating)
    {
        if (is_numeric($rating) && $rating >= 1 && $rating <= 10) {
            $this->rating = $rating;
        }else {
            echo 'Il parametro $rating non è corretto';
        }
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        if (is_string($language)) {
            $this->language = $language;
        }else {
            echo 'Il parametro $language non è corretto';
        }
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->title = $title;
        }else {
            echo 'Il parametro $title non è corretto';
        }
    }

    
   
}