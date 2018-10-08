<?php
namespace ACME\Movierental\Controller;

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
 * GenreController
 */
class GenreController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $genres = $this->genreRepository->findAll();
        $this->view->assign('genres', $genres);
    }

    /**
     * action show
     *
     * @param \ACME\Movierental\Domain\Model\Genre $genre
     * @return void
     */
    public function showAction(\ACME\Movierental\Domain\Model\Genre $genre)
    {
        $this->view->assign('genre', $genre);
    }
}
