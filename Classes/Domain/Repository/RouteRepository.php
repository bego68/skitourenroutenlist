<?php
namespace Golf\Skitourenroutenlist\Domain\Repository;


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
 * The repository for Routes
 */
class RouteRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * holt die Maps aus der Db nach Filter
     *
     * @param array $filter
     *
     * @return void
     */
    public function findAllFilter( $filter = array()){
        //print_r($filter);
        $query = $this->createQuery();
        $constraints[] =  $query->greaterThan('uid',0);
        If ($filter['hoehenmeter_min'] > 0) $constraints[] = $query->greaterThan('hoehenmeter', $filter['hoehenmeter_min']);
        If ($filter['hoehenmeter_max'] > 0) $constraints[] = $query->smallerThan('hoehenmeter', $filter['hoehenmeter_max']);


        $result = $query->matching( $query->logicalAnd(  $constraints )  )->execute();
        return $result;
    }
}
