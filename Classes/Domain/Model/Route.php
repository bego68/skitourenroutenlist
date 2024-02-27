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
 *           Markus Stadler <mail@stadler-markus.de>
 *
 ***/
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
/**
 * Route
 */
class Route extends AbstractEntity
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
     * beliebtheit
     * 
     * @var int
     */
    protected $beliebtheit = 0;

    /**
     * hangexposition
     * 
     * @var string
     */
    protected $hangexposition = '';

    /**
     * mountainregionName
     * 
     * @var string
     */
    protected $mountainregionName = '';

    /**
     * mountainName
     * 
     * @var string
     */
    protected $mountainName = '';

    /**
     * mountainHeight
     * 
     * @var int
     */
    protected $mountainHeight = 0;

    /**
     * mountainLatitude
     * 
     * @var float
     */
    protected $mountainLatitude = 0.0;

    /**
     * mountainLongitude
     * 
     * @var float
     */
    protected $mountainLongitude = 0.0;

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

    /**
     * Returns the beliebtheit
     * 
     * @return int $beliebtheit
     */
    public function getBeliebtheit()
    {
        return $this->beliebtheit;
    }

    /**
     * Sets the beliebtheit
     * 
     * @param int $beliebtheit
     * @return void
     */
    public function setBeliebtheit($beliebtheit)
    {
        $this->beliebtheit = $beliebtheit;
    }

    /**
     * Returns the hangexposition
     * 
     * @return string $hangexposition
     */
    public function getHangexposition()
    {
        return $this->hangexposition;
    }

    /**
     * Sets the hangexposition
     * 
     * @param string $hangexposition
     * @return void
     */
    public function setHangexposition($hangexposition)
    {
        $this->hangexposition = $hangexposition;
    }

    /**
     * Returns the mountainregionName
     * 
     * @return string $mountainregionName
     */
    public function getMountainregionName()
    {
        return $this->mountainregionName;
    }

    /**
     * Sets the mountainregionName
     * 
     * @param string $mountainregionName
     * @return void
     */
    public function setMountainregionName($mountainregionName)
    {
        $this->mountainregionName = $mountainregionName;
    }

    /**
     * Returns the mountainName
     * 
     * @return string $mountainName
     */
    public function getMountainName()
    {
        return $this->mountainName;
    }

    /**
     * Sets the mountainName
     * 
     * @param string $mountainName
     * @return void
     */
    public function setMountainName($mountainName)
    {
        $this->mountainName = $mountainName;
    }

    /**
     * Returns the mountainHeight
     * 
     * @return int $mountainHeight
     */
    public function getMountainHeight()
    {
        return $this->mountainHeight;
    }

    /**
     * Sets the mountainHeight
     * 
     * @param int $mountainHeight
     * @return void
     */
    public function setMountainHeight($mountainHeight)
    {
        $this->mountainHeight = $mountainHeight;
    }

    /**
     * Returns the mountainLatitude
     * 
     * @return float $mountainLatitude
     */
    public function getMountainLatitude()
    {
        return $this->mountainLatitude;
    }

    /**
     * Sets the mountainLatitude
     * 
     * @param float $mountainLatitude
     * @return void
     */
    public function setMountainLatitude($mountainLatitude)
    {
        $this->mountainLatitude = $mountainLatitude;
    }

    /**
     * Returns the mountainLongitude
     * 
     * @return float $mountainLongitude
     */
    public function getMountainLongitude()
    {
        return $this->mountainLongitude;
    }

    /**
     * Sets the mountainLongitude
     * 
     * @param float $mountainLongitude
     * @return void
     */
    public function setMountainLongitude($mountainLongitude)
    {
        $this->mountainLongitude = $mountainLongitude;
    }
}
