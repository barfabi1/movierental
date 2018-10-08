<?php

namespace ACME\Movierental\Controller;

use ACME\Movierental\Domain\Model\Movie;

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
 * MovieController
 */
class MovieController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * movieRepository
     *
     * @var \ACME\Movierental\Domain\Repository\MovieRepository
     * @inject
     */
    protected $movieRepository;

    /**
     * persistence manager
     *
     * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
     * @inject
     */
    protected $persistenceManager;

    /**
     * action list
     *
     * @param string $search
     */
    public function listAction($search = '')
    {

        //var_dump($this->settings);
        //die();

        if($this->request->hasArgument('search')){
            $search = $this->request->getArgument('search');
        }

        $limit = ($this->settings['movies']['max']) ?: null;

        $movieList = [];
        //$movieList['movies'] = $this->movieRepository->findAll();


        $querySettings = $this->movieRepository->createQuery()->getQuerySettings();
        $querySettings->setIgnoreEnableFields(true);
        $this->movieRepository->setDefaultQuerySettings($querySettings);

        $movieList['movies'] = $this->movieRepository->findSearchWord($search, $limit);
        $movieList['count'] = $movieList['movies']->count();

        //GOOD $this->movieRepository->findAll()->count();
        //$movieList['shown'] = $this->settings['movies']['max'];

        $this->view->assignMultiple($movieList);
        //$this->view->assign('movies', $this->movieRepository->findAll());
    }

//@validate $movie \ACME\Movierental\Validation\Validator\FacebookValidator
    /**
     * action add
     *
     * @param \ACME\Movierental\Domain\Model\Movie $movie
     */
    public function addAction(\ACME\Movierental\Domain\Model\Movie $movie)
    {
        //$movie->setPid(37);
        $this->movieRepository->add($movie);
        $this->redirect('list');
    }

    /**
     * addForm action
     *
     * @param \ACME\Movierental\Domain\Model\Movie $movie
     */
    public function addFormAction(\ACME\Movierental\Domain\Model\Movie $movie = null)
    {
        $this->view->assign('movie', $movie);
    }

    /**
     * action show
     *
     * @param \ACME\Movierental\Domain\Model\Movie $movie
     * @return void
     */
    public function showAction(\ACME\Movierental\Domain\Model\Movie $movie)
    {
        $this->view->assign('movie', $movie);
    }

    /**
     * updateForm action
     *
     * @param \ACME\Movierental\Domain\Model\Movie $movie
     */
    public function updateFormAction(\ACME\Movierental\Domain\Model\Movie $movie){
        $this->view->assign('movie', $movie);
    }

    /**
     * update action
     *
     * @param \ACME\Movierental\Domain\Model\Movie $movie
     */
    public function updateAction(\ACME\Movierental\Domain\Model\Movie $movie){
        $this->movieRepository->update($movie);
        $this->redirect('list');
    }

    /**
     * action deleteConfirm
     *
     * @param \ACME\Movierental\Domain\Model\Movie $movie
     * @return void
     */
    public function deleteConfirmAction(\ACME\Movierental\Domain\Model\Movie $movie)
    {
        $this->view->assign('movie', $movie);
    }

    /**
     * action delete
     *
     * @param \ACME\Movierental\Domain\Model\Movie $movie
     * @return void
     */
    public function deleteAction(\ACME\Movierental\Domain\Model\Movie $movie)
    {
        $this->movieRepository->remove($movie);
        $this->redirect('list');
    }
}
