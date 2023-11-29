<?php 

require_once __DIR__ . '/Production.php';


class Movie extends Production
{
    public $profit;
    public $duration;

    function __construct($_title, $_language, $_rating, $_profit, $_duration)
    {
        $this->setTitle($_title);
        $this->setLanguage($_language);
        $this->setRating($_rating);
        $this->setProfit($_profit);
        $this->setDuration($_duration) ;
    }

    public function getProfit()
    {
        return $this->profit;
    }

    public function setProfit()
    {
        if (is_numeric($profit)){
            $this->profit = $profit;
        } else {
            echo 'il parametro $profit non è corretto'
        }
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration()
    {
        if (is_numeric($duration)){
            $this->duration = $duration
        }
    }
}