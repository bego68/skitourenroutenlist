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
 * The repository for Maps
 */
class MapsRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
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
		If ($filter['verlag'] != 'Verlag') $constraints[] = $query->equals('verlag', $filter['verlag']);
		If ($filter['massstab'] != 'Maßstab')$constraints[] = $query->equals('massstab', $filter['massstab']);
		If ($filter['typ'] != 'Typ')$constraints[] = $query->equals('typ', $filter['typ'] );
                If ($filter['kartenreihe'] != 'Kartenreihe')$constraints[] = $query->like('kartenreihe', $filter['kartenreihe'] );
		//$query->setOrderings(array( $route_sort_field => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));   
		$result = $query->matching( $query->logicalAnd( ...array_values( $constraints) )  )->execute();
		return $result;
	}
}
