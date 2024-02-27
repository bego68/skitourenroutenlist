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
 * Maps
 */
class Maps extends AbstractEntity{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * ean
     * 
     * @var int
     */
    protected $ean = 0;

    /**
     * kartenreihe
     * 
     * @var string
     */
    protected $kartenreihe = '';

    /**
     * kartennummer
     * 
     * @var string
     */
    protected $kartennummer = '';

    /**
     * typ
     * 
     * @var string
     */
    protected $typ = '';

    /**
     * massstab
     * 
     * @var string
     */
    protected $massstab = '';

    /**
     * preis
     * 
     * @var string
     */
    protected $preis = '';

    /**
     * verlag
     * 
     * @var string
     */
    protected $verlag = '';

    /**
     * link
     * 
     * @var string
     */
    protected $link = '';

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the ean
     * 
     * @return int $ean
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Sets the ean
     * 
     * @param int $ean
     * @return void
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * Returns the kartenreihe
     * 
     * @return string $kartenreihe
     */
    public function getKartenreihe()
    {
        return $this->kartenreihe;
    }

    /**
     * Sets the kartenreihe
     * 
     * @param string $kartenreihe
     * @return void
     */
    public function setKartenreihe($kartenreihe)
    {
        $this->kartenreihe = $kartenreihe;
    }

    /**
     * Returns the kartennummer
     * 
     * @return string $kartennummer
     */
    public function getKartennummer()
    {
        return $this->kartennummer;
    }

    /**
     * Sets the kartennummer
     * 
     * @param string $kartennummer
     * @return void
     */
    public function setKartennummer($kartennummer)
    {
        $this->kartennummer = $kartennummer;
    }

    /**
     * Returns the typ
     * 
     * @return string $typ
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets the typ
     * 
     * @param string $typ
     * @return void
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;
    }

    /**
     * Returns the massstab
     * 
     * @return string $massstab
     */
    public function getMassstab()
    {
        return $this->massstab;
    }

    /**
     * Sets the massstab
     * 
     * @param string $massstab
     * @return void
     */
    public function setMassstab($massstab)
    {
        $this->massstab = $massstab;
    }

    /**
     * Returns the preis
     * 
     * @return string $preis
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Sets the preis
     * 
     * @param string $preis
     * @return void
     */
    public function setPreis($preis)
    {
        $this->preis = $preis;
    }

    /**
     * Returns the verlag
     * 
     * @return string $verlag
     */
    public function getVerlag()
    {
        return $this->verlag;
    }

    /**
     * Sets the verlag
     * 
     * @param string $verlag
     * @return void
     */
    public function setVerlag($verlag)
    {
        $this->verlag = $verlag;
    }

    /**
     * Returns the link
     * 
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     * 
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }
}
