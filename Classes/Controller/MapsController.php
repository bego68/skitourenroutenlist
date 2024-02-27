<?php
namespace Golf\Skitourenroutenlist\Controller;


/***
 *
 * This file is part of the "Skitouren-Routen-List" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019-2024 Hubertus Golf <info@berti-golf.de>, Volleyballserver
 *           Markus Stadler <mail@stadler-markus.de>
 *
 ***/
/**
 * MapsController
 */
use TYPO3\CMS\Extbase\Annotation\Inject;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class MapsController extends ActionController{

    /**
     * mapsRepository
     * 
     * @var \Golf\Skitourenroutenlist\Domain\Repository\MapsRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $mapsRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $maps = $this->mapsRepository->findAllFilter($this->settings['maps']['filter']);
        //print_r($this->settings);
        $this->view->assign('mapss', $maps);
    }
}
