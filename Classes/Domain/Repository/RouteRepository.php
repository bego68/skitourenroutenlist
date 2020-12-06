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
        If ($filter['hoehenmeter_min'] > 0) $constraints[] = $query->greaterThanOrEqual('hoehenmeter', $filter['hoehenmeter_min']);
        If ($filter['hoehenmeter_max'] > 0) $constraints[] = $query->lessThanOrEqual('hoehenmeter', $filter['hoehenmeter_max']);
        If ($filter['lawinengefahr_min'] > 0) $constraints[] = $query->greaterThanOrEqual('lawinengefahr', $filter['lawinengefahr_min']);
        If ($filter['lawinengefahr_max'] > 0) $constraints[] = $query->lessThanOrEqual('lawinengefahr', $filter['lawinengefahr_max']);
        If ($filter['gesamtanspruch_min'] > 0) $constraints[] = $query->greaterThanOrEqual('gesamtanspruch', $filter['gesamtanspruch_min']);
        If ($filter['gesamtanspruch_max'] > 0) $constraints[] = $query->lessThanOrEqual('gesamtanspruch', $filter['gesamtanspruch_max']);
        If ($filter['schoenheit_min'] > 0) $constraints[] = $query->greaterThanOrEqual('schoenheit', $filter['schoenheit_min']);
        If ($filter['gschoenheit_max'] > 0) $constraints[] = $query->lessThanOrEqual('schoenheit', $filter['schoenheit_max']);
        If ($filter['beliebtheit_min'] > 0) $constraints[] = $query->greaterThanOrEqual('beliebtheit', $filter['beliebtheit_min']);
        If ($filter['beliebtheit_max'] > 0) $constraints[] = $query->lessThanOrEqual('beliebtheit', $filter['beliebtheit_max']);
        If ($filter['skitechnischebewertung'] <> '') $constraints[] = $query->like('skitechnischebewertung', $filter['skitechnischebewertung']);





        $result = $query->matching( $query->logicalAnd(  $constraints )  )->execute();
        return $result;
    }
}
