<?php
namespace Golf\Skitourenroutenlist\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
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
}
