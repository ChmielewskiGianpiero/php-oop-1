<?php 

require_once __DIR__ . '/Production.php';


class Serie extends Production
{
    public $season;

    function __construct($_title, $_language, $_rating, $_season)
    {
        $this->setTitle($_title);
        $this->setLanguage($_language);
        $this->setRating($_rating);
        $this->setSeason($_season);
    }

    public function getSeason ()
    {
        return $this->season;
    }

    public function setSeason ()
    {
        if (is_numeric($season)) {
            $this->season = $season;
        }else {
            echo 'il paramentro $season non è corretto'
        }
    }
}