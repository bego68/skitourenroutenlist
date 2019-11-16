<?php
namespace Golf\Skitourenroutenlist\Domain\Model;


/***
 *
 * This file is part of the "Skitouren-Routen-List" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Hubertus Golf <info@berti-golf.de>, Volleyballserver
 *
 ***/
/**
 * Route
 */
class Route extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * routenname
     * 
     * @var string
     */
    protected $routenname = '';

    /**
     * lawinengefahr
     * 
     * @var int
     */
    protected $lawinengefahr = 0;

    /**
     * gesamtanspruch
     * 
     * @var int
     */
    protected $gesamtanspruch = 0;

    /**
     * skitechnischebewertung
     * 
     * @var string
     */
    protected $skitechnischebewertung = '';

    /**
     * hoehenmeter
     * 
     * @var int
     */
    protected $hoehenmeter = 0;

    /**
     * gehzeit
     * 
     * @var string
     */
    protected $gehzeit = '';

    /**
     * schoenheit
     * 
     * @var int
     */
    protected $schoenheit = 0;

    /**
     * Returns the routenname
     * 
     * @return string $routenname
     */
    public function getRoutenname()
    {
        return $this->routenname;
    }

    /**
     * Sets the routenname
     * 
     * @param string $routenname
     * @return void
     */
    public function setRoutenname($routenname)
    {
        $this->routenname = $routenname;
    }

    /**
     * Returns the lawinengefahr
     * 
     * @return int $lawinengefahr
     */
    public function getLawinengefahr()
    {
        return $this->lawinengefahr;
    }

    /**
     * Sets the lawinengefahr
     * 
     * @param int $lawinengefahr
     * @return void
     */
    public function setLawinengefahr($lawinengefahr)
    {
        $this->lawinengefahr = $lawinengefahr;
    }

    /**
     * Returns the gesamtanspruch
     * 
     * @return int $gesamtanspruch
     */
    public function getGesamtanspruch()
    {
        return $this->gesamtanspruch;
    }

    /**
     * Sets the gesamtanspruch
     * 
     * @param int $gesamtanspruch
     * @return void
     */
    public function setGesamtanspruch($gesamtanspruch)
    {
        $this->gesamtanspruch = $gesamtanspruch;
    }

    /**
     * Returns the skitechnischebewertung
     * 
     * @return string $skitechnischebewertung
     */
    public function getSkitechnischebewertung()
    {
        return $this->skitechnischebewertung;
    }

    /**
     * Sets the skitechnischebewertung
     * 
     * @param string $skitechnischebewertung
     * @return void
     */
    public function setSkitechnischebewertung($skitechnischebewertung)
    {
        $this->skitechnischebewertung = $skitechnischebewertung;
    }

    /**
     * Returns the hoehenmeter
     * 
     * @return int $hoehenmeter
     */
    public function getHoehenmeter()
    {
        return $this->hoehenmeter;
    }

    /**
     * Sets the hoehenmeter
     * 
     * @param int $hoehenmeter
     * @return void
     */
    public function setHoehenmeter($hoehenmeter)
    {
        $this->hoehenmeter = $hoehenmeter;
    }

    /**
     * Returns the gehzeit
     * 
     * @return string $gehzeit
     */
    public function getGehzeit()
    {
        return $this->gehzeit;
    }

    /**
     * Sets the gehzeit
     * 
     * @param string $gehzeit
     * @return void
     */
    public function setGehzeit($gehzeit)
    {
        $this->gehzeit = $gehzeit;
    }

    /**
     * Returns the schoenheit
     * 
     * @return int $schoenheit
     */
    public function getSchoenheit()
    {
        return $this->schoenheit;
    }

    /**
     * Sets the schoenheit
     * 
     * @param int $schoenheit
     * @return void
     */
    public function setSchoenheit($schoenheit)
    {
        $this->schoenheit = $schoenheit;
    }
}
