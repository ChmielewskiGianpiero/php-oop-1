<?php 

require_once __DIR__ . '/Production.php';


class Movie extends Production
{
    protected $profit;
    protected $duration;

    function __construct($_title, $_language, $_rating, $_profit, $_duration)
    {
        parent::__construct($_title, $_language, $_rating);
        $this-> setProfit($_profit);
        $this-> setDuration ($_duration);
    }

    public function setProfit($_profit)
    {
        if (is_numeric($_profit)){
            $this->profit = $_profit;
        }
    }

    public function setDuration($_duration)
    {
        if (is_numeric($_duration)){
            $this->duration = $_duration;
        }
    }

    public function getProfit()
    {
        return $this->profit;
    }

    public function getDuration()
    {
        return $this->duration;
    }
}