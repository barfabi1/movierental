<?php
namespace ACME\Movierental\Domain\Model;

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
 * Director
 */
class Director extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * awards
     *
     * @var string
     */
    protected $awards = '';

    /**
     * biography
     *
     * @var string
     */
    protected $biography = '';

    /*
    /**
     * picture
     *
     * @var string
     */
    //protected $picture = '';
    /**
     * picture
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $picture = null;

    /**
     * movies
     *
     * @var \ACME\Movierental\Domain\Model\Movie
     */
    protected $movies = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the awards
     *
     * @return string $awards
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * Sets the awards
     *
     * @param string $awards
     * @return void
     */
    public function setAwards($awards)
    {
        $this->awards = $awards;
    }

    /**
     * Returns the biography
     *
     * @return string $biography
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Sets the biography
     *
     * @param string $biography
     * @return void
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;
    }

    /*
    /**
     * Returns the picture
     *
     * @return string $picture
     */
    //public function getPicture()
    //{
    //    return $this->picture;
    //}

    /*
    /**
     * Sets the picture
     *
     * @param string $picture
     * @return void
     */
    //public function setPicture($picture)
    //{
    //    $this->picture = $picture;
    //}

    /**
     * Returns the picture
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets the picture
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     * @return void
     */
    public function setPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture)
    {
        $this->picture = $picture;
    }

    /**
     * Returns the movies
     *
     * @return \ACME\Movierental\Domain\Model\Movie $movies
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * Sets the movies
     *
     * @param \ACME\Movierental\Domain\Model\Movie $movies
     * @return void
     */
    public function setMovies(\ACME\Movierental\Domain\Model\Movie $movies)
    {
        $this->movies = $movies;
    }
}
