<?php
namespace Golf\Skitourenroutenlist\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 * @author Markus Stadler <mail@stadler-markus.de>
 */
class MapsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Golf\Skitourenroutenlist\Domain\Model\Maps
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Golf\Skitourenroutenlist\Domain\Model\Maps();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEanReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getEan()
        );
    }

    /**
     * @test
     */
    public function setEanForIntSetsEan()
    {
        $this->subject->setEan(12);

        self::assertAttributeEquals(
            12,
            'ean',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getKartenreiheReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKartenreihe()
        );
    }

    /**
     * @test
     */
    public function setKartenreiheForStringSetsKartenreihe()
    {
        $this->subject->setKartenreihe('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kartenreihe',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getKartennummerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKartennummer()
        );
    }

    /**
     * @test
     */
    public function setKartennummerForStringSetsKartennummer()
    {
        $this->subject->setKartennummer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kartennummer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTyp()
        );
    }

    /**
     * @test
     */
    public function setTypForStringSetsTyp()
    {
        $this->subject->setTyp('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'typ',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMassstabReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMassstab()
        );
    }

    /**
     * @test
     */
    public function setMassstabForStringSetsMassstab()
    {
        $this->subject->setMassstab('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'massstab',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPreisReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPreis()
        );
    }

    /**
     * @test
     */
    public function setPreisForStringSetsPreis()
    {
        $this->subject->setPreis('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'preis',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVerlagReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVerlag()
        );
    }

    /**
     * @test
     */
    public function setVerlagForStringSetsVerlag()
    {
        $this->subject->setVerlag('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'verlag',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLink()
        );
    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink()
    {
        $this->subject->setLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'link',
            $this->subject
        );
    }
}
