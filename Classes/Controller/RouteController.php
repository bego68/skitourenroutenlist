<?php
namespace Golf\Skitourenroutenlist\Controller;


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
/**
 * RouteController
 */
class RouteController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * routeRepository
     * 
     * @var \Golf\Skitourenroutenlist\Domain\Repository\RouteRepository
     * @TYPO3\\CMS\\Extbase\\Annotation\\Inject
     */
    protected $routeRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $routes = $this->routeRepository->findAll();
        $this->view->assign('routes', $routes);
    }
}
