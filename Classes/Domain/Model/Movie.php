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
 * Movie
 */
class Movie extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Title of the movie
     *
     * @var string
     * @validate NotEmpty, \ACME\Movierental\Validation\Validator\WordValidator(max=3)
     */
    protected $title = '';

    /**
     * Description of the movie
     *
     * @var string
     */
    protected $description = '';

    /**
     * Rating of the movie
     *
     * @var string
     * @validate Integer
     */
    protected $rating = '';

    /**
     * Genres associated with the movie
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ACME\Movierental\Domain\Model\Genre>
     */
    protected $genres = null;

    /**
     * director
     *
     * @var \ACME\Movierental\Domain\Model\Director
     * @cascade remove
     */
    protected $director = null;

    /**
     * studio
     *
     * @var \ACME\Movierental\Domain\Model\Studio
     */
    protected $studio = null;

    /**
     * copies
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ACME\Movierental\Domain\Model\Medium>
     */
    protected $copies = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->genres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->director = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->copies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the rating
     *
     * @return string $rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets the rating
     *
     * @param string $rating
     * @return void
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * Adds a Genre
     *
     * @param \ACME\Movierental\Domain\Model\Genre $genre
     * @return void
     */
    public function addGenre(\ACME\Movierental\Domain\Model\Genre $genre)
    {
        $this->genres->attach($genre);
    }

    /**
     * Removes a Genre
     *
     * @param \ACME\Movierental\Domain\Model\Genre $genreToRemove The Genre to be removed
     * @return void
     */
    public function removeGenre(\ACME\Movierental\Domain\Model\Genre $genreToRemove)
    {
        $this->genres->detach($genreToRemove);
    }

    /**
     * Returns the genres
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ACME\Movierental\Domain\Model\Genre> $genres
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Sets the genres
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ACME\Movierental\Domain\Model\Genre> $genres
     * @return void
     */
    public function setGenres(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $genres)
    {
        $this->genres = $genres;
    }

    /**
     * Returns the director
     *
     * @return \ACME\Movierental\Domain\Model\Director $director
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Sets the director
     *
     * @param \ACME\Movierental\Domain\Model\Director $director
     * @return void
     */
    public function setDirector(\ACME\Movierental\Domain\Model\Director $director)
    {
        $this->director = $director;
    }

    /**
     * Returns the studio
     *
     * @return \ACME\Movierental\Domain\Model\Studio $studio
     */
    public function getStudio()
    {
        return $this->studio;
    }

    /**
     * Sets the studio
     *
     * @param \ACME\Movierental\Domain\Model\Studio $studio
     * @return void
     */
    public function setStudio(\ACME\Movierental\Domain\Model\Studio $studio)
    {
        $this->studio = $studio;
    }

    /**
     * Adds a Medium
     *
     * @param \ACME\Movierental\Domain\Model\Medium $copy
     * @return void
     */
    public function addCopy(\ACME\Movierental\Domain\Model\Medium $copy)
    {
        $this->copies->attach($copy);
    }

    /**
     * Removes a Medium
     *
     * @param \ACME\Movierental\Domain\Model\Medium $copyToRemove The Medium to be removed
     * @return void
     */
    public function removeCopy(\ACME\Movierental\Domain\Model\Medium $copyToRemove)
    {
        $this->copies->detach($copyToRemove);
    }

    /**
     * Returns the copies
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ACME\Movierental\Domain\Model\Medium> $copies
     */
    public function getCopies()
    {
        return $this->copies;
    }

    /**
     * Sets the copies
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ACME\Movierental\Domain\Model\Medium> $copies
     * @return void
     */
    public function setCopies(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $copies)
    {
        $this->copies = $copies;
    }
}
