<?php
namespace Golf\Skitourenroutenlist\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 * @author Markus Stadler <mail@stadler-markus.de>
 */
class RouteTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Golf\Skitourenroutenlist\Domain\Model\Route
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Golf\Skitourenroutenlist\Domain\Model\Route();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getRoutennameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRoutenname()
        );
    }

    /**
     * @test
     */
    public function setRoutennameForStringSetsRoutenname()
    {
        $this->subject->setRoutenname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'routenname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLawinengefahrReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getLawinengefahr()
        );
    }

    /**
     * @test
     */
    public function setLawinengefahrForIntSetsLawinengefahr()
    {
        $this->subject->setLawinengefahr(12);

        self::assertAttributeEquals(
            12,
            'lawinengefahr',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGesamtanspruchReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getGesamtanspruch()
        );
    }

    /**
     * @test
     */
    public function setGesamtanspruchForIntSetsGesamtanspruch()
    {
        $this->subject->setGesamtanspruch(12);

        self::assertAttributeEquals(
            12,
            'gesamtanspruch',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSkitechnischebewertungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSkitechnischebewertung()
        );
    }

    /**
     * @test
     */
    public function setSkitechnischebewertungForStringSetsSkitechnischebewertung()
    {
        $this->subject->setSkitechnischebewertung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'skitechnischebewertung',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHoehenmeterReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getHoehenmeter()
        );
    }

    /**
     * @test
     */
    public function setHoehenmeterForIntSetsHoehenmeter()
    {
        $this->subject->setHoehenmeter(12);

        self::assertAttributeEquals(
            12,
            'hoehenmeter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGehzeitReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGehzeit()
        );
    }

    /**
     * @test
     */
    public function setGehzeitForStringSetsGehzeit()
    {
        $this->subject->setGehzeit('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gehzeit',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchoenheitReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSchoenheit()
        );
    }

    /**
     * @test
     */
    public function setSchoenheitForIntSetsSchoenheit()
    {
        $this->subject->setSchoenheit(12);

        self::assertAttributeEquals(
            12,
            'schoenheit',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBeliebtheitReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getBeliebtheit()
        );
    }

    /**
     * @test
     */
    public function setBeliebtheitForIntSetsBeliebtheit()
    {
        $this->subject->setBeliebtheit(12);

        self::assertAttributeEquals(
            12,
            'beliebtheit',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHangexpositionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHangexposition()
        );
    }

    /**
     * @test
     */
    public function setHangexpositionForStringSetsHangexposition()
    {
        $this->subject->setHangexposition('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'hangexposition',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMountainregionNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMountainregionName()
        );
    }

    /**
     * @test
     */
    public function setMountainregionNameForStringSetsMountainregionName()
    {
        $this->subject->setMountainregionName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mountainregionName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMountainNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMountainName()
        );
    }

    /**
     * @test
     */
    public function setMountainNameForStringSetsMountainName()
    {
        $this->subject->setMountainName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mountainName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMountainHeightReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMountainHeight()
        );
    }

    /**
     * @test
     */
    public function setMountainHeightForIntSetsMountainHeight()
    {
        $this->subject->setMountainHeight(12);

        self::assertAttributeEquals(
            12,
            'mountainHeight',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMountainLatitudeReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getMountainLatitude()
        );
    }

    /**
     * @test
     */
    public function setMountainLatitudeForFloatSetsMountainLatitude()
    {
        $this->subject->setMountainLatitude(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'mountainLatitude',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getMountainLongitudeReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getMountainLongitude()
        );
    }

    /**
     * @test
     */
    public function setMountainLongitudeForFloatSetsMountainLongitude()
    {
        $this->subject->setMountainLongitude(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'mountainLongitude',
            $this->subject,
            '',
            0.000000001
        );
    }
}
