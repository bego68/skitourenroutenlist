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
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Golf\Skitourenroutenlist\Domain\Repository\RouteRepository;
use Psr\Http\Message\ResponseInterface;

/**
 * RouteController
 */
class RouteController extends ActionController
{

    /**
     * routeRepository
     * 
     * @var RouteRepository
     */
    protected $routeRepository;
	
	
	/**
	 * injectRouteRepository
	 *
	 * @param RouteRepository $routesRepository
	 * @return void
	 */
	public function injectRouteRepository(RouteRepository $routeRepository) {
		$this->routeRepository = $routeRepository;
	}


    /**
     * action list
     * 
     * @return ResponseInterface
     */
    public function listAction():ResponseInterface
    {
        $routes = $this->routeRepository->findAll();
        $this->view->assign('routes', $routes);
		return $this->htmlResponse();
    }
}
