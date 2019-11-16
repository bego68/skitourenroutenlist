<?php
namespace Golf\Skitourenroutenlist\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 */
class RouteControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Golf\Skitourenroutenlist\Controller\RouteController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Golf\Skitourenroutenlist\Controller\RouteController::class)
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
    public function listActionFetchesAllRoutesFromRepositoryAndAssignsThemToView()
    {

        $allRoutes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $routeRepository = $this->getMockBuilder(\Golf\Skitourenroutenlist\Domain\Repository\RouteRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $routeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allRoutes));
        $this->inject($this->subject, 'routeRepository', $routeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('routes', $allRoutes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
