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
 * MapsController
 */
class MapsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * mapsRepository
     * 
     * @var \Golf\Skitourenroutenlist\Domain\Repository\MapsRepository
     * @inject
     */
    protected $mapsRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $maps = $this->mapsRepository->findAll();
        $this->view->assign('maps', $maps);
    }
}
