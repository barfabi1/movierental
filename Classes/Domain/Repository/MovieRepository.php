<?php
namespace ACME\Movierental\Domain\Repository;

/***
 *
 * This file is part of the "Movie Rental System" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 John Simple
 *
 ***/

/**
 * The repository for Users
 */
class MovieRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findSearchWord($search, $limit) {

        $query = $this->createQuery();

        $query->matching(
            $query->like('title', '%'.$search.'%')
        );

        $query->setOrderings(
            array('title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING)
        );

        //$query->getQuerySettings()->setIgnoreEnableFields(true);

        $limit = (int)$limit;
        if ($limit > 0){
            $query->setLimit($limit);
        }

        return $query->execute();


        //##DEBUGGING
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($result);
        //die();

    }
}
