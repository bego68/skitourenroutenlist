<?php
namespace Golf\Skitourenroutenlist\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 * @author Markus Stadler <mail@stadler-markus.de>
 */
class MapsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Golf\Skitourenroutenlist\Controller\MapsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Golf\Skitourenroutenlist\Controller\MapsController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllMapssFromRepositoryAndAssignsThemToView()
    {

        $allMapss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $mapsRepository = $this->getMockBuilder(\Golf\Skitourenroutenlist\Domain\Repository\MapsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $mapsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMapss));
        $this->inject($this->subject, 'mapsRepository', $mapsRepository);

        $view = $this->getMockBuilder(TYPO3Fluid\Fluid\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('mapss', $allMapss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
